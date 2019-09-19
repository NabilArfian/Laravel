<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Galeri;
use Excel;

class MaatwebsiteDemoController extends Controller
{
    public function last(){
        $products = Product::get();
        return view('products', compact('products'));
    }

    public function productsImport(Request $request){
        if($request->hasFile('products')){
            $path = $request->file('products')->getRealPath();
            $data = \Excel::load($path)->get();
            if($data->count()){

                foreach ($data as $key => $value) {
                    //print_r($value);
                    $product_list[] = ['name' => $value->name, 'description' => $value->description, 'price' => $value->price];
                }
                if(!empty($product_list)){
                    Product::insert($product_list);
                    \Session::flash('success','File improted successfully.');
                }
            }
        }else{
        	\Session::flash('warnning','There is no file to import');
        }
        return Redirect::back();
    } 


    public function galeriExport($type){
        $galeri = Galeri::select('id','gambar','author','created_at','updated_at')->get()->toArray();
        return \Excel::create('Galeri', function($excel) use ($galeri) {
            $excel->sheet('Galeri', function($sheet) use ($galeri)
            {
                $sheet->fromArray($galeri);
            });
        })->download($type);
    }

}
?>