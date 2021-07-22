<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($id_question)
    {        /**->join('users', 'answers.id_user', '=', 'users.id')
        ->select('answers.*', 'users.name')
        ->latest()
        ->get();*/
        //->where('id_question', $id_question )
        $question = DB::table('question')->where('id_question', $id_question )
        ->get();
        $answer = DB::table('answers')->where('id_question', $id_question )->get();
        return view('forum/Answer/index',['answer'=> $answer, 'question'=> $question]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_question)
    {
        //
        $question = DB::table('question')->where('id_question', $id_question )->get();
        return view('forum/Answer/answerTEST', ['question'=> $question]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_question)
    {
        //
        $userid = auth()->user()->id;
        $id_question =  DB::table('question')->where('id_question', $id_question )->value('id_question');
        \App\Models\Answer::create([
            'id_answer'=>$request->get('id_answer'),
            'id_user'=>$userid,
            'judul'=> $request->get('judul'),
            'isi_jawaban'=> $request->get('isi_jawaban'),
            'gambar_jawaban'=> $request->get('gambar_jawaban'),
            'id_question' => $id_question
        ]);
        return redirect()->route('answer', [$id_question]);
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
        $question = DB::table('question')->get() ;
        return view('forum.Answer/edit', ['answer' => $answer, 'question'=> $question]);
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
    public function destroy($id_answer)
    {
        //
        $answer = \App\Models\Answer::find($id_answer);
        $answer -> delete();
        return redirect()->back();
    }
}


