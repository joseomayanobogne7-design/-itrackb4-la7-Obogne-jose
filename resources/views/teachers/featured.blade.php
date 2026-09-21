@extends('layouts.app')

@section('title', 'Featured Teacher')

@section('content')

<div style="border: 1px solid #ccc; padding: 15px; margin-top: 20px; margin-left: 0;">
    <h4 style="font-size: 24px; margin: 0 0 10px 0;">{{ $teacher['name'] }}</h4>
    <p style="margin: 0 0 8px 0;"><strong>Department:</strong> {{ $teacher['department'] }}</p>
    <p style="margin: 0 0 15px 0;"><strong>Subject:</strong> {{ $teacher['subject'] }}</p>
    <a href="{{ route('teachers.index') }}" style="background-color: #0066cc; color: white; padding: 6px 14px; border-radius: 4px; text-decoration: none; display: inline-block;">Back to List</a>
</div>

@endsection
