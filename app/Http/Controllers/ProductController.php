<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;


class ProductController extends Controller
{


    public function delete($id){
        Product::find($id)->where('id', $id)->delete();
         return redirect()->back();
     }

     public function edit($id){
         $tasks = Product :: all()->sortBy("name");
         $task = Product :: find($id);

         return view('Products', compact('Product', 'Products'));
     }

     public function update(Request $request, $id){
         $task = Product :: where('id',$id)->update(['name' => $request->name]);

         return redirect('');
     }
}

