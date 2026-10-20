@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Student Details</h2>

    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <strong>Student Number:</strong>
                <p class="text-muted">{{ $student->student_number }}</p>
            </div>

            <div class="mb-3">
                <strong>First Name:</strong>
                <p class="text-muted">{{ $student->first_name }}</p>
            </div>

            <div class="mb-3">
                <strong>Last Name:</strong>
                <p class="text-muted">{{ $student->last_name }}</p>
            </div>

            <div class="mb-3">
                <strong>Email:</strong>
                <p class="text-muted">{{ $student->email }}</p>
            </div>

            <div class="mb-3">
                <strong>Course:</strong>
                <p class="text-muted">{{ $student->course }}</p>
            </div>

            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">
                Edit Student
            </a>
            
            <a href="{{ route('students.index') }}" class="btn btn-secondary">
                Back to List
            </a>
        </div>
    </div>
</div>
@endsection