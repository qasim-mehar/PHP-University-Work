@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center fw-bold display-6 mb-4 text-primary">Manage Your Tasks</h1>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        {{-- Add Task Form --}}
        <form action="{{ route('students.store') }}" method="POST" class="row g-2 mb-4">
            @csrf
            <div class="col-md-10">
                <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter new task..." required>
            </div>
            <div class="col-md-2 d-grid">
                <button type="submit" class="btn btn-success btn-lg">
                    <i class="bi bi-plus-circle me-1"></i> Add Task
                </button>
            </div>
        </form>

        {{-- Validation Error --}}
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- Tasks Table --}}
        <div class="table-responsive">
            <table class="table table-hover align-middle border rounded shadow-sm">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Task Name</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $index => $student)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $student->name }}</td>
                            <td class="text-end">
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-outline-primary btn-sm me-2">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>

                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Mark this task as completed?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-success btn-sm">
                                        <i class="bi bi-check2-circle"></i> Task Completed
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted py-4">No tasks found. Add one above.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <style>
        table th,
        table td {
            vertical-align: middle;
        }

        .table-hover tbody tr:hover {
            background-color: #f9f9f9;
        }
    </style>
@endsection
