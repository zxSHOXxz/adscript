<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Answer;
use App\Models\Country;
use App\Models\Div;
use App\Models\Iquestion;
use App\Models\NavItem;
use App\Models\Oquestion;
use App\Models\Text;
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
        $oquestions = Oquestion::where('status', 'active')->orderBy('order', 'asc')->get();
        $iquestions = Iquestion::where('status', 'active')->orderBy('order', 'asc')->get();
        $items = NavItem::all();
        $divs = Div::all();
        $texts = Text::all();
        $ads = Ad::all();
        $contries = Country::orderBy('name', 'asc')->get();
        return view('front.index', compact('contries', 'oquestions', 'iquestions', 'divs', 'items', 'texts', 'ads'));
    }

    public function final()
    {
        $divs = Div::all();
        return view('front.final', compact('divs'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function dashboard()
    {
        return view('cms.dashboard.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = validator(
            $request->all(),
            [
                'iquestion4' => 'numeric|min:10|max:15',
            ],
            [
                'iquestion4.numeric' => 'يجب ان يتكون رقم الهاتف من ارقام',
                'iquestion4.min' => 'يجب ان يتكون رقم الهاتف على الاقل من 10 ارقام',
                'iquestion4.max' => 'يجب ان يتكون رقم الهاتف على الاكثر من 15 ارقام'
            ]
        );
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
                        $question = Iquestion::findOrFail($number);
                        $answer->question()->associate($question);
                        $answer->visitor_id = $visitor->id;
                        $isSaved = $answer->save();
                    } elseif ($oquestion) {
                        $number = Str::remove('oquestion', $key);
                        $answer = new Answer();
                        $answer->content = $value;
                        $question = Oquestion::findOrFail($number);
                        $answer->question()->associate($question);
                        $answer->visitor_id = $visitor->id;
                        $isSaved = $answer->save();
                    }
                }
                return response()->json(['icon' => 'warning', 'title' => "يجب عليك تطبيق الشروط حتى يتم ارسال الطلب"], 200);
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
