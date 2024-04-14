<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function show()
    {
        return view('students.index');
    }
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'birthday' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'grade' => 'required',
            'literal' => 'required',
        ]);
        Student::create($validatedData);
        $message = 'Студент успешно добавлен!';

        // Перенаправляю пользователя на страницу, где я хочу отобразить сообщение
        return redirect()->route('student.create')->with('message', $message);
    }
    public function destroy (Student $student)
    {
        $student->delete();
        $message = 'Студент успешно удален!';
        return redirect()->route('student.index')->with('message', $message);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
           'name'=>'required',
           'surname'=>'required',
           'birthday'=>'required',
           'age'=>'required',
           'phone'=>'required',
           'address'=>'required',
           'grade'=>'required',
           'literal'=>'required',
        ]);
        $student = Student::find($id);
        $student->update($request->all());
        $message='Данные студента изменены!';
        return redirect()->route('student.create')->with('message', $message);
    }
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }


}
