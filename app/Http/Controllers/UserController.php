<?php

namespace App\Http\Controllers;

use App\Models\AttendanceStudent;
use App\Models\Grades;
use App\Models\GradesStudent;
use App\Models\Kurasu;
use App\Models\Subject;
use App\Models\TypeOfGrades;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\type;

class UserController extends Controller
{
    public function profile($id)
    {
        $hocsinh = User::find($id);
        $kurasu = Kurasu::all();
        return view('user.profile', compact('hocsinh', 'kurasu'));
    }
    public function update(Request $request, $id)
    {
        $hocsinh = User::find($id);
        $hocsinh->kurasu_id = $request->input('kurasu_id');
        $hocsinh->name = $request->input('name');
        $hocsinh->email = $request->input('email');
        $hocsinh->update();
        return redirect('/')->with('status', "Successfully");
    }
    public function attendancerate()
    {
        $user = Auth::user();
        $tongsobuoihoc = AttendanceStudent::where('user_id', $user->id)->count();
        $sobuoidihocdg = AttendanceStudent::where('status', 1)->where('user_id', $user->id)->count();
        $sobuoinghihoc = AttendanceStudent::where('status', 2)->where('user_id', $user->id)->count();
        $sobuoidihoc_muon = AttendanceStudent::where('status', 3)->where('user_id', $user->id)->count();
        $x = $sobuoidihoc_muon * 4 / 5;
        $y = $sobuoidihocdg + $x;
        $ti_le_di_hoc =  $y / $tongsobuoihoc * 100;
        $tongbuoidihoc = $sobuoidihocdg + $sobuoidihoc_muon;
        return view('user.attendance_rate', compact('tongbuoidihoc', 'ti_le_di_hoc', 'tongsobuoihoc', 'sobuoinghihoc', 'sobuoidihoc_muon', 'sobuoidihocdg'));
    }
    public function grades()
    {
        $user = Auth::user();
        $monhoc = Subject::all();
        $type = TypeOfGrades::all();
        $thanhtich = GradesStudent::where('user_id', $user->id)->get();
        return view('user.grades', compact('thanhtich', 'monhoc','type'));
    }
}
