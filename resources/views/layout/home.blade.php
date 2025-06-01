@extends('layout.app')

@section('content')
    <div class="text-center mb-5">
        <h1 class="fw-bold display-5 text-gradient">Welcome to TaskMaster</h1>
        <p class="lead text-muted">Your ultimate tool for managing tasks effortlessly and staying organized.</p>
    </div>

    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="p-4 border rounded shadow-sm h-100 bg-white hover-shadow transition">
                <i class="bi bi-check-circle-fill text-success fs-1 mb-3"></i>
                <h5 class="fw-semibold">Smart Task Tracking</h5>
                <p class="text-muted">Track, manage and complete tasks on time with intelligent scheduling.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 border rounded shadow-sm h-100 bg-white hover-shadow transition">
                <i class="bi bi-people-fill text-primary fs-1 mb-3"></i>
                <h5 class="fw-semibold">Team Collaboration</h5>
                <p class="text-muted">Collaborate with teammates and assign tasks to get more done, together.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 border rounded shadow-sm h-100 bg-white hover-shadow transition">
                <i class="bi bi-bar-chart-line-fill text-warning fs-1 mb-3"></i>
                <h5 class="fw-semibold">Progress Insights</h5>
                <p class="text-muted">Visualize your productivity with real-time charts and performance metrics.</p>
            </div>
        </div>
    </div>

    <div class="mt-5 text-center">
        <a href="/signup" class="btn btn-lg btn-primary px-4 py-2 rounded-pill">
            Get Started <i class="bi bi-arrow-right ms-2"></i>
        </a>
    </div>

    <style>
        .text-gradient {
            background: linear-gradient(to right, #7950f2, #f72585);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hover-shadow:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(-3px);
            transition: all 0.3s ease;
        }
        .transition {
            transition: all 0.3s ease;
        }
    </style>
@endsection
