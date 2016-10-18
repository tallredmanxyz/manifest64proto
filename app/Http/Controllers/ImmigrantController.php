<?php

namespace App\Http\Controllers;

use App\Immigrant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImmigrantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $immigrants = Immigrant::paginate(5);
        return view('immigrants/index')->with('immigrants', $immigrants);
    }


    public function show($arrival_id)
    {
        $immigrant = Immigrant::where('arrival_id',$arrival_id)->first();
        return view('immigrants/show')->with('immigrant', $immigrant);
    }

}
