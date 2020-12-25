<?php

namespace App\Http\Controllers;

use App\Student;
use App\Module;
use App\Promotion;
use Illuminate\Http\Request;

class StudentController extends Controller
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
            $students = Student::where('nom', 'like', '%' . $search . '%')
            ->orwhere('prenom', 'like', '%' . $search . '%')
            ->orwhere('email', 'like', '%' . $search . '%')
            ->get();
        } else {
            $students = Student::all();
            $promotions = Promotion::all();
        }

        return view("students.index", ['students' => $students, 'promotions' => $promotions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("students.create", ['promotions' => Promotion::all(), 'modules' => Module::all(), 'students' => Student::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student();
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');
        $promotion_id = $request->input('promotion_id');
        $student->nom = $nom;
        $student->prenom = $prenom;
        $student->email = $email;
        $student->promotion_id = $promotion_id;
        $student->save();
        $student->modules()->attach($request->input('modules'));
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student, Promotion $promotions, Module $modules)
    {
        $modules = Module::all();
        $promotions = Promotion::all();
        return view ('students.show', ['student' => $student], ['modules' => $modules], ['promotions' => $promotions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', ['student' => $student, 'promotions' => Promotion::all(), 'modules' => Module::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $email = $request->input('email');
        $promotion_id = $request->input('promotion_id');
        $student->nom = $nom;
        $student->prenom = $prenom;
        $student->email = $email;
        $student->promotion_id = $promotion_id;
        $student->save();
        $student->modules()->attach($request->input('modules'));
        $student->modules()->detach();
        $student->modules()->attach($request->input('modules'));
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->modules()->detach();
        $student->delete();
        return redirect()->route('students.index');
    }
}
