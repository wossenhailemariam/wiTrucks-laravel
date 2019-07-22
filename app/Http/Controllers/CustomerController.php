<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Searches;
use App\Customer;


class CustomerController extends Controller
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
        return view('customers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'marriage' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone_number' => 'required',


        ]);

        //create post
        $customer = new Customer;
        $customer->first_name = $request->input('first_name');
        $customer->last_name= $request->input('last_name');
        $customer->user_name= $request->input('user_name');
        $customer->email= $request->input('email');
        $customer->company_name= $request->input('company_name');
        $customer->marriage= $request->input('marriage');
        $customer->city= $request->input('city');
        $customer->country= $request->input('country');
        $customer->phone_number= $request->input('phone_number');
        $customer->employer_name= $request->input('employer_name');


        //save
        $customer->save();

        return redirect('/searches')->with('success','Reservation Created - You will soon receive email,');

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
