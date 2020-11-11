<?php

namespace App\Http\Controllers;

use App\Exports\ExportFormView\ExportFormView;
use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use App\Models\Student;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function __construct()
    {
        
    }

    // public function userCan($action, $option = NULL)
    // {
    //     $user = Auth::user();
    //     return Gate::forUser($user)->allows($action, $option);
    // }

    public function index()
    {
        $students = Student::all();
        // if (!$this->userCan('isStudent')) {
        //     abort('403', __('Bạn không có quyền thực hiện thao tác này'));
        // }
        return view('student.list', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $student = Student::all();
        return view('student.create', compact('roles', 'student'));
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
        $student->fill($request->all());
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $path = $image->store('avatars', 'public');
            $student->avatar = $path;
        }
        $student->save();
        $student->roles()->sync($request->role_id);
        
        return redirect()->route('student.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::find($id);
        $student = Student::find($id);
        return view('student.edit', compact('student', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->fill($request->all());
        if ($request->hasFile('avatar')) {
            $currentImg = $student->avatar;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            $image = $request->file('avatar');
            $path = $image->store('avatars', 'public');
            $student->avatar = $path;
        }
        $student->save();
        $student->roles()->sync($request->role_id);
        return redirect()->route('student.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->roles()->detach();
        $student->delete();
        return redirect()->route('student.list');
    }

    public function export()
    {
        return Excel::download(new ExportFormView, 'Books.xlsx');
    }
    //show
    public function import()
    {
        return view('student.import');
    }

    public function importStore()
    {
        $import = null;
        //Excel::store(new Student, 'example.xlsx');
        Excel::import($import , storage_path('app/public/tmp.excel/01-tmp.xlsx'));
        dd($import);
        return ('Excel file successfully!');
    }
}
