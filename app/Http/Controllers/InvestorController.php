<?php

namespace App\Http\Controllers;

class InvestorController extends Controller
{

    public function index()
    {
        // call all investors
        return view('investor.index');

    }
    public function create()
    {
        return view('investor.create');
    }
}
