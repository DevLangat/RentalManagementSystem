<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tenants = Tenant::all();

        return view('tenants.index', compact('tenants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create()
    {
        return view('tenants.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $tenant= new Tenant();
      $tenant->name = $request->name;
      $tenant->email = $request->email;
      $tenant->idnumber = $request->idnumber;
      $tenant->phone = $request->phone;
      $tenant->address = $request->address;
      $tenant->county = $request->county;
      $tenant->location = $request->location;
      $tenant->dob = $request->dob;
      $tenant->gender = $request->gender;
      $tenant->occupation = $request->occupation;
      $tenant->save();
     // Alert::success('Tenant Creation', 'Creation Was Successfull');
    //   return redirect()->back();
    //     Tenant::create($request->all());
        return redirect()->route('tenants.index')
        ->with('success', 'Tenant added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function show(Tenant $tenant)
    {

       // return view('tenants.show',compact('tenant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tenant=Tenant::find($id);
        return view('tenants.edit',compact('tenant','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $tenant =Tenant::find($id);
        $tenant->name = $request->name;
        $tenant->email = $request->email;
        $tenant->idnumber = $request->idnumber;
        $tenant->phone = $request->phone;
        $tenant->address = $request->address;
        $tenant->county = $request->county;
        $tenant->location = $request->location;
        $tenant->dob = $request->dob;
        $tenant->gender = $request->gender;
        $tenant->occupation = $request->occupation;
        $tenant->save();
        return redirect()->route('tenants.index')
        ->with('success', 'Tenant Details Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tenant $tenant)
    {
        $tenant->delete();
        return redirect()->route('tenants.index')
        ->with('success', 'Deleted successfully.');
    }
}
