<?php

namespace App\Http\Bacci_Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class Bacci_UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'form_last_name' => 'filled',
            'form_first_name' => 'required',

            'form_gender' => 'required',
            'form_birthdate' => 'required|date|after:start_date',
//              $date = date('Y-m-d', strtotime($_POST['form_birthdate']));
//              echo "Today is $date";

            'form_address' => 'required',
            'form_contact_number' => 'required',

            'form_username' => 'required',
            'form_password' => 'required',
            'form_confirm_password' => 'required'
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
