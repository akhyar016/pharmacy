<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Categories;
use App\Model\Medicines;
use App\Model\Suppliers;
use App\Model\Companies;

class PharmacyController extends Controller
{
    public function index()
    {
    	$medicines = Medicines::with('category', 'supplier')->get();

    	return view('dashboard')->with('medicines', $medicines);
	}
}
