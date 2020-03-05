<?php

namespace App\Http\Controllers;

use App\Merchant;
use App\Http\Resources\MerchantResource;
use Illuminate\Http\Request;

use Ramsey\Uuid\Uuid;

class MerchantController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:api')->except(['index', 'show']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merchants = Merchant::with('bank')->paginate(10);
        return MerchantResource::collection($merchants);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $uuid3 = Uuid::uuid4();

        $merchant = Merchant::create([
            'uuid' => (string)$uuid3,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'bank_code' => $request->bank_code,
            'description' => $request->description,
            'profile' => $request->profile,
        ]);

        return new MerchantResource($merchant);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function show(Merchant $merchant)
    {
        return new MerchantResource($merchant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merchant $merchant)
    {
        $merchant->edit($request->only([
            'name',
            'phone',
            'email',
            'address',
            'bank',
            'description',
            'user',
            'profile'
        ]));

        return response()->json($merchant, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merchant $merchant)
    {
        $merchant->delete();

        return response()->json(null, 204);
    }
}
