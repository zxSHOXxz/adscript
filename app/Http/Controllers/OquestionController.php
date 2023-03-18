<?php

namespace App\Http\Controllers;

use App\Models\Oquestion;
use Illuminate\Http\Request;

class OquestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oquestions = Oquestion::withCount('options')->get();
        return view('cms.oquestions.index', compact('oquestions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.oquestions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'content' => 'required',
        ], [
            'content.required' => ' قيمة حقل المحتوى مطلوبة ',
        ]);
        if (!$validator->fails()) {
            $oquestion = new Oquestion();
            $oquestion->content = $request->get('content');
            $isSaved = $oquestion->save();
            if ($isSaved) {
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
    public function show(Oquestion $oquestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oquestion $oquestion)
    {
        return view('cms.oquestions.edit', compact('oquestion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = validator($request->all(), [
            'content' => 'required',
        ], [
            'content.required' => ' قيمة حقل المحتوى مطلوبة ',
        ]);
        if (!$validator->fails()) {

            $oquestion = Oquestion::findOrFail($id);
            $oquestion->content = $request->get('content');
            $isSaved = $oquestion->save();
            if ($isSaved) {
                return ['redirect' => route('oquestions.index')];
                return response()->json(['icon' => 'success', 'title' => "تمت عملية التخزين"], 200);
            } else {
                return response()->json(['icon' => 'error', 'title' => "فشلت عملية التخزين"], 400);
            }
        } else {
            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $oquestion = Oquestion::destroy($id);
        return response()->json(['icon' => 'success', 'title' => 'Deleted is Successfully'], $oquestion ? 200 : 400);
    }
}
