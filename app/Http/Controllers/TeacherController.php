<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

class TeacherController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    private function teachers()
    {
        return [
            1 => ['id' => 1, 'name' => 'Prof. Reyes', 'department' => 'CICT', 'subject' => 'Database Systems'],
            2 => ['id' => 2, 'name' => 'Prof. Santos', 'department' => 'CICT', 'subject' => 'Web Programming'],
            3 => ['id' => 3, 'name' => 'Prof. Cruz', 'department' => 'CAS', 'subject' => 'Mathematics'],
        ];
    }

    public function index()
    {
        return view('teachers.index', ['teachers' => $this->teachers()]);
    }

    public function show(string $id)
    {
        $teachers = $this->teachers();

        if (!isset($teachers[$id])) {
            abort(404);
        }

        return view('teachers.show', ['teacher' => $teachers[$id]]);
    }

    public function create()
    {
        //
    }

    public function store(\Illuminate\Http\Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(\Illuminate\Http\Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function featured()
    {
        $teachers = $this->teachers();
        return view('teachers.show', ['teacher' => $teachers[1]]);
    }
}