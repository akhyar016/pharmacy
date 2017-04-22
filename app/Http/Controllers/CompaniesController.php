<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Companies;
use Session;

class CompaniesController extends Controller
{
    public function index()
    {
    	$companies = Companies::all();

    	return view('companies')->with('companies', $companies);
    }

    public function create(Request $request)
    {
    	$company = new Companies;
    	$company->name = $request->companyName;
    	$company->save();

        Session:: flash('success', 'Company Created Successfully!');

    	return redirect()->route('companies');
    }

    public function edit($id)
    {
   		$companies = Companies::all();
   		$cmp = Companies::find($id);

   		return view('companiesEdit')->with(compact('companies', 'cmp'));
	}

	public function update(Request $request, $id)
	{
		$company = Companies::find($id);
		$company->name = $request->input('companyName');
		$company->save();

        Session:: flash('success', 'Company Updated Successfully!');

		return redirect()->route('companies');
	}
}