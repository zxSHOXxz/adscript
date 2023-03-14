<?php

namespace App\Http\Controllers;

use App\Models\Iquestion;
use Illuminate\Http\Request;

class IquestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iquestions = Iquestion::all();
        return view('cms.iquestions.index', compact('iquestions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.iquestions.create');
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
            $iquestion = new Iquestion();
            $iquestion->content = $request->get('content');
            $isSaved = $iquestion->save();
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
    public function show(Iquestion $iquestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Iquestion $iquestion)
    {
        return view('cms.iquestions.edit', compact('iquestion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Iquestion $iquestion)
    {
        $validator = validator($request->all(), [
            'content' => 'required',
        ], [
            'content.required' => ' قيمة حقل المحتوى مطلوبة ',
        ]);
        if (!$validator->fails()) {
            $iquestion->content = $request->get('content');
            $isSaved = $iquestion->save();
            if ($isSaved) {
                return ['redirect' => route('iquestions.index')];
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
        $iquestion = Iquestion::destroy($id);
        return response()->json(['icon' => 'success', 'title' => 'Deleted is Successfully'], $id ? 200 : 400);
    }
}
