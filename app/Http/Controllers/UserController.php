<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\File ;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\Constraint\FileExists;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view("admin.users.users",['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $password = $request->password;
        $phone = $request->phone ?? "";
        $is_admin = $request->is_admin;
        $avatar ="";

        $validated = $request->validate([
            'first_name' => 'required|string|min:3|max:50',
            'last_name' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:3|max:50',
            'is_admin' => 'required|boolean',
        ]);

        if($request->hasFile('avatar')){

            if ($request->file('avatar')->isValid()) {

                $validated = $request->validate([
                    'avatar' => 'mimes:jpeg,gif,jpg,png|max:5120'
                ]);
                $extension = $request->avatar->extension();
                $avatarName = date('mdYHis') . uniqid().'.'.$extension;
                $request->file('avatar')->storeAs('public/uploads/avatars',$avatarName);
                $avatar = 'storage/uploads/avatars/'.$avatarName;   
            }
        }

        $user = new User;

        $user->first_name = $first_name ;
        $user->last_name = $last_name ;
        $user->email = $email ;
        $user->password = Hash::make($password);
        $user->phone = $phone ;
        $user->is_admin = $is_admin ;
        $user->avatar = $avatar ;

        $user->save();

        return redirect()->route('users.index')->with('success','User Added Succefully !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $password = $request->password;
        $phone = $request->phone ?? "";
        $is_admin = $request->is_admin;
        $avatar = "";

        $validated = $request->validate([
            'first_name' => 'required|string|min:3|max:50',
            'last_name' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'is_admin' => 'required|boolean',
        ]);

        $user = User::find($id);
          if(!empty(trim($password))){
            $request->validate([
                'password' => 'required|min:3|max:50',
            ]);
            $user->password = Hash::make($password);
          }

        if($request->hasFile('avatar')){

            if ($request->file('avatar')->isValid()) {

                $validated = $request->validate([
                    'avatar' => 'mimes:jpeg,gif,jpg,png|max:5120'
                ]);
                $extension = $request->avatar->extension();
                $avatarName = date('mdYHis') . uniqid().'.'.$extension;
                $request->file('avatar')->storeAs('public/uploads/avatars',$avatarName);
                $avatar = 'storage/uploads/avatars/'.$avatarName;  

            
                $this->deleteAvatar($user->avatar);

                $user->avatar =  $avatar;
                
                     
            }
        }

        

        $user->first_name = $first_name ;
        $user->last_name = $last_name ;
        $user->email = $email ;
        $user->phone = $phone ;
        $user->is_admin = $is_admin ;

        $user->save();

        return redirect()->route('users.index')->with('success','User Updated Succefully !!');
        
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $user = User::find($id);
       
       $this->deleteAvatar($user->avatar);
       $user->delete();

       return redirect()->route('users.index')->with('success','User Removed Succefully !!');
      
    }

    private function deleteAvatar($avatar){

        if(!empty(trim($avatar))){

            $removeFile = explode("/",$avatar);
            unset($removeFile[0]);
            $removeFile = join("/",$removeFile);
            Storage::disk('public')->delete($removeFile);
        }
    }

}
