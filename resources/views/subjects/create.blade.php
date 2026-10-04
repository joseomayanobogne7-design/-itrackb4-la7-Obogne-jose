<h1>Add New Subject</h1>

<form method="POST" action="{{ route('subjects.store') }}">
    @csrf

    <div>
        <label>Subject Code:</label>
        <input type="text" name="code" value="{{ old('code') }}">
        @error('code') <p style="color:red">{{ $message }}</p> @enderror
    </div>

    <div>
        <label>Subject Title:</label>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title') <p style="color:red">{{ $message }}</p> @enderror
    </div>

    <div>
        <label>Units:</label>
        <input type="number" name="units" value="{{ old('units') }}">
        @error('units') <p style="color:red">{{ $message }}</p> @enderror
    </div>

    <div>
        <label>Course:</label>
        <select name="course">
            <option value="">Select Course</option>
            <option value="BSIT" @selected(old('course') == 'BSIT')>BSIT</option>
            <option value="BSIS" @selected(old('course') == 'BSIS')>BSIS</option>
            <option value="BSCS" @selected(old('course') == 'BSCS')>BSCS</option>
            <option value="GED" @selected(old('course') == 'GED')>GED</option>
        </select>
        @error('course') <p style="color:red">{{ $message }}</p> @enderror
    </div>

    <button type="submit">Add Subject</button>
</form>

<a href="{{ route('subjects.index') }}">Back to List</a>