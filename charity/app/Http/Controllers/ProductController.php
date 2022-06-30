<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Subcategory;

class ProductController extends Controller
{
    public function addpro()
    {
        $subcatdata = Subcategory::all();
        return View('admin.Product.addproduct',compact('subcatdata'));
    }
    public function viewpro($subcatid=null)
    {
        if($subcatid==null)
        {

            $productdata = Product::select("*")->leftjoin("subcategory","subcategory.subcat_id","=","product.subcat_id")->get();
        }
        else
        {
            
        $productdata = Product::select("*")->leftjoin("subcategory","subcategory.subcat_id","=","product.subcat_id")->where('subcategory.subcat_id',$subcatid)->get();
        }
        return View('admin.Product.viewproduct',compact('productdata'));
    }
    public function updatepro($id)
    {   
        $singledata = Product::where("product_id",$id)->first();
        $subcatdata = Subcategory::all();
        return View('admin.Product.updateproduct',compact("singledata","subcatdata"));
    }
    public function detailpro($id)
    {   
        $singledata = Product::select("*")->where("product_id",$id)->leftjoin("subcategory","subcategory.subcat_id","=","product.subcat_id")->first();
        return View('admin.Product.detailsproduct',compact("singledata"));
    }
    public function editproduct(Request $request)
    {
        $id=$request->updateid;
        $oldimage1=$request->oldimage1;
        $oldimage2=$request->oldimage2;
        $oldimage3=$request->oldimage3;
        if($request->has("img1"))
        {
            unlink(public_path('/uploads/product/').$oldimage1);
            $img1 = $request->img1;
            $ext1 = $img1->extension();
            $filename1 = time().rand(1111,9999).".".$ext1;
            $img1->move(public_path('/uploads/product/'),$filename1);
        }
        else
        {
            $filename1=$oldimage1;

        }
        if($request->has("img2"))
        {
            unlink(public_path('/uploads/product/').$oldimage2);
            $img2 = $request->img2;
            $ext2 = $img2->extension();
            $filename2 = time().rand(1111,9999).".".$ext2;
            
            $img2->move(public_path('/uploads/product/'),$filename2);
        }
        else
        {
            $filename2=$oldimage2;
        }
        if($request->has("img3"))
        {
            unlink(public_path('/uploads/product/').$oldimage3);
            $img3 = $request->img3;
            $ext3 = $img3->extension();
            $filename3 = time().rand(1111,9999).".".$ext3;
            $img3->move(public_path('/uploads/product/'),$filename3);
        }
        else
        {
            
            
            $filename3=$oldimage3;
            
        }
        $productname = $request->prodname;
        $prod_desc = $request->proddecs;
        $img1 = $filename1;
        $img2 = $filename2;
        $img3 = $filename3;
        $videourl = $request->videourl;
        $price = $request->price;
        $isactive = $request->radio1;
        $sub_id =  $request->subcat;
        //insert
        $obj = Product::where("product_id",$id)->first();
        $obj->p_name = $productname; 
        $obj->description = $prod_desc;
        $obj->img1 = $img1;
        $obj->img2 = $img2;
        $obj->img3 = $img3;
        $obj->video_url = $videourl;
        $obj->price = $price;
        $obj->isactive = $isactive;
        $obj->subcat_id = $sub_id;
        $obj->save();
        return redirect('admin/product/viewproduct')->with("message","Product updated Successfully");
    }
    
    public function insertprod(Request $request)
    {

        $result = Product::select("*")->where("p_name",$request->prodname)->get();
        if(count($result)<=0)
        {
            
            //img insert
        $img1 = $request->img1;
        $ext1 = $img1->extension();
        $filename1 = time().rand(1111,9999).".".$ext1;
        $img1->move(public_path('uploads/product/'),$filename1);
            
       
        $img2 = $request->img2;
        $ext2 = $img2->extension();
        $filename2 = time().rand(1111,9999).".".$ext2;
        $img2->move(public_path('uploads/product/'),$filename2);
        
        $img3 = $request->img3;
        $ext3 = $img3->extension();
        $filename3 = time().rand(1111,9999).".".$ext3;
        $img3->move(public_path('uploads/product/'),$filename3);
        
        $productname = $request->prodname;
        $prod_desc = $request->proddecs;
        $img1 = $filename1;
        $img2 = $filename2;
        $img3 = $filename3;
        $videourl = $request->videourl;
        $price = $request->price;
        $isactive = $request->radio1;
        $sub_id =  $request->subcat;
        //insert
        $obj = new Product();
        $obj->p_name = $productname; 
        $obj->description = $prod_desc;
        $obj->img1 = $img1;
        $obj->img2 = $img2;
        $obj->img3 = $img3;
        $obj->video_url = $videourl;
        $obj->price = $price;
        $obj->isactive = $isactive;
        $obj->subcat_id = $sub_id;
        $obj->save();
        return redirect('admin/product/addproduct')->with("message","Product Inserted Successfully");
        }
        else
        {
            return redirect('admin/product/addproduct')->with("message","Product Already Exist!");
        }

        
    }
    public function deletepro(Request $request)
    {
        $id = $request->deleteid;
        $image1 = $request->deleteimage1;
        $image2 = $request->deleteimage2;
        $image3 = $request->deleteimage3;
 
         unlink(public_path('/uploads/product/').$image1);
         unlink(public_path('/uploads/product/').$image2);
         unlink(public_path('/uploads/product/').$image3);
 
        Product::where("product_id",$id)->delete();
        return redirect('/admin/product/viewproduct')->with("message","Product Deleted Successfully");
    }
}
