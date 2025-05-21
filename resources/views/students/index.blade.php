@extends('layout.app')

@section('content')
    <h1 class="text-xl font-bold mb-4">Student List</h1>
    <ul>
        @foreach ($students as $student)
            <li>{{ $student->name }}</li>
        @endforeach
    </ul>
@endsection
