<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use PDF;

class AdminController extends Controller
{
    public function ViewCategory (){
        $data = Category::all();


    return view('admin.view_category', compact('data'));

    }
    public function AddCategory(Request $request ){
        $data = new Category;
        $data->category_name= $request->category_name;

        $data->save();

        return redirect()->back()->with('message', 'Category Added successfully');
    }

    public function DeleteCategory($id){
        $data = Category::find($id);

        $data->delete();
        return redirect()->back();

    }

    public function ViewProduct(){
        $category = Category::all();
        return view('admin.add_product', compact('category'));
    }

    public function AddProduct(Request $request){
        $product = new Product;
        $product->tittle=$request->tittle;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount_price=$request->discount_price;
        $product->quantity=$request->quantity;
        $product->category=$request->category;

        $image=$request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product', $imagename);

        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message', 'Product added successfully');
    }

    public function ShowProduct(){
        $product = Product::all();
        return view('admin.show_product', compact('product'));
    }

    public function DeleteProduct($id){
        $product = Product::find($id);

        $product->delete();

        return redirect()->back()->with('message', 'Product Deleted successfully');
    }

    public function UpdateProduct($id){
        $product = Product::find($id);

        $category = Category::all();


        return view('admin.update_product', compact('product', 'category'));
    }

    public function UpdateProductConfirm(Request $request, $id){

        $product = Product::find($id);
        $product->tittle = $request->tittle;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->quantity = $request->quantity;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('product'), $imagename);
            $product->image = $imagename; // Save the new image name
        }

        $product->save();

        return redirect()->back();

    }

    public function Order(){
        $order = Order::all();

        return view('admin.order', compact('order'));

    }

    public function Delivered($id){
        $order = Order::find($id);

        $order->delivery_status = 'Delivered';
        $order->payment_status = 'Paid';

        $order->save();

        return redirect()->back();
    }

    public function PrintPdf($id){
        $order = Order::find($id);
        $pdf = PDF::loadView('admin.pdf', compact('order'));
        return $pdf->download('order_details.pdf');
    }
}
