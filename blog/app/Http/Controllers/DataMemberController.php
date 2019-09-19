<?php

namespace App\Http\Controllers;

use App\Member;
use App\Blogs;
use Illuminate\Http\Request;
use App\Http\Requests;

class DataMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response    
     */

     public function simpan(){
        $simpan = Blogs::all();
        $save = Member::all();
         return view('create')->withMember($simpan)
                              ->withJenis($save);
     }

    public function getData()
    {
      $get  = Blogs::All();
      $member = Member::All();
      return view ('index')->withMember($get)
                           ->withMob($member);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function proses_simpan(Request $request)
    {
        $member = new Blogs;
        $member->nama = $request->nama;
        $member->member = $request->member;
        $member->tanggal = $request->tanggal;
        $member->email = $request->email;
        $member->save();
        return redirect('member');
    }

    public function jenis(){
        $jenis = Member::all();
        return view('create')->withJenis($jenis);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $member = Blogs::find($id);
        $mob = Member::all();
        return view('ubah')->withMbr($member)
                           ->withMrr($mob);
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
        $member = Blogs::find($request->id);
        $member->nama = $request->nama;
        $member->member = $request->member;
        $member->tanggal = $request->tanggal;
        $member->email = $request->email;
        $member->save();
        return redirect('/member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {   
        $member = Blogs::find($id);
        $member->delete();
        return back();
    }
}
