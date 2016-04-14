<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Products;
use App\CompanyProducts;

class ProductsController extends Controller
{
	public function index() {
		
	}
	
	public function prices() {
		return CompanyProducts::distinct()->lists('PRODUCT_name');
	}
}
