<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class StudentController extends Controller
{
    public function index()
    {
        $hocsinh = User::where('role_as', 0)->get();
        return view('admin.hocsinh.index', compact('hocsinh'));
    }
    public function destroy($id)
    {
        $hocsinh = User::find($id);
        $hocsinh->delete();
        return redirect('/student')->with('status', "Successfully");
    }
}
