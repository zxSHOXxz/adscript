<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Ad::all();
        return view('cms.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.ads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = validator($request->all(), [
            'place' => 'required',
            'content' => 'required',
        ], [
            'place.required' => ' قيمة حقل المكان مطلوبة ',
            'content.required' => ' قيمة حقل المحتوى مطلوبة ',
        ]);
        if (!$validator->fails()) {
            $ad = new Ad();
            $ad->place = $request->get('place');
            $ad->content = $request->get('content');
            $ad->href = $request->get('href');
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/logo', $imageName);

                $ad->image = $imageName;
            }
            $isSaved = $ad->save();
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
    public function show(Ad $ad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ad $ad)
    {
        return view('cms.ads.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = validator($request->all(), [
            'place' => 'required',
            'content' => 'required',
        ], [
            'place.required' => ' قيمة حقل المكان مطلوبة ',
            'content.required' => ' قيمة حقل المحتوى مطلوبة ',
        ]);
        if (!$validator->fails()) {
            $ad = Ad::findOrFail($id);
            $ad->place = $request->get('place');
            $ad->content = $request->get('content');
            $ad->href = $request->get('href');
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/logo', $imageName);

                $ad->image = $imageName;
            }
            $isSaved = $ad->save();
            if ($isSaved) {
                return ['redirect' => route('ads.index')];
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
        $ad = Ad::destroy($id);
        return response()->json(['icon' => 'success', 'title' => 'Deleted is Successfully'], $ad ? 200 : 400);
    }
}
