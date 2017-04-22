<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Model\Medicines;
use App\Model\Salerecord;

class SaleController extends Controller
{
    public function index()
    {
        //Session:: flash('success', 'Company Created Successfully!');
        $medicines = Medicines::get();
        $salerecord = Salerecord::with('medicine')->get();

    	return view('newsale')
                    ->with(compact('medicines', 'salerecord'));
    }

    // Storing medicine prices taken by user to sell
    
    public function insert(Request $request)
    { 
        $salerecord = new Salerecord;
        
        $salerecord->medicine_id = $request->medicine_id;
        $salerecord->quantity = $request->quantity;

        $medicine = Medicines::find($salerecord->medicine_id);
        $basePrice = $medicine->base_price;

        $quantity = $request->quantity;

        if($quantity > $medicine->total_quantity)
        {
            Session::flash('danger', 'Medicine quantity is out of stock!');
            return redirect()->route('newsale');
        }

        $tot_price = ($quantity * $basePrice);

        $salerecord->total_price = $tot_price;
        $salerecord->save();

        Session::flash('success', 'Medicine Inserted Successfully');

        return redirect()->route('newsale');
    }

    public function delete($id)
    {
        $salerecord = Salerecord::find($id);

        $salerecord->delete();

        return redirect()->route('newsale');
    }


    // Updating medicine table after confirming sell

    private function sell($medicine_id, $quantity)
    {
        $medicine = Medicines::find($medicine_id);
        
        $medicine->total_quantity = ($medicine->total_quantity - $quantity);
        $medicine->sold = $medicine->sold+$quantity;

        $medicine->save();
    }

    // Confirming Sell

    public function save()
    {
        $salerecord = Salerecord::all();
        $saleDashboard = Salerecord::with('medicine')->get();

        $totalMoney = 0;
        $totalMedicine = 0;
        $medicineTypes = [];

        foreach($salerecord as $sr)
        {
            $totalMoney += $sr->total_price;
            $totalMedicine += $sr->quantity;
            $medicineTypes[$sr->medicine_id] = 0;
            $this->sell($sr->medicine_id, $sr->quantity);
        }

        $data = [
            'totalMoney' => $totalMoney,
            'totalMedicines' => $totalMedicine,
            'medicineTypes' => count($medicineTypes)
        ];

        Salerecord::truncate();

        return view('newsaleDashboard')
                ->with(compact('data', 'saleDashboard'));
    }

    public function clear()
    {
        Salerecord::truncate();

        return redirect()->route('newsale');
    }
}
