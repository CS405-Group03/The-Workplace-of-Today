<?php

namespace App\Http\Bacci_Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Validator;
use Auth;

class Bacci_UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/index');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.bacci_register');
    }



    function checklogin(Request $request)
    {
        $this->validate($request, [
            'sign_username' =>  'required',
            'sign_password' =>  'required|alphaNum'
        ], [
            'sign_username.required' => 'Please Enter Username First',
            'sign_password.required' => 'Please Enter Password',
            'sign_password.alphaNum' => 'Password Only Contains Number and Letters'
        ]);

        $user_data = array(
            'form_username' =>  $request->get('sign_username'),
            'form_password' => $request->get('sign_password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('/')->with('success', 'Login Successfully!');
        }
        else
        {
            // may change to redirect('/') only...
            return back()->with('error', 'Wrong Username and Password Details!');
        }

    }



    function successlogin()
    {
        return view('index');
    }



    function logout()
    {
        Auth::logout();
        return redirect('/');
    }



    public function getAuthPassword()
    {
        return $this->a_password;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return request()->all();

        $attributes = request()->validate([
            'form_last_name' => 'required',
            'form_first_name' => 'required',

            'form_gender' => 'required',
            'form_birthdate' => 'required|date|after:start_date',

            'form_address' => 'required',
            'form_contact_number' => 'required',

            'form_username' => 'required',
            'form_password' => 'required|alphaNum',
            'form_confirm_password' => 'required|same:form_password'
        ], [ 
            'form_last_name.required' => 'Enter Last Name',
            'form_first_name.required' => 'Enter First Name',
            'form_gender.required' => 'Please Pick a Gender',
            'form_birthdate.required' => 'Enter Your Birthdate',
            'form_address.required' => 'Enter Address',
            'form_contact_number.required' => 'Enter Contact Number',
            'form_username.required' => 'Enter Username',
            'form_password.required' => 'Enter Password',
            'form_password.alphaNum' => 'Only Letter and Numbers',
            'form_confirm_password.required' => 'Re-Enter Password',
            'form_confirm_password.same' => 'Password Mismatch!'
            ]);

        // dd('Successfully Registered');

        Users::create($attributes);

        return redirect('/')->with('success', 'Success! Thanks for Submitting the Registration Form.');
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
        //
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
        //
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
