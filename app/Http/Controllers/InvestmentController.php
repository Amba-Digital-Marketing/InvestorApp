<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:investment-list|investment-create|investment-edit|investment-delete', ['only' => ['index','show']]);
         $this->middleware('permission:investment-create', ['only' => ['create','store']]);
         $this->middleware('permission:investment-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:investment-delete', ['only' => ['destroy']]);
    }
   public function index(){
    return view('investments.index');

   }
   public function store(){

   }
   public function create(){

   }
   public function show(){

   }
   public function destroy(){

   }

}
