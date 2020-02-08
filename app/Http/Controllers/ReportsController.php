<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Http\Requests\ReportUpdateRequest;
use App\Http\Requests\ReportCreateRequest;

class ReportsController extends Controller
{
    public function __construct()
	{
        $this->middleware('auth:api');
	}
    public function index()
    {
        return Report::paginate(50);
    }

    public function store(ReportCreateRequest $request)
    {
        return Report::create($request->all());
    }

    public function show(Report $report)
    {
        return $report;
    }

    public function update(ReportUpdateRequest $request, Report $report)
    {
        return $report->update($request->all());
    }

    public function destroy(Report $report)
    {
        return $report->delete();
    }
}
