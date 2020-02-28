<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Resources\CustomerResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
		$customers = Customer::paginate(10);
        return CustomerResource::collection($customers);
    }
 
    public function show($id)
    {
		return Customer::find($id);
    }

    public function store(Request $request)
    {
        $customer = Customer::create($request->all());
		
		// for debugging purposes
		return response()->json($customer, 201);
    }

    public function update(Request $request, $id)
    {
		$customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return $customer;
    }

    public function delete(Request $request, Customer $customer)
    {
        $customer->delete();

        return response()->json(null, 204);
    }
}
