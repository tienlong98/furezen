<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kurasu;
use Illuminate\Http\Request;

class KurasuController extends Controller
{
    public function index()
    {
        $kurasu = Kurasu::all();
        return view('admin.kurasu.index', compact('kurasu'));
    }
    public function add()
    {
        return view('admin.kurasu.add');
    }
    public function insert(Request $request)
    {
        $kurasu = new Kurasu();
        $kurasu->name = $request->input('name');
        $kurasu->save();
        return redirect('/admin-kurasu')->with('status', "Successfully");
    }
    public function edit($id)
    {
        $kurasu = Kurasu::find($id);
        return view('admin.kurasu.edit', compact('kurasu'));
    }
    public function update(Request $request, $id)
    {
        $kurasu = Kurasu::find($id);
        $kurasu->name = $request->input('name');
        $kurasu->update();
        return redirect('/admin-kurasu')->with('status', "Successfully");
    }
    public function destroy($id)
    {
        $kurasu = Kurasu::find($id);

        $kurasu->delete();
        return redirect('/admin-kurasu')->with('status', "Successfully");
    }
}
