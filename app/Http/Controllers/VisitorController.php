<?php

namespace App\Http\Controllers;

use App\Exports\VisitorsExport;
use App\Models\Answer;
use App\Models\Iquestion;
use App\Models\Option;
use App\Models\Oquestion;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

use function GuzzleHttp\Promise\all;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $iquestions = Iquestion::orderBy('order', 'asc')->get();
        $oquestions = Oquestion::with('options')
            ->orderBy('order', 'asc')->get();
        $options = Option::all();
        $visitors = Visitor::with('answers')
            ->when($request->created_at, function ($query, $value) {
                $startDate = Carbon::parse($value)->startOfDay();
                $endDate = Carbon::now();
                $query->whereBetween('created_at', [$startDate, $endDate]);
            })
            ->orderBy('id', 'desc')
            ->paginate(700);
        $answers = Answer::with('visitor')->get();
        return view('cms.visitors.index', compact('options', 'iquestions', 'answers', 'oquestions', 'visitors'));
    }

    public function export(Request $request)
    {
        $iquestions = Iquestion::orderBy('id', 'asc')->get();
        $oquestions = Oquestion::with('options')->orderBy('id', 'asc')->get();
        $query = Visitor::with('answers')
            ->when($request->created_at, function ($query, $value) {
                $startDate = Carbon::parse($value)->startOfDay();
                $endDate = Carbon::now();
                $query->whereBetween('created_at', [$startDate, $endDate]);
            });
        $export = new VisitorsExport($iquestions, $oquestions);
        $export->setQuery($query);
        return Excel::download($export, 'visitors.xlsx');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Visitor $visitor)
    {
        //
    }
}
