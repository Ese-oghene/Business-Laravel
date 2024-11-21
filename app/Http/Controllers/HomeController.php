<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{

    public function index(){
        $product = Product::paginate(3);

        return view("home.userpage", compact('product'));
       }

   public function redirect(){
    $usertype = Auth::user()->usertype;

    if ($usertype == '1') {
      // return view('admin.home');
      return view('admin.admin_profile');
    }
    else {
        $product = Product::paginate(3);
        return view('home.userpage', compact('product'));
    }
   }

   public function ProductDetails($id){

        $product= Product::find($id);

        return view('home.product_details', compact('product'));
   }

   public function AddCart(Request $request,$id){
    if (Auth::id()) {
      
       $user = Auth::user();
      // dd($user);
      $product = Product::find($id);

      $cart = new Cart;
      $cart->name = $user->name;
      $cart->email = $user->email;
      $cart->phone = $user->phone;
      $cart->address = $user->address;
      $cart->user_id = $user->id;

      $cart->product_tittle = $product->tittle;

      if ($product->discount_price !=null) {
        $cart->price = $product->discount_price * $request->quantity;
      }
      else{
        $cart->price = $product->price * $request->quantity;
      }

      $cart->image = $product->image;
      $cart->product_id = $product->id;
      $cart->quantity = $request->quantity;

      $cart->save();

      return redirect()->back();

    }

    else{
        return redirect('login');
    }

   }

   public function ShowCart(){
      //check if the user is login
      if (Auth::id()) {
        $id = Auth::user()->id;
      $cart = Cart::where('user_id','=', $id)->get();

      return view('home.showcart', compact('cart'));
      }
      else {
        return redirect('login');
      }
     
   }

   public function RemoveCart($id){
    $cart = Cart::find($id);

    $cart->delete();

    return redirect()->back();
    
   }

   public function CashOder(){
    $user = Auth::user();
    $userid = $user->id;
    //dd($userid);

    $data = Cart::where('user_id', '=', $userid)->get();
    // dd($data);
    foreach ($data as $data) {
     $order = new Order;
     $order->name = $data->name;
     $order->email = $data->email;
     $order->phone = $data->phone;
     $order->address = $data->address;
     $order->user_id = $data->user_id;
     $order->product_tittle = $data->product_tittle;
     $order->price = $data->price;
     $order->quantity = $data->quantity;
     $order->image = $data->image;
     $order->product_id = $data->product_id;
     $order->payment_status = 'cash on delivery';
     $order->delivery_status ='processing';

     $order->save();

     $cart_id = $data->id;
     $cart = Cart::find($cart_id);
     $cart->delete();
            
    }
    return redirect()->back()->with('message', 'We received your order. We connect with you soon');


   }

}
