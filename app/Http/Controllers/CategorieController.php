<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriesRequest;
use App\Models\categorie;
use Exception;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function index()
    {
        $categories = categorie::all();
        return view('categories.index',compact('categories'));
    }


    public function create()
    {
        //
    }

    public function store(StoreCategoriesRequest $request)
    {
        try
        {
            $categories = new categorie() ;
            $categories->name = $request->name;
            $categories->notes = $request->notes ;
            $categories->save();

           session()->flash('Add', " The Category added Successfully");
            return redirect('categories');
       }
        catch(Exception $e){
            return redirect()->back()->withErrors(['error'=> $e->getMessage()]);
        }

    }


    public function show(categorie $categorie)
    {
        //
    }


    public function edit(categorie $categorie)
    {
        //
    }


    public function update(StoreCategoriesRequest $request)
    {
        $categories =  categorie::findorFail($request->id) ;
        try
        {
            $categories->name = $request->name;
            $categories->notes = $request->notes ;
            $categories->save();
            session()->flash('Edit', " The Category Updated Successfully");
            return redirect('categories');
        }
        catch(Exception $e){
            return redirect()->back()->withErrors(['error'=> $e->getMessage()]);
        }

    }


    public function destroy($id)
    {
        try
        {
            categorie::destroy($id) ;
            session()->flash('Delete', " The Category Deleted Successfully");
            return redirect('categories');
        }
        catch(Exception $e){
            return redirect()->back()->withErrors(['error'=> $e->getMessage()]);
        }
    }
}
