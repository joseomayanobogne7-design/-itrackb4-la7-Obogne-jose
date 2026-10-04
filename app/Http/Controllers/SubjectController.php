<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    // ✅ PART A: Load data from JSON file
    private function loadData()
    {
        $path = storage_path('subjects.json');
        return json_decode(file_get_contents($path), true);
    }

    // ✅ PART A: Save data to JSON file
    private function saveData($data)
    {
        $path = storage_path('subjects.json');
        file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT));
    }

    public function index(Request $request)
    {
        // ✅ Read from JSON file instead of hardcoded array
        $subjects = $this->loadData();

        if ($request->query('course')) {
            $subjects = array_filter($subjects, function($subj) use ($request) {
                return $subj['course'] === $request->query('course');
            });
        }
        
        if ($request->query('search')) {
            $searchTerm = strtolower(trim($request->query('search')));
            $subjects = array_filter($subjects, function($subj) use ($searchTerm) {
                return str_contains(strtolower($subj['code']), $searchTerm) ||
                       str_contains(strtolower($subj['title']), $searchTerm);
            });
        }

        $fullName = 'Nadine C. Rojas';
        return view('subjects.index', compact('subjects', 'fullName'));
    }

    // ✅ PART B: Show the add form
    public function create()
    {
        return view('subjects.create');
    }

    // ✅ PART C & E: Receive, validate, save, redirect
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|max:20',
            'title' => 'required|min:5',
            'units' => 'required|integer|min:1|max:6',
            'course' => 'required|in:BSIT,BSIS,BSCS,GED'
        ]);

        $subjects = $this->loadData();
        
        // Generate new ID
        $newId = max(array_column($subjects, 'id')) + 1;
        
        // Add new record
        $subjects[] = [
            'id' => $newId,
            'code' => $validated['code'],
            'title' => $validated['title'],
            'units' => $validated['units'],
            'course' => $validated['course']
        ];
        
        $this->saveData($subjects);
        
        return redirect()->route('subjects.index')
                         ->with('success', 'Subject added successfully!');
    }

    public function show($id)
    {
        // ✅ Read from JSON file
        $subjects = $this->loadData();
        $id = (int)$id;

        $found = null;
        foreach ($subjects as $subject) {
            if ($subject['id'] === $id) {
                $found = $subject;
                break;
            }
        }

        if (!$found) {
            abort(404);
        }
        
        $fullName = 'Nadine C. Rojas';
        return view('subjects.show', compact('subject', 'fullName'));
    }

    // ... leave edit, update, destroy, featured as is
    public function edit($id)
    {
    
    }

    public function update($id)
    {
        
    }

    public function destroy()
    {
    
    }

    public function featured()
    {
        $subjects = $this->loadData();
        $subjects = array_slice($subjects, 0, 3);
        $fullName = 'Nadine C. Rojas';
        return view('subjects.featured', compact('subjects', 'fullName'));
    }
}