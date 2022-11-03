<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Grades;
use App\Models\GradesStudent;
use App\Models\Kurasu;
use App\Models\Subject;
use App\Models\TypeOfGrades;
use App\Models\User;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function index()
    {
        $grades = Grades::all();
        return view('admin.grades.index', compact('grades'));
    }
    public function add()
    {
        $kurasu = Kurasu::all();
        $subject = Subject::all();
        return view('admin.grades.add', compact('kurasu', 'subject'));
    }
    public function form(Request $req)
    {
        $kurasu_id = $req->get('kurasu_id');
        $subject_id = $req->get('subject_id');
        $students = User::where('kurasu_id', $kurasu_id)->get();
        $kurasu = Kurasu::all();
        $subject = Subject::all();
        $type = TypeOfGrades::all();
        return view('admin.grades.add', compact('kurasu', 'type', 'subject', 'students', 'kurasu_id', 'subject_id'));
    }
    public function insert(Request $req)
    {
        $grades = new Grades();
        $grades->kurasu_id = $req->get('kurasu_id');
        $grades->subject_id = $req->get('subject_id');
        $grades->type_id = $req->get('type_id');
        $grades->save();
        $result = $req->get('result');
        foreach ($result as $user_id => $result) {
            $gradesstudent = new GradesStudent();
            $gradesstudent->grades_id = $grades->id;
            $gradesstudent->user_id = $user_id;
            $gradesstudent->result = $result;
            $gradesstudent->save();
        }
        return redirect('/admin-grades')->with('status', "Successfully");
    }
    public function edit(Request $req, $id)
    {
        $grades = Grades::find($id);
        $kurasu = Kurasu::all();
        $subject = Subject::all();
        $kurasu_id = $req->get('kurasu_id');
        $subject_id = $req->get('subject_id');
        $type = TypeOfGrades::all();
        $students = User::where('kurasu_id', $grades->kurasu_id)->get();
        $result = [];
        $gradesstudent = GradesStudent::where('grades_id', $grades->id)->get();
        foreach ($gradesstudent as $item) {
            $result[$item->user_id] = $item->result;
        }
        return view('admin.grades.edit', compact('grades', 'type', 'gradesstudent', 'kurasu', 'subject', 'students', 'kurasu_id', 'subject_id', 'result'));
    }
    public function update(Request $req, $id)
    {
        $grades = Grades::find($id);
        $grades->type_id = $req->get('type_id');
        $grades->update();
        $result = $req->get('result');
        GradesStudent::where('grades_id', $grades->id)->delete();
        foreach ($result as $user_id => $result) {
            $gradesstudent = new GradesStudent();
            $gradesstudent->grades_id = $grades->id;
            $gradesstudent->user_id = $user_id;
            $gradesstudent->result = $result;
            $gradesstudent->save();
        }
        return redirect('/admin-grades')->with('status', "Successfully");
    }
}
