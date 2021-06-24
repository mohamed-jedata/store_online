<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayementController extends Controller
{
    public function  index(Request $request){

        $total_price = $request->input('total_price');

        return view('payement',[
            'total_price' => $total_price
            ]);
    }
}
