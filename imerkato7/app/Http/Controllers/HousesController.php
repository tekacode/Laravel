<?php

namespace App\Http\Controllers;

use \App\House;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HousesController extends Controller
{
    public function index(){

    	$houses = House::all();

    	return view('houses.index', compact('houses'));

    }

    public function show($id){

    	//$House = House::find($id);
    	$house = House::findOrFail($id);

    	/*if(is_null($House)){
    		abort(404);
    	}
        */
    	return view('houses.show', compact('house'));

    }
}