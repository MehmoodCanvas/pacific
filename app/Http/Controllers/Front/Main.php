<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Variant;
use App\Models\Category;
use App\Models\Ratings;

class Main extends Controller
{
    public function index(Request $request)
    {
        $products = Product::OrderBy('product_id', 'DESC')->take(20)->get();
        return view('front.index', compact('products'));
    }
    public function about(Request $request)
    {
        return view('front.about');
    }
    public function shop(Request $request){
        $products = Product::paginate(16);
        $categories = Category::all();
        return view('front.products', compact('products', 'categories'));
    }

    public function category(Request $request, $slug){
        $category = Category::where('category_slug', $slug)->first();
        $products = Product::where('product_category_id', $category->category_id)->paginate(16);
        $categories = Category::where('category_id', '!=', $category->category_id)->get();
        return view('front.products', compact('products', 'categories', 'category'));
    }



    public function product($id){
        $product = Product::where('product_slug', $id)->first();
        $category = Category::find($product->product_category_id);
        $recentProducts = Product::OrderBy('product_id', 'DESC')->where('product_slug','!=',$id)->take(4)->get();
        return view('front.product-detail', compact('product', 'category', 'recentProducts'));
    }

    public function reviews(Request $request){
        $reviews  = Ratings::OrderBy('ratings_id','DESC')->where('ratings_status',1)->get();
        return view('front.reviews',compact('reviews'));
    }


    public function patch(){
        return view('front.patch');
    }

    public function meet_dr(){
        return view('front.meet-dr-patch');
    }
}
