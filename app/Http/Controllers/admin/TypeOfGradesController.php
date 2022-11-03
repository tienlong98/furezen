<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TypeOfGrades;
use Illuminate\Http\Request;

class TypeOfGradesController extends Controller
{
    public function index()
    {
        $type = TypeOfGrades::all();
        return view('admin.type_of_grades.index', compact('type'));
    }
    public function add()
    {
        return view('admin.type_of_grades.add');
    }
    public function insert(Request $request)
    {
        $type = new TypeOfGrades();
        $type->name = $request->input('name');
        $type->save();
        return redirect('/admin-type')->with('status', "Successfully");
    }
    public function edit($id)
    {
        $type = TypeOfGrades::find($id);
        return view('admin.type_of_grades.edit', compact('type'));
    }
    public function update(Request $request, $id)
    {
        $type = TypeOfGrades::find($id);
        $type->name = $request->input('name');
        $type->update();
        return redirect('/admin-type')->with('status', "Successfully");
    }
    public function destroy($id)
    {
        $type = TypeOfGrades::find($id);

        $type->delete();
        return redirect('/admin-type')->with('status', "Successfully");
    }
}
