<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Featured Subject</title>
    <style>
        body{font-family:Arial,sans-serif;max-width:600px;margin:3rem auto;padding:0 1rem;}
        h1{color:#2563eb;text-align:center;}
        .box{border:2px solid #2563eb;border-radius:12px;padding:2rem;background:#eff6ff;}
        .detail{padding:0.8rem 0;border-bottom:1px solid #ddd;}
        .label{font-weight:bold;display:inline-block;width:100px;color:#444;}
        a{color:#2563eb;text-decoration:none;margin-top:1rem;display:inline-block;}
    </style>
</head>
<body>
    <h1> Featured Subject</h1>
    <div class="box">
        <div class="detail"><span class="label">Code:</span> {{ $featured['code'] }}</div>
        <div class="detail"><span class="label">Title:</span> {{ $featured['title'] }}</div>
        <div class="detail"><span class="label">Units:</span> {{ $featured['units'] }}</div>
        <div class="detail"><span class="label">Course:</span> {{ $featured['course'] }}</div>
    </div>
    <p style="text-align:center; margin-top:1.5rem;">Prepared by: <strong>{{ $student_name }}</strong></p>
    <a href="{{ route('subjects.index') }}">← Back to Subject List</a>
</body>
</html>