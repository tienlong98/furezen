<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\AttendanceStudent;
use App\Models\Kurasu;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendance = Attendance::all();
        return view('admin.attendance.index', compact('attendance'));
    }
    public function add()
    {
        $kurasu = Kurasu::all();
        $subject = Subject::all();
        return view('admin.attendance.add', compact('kurasu', 'subject'));
    }
    public function form(Request $req)
    {
        $kurasu_id = $req->get('kurasu_id');
        $subject_id = $req->get('subject_id');
        $students = User::where('kurasu_id', $kurasu_id)->get();
        $kurasu = Kurasu::all();
        $subject = Subject::all();
        return view('admin.attendance.add', compact('kurasu', 'subject', 'students', 'kurasu_id', 'subject_id'));
    }
    public function insert(Request $req)
    {
        $attendance = new Attendance();
        $attendance->kurasu_id = $req->get('kurasu_id');
        $attendance->subject_id = $req->get('subject_id');
        $attendance->shift = $req->get('shift');
        $attendance->save();
        $status = $req->get('status');
        foreach ($status as $user_id => $status) {
            $attendancestudent = new AttendanceStudent();
            $attendancestudent->attendance_id = $attendance->id;
            $attendancestudent->user_id = $user_id;
            $attendancestudent->status = $status;
            $attendancestudent->save();
        }
        return redirect('/admin-attendance')->with('status', "Successfully");
    }
    public function edit(Request $req, $id)
    {
        $attendance = Attendance::find($id);
        $kurasu = Kurasu::all();
        $subject = Subject::all();
        $kurasu_id = $req->get('kurasu_id');
        $subject_id = $req->get('subject_id');
        $students = User::where('kurasu_id', $attendance->kurasu_id)->get();
        $status = [];
        $attendancestudent = AttendanceStudent::where('attendance_id', $attendance->id)->get();
        foreach ($attendancestudent as $item) {
            $status[$item->user_id] = $item->status;
        }

        return view('admin.attendance.edit', compact('attendance', 'attendancestudent', 'kurasu', 'subject', 'students', 'kurasu_id', 'subject_id', 'status'));
    }
    public function update(Request $req, $id)
    {
        $attendance = Attendance::find($id);
        $status = $req->get('status');
        AttendanceStudent::where('attendance_id', $attendance->id)->delete();
        foreach ($status as $user_id => $status) {
            $attendancestudent = new AttendanceStudent();
            $attendancestudent->attendance_id = $attendance->id;
            $attendancestudent->user_id = $user_id;
            $attendancestudent->status = $status;
            $attendancestudent->save();
        }
        return redirect('/admin-attendance')->with('status', "Successfully");
    }
}
