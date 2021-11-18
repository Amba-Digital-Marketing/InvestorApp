<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:company-list|company-create|company-edit|company-delete', ['only' => ['index','show']]);
         $this->middleware('permission:company-create', ['only' => ['create','store']]);
         $this->middleware('permission:company-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:company-delete', ['only' => ['destroy']]);
    }
    //
    public function index(){
        $companies= Company::all();
        return view('company.index',compact('companies'));
    }
    public function create(){
        return view('company.create');
    }
    public function store(Request $request){
        $this->validate(@$request,[
            'companyName'=>'required',

        ]);
        $input=$request->all();
        return redirect()->route('')->with('success','Company Created Successfully');
    }
    public function show (Company $company){

        return view('company.show',compact('company'));


    }
    public function edit(Company $company){
        return view('company.edit',compact('company'));
    }

    public function update(Request $request,Company $company){
        request()->validate(['companyName'=>'required']);
        $company->update($request->all());
        return redirect()->route('company.index')->with('success', 'Company Updated Successfully');
    }
    public function destroy(Company $company){
$company->delete();
return redirect()->route('company.index')->with('success','company deleted successfully')

    }
}
