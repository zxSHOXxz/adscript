<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Div;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DivController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divs = Div::with('color')->get();
        return view('cms.divs.index', compact('divs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colors = Color::all();
        return view('cms.divs.create', compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'color_id' => 'required',
            'content' => 'required',
            'image' => 'nullable',
            'href' => 'nullable',
            'name' => 'required',
        ], [
            'color_id.required' => ' قيمة حقل اللون مطلوبة ',
            'name.required' => ' قيمة حقل الاسم مطلوبة ',
            'content.required' => ' قيمة حقل المحتوى مطلوب مطلوبة ',
        ]);
        if (!$validator->fails()) {
            $div = new Div();
            $div->color_id = $request->get('color_id');
            $div->name = $request->get('name');
            $div->content = $request->get('content');
            $div->href = $request->get('href');
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/logo', $imageName);

                $div->image = $imageName;
            }
            $isSaved = $div->save();
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
    public function show(Div $div)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $colors = Color::all();
        $div = Div::findOrFail($id);
        return view('cms.divs.edit', compact('div', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Div $div)
    {
        $validator = validator($request->all(), [
            'color_id' => 'required',
            'content' => 'required',
            'image' => 'nullable',
            'href' => 'nullable',
        ], [
            'color_id.required' => ' قيمة حقل اللون مطلوبة ',
            'content.required' => ' قيمة حقل المحتوى مطلوب مطلوبة ',
        ]);
        if (!$validator->fails()) {
            $div->color_id = $request->get('color_id');
            $div->content = $request->get('content');
            $div->href = $request->get('href');
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/logo', $imageName);

                $div->image = $imageName;
            }
            $isSaved = $div->save();
            if ($isSaved) {
                return ['redirect' => route('divs.index')];
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
        $div = Div::destroy($id);
        return response()->json(['icon' => 'success', 'title' => 'Deleted is Successfully'], $div ? 200 : 400);
    }
}
