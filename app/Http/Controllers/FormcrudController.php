<?php

namespace App\Http\Controllers;

use App\Models\Formcrud;
use Illuminate\Http\Request;
use App\Http\Requests\FormcrudRequest;

class FormcrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formcrud = Formcrud::orderBy('id','DESC')->paginate(6);
        return view('welcome', compact('formcrud'));
        
    }

    /**
     * Show the form for creating a new resource.
     */ 
    public function create()
    {
        return view('addData');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormcrudRequest $request)
    {
        $checkbox_data = $request->skill;
        $path = $request->image->store('image','public');
        $store = Formcrud::create([
           
            'name' => $request->name,
            'skill' => implode(',',$checkbox_data),
            'image' => $path,
            'country' => $request->country


        ]);

        return redirect()->route('formcrud.index')->with('status', "Data Inserted Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $showData = Formcrud::find($id);
        return view('viewData', compact('showData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editData = Formcrud::find($id);
        return view('editForm', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = Formcrud::find($id);

        
        $checkbox_data = $request->skill;
      
      
        if($request->hasFile('image')) {

            $image_path = public_path('storage/').$update->image;

            if(file_exists($image_path)) {
                @unlink($image_path);

               
            }
            $path = $request->image->store('image','public');
            $update->image = $path;

        }

       
        

        $update->name = $request->name;
        $update->skill = implode(',',$checkbox_data);
         $update->country = $request->country;
         
       
         $update->save();
      

 
  

        return redirect()->route('formcrud.index')->with('status', "Data Updated Successfully");
   
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = Formcrud::find($id);
        $deleted->delete();
        
        $image_path = public_path('storage/').$deleted->image;
        if(file_exists($image_path)) {
            @unlink($image_path);
        }

        return redirect()->route('formcrud.index')->with('status', "Data Deleted Successfully");
    }


    // searching

        // search

        public function search(Request $req) {
            $data = $req->input('search');
    
            $formcrud = Formcrud::where('name','like','%'.$data.'%')->paginate(6);
            return view('welcome', compact('formcrud'));
        }
}
