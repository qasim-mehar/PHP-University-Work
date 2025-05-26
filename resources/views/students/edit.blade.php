@extends('layout.app')

@section('content')
    <h1 class="text-xl font-bold mb-4">Edit Student</h1>

    @if(session('success'))
        <div class="text-green-500 mb-4">{{ session('success') }}</div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $student->name }}" class="border px-3 py-2 mr-2">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2">Update</button>
        @error('name')
            <div class="text-red-500 mt-2">{{ $message }}</div>
        @enderror
    </form>
@endsection
