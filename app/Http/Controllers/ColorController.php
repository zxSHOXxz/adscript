<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::all();
        return view('cms.colors.index' , compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'color_number' => 'min:4|required',
        ], [
            'color_number.min' => 'يجب ان تدخل قيمة لون',
            'color_number.required' => 'قيمة اللون مطلوبة',
        ]);
        if (!$validator->fails()) {
            $orders = new Color();
            $orders->color_number = $request->get('color_number');
            $isSaved = $orders->save();
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
    public function show(Color $color)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $color = Color::findOrFail($id);
        return view('cms.colors.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Color $color)
    {
        $validator = validator($request->all(), [
            'color_number' => 'min:4|required',
        ], [
            'color_number.min' => 'يجب ان تدخل قيمة لون',
            'color_number.required' => 'قيمة اللون مطلوبة',
        ]);
        if (!$validator->fails()) {
            $color->color_number = $request->get('color_number');
            $isSaved = $color->save();
            if ($isSaved) {
                return ['redirect' => route('color.index')];
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
        $color = Color::destroy($id);
        return response()->json(['icon' => 'success', 'title' => 'Deleted is Successfully'], $color ? 200 : 400);
    }
}
