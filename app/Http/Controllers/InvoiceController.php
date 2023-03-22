<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\invoice;
use App\Models\product;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    public function index()
    {
         $invoices = invoice::all();
         $categories = categorie::all();
         $products = product::all();

         return  view('invoices.index' ,compact('invoices','categories','products'));
    }



    public function create()
    {
         $invoices = invoice::all();
         $categories = categorie::all();
         $products = product::all();

         return  view('invoices.menu' ,compact('invoices','categories','products'));
    }


    public function store(Request $request)
    {

      try
      {
         $invoices = new invoice();
         $invoices->invoice_number = $request->invoices_number;
         $invoices->invoice_date = $request->invoices_date;
         $invoices->categorie_id  = $request->categorie_id;
         $invoices->product_id = $request->product_id;
         $invoices->price = $request->invoices_price;
         $invoices->discount = $request->invoices_discount;
         $invoices->tax_value	 = $request->invoices_taxvalue;
         $invoices->tax_rate = $request->invoices_taxrate;
         $invoices->total = $request->invoices_total;
         $invoices->notes = $request->notes;
         $invoices->save();
         session()->flash('Add', " The invoice added Successfully");
         return redirect('invoices');
    }
     catch(Exception $e){
         return redirect()->back()->withErrors(['error'=> $e->getMessage()]);
     }
    }
    public function show($id)
    {
         $invoice = invoice::findorfail($id);
         $categories = categorie::all();
         $products = product::all();
        $id = $id;
         return  view('invoices.edit' ,compact('id','invoice','categories','products')  );

    }

    public function edit()
    {
        $invoices = invoice::all();
         $categories = categorie::all();
         $products = product::all();

         return  view('invoices.edit' ,compact('invoices','categories','products'));
    }

    public function update(Request $request)
    {
        $invoices = invoice::findorfail($request->id);
        try
         {
         $invoices->invoice_number = $request->invoices_number;
         $invoices->invoice_date = $request->invoices_date;
         $invoices->categorie_id  = $request->categorie_id;
         $invoices->product_id = $request->product_id;
         $invoices->price = $request->invoices_price;
         $invoices->discount = $request->invoices_discount;
         $invoices->tax_value	 = $request->invoices_taxvalue;
         $invoices->tax_rate = $request->invoices_taxrate;
         $invoices->total = $request->invoices_total;
         $invoices->notes = $request->notes;
         $invoices->save();
         session()->flash('Edit', " The invoice Editd Successfully");
         $invoices = invoice::all();
         $categories = categorie::all();
         $products = product::all();

         return  view('invoices.menu' ,compact('invoices','categories','products'));
    }
     catch(Exception $e){
         return redirect()->back()->withErrors(['error'=> $e->getMessage()]);
     }
    }

    public function destroy($id)
    {
        try
        {
            invoice::destroy($id) ;
            session()->flash('Delete', " The Invoice Deleted Successfully");
            $invoices = invoice::all();
            $categories = categorie::all();
            $products = product::all();

            return  view('invoices.menu' ,compact('invoices','categories','products'));
        }
        catch(Exception $e){
            return redirect()->back()->withErrors(['error'=> $e->getMessage()]);
        }
    }

    public function getProduct($id)
    {
        $products = product::where('categorie_id',$id)->pluck('name','id');
        return $products;
    }
}
