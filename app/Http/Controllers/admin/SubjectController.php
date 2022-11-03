<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subject = Subject::all();
        return view('admin.subject.index', compact('subject'));
    }
    public function add()
    {
        return view('admin.subject.add');
    }
    public function insert(Request $request)
    {
        $subject = new Subject();
        $subject->name = $request->input('name');
        $subject->save();
        return redirect('/admin-subject')->with('status', "Successfully");
    }
    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('admin.subject.edit', compact('subject'));
    }
    public function update(Request $request, $id)
    {
        $subject = Subject::find($id);
        $subject->name = $request->input('name');
        $subject->update();
        return redirect('/admin-subject')->with('status', "Successfully");
    }
    public function destroy($id)
    {
        $subject = Subject::find($id);

        $subject->delete();
        return redirect('/admin-subject')->with('status', "Successfully");
    }
}
