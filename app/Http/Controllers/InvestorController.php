<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:investors-list|investors-create|investors-edit|investors-delete', ['only' => ['index','show']]);
         $this->middleware('permission:investors-create', ['only' => ['create','store']]);
         $this->middleware('permission:investors-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:investors-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $investors= Investor::all();
        // call all investors
        return view('investor.index',compact('investors'));

    }

    public function create()
    {
        return view('investor.create');
    }

    public function store(Request $request){

        request()->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'password'=>'required',
            'confPassword'=>'required'

        ]);

        Investor::create($request->all());

     //   return redirect()->route('company.index')->with('success','Product created successfully.');


        return redirect()->route('investors.index')->with('success','Company Created Successfully');
    }

    public function show(Investor $investor){
        return view('investor.show');

    }
    public function destroy(){

    }
    public function update(Request $request){

    }
}
