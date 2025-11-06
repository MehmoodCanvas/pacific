<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function index(){
        $leads= DB::table('leads')->get();
        $products= DB::table('product')->get();

        return view('admin.index',compact('leads','products'));
    }

    public function products(){

            $product= Product::all();
        return view('admin.product',compact('product'));
  
    }


    public function category(){
        $category= DB::table('category')->get();
        return view('admin.category',compact('category'));
    }

    public function add_category(){
        return view('admin.category-add');
    }

    public function edit_category($id){
        $category= DB::table('category')->where('category_id',$id)->first();
        return view('admin.edit-category',compact('category'));
    }
    public function add_product(){
        $category= DB::table('category')->get();
        return view('admin.product-add',compact('category'));
   
    }

    public function edit_product($id){
  
            $product= DB::table('product')->where('product_id',$id)->first();
            $category= DB::table('category')->get();
        return view('admin.edit-product',compact('product','category'));
   
    }

    public function leads(){
    
        $order= DB::table('leads')->join('product','lead_product_id','product_id')->get();

        return view('admin.order',compact('order'));
  
    }

    public function order_view($id){
        $order=DB::table('order')->where('order_id',$id)->first();
        $order_item= DB::table('order_item')->where('order_item_order_id',$id)->get();
        foreach($order_item as $items){
            $products[]= DB::table('product')->where('product_id',$items->order_item_product_id)->get();

        }
       $product=$products;   
       
       return view('admin.invoice',compact('order','product'));
    }

  

}
