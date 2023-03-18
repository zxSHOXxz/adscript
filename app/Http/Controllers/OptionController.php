<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Oquestion;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $options = Option::with('oquestion')->get();
        return view('cms.options.index', compact('options'));
    }
    public function indexOqOp($id)
    {
        $options = Option::with('oquestion')->where('oquestions_id', $id)->get();
        return view('cms.options.index', compact('options'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $oquestions = Oquestion::all();
        return view('cms.options.create', compact('oquestions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'content' => 'required',
            'oquestion_id' => 'required',
        ], [
            'content.required' => ' قيمة حقل المحتوى مطلوبة ',
            'oquestion_id.required' => ' قيمة حقل السؤال مطلوبة ',
        ]);
        if (!$validator->fails()) {
            $option = new Option();
            $option->content = $request->get('content');
            $option->oquestions_id = $request->get('oquestion_id');
            $isSaved = $option->save();
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
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Option $option)
    {
        $oquestions = Oquestion::all();

        return view('cms.options.edit', compact('option', 'oquestions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = validator($request->all(), [
            'content' => 'required',
            'oquestion_id' => 'required',
        ], [
            'content.required' => ' قيمة حقل المحتوى مطلوبة ',
            'oquestion_id.required' => ' قيمة حقل السؤال مطلوبة ',
        ]);
        if (!$validator->fails()) {
            $option = Option::findOrFail($id);
            $option->content = $request->get('content');
            $option->oquestions_id = $request->get('oquestion_id');
            $isSaved = $option->save();
            if ($isSaved) {
                return ['redirect' => route('options.index')];
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
        $option = Option::destroy($id);
        return response()->json(['icon' => 'success', 'title' => 'Deleted is Successfully'], $option ? 200 : 400);
    }
}
