@extends('layout.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-6">Student List</h1>

        {{-- Success message --}}
        @if(session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        {{-- Add Student Form --}}
        <form action="{{ route('students.store') }}" method="POST" class="mb-6 flex items-center">
            @csrf
            <input type="text" name="name" placeholder="Enter student name"
                   class="flex-1 border border-gray-300 px-4 py-2 rounded mr-2" required>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Student</button>
        </form>

        {{-- Validation Error --}}
        @error('name')
            <div class="text-red-500 mb-4">{{ $message }}</div>
        @enderror

        {{-- Student Table --}}
        <table class="w-full border border-collapse">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="border px-4 py-2">#</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $index => $student)
                    <tr>
                        <td class="border px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $student->name }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('students.edit', $student->id) }}"
                               class="text-blue-500 hover:underline mr-2">Edit</a>

                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="inline"
                                  onsubmit="return confirm('Are you sure you want to delete this student?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-4 text-gray-500">No students found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
