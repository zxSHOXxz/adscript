<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\NavItem;
use Illuminate\Http\Request;

class NavItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = NavItem::all();
        return view('cms.navitems.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colors = Color::all();
        return view('cms.navitems.create', compact('colors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'content' => 'required',
            'background' => 'required',
            'color' => 'required',
            'href' => 'required',
        ], [
            'content.required' => ' قيمة حقل المحتوى مطلوبة ',
        ]);
        if (!$validator->fails()) {
            $item = new NavItem();
            $item->content = $request->get('content');
            $item->background = $request->get('background');
            $item->color = $request->get('color');
            $item->href = $request->get('href');
            $isSaved = $item->save();
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
    public function show(NavItem $navItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = NavItem::findOrFail($id);
        $colors = Color::all();
        return view('cms.navitems.edit', compact('colors', 'item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = validator($request->all(), [
            'content' => 'required',
            'background' => 'required',
            'color' => 'required',
            'href' => 'required',
        ], [
            'content.required' => ' قيمة حقل المحتوى مطلوبة ',
        ]);
        if (!$validator->fails()) {
            $item = NavItem::findOrFail($id);
            $item->content = $request->get('content');
            $item->background = $request->get('background');
            $item->color = $request->get('color');
            $item->href = $request->get('href');
            $isSaved = $item->save();
            if ($isSaved) {
                return ['redirect' => route('navitems.index')];
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
        $item = NavItem::destroy($id);
        return response()->json(['icon' => 'success', 'title' => 'Deleted is Successfully'], $item ? 200 : 400);
    }
}
