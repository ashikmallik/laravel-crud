<?php

namespace App\Http\Controllers;

use session;
use App\Models\crud;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $cruds=crud::all();
        return view('welcome',compact('cruds'));
    }

    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:10',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'salary' => 'required',
        ]);
        // easy system
        // crud::create($request->all());
        $crud=new crud();
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->phone=$request->phone;
        $crud->address=$request->address;
        $crud->salary=$request->salary;
        $crud->save();
        return redirect()
            ->route('home.index')
            ->with('success','data creared successfully');
    }

    // edit
    public function edit($id){
        $crud_edit=crud::find($id);
        return view('edit',compact('crud_edit'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => 'required|max:10',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'salary' => 'required',
        ]);
        // easy system
        // crud::create($request->all());
        $crud=crud::find($id);
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->phone=$request->phone;
        $crud->address=$request->address;
        $crud->salary=$request->salary;
        $crud->save();
        return redirect()
            ->route('home.index')
            ->with('success','data update successfully');
    }

    public function delete($id){
        $deleteData=crud::find($id);
        $deleteData->delete();
        return redirect()
        ->route('home.index')
        ->with('success','data deleted successfully');
    }



}
