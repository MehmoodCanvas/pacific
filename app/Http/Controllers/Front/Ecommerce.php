<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Variant;
use App\Models\Leads;
use App\Models\Ratings;
class Ecommerce extends Controller
{

    public function cart(Request $request,$id){
        $product = Product::find($id);
        \Cart::add(array(
            'id' => $product->product_id,
            'name' => $product->product_name,
            'price' => $product->product_price,
            'quantity' => 1,
        ));
        flash()->success('Product added to cart successfully');

        return redirect()->back();
    }

    public function cartCounter(){
        return response()->json([
            'cart_count' => \Cart::getContent()->count(),
        ]);
    }
    public function builder_cart(Request $request){
        $product = $request->get('product');
        $variant = $request->get('variant');

        $productData = Product::find($product);
        $variantData = Variant::find($variant);
        $finalPrice = $productData->product_price + $variantData->variant_price;
        \Cart::add(array(
            'id' => $productData->product_id,
            'name' => $productData->product_name,
            'price' => $finalPrice,
            'quantity' => 1,
            'attributes' => array('variant'=>$variantData->variant_id)
        ));
        return response()->json([
            'status' => 'success',
            'message' => 'Product added to cart successfully',
            'cart_count' => \Cart::getTotalQuantity(),
            'cart_total' => \Cart::getTotal()
        ]);
    }


    public function lead(Request $request){

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'product_id' => 'required|integer|exists:product,product_id',
            'product_size' => 'required|string|max:100',
            'art_image' => 'nullable|file|mimes:jpg,gif,png,pdf|max:10240', // max 10MB
        ]);
        $lead = new Leads();
        $lead->lead_name = $request->input('name');
        $lead->lead_email = $request->input('email');
        $lead->lead_phone = $request->input('phone');
        $lead->lead_message = $request->input('quantity');
        $lead->lead_product_id = $request->input('product_id');
        $lead->product_size = $request->input('product_size');

    if($request->hasfile('art_image')){
        $imageName = time().'.'.$request->art_image->extension();
     
        $request->art_image->move(public_path('storage/arts'), $imageName);
        $lead->product_art = $imageName;
    }
        $lead->save();
        
        
        flash()->success('Lead created successfully');

        return redirect()->back();
    }

    public function store_review(Request $request){

        $review = new Ratings();
        $review->ratings_name= $request->name;
        $review->ratings_business= $request->position;
        $review->ratings_email= $request->email;
        $review->ratings_star= $request->clr;
        $review->ratings_feedback= $request->feedback;


    if($request->hasfile('r_file')){
        $imageName = time().'.'.$request->r_file->extension();
     
        $request->r_file->move(public_path('storage/review'), $imageName);
        $review->ratings_pic = $imageName;

    }
            $review->save();
                    flash()->success('Review added successfully');

        return redirect()->back();

    }
}
