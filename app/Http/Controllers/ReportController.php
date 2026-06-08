<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();

        return view('reports.index', compact('reports'));
    }

    public function create()
    {
        return view('reports.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'title' => 'required',

            'description' => 'required',

            'location' => 'required'

        ]);

        Report::create($request->all());

        return redirect('/reports')
            ->with('success', 'Laporan berhasil dibuat');
    }

    public function edit($id)
    {
        $report = Report::find($id);

        return view('reports.edit', compact('report'));
    }

    public function update(Request $request, $id)
    {
        $report = Report::find($id);

        $report->update($request->all());

        return redirect('/reports')
            ->with('success', 'Laporan berhasil diupdate');
    }

    public function destroy($id)
    {
        $report = Report::find($id);

        $report->delete();

        return redirect('/reports')
            ->with('success', 'Laporan berhasil dihapus');
    }
}