<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Report;

class ReportApiController extends Controller
{
    public function index()
    {
        return response()->json(Report::all());
    }

    public function store(Request $request)
    {
        $report = Report::create($request->all());

        return response()->json([
            'message' => 'Laporan berhasil dibuat',
            'data' => $report
        ]);
    }

    public function show($id)
    {
        return response()->json(
            Report::find($id)
        );
    }

    public function update(Request $request, $id)
    {
        $report = Report::find($id);

        $report->update($request->all());

        return response()->json([
            'message' => 'Laporan berhasil diupdate',
            'data' => $report
        ]);
    }

    public function destroy($id)
    {
        Report::destroy($id);

        return response()->json([
            'message' => 'Laporan berhasil dihapus'
        ]);
    }
}