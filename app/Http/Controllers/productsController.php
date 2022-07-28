<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Products;

class productsController extends Controller
{
    public function __invoke(){
        return view('Products.main');
    }

    public function irLogin(){
        $mensaje='';
        return view('Login.login',compact('mensaje'));
    }

    public function index(){
        $category = Category::all();
        return view('Products.categoriesList',compact('category'));
    }

    public function productByCategory($request){
        $product = DB::table('products')->where('category','=',$request)->get();
        return view('Products.productsByCategory',compact('product'));
    }

    public function productDetail($request){
        $product = Product::find($request);
        return view('Products.productDetail',compact('product'));
    }

    public function ajax(Request $request){
        $palabra = $request->search;
        if(strlen($palabra)>3){
            $resultado = Product::where('name','like','%'.$request->search.'%')->limit(4)->get();
        }else{
            $resultado = null;
        }
        return $resultado;
    }
}
