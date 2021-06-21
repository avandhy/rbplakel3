<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$report = \App\Models\Report::all();
        $report = DB::table('reports')->join('report_categories', 'reports.id_report_categories', '=', 'report_categories.id_report_categories')
                                        ->select('reports.*', 'report_categories.nama_report_categories')
                                        ->get();
        return view('Report/index',['report'=> $report]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $report_categories = DB::table('report_categories')->get();
        return view('Report.report', ['report_categories' => $report_categories]);
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
        \App\Models\Report::create([
            'judul_report'=> $request->get('judul'),
            'deskripsi_report'=> $request->get('deskripsi'),
            'id_report_categories'=> $request->get('idcategories'),
        ]);
        return redirect('/report/create');
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
        $report = \App\Models\Report::find($id);
        $report_categories = DB::table('report_categories')->get();
        return view('Report.edit', ['report' => $report, 'report_categories' => $report_categories]);
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
        $report = \App\Models\Report::find($id);
        $report -> judul_report = $request -> judul;
        $report -> deskripsi_report = $request -> deskripsi;
        $report -> id_report_categories = $request -> idcategories;
        $report -> save();

        return redirect('/report');
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
        $report = \App\Models\Report::find($id);
        $report -> delete();
        return redirect('/report');
    }
}


