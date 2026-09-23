@extends('layouts.app')

@section('title', 'Subject Portal')

@section('content')

<div class="mb-3">
    <a href="{{ route('subjects.index') }}" class="btn btn-outline-dark">Subject List</a>
    <a href="{{ route('subjects.featured') }}" class="btn btn-outline-secondary">Featured Teacher</a>
</div>

<h2 class="fw-bold">Subject Portal</h2>
<p class="text-muted small mb-4">Prepared by: Nadine C. Rojas</p>

<h5 class="fw-bold mb-2">My Subject List</h5>

<table class="table table-bordered">
    <thead class="bg-dark text-white">
        <tr>
            <th>No.</th>
            <th>Code</th>
            <th>Title</th>
            <th>Units</th>
            <th>Course</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $subjects = [
            ['code'=>'ITRACKB4', 'title'=>'Web Systems and Technologies', 'units'=>3, 'course'=>'BSIT'],
            ['code'=>'ITEC101', 'title'=>'Introduction to Computing', 'units'=>3, 'course'=>'BSIT'],
            ['code'=>'IT202', 'title'=>'Database Management Systems', 'units'=>3, 'course'=>'BSIT'],
            ['code'=>'ITPRO3', 'title'=>'Computer Programming', 'units'=>3, 'course'=>'BSIT'],
            ['code'=>'ITNET01', 'title'=>'Networking Fundamentals', 'units'=>3, 'course'=>'BSIT'],
            ['code'=>'GE101', 'title'=>'Understanding the Self', 'units'=>3, 'course'=>'GED'],
            ['code'=>'ITEL03', 'title'=>'Platform Technologies', 'units'=>3, 'course'=>'BSIT'],
        ];
        @endphp

        @foreach($subjects as $subj)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $subj['code'] }}</td>
            <td>{{ $subj['title'] }}</td>
            <td>{{ $subj['units'] }}</td>
            <td>
                @if($subj['course'] === 'GED')
                    <span class="badge bg-secondary">GED</span>
                @else
                    {{ $subj['course'] }}
                @endif
            </td>
            <td>
                <a href="{{ route('subjects.show', $loop->iteration) }}" class="btn btn-dark btn-sm">View Details</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<p class="text-end fw-bold">Total Units: 21</p>

@endsection