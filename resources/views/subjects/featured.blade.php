
@extends('layouts.app')

@section('title', 'Featured Subjects')

@section('content')

<div style="margin-bottom: 20px;">
    <a href="{{ route('subjects.index') }}" style="padding: 8px 16px; background: #e9ecef; color: #212529; text-decoration: none; margin-right: 8px; border-radius: 4px;">Subject List</a>
    <a href="{{ route('subjects.featured') }}" style="padding: 8px 16px; background: #212529; color: #fff; border-radius: 4px; text-decoration: none;">Featured Subjects</a>
</div>

<h2>Featured Subjects</h2>

@foreach($subjects as $featured)
<div style="border: 1px solid #ddd; padding: 20px; margin: 15px 0; border-radius: 6px; background: #fff;">
    <p><strong>Code:</strong> {{ $featured['code'] }}</p>
    <p><strong>Title:</strong> {{ $featured['title'] }}</p>
    <p><strong>Units:</strong> {{ $featured['units'] }}</p>
    <p><strong>Course:</strong> {{ $featured['course'] }}</p>
</div>
@endforeach

<div style="margin-top: 25px;">
    <a href="{{ route('subjects.index') }}" style="padding: 8px 16px; background: #007bff; color: #fff; border-radius: 4px; text-decoration: none;">Back to Subject List</a>
</div>

<p style="text-align: center; margin-top: 30px; color: #666;">Prepared by: <strong>{{ $fullName }}</strong></p>

@endsection