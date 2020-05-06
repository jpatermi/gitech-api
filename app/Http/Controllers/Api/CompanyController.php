<?php

namespace App\Http\Controllers\Api;

use App\Company;
use App\Http\Resources\Company as CompanyResources;
use App\Http\Requests\Company as CompanyRequests;
use App\Http\Resources\CompanyCollection;
use App\Http\Controllers\Controller;

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
        //dd($request->all());
        $company = Company::create($request->all());

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
}
