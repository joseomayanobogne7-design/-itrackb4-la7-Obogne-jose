@extends('layouts.app')

@section('title', 'Second Page')

@section('content')
    <div class="text-center py-4">
        <h2 class="text-dark mb-4">Welcome to Second Page</h2>
        <p class="lead mb-3">This page uses the shared layout — proving inheritance! ✅</p>
        <p class="text-muted">Same navigation, same header, same footer — all from one file</p>
        
        {{-- E4 — Card component --}}
        <div class="card mt-5 mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <h5 class="card-title">📌 Inheritance Proof</h5>
                <p class="card-text mt-3">Site heading above appears on both pages.</p>
                <p class="card-text">Your name in footer appears on both pages — without writing it twice.</p>
            </div>
        </div>
    </div>
@endsection
