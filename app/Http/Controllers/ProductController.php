<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;

class ProductController extends Controller
{
    public function createproduct(Request $req)
    {
        $req->validate([
            'pimages' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$req->pimages->extension();  
     
        $req->pimages->storeAs('public/images', $imageName);

        // foreach ($req->file('pimages') as $index => $item) {
        //     $path = $req->files[$index]->storeAs('public/images');
        // }

        $addproduct= new product;
        $addproduct->pname=$req->pname;
        $addproduct->unittype=$req->unittype;
        $addproduct->pcategory=$req->pcategory;
        $addproduct->pimages=$imageName;
      
        $addproduct->pprice=$req->pprice;
        $addproduct->dpercentage=$req->dpercentage;
        $addproduct->damount=$req->damount;
        $addproduct->dfdate=$req->dfdate;
        $addproduct->dtdate=$req->dtdate;
        $addproduct->tpercentage=$req->tpercentage;
        $addproduct->tamount=$req->tamount;
        $addproduct->seqty=$req->seqty;
        $addproduct->create=$req->create;
        $addproduct->save();
        // return $req->all();
        return view('allproduct');
    }

    public function viewproduct(){
        $allproduct=product::get();
        return view('allproduct',['allproduct'=>$allproduct]);
    }

    public function getproductid($id)
    {
        $getid=product::find($id);
        return response()->json($getid);
    }

    
    public function destroyproduct($id){
   
        $deleteproduct=product::find($id);
        $deleteproduct->delete();
        // return response()->json([
        //     'success' => 'Product deleted successfully!'
        // ]);
        return view('allproduct');
    }
}
