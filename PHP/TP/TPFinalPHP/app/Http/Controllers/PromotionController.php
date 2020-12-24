<?php

namespace App\Http\Controllers;

use App\Module;
use App\Student;
use App\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input("search");
        if ($search) {
            $promotions = Promotion::where('nom', 'like', '%' . $search . '%')->get();
        } else {
            $promotions = Promotion::all();
        }

        return view("promotions.index", ['promotions' => $promotions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules = Module::all();
        $students = Student::all();
        return view("promotions.create", ['modules' => $modules, 'students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promotion = new Promotion;
        $nom = $request->input("nom");
        $specialite = $request->input('specialite');
        $promotion->nom = $nom;
        $promotion->specialite = $specialite;
        $promotion->save();
        $students = $request->input('students');
        foreach ($students ?? [] as $student_id) {
            $student = Student::find($student_id);
            $student->promotion_id = $promotion->id;
            $student->save();
        }
        $promotion->modules()->attach($request->input('modules'));
        return redirect()->route('promotions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion $promotion, Module $modules, Student $students)
    {
        $modules = Module::all();
        $students = Student::all();
        return view('promotions.show', ['promotion' => $promotion], ['modules' => $modules], ['students' => $students]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        $modules = Module::all();
        return view('promotions.edit', ['promotion' => $promotion, 'modules' => $modules]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promotion $promotion)
    {
        $nom = $request->input("nom");
        $specialite = $request->input('specialite');
        $promotion->nom = $nom;
        $promotion->specialite = $specialite;
        $promotion->modules()->detach();
        $promotion->modules()->attach($request->input("modules"));
        $promotion->save();
        return redirect()->route('promotions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promotion)
    {
        $promotion->modules()->detach();
        $promotion->delete();
        return redirect()->route('promotions.index');
    }
}
