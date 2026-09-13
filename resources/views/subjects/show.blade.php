@extends('layouts.app')

@section('title', 'Subject Details')

@section('content')

<style>
    .detail-page {
        max-width: 580px;
        margin: 0 auto;
        font-size: 13px;
    }
    .page-header h1 {
        font-size: 18px;
        font-weight: bold;
        margin: 0 0 4px 0;
        color: #111;
    }
    .prepared-line {
        font-size: 11px;
        color: #666;
        margin: 0 0 12px 0;
    }
    .nav-buttons a {
        display: inline-block;
        font-size: 11px;
        padding: 3px 10px;
        border: 1px solid #888;
        border-radius: 3px;
        margin-right: 5px;
        margin-bottom: 12px;
        color: #333;
        text-decoration: none;
        background: #f5f5f5;
    }
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

<div class="detail-page">
    <div class="page-header">
        <h1>Subject Portal</h1>
        <p class="prepared-line">Prepared by: Nadine C. Rojas</p>
    </div>

    <div class="nav-buttons">
        <a href="{{ url('/subjects') }}">Subject List</a>
        <a href="#">Featured Subject</a>
        <a href="#">Filter List</a>
    </div>

    <h2 class="section-heading">Subject Details</h2>

    <div class="detail-card">
        <div class="card-title-bar">
            Title: {{ $subj['code'] }}
        </div>
        <div class="card-body">
            <p><span class="label">Code:</span> {{ $subj['code'] }}</p>
            <p><span class="label">Title:</span> {{ $subj['title'] }}</p>
            <p><span class="label">Units:</span> {{ $subj['units'] }}</p>
            <p><span class="label">Course:</span> 
                @if($subj['course'] === 'GED')
                    <span class="badge bg-secondary">GED</span>
                @else
                    {{ $subj['course'] }}
                @endif
            </p>
        </div>
    </div>

    <div class="back-btn">
        <a href="{{ url('/subjects') }}">← Back to Subject List</a>
    </div>
</div>

@endsection