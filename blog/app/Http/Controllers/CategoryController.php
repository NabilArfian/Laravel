<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
    public function index(){
		return Category::all();
	}

	//create (menyimpan data)
	public function create(request $request){
		$category = new Category;
		$category->nama = $request->nama;
		$category->save();

		return "Data Berhasil Masuk";
	}

	//update (mengubah data)
	public function update(request $request, $id){
		$nama = $request->nama;

		$category = Category::find($id);
		$category->nama = $request->nama;
		$category->save();

		return "Data Berhasil di Update";
	}

	//delete (menghapus data)
	public function delete($id){
		$category = Category::find($id);
		$category->delete();

		return "Data Berhasil di Hapus";
	}
}
