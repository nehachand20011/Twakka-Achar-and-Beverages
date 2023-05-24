<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }
    public function getManageCategory()
    {
        $data =[
            'categories' => Category::all() 

        ];

        return view ('admin.category.manage', $data);
    }
    public function postAddCategory( Request $request)//form ko photo title taneko 
    {
        $title=$request->input('title');
        $photo = $request->file('photo');

        if($photo){
            $getPhotoname = sha1(time());
            $getPhotoExtensin = $photo->getClientOriginalExtension();
            $getrealPhotoname = $getPhotoname . '.' . $getPhotoExtensin;
            $photo->move('site/category/', $getrealPhotoname); 
        }
        else{
            $getrealPhotoname = Null;
        }

        $category = New Category;
        $category->title = $title;
        $category->photo = $getrealPhotoname;
        $category->save();
        return redirect()->back()->with('message', 'Category Added Successfully')->with('message', 'Category Added!!!');
    }
    public function getEditCategory( Category $categoryid){
        $data=[
            'categorydata'=>$categoryid

        ];
        return view('admin.category.edit',$data);
    } 
    public function postEditCategory(Request $request, Category $categoryid){
        $title=$request->input('title');
        $photo = $request->file('photo');

        if($photo){
            $getPhotoname = sha1(time());
            $getPhotoExtensin = $photo->getClientOriginalExtension();
            $getrealPhotoname = $getPhotoname . '.' . $getPhotoExtensin;
            $photo->move('site/category/', $getrealPhotoname);

            $categoryid->title = $title;
            $categoryid->photo = $getrealPhotoname; 
            $categoryid->save(); 
        }
        else{
           $categoryid->title = $title;
            $categoryid->save();
        }
        return redirect()->route('getManageCategory')->with('message', 'Category Edit Successfully');
    }
    public function getDeleteCategory( Category $categoryid){
        if($categoryid->photo != Null){
            unlink('site/category/'.$categoryid->photo);
        }
        $categoryid->delete();
        return redirect()->back()->with('message', 'Category Delete Sucess');
    }
    //Product ko lagi
    public function getManageProduct()
    {
        $data =[
            'products' => product::all(),
            'categories' => Category::all() 

        ];
        return view('admin.product.manage', $data);
    }
    public function postAddProduct(Request $request){
         $title=$request->input('title');
         $detail=$request->input('detail');
         $category = $request->input('category');
         $cost=$request->input('cost');
         $photo = $request->file('photo');

        if($photo){
            $getPhotoname = sha1(time());
            $getPhotoExtensin = $photo->getClientOriginalExtension();
            $getrealPhotoname = $getPhotoname . '.' . $getPhotoExtensin;
            $photo->move('site/product/', $getrealPhotoname); 
        }
        else{
            $getrealPhotoname = Null;
        }

        $product = New product;
        $product->title = $title;
        $product->category_id = $category;
        $product->detail = $detail;
        $product->cost = $cost;
        $product->photo = $getrealPhotoname;
        $product->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }
    public function getEditProduct(product $product){ 
        $data=[
            'categories'=>Category::all(),
            'product' => $product

        ];
        return view('admin.product.edit',$data);
        
    } 
    public function postEditProduct( Request $request, product $product)
    {
        $title=$request->input('title');
         $detail=$request->input('detail');
         $category = $request->input('category');
         $cost=$request->input('cost');
         $photo = $request->file('photo');

        if($photo){
            $getPhotoname = sha1(time());
            $getPhotoExtensin = $photo->getClientOriginalExtension();
            $getrealPhotoname = $getPhotoname . '.' . $getPhotoExtensin;
            $photo->move('site/product/', $getrealPhotoname); 

            $product->title = $title;
            $product->category_id = $category;
            $product->detail = $detail;
            $product->cost = $cost;
            $product->photo = $getrealPhotoname;
            $product->save();
        }
        else{
            $product->title = $title;
            $product->category_id = $category;
            $product->detail = $detail;
            $product->cost = $cost;
            $product->save();
        }
        return redirect()->route('getManageProduct')->with('message', 'Product Edited Successfully');
    }
    public function getDeleteProduct (product $product){
         if($product->photo != Null){
            unlink('site/product/'.$product->photo);
        }
        $product->delete();
        return redirect()->back()->with('message', 'Product Delete Sucess');
    }
    
    
} 
