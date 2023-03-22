<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = product::all();
        $categories = categorie::get();
        return view('products.index',compact('products','categories'));
    }
    public function create()
    {

    }

    public function store(Request $request)
    {
        try
           {
            $products = new product();
            $products->name = $request->name;
            $products->notes = $request->notes;
            $products->categorie_id = $request->categorie_id;
            $products->price = $request->price;
            $products->save();
            session()->flash('Add', " The Product added Successfully");
            return redirect('products');
           }
           catch(Exception $e){
            return redirect()->back()->withErrors(['error'=> $e->getMessage()]);
        }
    }


    public function show(product $product)
    {
        //
    }


    public function edit(product $product)
    {
        //
    }

    public function update(Request $request)
    {
        $products =  product::findorFail($request->id) ;
        try
        {
         $products->name = $request->name;
         $products->notes = $request->notes;
         $products->categorie_id = $request->categorie_id;
         $products->price = $request->price;
         $products->save();
         session()->flash('Edit', " The Product Updated Successfully");
         return redirect('products');
        }
        catch(Exception $e){
         return redirect()->back()->withErrors(['error'=> $e->getMessage()]);
     }
    }


    public function destroy($id)
    {
        try
        {
            product::destroy($id) ;
            session()->flash('Delete', " The Product Deleted Successfully");
            return redirect('products');
        }
        catch(Exception $e){
            return redirect()->back()->withErrors(['error'=> $e->getMessage()]);
        }
    }
}
