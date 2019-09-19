<?php

namespace App\Http\Controllers;

use App\Category;
use App\Blog;
use Illuminate\Http\Request;

use App\Http\Requests;

class Blogcn extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
      $get  = Blog::All();
      return view ('tampil')->withBlog($get);
    }

    public function readmore()
    {
      $get  = Blog::All();
      return view ('tampil')->withBlog($get);
    }


    public function get1()
    {
      $get  = Blog::All();
      $kate = Category::All();
      return view ('article')->withBlog($get)
                             ->withKate($kate);
    }

    public function get2()
    {
        $kategori = Category::All();
        return view('tambah')->withKategori($kategori);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $simpan = new Blog;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        $tambah = new Blog;
        $tambah->judul      = $request->judul; 
        $tambah->deskripsi  = $request->deskripsi;
        $tambah->id_kategori = $request->id_kategori;
        $tambah->author = $request->author;
        $file = $request->file('foto');
        $ext = $file->getClientOriginalName('foto');
        $file->move('img/', $ext);
        $tambah->foto = $ext;
        $tambah->save();
        return redirect('tampil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $view = Blog::find($id);
        $kate = Category::all();
        return view('edit')->withData($view)
                           ->withKate($kate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $view = Blog::find($request->id);
        $view->judul      = $request->judul; 
        $view->deskripsi  = $request->deskripsi;
        $view->id_kategori = $request->id_kategori;
        $view->author = $request->author;
        $file = $request->foto;
        $ext = $file->getClientOriginalName();
        $file->move('img/', $ext);
        $view->foto = $ext;
        $view->save();
        return redirect('tampil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Blog::find($id);
        $del->delete();
        return back();
    }
}
