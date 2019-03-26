<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Product;
use App\User;

class ProductController extends Controller
{
	public function dashboard(){

    	$products = Product::all()->where('user_id', '=', Sentinel::getUser()->id);

    	return view('companies.product.index', compact('products'));

    }

    public function getAllProducts(){

    	$products = Product::all();

    	return view('companies.product.index', compact('products'));

    }

    public function addProducts(){

    	return view('companies.product.create');

    }

    public function postAddProducts(Request $request){

    	$this->validate($request, [
    		'product_name' => 'required',
    		'wholesale_quantity' => 'required',
    		'wholesale_price' => 'required',
    		'retail_quantity' => 'required',
    		'retail_price' => 'required'
    	]);

    	$product = new Product;

	    $product->name    = $request->product_name;
	    $product->wholesale_quantity = $request->wholesale_quantity." ". $request->wholesale_unit;
	    $product->wholesale_price = $request->wholesale_price;
	    $product->retail_quantity = $request->retail_quantity." ". $request->retail_unit;
	    $product->retail_price = $request->retail_price;
	    $product->user_id = Sentinel::getUser()->id;

	    $product->save();


    	return redirect()->route('add_products')->with(['success' => 'Product Successfully created.']);;
    }

    public function adminDashboard(){

        $companies = User::all()->where('company', '!=', '')->count();

        $products = Product::all()->count();


        return view('admin.dashboard', compact('companies', 'products'));

    }

}
