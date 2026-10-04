@extends('layouts.app')

@section('title', 'Subject Portal')

@section('content')

<div class="mb-4" style="display: flex; justify-content: space-between; align-items: center;">
    <div>
        <a href="{{ route('subjects.index') }}" style="padding: 8px 16px; background: #e9ecef; color: #212529; text-decoration: none; margin-right: 8px; border-radius: 4px;">Subject List</a>
        <a href="{{ route('subjects.featured') }}" style="padding: 8px 16px; color: #495057; text-decoration: none;">Featured Subjects</a>
    </div>
    <a href="{{ route('subjects.create') }}" style="padding: 8px 16px; background: #28a745; color: #fff; text-decoration: none; border-radius: 4px; font-weight: 500;">+ Add New Subject</a>
</div>

<h5 style="font-weight: bold; margin-bottom: 12px;">My Subject List</h5>

<div style="margin: 15px 0; padding: 15px; background: #f8f9fa; border-radius: 6px;">
    <div style="margin-bottom: 12px;">
        <strong>Filter by Course:</strong>
        <a href="{{ route('subjects.index', ['course' => 'BSIT', 'search' => request('search')]) }}" style="margin: 0 8px; text-decoration: none; {{ request('course') === 'BSIT' ? 'font-weight:bold; color:#000;' : 'color:#007bff;' }}">BSIT</a>
        <a href="{{ route('subjects.index', ['course' => 'GED', 'search' => request('search')]) }}" style="margin: 0 8px; text-decoration: none; {{ request('course') === 'GED' ? 'font-weight:bold; color:#000;' : 'color:#007bff;' }}">GED</a>
        <a href="{{ route('subjects.index', ['course' => null, 'search' => request('search')]) }}" style="margin: 0 8px; color: #6c757d; text-decoration: none;">Clear Course</a>
    </div>

    <div>
        <strong>Search:</strong>
        <form action="{{ route('subjects.index') }}" method="GET" style="display: inline;">
            <input type="text" name="search" placeholder="Code or Title" value="{{ request('search') }}" style="padding: 6px 10px; border: 1px solid #ddd; border-radius: 4px; width: 220px;">
            @if(request('course'))
                <input type="hidden" name="course" value="{{ request('course') }}">
            @endif
            <button type="submit" style="padding: 6px 14px; background: #212529; color: #fff; border: none; border-radius: 4px; margin-left: 5px;">Search</button>
        </form>
        @if(request('search'))
            <a href="{{ route('subjects.index', ['course' => request('course')]) }}" style="margin-left: 10px; color: #6c757d; font-size: 0.9rem; text-decoration: none;">Clear Search</a>
        @endif
    </div>
</div>

<div style="margin: 15px 0; padding: 10px 15px; background: #e9ecef; border-radius: 4px; font-size: 0.95rem;">
    <strong>Currently showing:</strong>
    @if(request('course'))
        Course: <strong>{{ request('course') }}</strong>
    @endif
    @if(request('search'))
        @if(request('course')) &nbsp;|&nbsp; @endif
        Search: <strong>{{ request('search') }}</strong>
    @endif
    @if(!request('course') && !request('search'))
        <em>All Subjects</em>
    @endif
    &nbsp;—&nbsp;
    <a href="{{ route('subjects.index') }}" style="color: #007bff; text-decoration: none;">Clear All</a>
</div>

<table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr style="background: #212529; color: #fff;">
            <th style="padding: 10px 14px; text-align: left;">No.</th>
            <th style="padding: 10px 14px; text-align: left;">Code</th>
            <th style="padding: 10px 14px; text-align: left;">Title</th>
            <th style="padding: 10px 14px; text-align: left;">Units</th>
            <th style="padding: 10px 14px; text-align: left;">Course</th>
            <th style="padding: 10px 14px; text-align: left;">Action</th>
        </tr>
    </thead>
    <tbody>
        @php $totalUnits = 0; @endphp
        @forelse($subjects as $subj)
        <tr style="border-bottom: 1px solid #dee2e6;">
            <td style="padding: 10px 14px;">{{ $loop->iteration }}</td>
            <td style="padding: 10px 14px;">{{ $subj['code'] }}</td>
            <td style="padding: 10px 14px;">{{ $subj['title'] }}</td>
            <td style="padding: 10px 14px;">{{ $subj['units'] }}</td>
            <td style="padding: 10px 14px;">
                @if($subj['course'] === 'GED')
                    <span style="background: #6c757d; color: #fff; padding: 2px 8px; border-radius: 3px; font-size: 0.85rem;">GED</span>
                @else
                    {{ $subj['course'] }}
                @endif
            </td>
            <td style="padding: 10px 14px;">
                <a href="{{ route('subjects.show', $subj['id']) }}" style="background: #212529; color: #fff; padding: 5px 12px; border-radius: 4px; text-decoration: none; font-size: 0.85rem;">View Details</a>
            </td>
        </tr>
        @php $totalUnits += $subj['units']; @endphp
        @empty
        <tr>
            <td colspan="6" style="padding: 25px; text-align: center; color: #6c757d;">
                <strong>No subjects found.</strong> Try changing your filters or search term.
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

<p style="text-align: right; margin-top: 15px; font-weight: 500;">Total Units: {{ $totalUnits }}</p>

@endsection
