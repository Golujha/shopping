<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
class HomeController extends Controller
{
    //
    function index(){
        $data = [
            'products' => Product::all(),
            'category' => Category::all(),
        ];
        return view("home",$data);
    }
    public function categoryPage($cat_id){
        $data = [
            'products' => Product::where(['category_id'=>$cat_id])->get(),
            'category' => Category::all(),
        ];
        return view("home",$data);
    }

    public function oneView($pro_id){
        $data = [
            'products' => Product::find($pro_id),
            'category' => Category::all(),
        ];
        return view("oneView",$data);
    }
    
}
