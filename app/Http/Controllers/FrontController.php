<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Iquestion;
use App\Models\Oquestion;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oquestions = Oquestion::all();
        $iquestions = Iquestion::all();
        return view('front.index', compact('oquestions', 'iquestions'));
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
        $data = $request->all();
        $validator = validator($request->all(), [], []);
        if (!$validator->fails()) {
            $visitor = new Visitor();
            $visitor->ip_address = $request->ip();
            $isSaved = $visitor->save();
            if ($isSaved) {
                foreach ($data as $key => $value) {
                    $iquestion = Str::contains($key, 'iquestion');
                    $oquestion = Str::contains($key, 'oquestion');
                    if ($iquestion) {
                        $number = Str::remove('iquestion', $key);
                        $answer = new Answer();
                        $answer->content = $value;
                        $answer->iquestion_id = $number;
                        $answer->oquestion_id = 1;
                        $answer->visitor_id = $visitor->id;
                        $isSaved = $answer->save();
                    } elseif ($oquestion) {
                        $number = Str::remove('oquestion', $key);
                        $answer = new Answer();
                        $answer->content = $value;
                        $answer->oquestion_id = $number;
                        $answer->iquestion_id = 1;
                        $answer->visitor_id = $visitor->id;
                        $isSaved = $answer->save();
                    }
                }
                return response()->json(['icon' => 'success', 'title' => "تمت عملية التخزين"], 200);
            } else {
                return response()->json(['icon' => 'error', 'title' => "فشلت عملية التخزين"], 400);
            }
        } else {
            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
