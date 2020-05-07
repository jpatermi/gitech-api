<?php

namespace App\Http\Controllers\Api;

use App\Address;
use App\Company;
use App\Http\Resources\Company as CompanyResources;
use App\Http\Requests\Company as CompanyRequests;
use App\Http\Resources\CompanyCollection;
use App\Http\Controllers\Controller;
use App\Phone;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(new CompanyCollection(
            Company::all()
        ), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequests $request)
    {
        global $request, $company;
        //dd($request->all());
        DB::transaction(function () {
            global $request, $company;

            $company = Company::create($request->all());

            $address = $request->addresses;
            //foreach($request->addresses as $address) {
                Address::create([
                    'company_id'    => $company->id,
                    'city_id'       => $address['city_id'],
                    'description'   => $address['description'],
                    'number'        => $address['number'],
                    'portal'        => $address['portal'],
                    'floor'         => $address['floor'],
                    'zip'           => $address['zip'],
                    'user_id'       => $company->user_id,
                ]);
            //}

            $phone = $request->phones;
            //foreach($request->phones as $phone) {
                Phone::create([
                    'company_id'    => $company->id,
                    'type'          => $phone['type'],
                    'number'        => $phone['number'],
                    'user_id'       => $company->user_id,
                ]);
            //}
        });

        return response()->json(new CompanyResources($company), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return response()->json(new CompanyResources($company), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequests $request, Company $company)
    {
        $company->update($request->all());

        return response()->json(new CompanyResources($company), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return response()->json(null, 204);
    }

    /**
     * Se hace el registro completo del cliente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(CompanyRequests $request)
    {
        //dd($request->all());
        $company = Company::create($request->all());

        return response()->json(new CompanyResources($company), 201);
    }
}
