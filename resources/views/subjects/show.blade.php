@extends('layouts.app')

@section('title', 'Subject Details')

@section('content')

<style>
    .section-heading {
        font-size: 15px;
        font-weight: bold;
        margin: 0 0 10px 0;
        color: #111;
    }
    .detail-card {
        border: 1px solid #ddd;
        border-radius: 3px;
        overflow: hidden;
    }
    .card-title-bar {
        background: #222;
        color: #fff;
        padding: 6px 12px;
        font-weight: bold;
        font-size: 13px;
    }
    .card-body {
        padding: 12px 14px;
        background: #fff;
    }
    .card-body p {
        margin: 5px 0;
        font-size: 12px;
    }
    .card-body .label {
        display: inline-block;
        width: 80px;
        font-weight: 500;
        color: #444;
    }
    .back-btn {
        margin-top: 12px;
    }
    .back-btn a {
        font-size: 11px;
        padding: 4px 12px;
        background: #222;
        color: #fff;
        text-decoration: none;
        border-radius: 3px;
        display: inline-block;
    }
</style>

<h2 class="section-heading">Subject Details</h2>

<div class="detail-card">
    <div class="card-title-bar">
        Title: {{ $subject['code'] }}
    </div>
    <div class="card-body">
        <p><span class="label">Code:</span> {{ $subject['code'] }}</p>
        <p><span class="label">Title:</span> {{ $subject['title'] }}</p>
        <p><span class="label">Units:</span> {{ $subject['units'] }}</p>
        <p><span class="label">Course:</span>
            @if($subject['course'] === 'GED')
                <span class="badge bg-secondary">GED</span>
            @else
                {{ $subject['course'] }}
            @endif
        </p>
    </div>
</div>

<div class="back-btn">
    <a href="{{ url('/subjects') }}">← Back to Subject List</a>
</div>

@endsection