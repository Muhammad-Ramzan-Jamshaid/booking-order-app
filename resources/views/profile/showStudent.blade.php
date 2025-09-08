@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Student Details</h2>
    <p><strong>ID:</strong> {{ $student->id }}</p>
    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Gender:</strong> {{ $student->gender }}</p>
</div>
@endsection
