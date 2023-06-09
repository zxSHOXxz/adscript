<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $texts = Text::with('color')->get();
        return view('cms.texts.index', compact('texts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colors = Color::all();
        return view('cms.texts.create', compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'color_id' => 'required',
            'content' => 'required',
        ], [
            'color_id.required' => ' قيمة حقل المكان مطلوبة ',
            'content.required' => ' قيمة حقل المحتوى مطلوبة ',
        ]);
        if (!$validator->fails()) {
            $text = new Text();
            $text->color_id = $request->get('color_id');
            $text->content = $request->get('content');
            $text->name = $request->get('name');
            $isSaved = $text->save();
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
    public function show(Text $text)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $colors = Color::all();
        $text = Text::findOrFail($id);
        return view('cms.texts.edit', compact('text', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Text $text)
    {
        $validator = validator($request->all(), [
            'color_id' => 'required',
            'content' => 'required',
            'name' => 'required',
        ], [
            'color_id.required' => ' قيمة حقل المكان مطلوبة ',
            'content.required' => ' قيمة حقل المحتوى مطلوبة ',
            'name.required' => ' قيمة حقل الاسم مطلوبة ',
        ]);
        if (!$validator->fails()) {
            $text->color_id = $request->get('color_id');
            $text->content = $request->get('content');
            $text->name = $request->get('name');
            $isSaved = $text->save();
            if ($isSaved) {
                return ['redirect' => route('texts.index')];
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
        $text = Text::destroy($id);
        return response()->json(['icon' => 'success', 'title' => 'Deleted is Successfully'], $text ? 200 : 400);
    }
}
