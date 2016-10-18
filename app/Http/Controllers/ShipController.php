<?php

namespace App\Http\Controllers;

use App\Immigrant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShipController extends Controller
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
    public function show($ship_name)
    {
        $ship_links = DB::table('links')->where('ship_name', $ship_name)->get();

        $immigrants = Immigrant::where('ship', $ship_name)->groupby('date_of_arrival')->paginate(5);

        return view('ships/show')
            ->with('ship_links', $ship_links)
            ->with('ship_name', $ship_name)
            ->with('immigrants', $immigrants);
    }
    
    public function voyage($ship_name,$date_of_arrival)
    {
        $immigrants = Immigrant::where('ship', $ship_name)->where('date_of_arrival', $date_of_arrival)->paginate(10);

        return view('immigrants/index')
            ->with('ship_name', $ship_name)
            ->with('immigrants', $immigrants);
    }
    
    public function index(Request $request)
    {


        $string=  $request->input('searchQuery');
        $ships = DB::table('links')->where('ship_name', 'like' ,"%$string%")->groupBy('ship_name')->paginate(10);


        //return display search result to user by using a view
        return view('ships/index')->with('ships', $ships);
    }

    public function voyages($ship_name)
    {
        $immigrants = Immigrant::where('ship', $ship_name)->get();

    }
 
    

}
