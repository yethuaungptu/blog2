<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function list(){
        $customers = Customer::all();
        return view('customer/customer-list',compact('customers'));
    }
    function add(){
        return view('customer/customer-add');
    }
    function create(Request $request){
        $customer = new Customer([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ]);
        $customer->save();
        return redirect('/customers/list');
    }
    function detail($id){
        $customer = Customer::find($id);
        return view('customer/customer-detail',compact('customer'));
    }
    function edit($id){
        $customer = Customer::find($id);
        return view('customer/customer-update',compact('customer'));
    }
    function update(Request $request){
        $customer = [
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ];
        Customer::find($request->get('id'))->update($customer);
        return redirect('/customers/list');
    }
    function delete($id){
        Customer::find($id)->delete();
        return redirect('/customers/list');
    }
}
