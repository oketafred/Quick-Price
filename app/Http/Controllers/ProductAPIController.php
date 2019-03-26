<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use Illuminate\Support\Facades\DB;

class ProductAPIController extends Controller
{
    public function getAllCompanies(){

    	$companies = DB::table('users')
    			->select('id', 'company','email', 'created_at')
                ->where('company', '>=', "")
                ->get();


    	return response()->json(["companies" => $companies]);

    }

    public function getAllProducts(Request $request, $id){
       
        $products = DB::table('users')
        ->join('products', function ($join) {
            $join->on('users.id', '=', 'products.user_id')
                 ->where('products.user_id', '=', "$id");
        })
        ->get();

    	return response()->json(["message" => $products]);

    }
}
