<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Suppliers;
use App\Model\Companies;
use Session;

class SuppliersController extends Controller
{
    public function index()
    {
    	$suppliers = Suppliers::with('company')->get();
    	$companies = Companies::all();

    	return view('suppliers')
	    	->with(compact('suppliers', 'companies'));
    }

    public function create(Request $request)
    {
    	$supplier = new Suppliers;
    	$supplier->first_name = $request->first_name;
    	$supplier->last_name = $request->last_name;
    	$supplier->email = $request->email;
    	$supplier->mobile = $request->mobile;
    	$supplier->company_id = $request->company_id;

    	$supplier->save();

        Session:: flash('success', 'Supplier Created Successfully!');

    	return redirect()->route('suppliers');
    }

    public function edit($id)
    {
    	$spID = $id;
    	$sp = Suppliers::with('company')->find($id);
    	$suppliers = Suppliers::with('company')->get();
    	$companies = Companies::all();

    	return view('supplierEdit')
	    	->with(compact('sp', 'spID', 'suppliers', 'companies'));

    }

    public function update(Request $request, $id)
    {
    	$supplier = Suppliers::find($id);
    	$supplier->first_name = $request->input('first_name');
    	$supplier->last_name = $request->input('last_name');
    	$supplier->email = $request->input('email');
    	$supplier->mobile = $request->input('mobile');
    	$supplier->company_id = $request->input('company_id');

    	$supplier->save();

        Session:: flash('success', 'Supplier Updated Successfully!');

    	return redirect()->route('suppliers');
    }

    public function delete($id)
    {
    	$supplier = Suppliers::find($id);
    	$supplier->delete();

        Session:: flash('success', 'Supplier Deleted Successfully!');

    	return redirect()->route('suppliers');
    }
}
