<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Resources\CustomerResource;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(10);
        return CustomerResource::collection($customers);
    }
 
    public function show(Customer $customer)
    {
		return Customer::find($customer);
    }

    public function store(Request $request)
    {
        $customer = Customer::create($request->all());
		
		return response()->json($customer, 201);
    }

    public function update(Request $request, Customer $customer)
    {
		$customer = Customer::findOrFail($customer);
        $customer->update($request->all());

        return $customer;
    }

    public function destroy(Request $request, Customer $customer)
    {
        $customer->delete();

        return response()->json(null, 204);
    }
}
