<?php

namespace App\Http\Controllers;

use App\Models\Iquestion;
use App\Models\Oquestion;
use App\Models\Visitor;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iquestions = Iquestion::orderBy('id', 'asc')->get();
        $oquestions = Oquestion::with('options')->orderBy('id', 'asc')->get();
        $visitors = Visitor::with('answers')->orderBy('id', 'desc')->get();
        // $visitors = Visitor::with(['answers' => function ($query) {
        //     $query->where('oquestion_id', '!=' , '1');
        // }])->get();
        return view('cms.visitors.index', compact('iquestions', 'oquestions', 'visitors'));
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
