@extends('layouts.app')

@section('title', 'Subject Portal')

@section('content')

<div class="d-flex align-items-start mb-3">
    <div>
        <h4 class="fw-bold text-dark mb-1">Subject Portal</h4>
        <p class="fst-italic text-secondary small mb-0">Prepared by: Nadine C. Rojas</p>
    </div>
    
    <div class="ms-auto d-flex flex-column gap-1">
        <a href="#" class="btn btn-xs btn-dark">View Featured Subject</a>
        <a href="#" class="btn btn-xs btn-secondary text-white">Filter Subjects</a>
    </div>
</div>

<h6 class="fw-bold mb-2 text-dark">My Subject List</h6>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-sm">
        <thead class="table-dark text-white">
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
                ['code'=>'ITI202', 'title'=>'Database Management Systems', 'units'=>3, 'course'=>'BSIT'],
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
                <td class="text-center">{{ $subj['units'] }}</td>
                <td class="text-center">
                    @if($subj['course'] === 'GED')
                        <span class="badge bg-secondary">GED</span>
                    @else
                        {{ $subj['course'] }}
                    @endif
                </td>
                <td class="text-center">
                    <a href="#" class="btn btn-xs btn-dark">View Details</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<p class="text-end fw-bold small mt-2 text-dark">Total Units: 21</p>

@endsection
