<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$question = \App\Models\Question::all();
        $question = DB::table('question')->join('users', 'question.id_user', '=', 'users.id')
                                        ->select('question.*', 'users.name')
                                        ->latest()
                                        ->get();
        return view('forum/Question/index',['question'=> $question]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('forum/Question/Question');
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
        $userid = auth()->user()->id;
        \App\Models\Question::create([
            'judul'=> $request->get('judul'),
            'isi_pertanyaan'=> $request->get('isi_pertanyaan'),
            'gambar_pertanyaan'=> $request->get('gambar_pertanyaan'),
            'id_user'=>$userid
        ]);
        return redirect('/forum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_question)
    {
        //
        $question = \App\Models\Question::find($id_question);
        return view('forum/Question/edit', ['question' => $question]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_question)
    {
        //
        $question = \App\Models\question::find($id_question);
        $question -> judul = $request -> judul;
        $question -> isi_pertanyaan = $request -> isi_pertanyaan;
        $question -> save();

        return redirect('/forum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_question)
    {
        //
        $question = \App\Models\Question::find($id_question);
        $question -> delete();
        return redirect('/forum');
    }
}


