<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Categories;
use App\Model\Medicines;
use App\Model\Suppliers;
use App\Model\Companies;
use Session;

class MedicineController extends Controller
{
    public function index()
    {
    	$medicines = Medicines::with('category', 'supplier')->get();
        $categories = Categories::all();
        $suppliers = Suppliers::all();

    	return view('medicine')
	    	->with(compact('medicines', 'categories', 'suppliers'));
    }

    public function create(Request $request)
    {
        $medicine = new Medicines;
        $medicine->category_id = $request->category_id;
        $medicine->supplier_id = $request->supplier_id;
        $medicine->name = $request->name;
        $medicine->base_price = $request->base_price;
        $medicine->total_quantity = $request->quantity;
        $medicine->sold = '0';

        $medicine->save();

        Session:: flash('success', 'Medicine Stored Successfully!');

        return redirect()->route('medicine');
    }

    public function edit($id)
    {
        $medicineId = $id;
        $categories = Categories::all();
        $suppliers = Suppliers::all();
        $md = Medicines::with('category', 'supplier')->find($medicineId);
        $medicines = Medicines::with('category', 'supplier')->get();
        return view('MedicineEdit')
                ->with(compact('categories', 'suppliers', 'medicineId', 'md', 'medicines'));
    }

    public function update(Request $request, $id)
    {
        $medicine = Medicines::find($id);
        $medicine->category_id = $request->input('category_id');
        $medicine->supplier_id = $request->input('supplier_id');
        $medicine->name = $request->input('name');
        $medicine->base_price = $request->input('base_price');
        $medicine->total_quantity = $request->input('quantity'); 

        $medicine->save();

        Session:: flash('success', 'Medicine Updated Successfully!');

        return redirect()->route('medicine');
    }

    public function delete($id)
    {
        $medicine = Medicines::find($id);
        $medicine->delete();

        Session:: flash('success', 'Medicine Deleted Successfully!');

        return redirect()->route('medicine');
    }

}
