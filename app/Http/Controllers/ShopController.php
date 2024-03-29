<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index(){

      return view('shop.home')->with('products', Product::all());

    }

    public function show($productId){
      return view('shop.open')->with('product', Product::find($productId));
    }

    public function create()
    {
      return view('shop.createproducts');
    }



//     public function store()
//     {



//        $data = request()->all();

//        $product = new Product();


//        //$imgpath = $this->saveProfileImage($request->file('picture_path'));
// 　

//        $product->name = $data['name'];
//        $product->category = $data['category'];
//        $product->price = $data['price'];
//        $product->description = $data['description'];


//        $imgPath = $data['picture_path']->store('images', 'public');

//        $product->picture_path = $imgPath;


//        $product->save();

//        return redirect('/home');
//     }

    public function destroy($productId)
    {
      $product = Product::find($productId);

      $product->delete();

      return redirect('/home');
    }

    public function find(Request $request) //検索の際に使用するfing関数
    {
      return view('shop.find')->with('products', Product::where('name', 'like' , "%{$request->name}%")->get());
      
    }
    public function intro()
    {
      return view('shop.intro');
    }

    public function explain()
    {
      return view('shop.explain');
    }
}
