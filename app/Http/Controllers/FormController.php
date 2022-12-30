<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function validateAll(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password_confirmation' => 'required|same:password',
                'dob'=>'required',
                'address'=>'required'
            ]
            );
    }
    public function index(){
        return view('form');
    }
    public function postForm(Request $request){
        //way to call the function 
        $this->validateAll($request);
        echo "<pre>";
        print_r($request->all());

        $customer= new Customer;
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->password=bcrypt($request['password']);
        $customer->address=$request['address'];
        $customer->dob=$request['dob'];
        $customer->save();
    }
}
