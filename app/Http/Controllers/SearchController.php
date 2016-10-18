<?php

namespace App\Http\Controllers;

use App\Immigrant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function getSearch(Request $request)
    {
        //get keywords input for search
        $string=  $request->input('searchQuery');
        /*$searchValues = preg_split('/\s+/', $string); // split on 1+ whitespace

        //search that student in Database
        $immigrants= Immigrant::where(
            function ($q) use ($searchValues) {
                foreach ($searchValues as $value) {
                    $q->orWhere('name', 'like', "%{$value}%");
            }
        })->paginate(10);*/

        $immigrants= Immigrant::where('name', 'like' ,"%$string%")->paginate(10);


        //return display search result to user by using a view
        return view('immigrants/index')->with('immigrants', $immigrants);
    }
}
