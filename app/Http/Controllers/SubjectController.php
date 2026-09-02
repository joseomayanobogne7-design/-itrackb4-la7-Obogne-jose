<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    // A1: Private helper method
    private function getSubjectsData()
    {
        return [
            1 => ['id' => 1, 'code' => 'ITTRACKB4', 'title' => 'Web Systems and Technologies', 'units' => 3, 'course' => 'BSIT'],
            2 => ['id' => 2, 'code' => 'ITEC101', 'title' => 'Introduction to Computing', 'units' => 3, 'course' => 'BSIT'],
            3 => ['id' => 3, 'code' => 'ITI202', 'title' => 'Database Management Systems', 'units' => 3, 'course' => 'BSIT'],
            4 => ['id' => 4, 'code' => 'ITPRO3', 'title' => 'Computer Programming', 'units' => 3, 'course' => 'BSIT'],
            5 => ['id' => 5, 'code' => 'ITNET01', 'title' => 'Networking Fundamentals', 'units' => 3, 'course' => 'BSIT'],
            6 => ['id' => 6, 'code' => 'GE101', 'title' => 'Understanding the Self', 'units' => 3, 'course' => 'GED'],
            7 => ['id' => 7, 'code' => 'ITEL03', 'title' => 'Platform Technologies', 'units' => 3, 'course' => 'BSIT'],
        ];
    }

    // A5: index calls helper
    public function index()
    {
        $subjects = $this->getSubjectsData();
        $fullName = 'Nadine C. Rojas';
        return view('subjects.index', compact('subjects', 'fullName'));
    }

    public function featured()
    {
        $subjects = $this->getSubjectsData();
        $featured = $subjects[1];
        $fullName = 'Nadine C. Rojas';
        return view('subjects.featured', compact('featured', 'fullName'));
    }

    public function filter($course = null)
    {
        $all = $this->getSubjectsData();
        $filtered = [];
        if ($course) {
            foreach ($all as $id => $subj) {
                if ($subj['course'] == strtoupper($course)) {
                    $filtered[$id] = $subj;
                }
            }
        } else {
            $filtered = $all;
        }
        $fullName = 'Nadine C. Rojas';
        $filterValue = strtoupper($course);
        return view('subjects.filter', compact('filtered', 'course', 'fullName', 'filterValue'));
    }

    // B1-B3: show with ID & 404
    public function show($id)
    {
        $subjects = $this->getSubjectsData();
        if (!isset($subjects[$id])) {
            abort(404, 'Subject not found.');
        }
        $subject = $subjects[$id];
        $fullName = 'Nadine C. Rojas';
        return view('subjects.show', compact('subject', 'fullName'));
    }
}