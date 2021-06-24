@extends('includes/layout')

@section("title")


@section('content')





<div class="card">
    <div class="card-body">
        
        <div class="row">
            <div class="col-md-12">
                <div class="left border">
                      <h2>
                      Payement 
                        <div class="icons">
                           <img src="{{asset('img/visa.png')}}" />
                            <img src="{{asset('img/mastercard-logo.png')}}"/>
                           <img src="{{asset('img/maestro.png')}}" /> 
                        </div>
                      </h2>
                    </div>
                    <form> 
        
                        <div class="form-group row justify-content-md-center">
                            <label for="name" class="col-sm-4 col-form-label">Cardholder's name:</label>
                            <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" id="name" value="">
                            </div>
                        </div>
                        <div class="form-group row justify-content-md-center">
                            <label for="c_nb" class="col-sm-4 col-form-label">Card Number:</label>
                            <div class="col-sm-6">
                            <input type="text" name="c_nb" class="form-control" placeholder="0125 6780 4567 9909" id="c_nb" >
                            </div>
                        </div>
                        <div class="form-group row justify-content-md-center">
                            <label for="exp" class="col-sm-4 col-form-label">Expiry date:</label>
                            <div class="col-sm-6">
                            <input type="text" name="exp" class="form-control" id="exp"  placeholder="YY/MM"">
                            </div>
                        </div>
                        <div class="form-group row justify-content-md-center">
                            <label for="ccv" class="col-sm-4 col-form-label">CVV:</label>
                            <div class="col-sm-6">
                            <input type="text" name="ccv" class="form-control" id="ccv" >
                            </div>
                        </div>

                        <div class="form-group row justify-content-md-center">
                            <div class="col-sm-8">
                            <button type="submit" class="btn btn-primary pt-0 pb-0"> Payer</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
    <div> </div>
</div>


@endsection