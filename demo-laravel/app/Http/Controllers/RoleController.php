<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('role.list', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        return view('role.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = new Role();
        $role->fill($request->all());
        $role->save();
        $role->students()->sync($request->student_id);
        return redirect()->route('role.list');
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $students = Student::all();
        return view('role.edit', compact('role', 'students'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->fill($request->all());
        $role->save();
        $role->students()->sync($request->student_id);
        return redirect()->route('role.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->students()->detach();
        $role->delete();
        return redirect()->route('role.list');
    }
}
