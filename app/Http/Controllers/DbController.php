<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\FILE;



class DbController extends Controller
{
    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->route('admin_view')->with('success','deleted');
    }
    public function admin_view_edit($id)
    {
        $product=product::find($id);
        return view('admin_view_edit',compact('product'));

    }
    public function update($id,Request $request)
    {
        $request->validate([
            'product_name'=>'required',
            'product_detail'=>'required',
            'image'=>'mimes:jpeg,jpg,png,gif|max:2048',

            'product_price'=>'required',
            'discount'=>'required',
        ]);
        $data=Product::find($id);
        $data->product_name=$request->input('product_name');
        $data->product_detail=$request->input('product_detail');
        $data->product_price=$request->input('product_price');
        $data->discount=$request->input('discount');
        if($request->hasFile('image')){
            $path='asset/storage/images/'.$data->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $fileName=time().$request->file('image')->getClientoriginalName();
            $path=$request->file('image')->storeAS('images',$fileName,'public');
            $datas["image"]='/storage/'.$path;
            $data->image=$fileName;
            $data->update();
        }
           $data->update();     
        return redirect()->route('admin_view')->with('success','updated');
    }
    }
