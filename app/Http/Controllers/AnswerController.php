<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $answer = \App\Models\Answer::all();
        return view('Answer/index',['answer'=> $answer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Answer/answer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        \App\Models\Answer::create([
            'judul'=> $request->get('judul'),
            'isi_jawaban'=> $request->get('isi_jawaban'),
            'gambar_jawaban'=> $request->get('gambar_jawaban')
        ]);
        return redirect('/answer');
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
        //
        $answer = \App\Models\Answer::find($id);
        return view('Answer/edit', ['answer' => $answer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $answer = \App\Models\Answer::find($id);
        $answer -> judul = $request -> judul;
        $answer -> isi_jawaban = $request -> isi_jawaban;
        $answer -> save();

        return redirect('/answer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $answer = \App\Models\Answer::find($id);
        $answer -> delete();
        return redirect('/answer');
    }
}


