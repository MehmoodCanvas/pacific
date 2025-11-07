<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\Variant;
use App\Models\Gift;
use Illuminate\Support\Facades\DB;

class Catlog extends Controller

{
   public function store_product(Request $request){
    $product= new Product();    


    if($request->hasFile('images')){
        $files = $request->file('images');
        $filess=[];
    foreach($files as $file){
        $filename = time() . $file->getClientOriginalName();   
        $file->move(public_path('storage/product/'), $filename);
        $filess[]=$filename;
    
        }
        $product->product_image=json_encode($filess);

    }
        $product->product_name=$request->product_name;
        $product->product_description= $request->product_description;
        $product->product_price= $request->product_price;
        $product->product_status= $request->product_status;
        $product->product_category_id= $request->product_category_id;
        $saved=$product->save();
        if($saved){
            return redirect()->back()->with('success','Your Product is Sucessfully Added');
        }else{
            return redirect()->back()->with('error','Opps Error!');

        }
   }


   public function edit_product(Request $request,$id){
      $product= Product::find($id);
    
   if($request->hasFile('images')){
        $files = $request->file('images');
        $filess=[];
    foreach($files as $file){
        $filename = time() . $file->getClientOriginalName();   
        $file->move(public_path('storage/product/'), $filename);
        $filess[]=$filename;
    
        }
        $product->product_image=json_encode($filess);

    }
        $product->product_name=$request->product_name;
        $product->product_description= $request->product_description;
        $product->product_price= $request->product_price;
        $product->product_status= $request->product_status;
        $product->product_category_id= $request->product_category_id;
        $saved=$product->save();
        if($saved){
            return redirect()->back()->with('success','Your Product is Sucessfully Updated');
        }else{
            return redirect()->back()->with('error','Opps Error!');

        }
      
   }


   public function store_category(Request $request){
    $category= new Category();
    try{
    if($request->hasfile('category_image')){
        $imageName = time().'.'.$request->category_image->extension();  
     
        $request->category_image->move(public_path('storage/category'), $imageName);

        $category->category_image=$imageName;

    }
        $category->category_name=$request->category_name;
        $category->category_description=$request->category_description;
        $saved= $category->save();
                return redirect()->back()->with('success',"Successfully Added New Category");

    }catch(\Exception $e){
        return redirect()->back()->with('error',$e->getMessage());

    }
   
   }

   public function edit_category(Request $request,$id){
    $category= Category::find($id);
   try{
    if($request->hasfile('category_image')){
        $imageName = time().'.'.$request->category_image->extension();  
     
        $request->category_image->move(public_path('storage/category'), $imageName);

        $category->category_image=$imageName;

    }
        $category->category_name=$request->category_name;
        $category->category_description=$request->category_description;
        $saved= $category->save();
                return redirect()->back()->with('success',"Successfully Added New Category");

    }catch(\Exception $e){
        return redirect()->back()->with('error',$e->getMessage());

    }
   }

   public function store_attribute(Request $request){
        $attribute= new Attribute();
        $attribute->attribute_name=$request->attribute_name;
        $attribute->attribute_type=$request->attribute_type;
        $attribute->attribute_created_by=Auth::id();
        $attribute->attribute_updated_by=Auth::id();
        $save= $attribute->save();
        if($save=='true'){
            return redirect()->back()->with('success','Attribute Added');
        }else{
            return redirect()->back()->with('error','Error in Submitting');

        }
   }

   public function edit_attribute(Request $request,$id){
    $attribute= Attribute::find($id);
    $attribute->attribute_name=$request->attribute_name;
    $attribute->attribute_type=$request->attribute_type;
    $attribute->attribute_updated_by=Auth::id();
    $save= $attribute->save();
    if($save=='true'){
        return redirect()->back()->with('success','Attribute Updated');
    }else{
        return redirect()->back()->with('error','Error in Submitting');

    }

   }

   public function store_variant(Request $request){
     $variant = new Variant();
     $variant->variant_name=$request->variant_name;
     $variant->variant_price=$request->variant_price;
     $variant->variant_sku=$request->variant_sku;
     $variant->variant_attrbuite_id=$request->variant_attrbuite_id;
     $variant->variant_created_by=Auth::id();
     $variant->variant_updated_by=Auth::id();
     $save=$variant->save();
     if($save=='true'){
        return redirect()->back()->with('success','Variant Added');
    }else{
        return redirect()->back()->with('error','Error in Submitting');

    }

   }


   public function edit_variant(Request $request,$id){
    $variant = Variant::find($id);
    $variant->variant_name=$request->variant_name;
    $variant->variant_price=$request->variant_price;
    $variant->variant_sku=$request->variant_sku;
    $variant->variant_attrbuite_id=$request->variant_attrbuite_id;
    $variant->variant_updated_by=Auth::id();
    $save=$variant->save();
    if($save=='true'){
       return redirect()->back()->with('success','Variant Updated!');
   }else{
       return redirect()->back()->with('error','Error in Submitting');

   }

  }

  public function add_gift(Request $request){
    $gift= new Gift();
        $gift->gift_title=$request->gift_title;
        $gift->gift_description=$request->gift_description;
        $gift->gift_shipping_returns=$request->gift_shipping_returns;
        $gift->gift_price=$request->gift_price;

    if($request->hasfile('gift_image')){
        $giftimage = time().'.'.$request->gift_image->extension();  
     
        $request->gift_image->move(public_path('storage/gift'), $giftimage);
        $gift->gift_image=$giftimage;

    }    

    $save=$gift->save();
    if($save=='true'){
        return redirect()->back()->with('success','Gift Added!');
    }else{
        return redirect()->back()->with('error','Error in Submitting');
 
    }  
}   
    public function edit_gift(Request $request,$id){
        $gift= Gift::find($id);
        $gift->gift_title=$request->gift_title;
        $gift->gift_description=$request->gift_description;
        $gift->gift_shipping_returns=$request->gift_shipping_returns;
        $gift->gift_price=$request->gift_price;

    if($request->hasfile('gift_image')){
        $giftimage = time().'.'.$request->gift_image->extension();  
     
        $request->gift_image->move(public_path('storage/gift'), $giftimage);
        $gift->gift_image=$giftimage;

    }    

    $save=$gift->save();
    if($save=='true'){
        return redirect()->back()->with('success','Gift Added!');
    }else{
        return redirect()->back()->with('error','Error in Submitting');
 
    }          
    }


    public function destroy($id) {

        $Product = Product::find($id);
    
        $Product->delete();
    
        return redirect()->back()->with('success', 'Product Deleted!');
    
    }

    public function destroy_gift($id){
        $Gift = Gift::find($id);
    
        $Gift->delete();
    
        return redirect()->back()->with('success', 'Gift Card Deleted!');
    }
   
}
