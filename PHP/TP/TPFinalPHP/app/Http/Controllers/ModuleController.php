<?php

namespace App\Http\Controllers;

use App\Student;
use App\Module;
use App\Promotion;
use Illuminate\Http\Request;

class ModuleController extends Controller
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
            $modules = Module::where('nom', 'like', '%' . $search . '%')->get();
        } else {
            $modules = Module::all();
        }
        
        return view("modules.index", ['modules' => $modules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("modules.create", ['promotions' => Promotion::all(), 'modules' => Module::all(), 'students' => Student::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $module = new Module;
        $nom = $request->input("nom");
        $description = $request->input('description');
        $module->nom = $nom;
        $module->description = $description;
        $module->save();
        $module->promotions()->attach($request->input('promotions'));
        $module->students()->attach($request->input('students'));
        return redirect()->route('modules.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module, Promotion $promotions, Student $students)
    {
        $promotions = Promotion::all();
        $students = Student::all();
        return view('modules.show', ['promotions' => $promotions], ['module' => $module], ['students' => $students]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        return view('modules.edit', ['module' => $module, 'promotions' => Promotion::all(), 'students' => Student::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        $nom = $request->input("nom");
        $description = $request->input('description');
        $module->nom = $nom;
        $module->description = $description;
        $module->promotions()->detach();
        $module->promotions()->attach($request->input('promotions'));
        $module->students()->detach();
        $module->students()->attach($request->input('students'));
        $module->save();
        return redirect()->route('modules.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        $module->promotions()->detach();
        $module->students()->detach();
        $module->delete();
        return redirect()->route('modules.index');
    }
}
