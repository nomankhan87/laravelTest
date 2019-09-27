<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Customer;

class CrudBasicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customer = Customer::all();
        dd($customer);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$customer = new Customer;
        $customer->name = 'test';
        $customer->address = 'test';
        $customer->phone = '654';
        $customer->save();*/

        //mass assigment
        $customer = new Customer([
            'name'=>'test2',
            'address'=>'test2',
            'phone'=>'6554654'
        ]);
        $customer->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $customer = Customer::find($id);
         $customer->fill([
            'name'=>'test update',
            'address'=>'test update',
            'phone'=>'6554654dsfdsf'
        ]);
        $customer->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //simple destroye
        //Customer::destroy($id);

        //want to delete but to save in  other table for history/trail
        $customer = Customer::find($id);

        //for example create trail model and table want to use this
        // $trail = new Trail([
        //     'username' => $customer->name;
        // ]);

        $customer->delete();


    }
}
