<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Subjects This Semester</title>
</head>
<body>

<h2>My Subjects This Semester</h2>
<p>Prepared by: {{ $fullName }}</p>

@if ($course)
<p>Showing only subjects for: {{ $course }}</p>
@endif

<table border="1" cellpadding="6" cellspacing="0">
  <tr>
    <th>Code</th>
    <th>Title</th>
    <th>Units</th>
    <th>Course</th>
    <th>Action</th>
  </tr>
  @foreach ($filtered as $id => $subj)
  <tr>
    <td>{{ $subj['code'] }}</td>
    <td>{{ $subj['title'] }}</td>
    <td>{{ $subj['units'] }}</td>
    <td>{{ $subj['course'] }}</td>
    <td><a href="{{ url('/subjects/'.$id) }}">View Details</a></td>
  </tr>
  @endforeach
</table>

<p style="text-align: left; margin: 8px 0 0 0;">
  <a href="{{ url('/subjects') }}">← Back to Full List</a>
</p>

</body>
</html>