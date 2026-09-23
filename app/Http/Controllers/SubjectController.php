<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    private function getSubjectsData()
    {
        return [
            ['code' => 'ITRACKB4', 'title' => 'Web Systems and Technologies', 'units' => 3, 'course' => 'BSIT'],
            ['code' => 'ITEC101', 'title' => 'Introduction to Computing', 'units' => 3, 'course' => 'BSIT'],
            ['code' => 'ITI202', 'title' => 'Database Management Systems', 'units' => 3, 'course' => 'BSIT'],
            ['code' => 'ITPRO3', 'title' => 'Computer Programming', 'units' => 3, 'course' => 'BSIT'],
            ['code' => 'ITNET01', 'title' => 'Networking Fundamentals', 'units' => 3, 'course' => 'BSIT'],
            ['code' => 'GE101', 'title' => 'Understanding the Self', 'units' => 3, 'course' => 'GED'],
            ['code' => 'ITEL03', 'title' => 'Platform Technologies', 'units' => 3, 'course' => 'BSIT'],
        ];
    }

    public function index(Request $request)
    {
        
        if ($request->query('course')) {
            $subjects = array_filter($subjects, function($subj) use ($request) {
                return $subj['course'] === $request->query('course');
            });
        }
        
        if ($request->query('search')) {
            $searchTerm = strtolower($request->query('search'));
            $subjects = array_filter($subjects, function($subj) use ($searchTerm) {
                return str_contains(strtolower($subj['code']), $searchTerm) ||
                       str_contains(strtolower($subj['title']), $searchTerm);
            });
        }

        $fullName = 'Nadine C. Rojas';
        return view('subjects.index', compact('subjects', 'fullName'));
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show($id)
    {
        $subjects = $this->getSubjectsData();
        $id = (int)$id;

        if (!isset($subjects[$id - 1])) {
            abort(404);
        }
        $subject = $subjects[$id - 1];
        $fullName = 'Nadine C. Rojas';
        return view('subjects.show', compact('subject', 'fullName'));
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function destroy()
    {
        //
    }

    public function featured()
    {
        $subjects = $this->getSubjectsData();
        $subjects = array_slice($subjects, 0, 3);
        $fullName = 'Nadine C. Rojas';
        return view('subjects.featured', compact('subjects', 'fullName'));
    }
}