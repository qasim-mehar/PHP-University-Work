@extends('layout.app')

@section('content')
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .glass {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 16px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
        }
        .section-title {
            background: linear-gradient(90deg, #7950f2, #f72585);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .icon-box:hover {
            transform: translateY(-5px);
            transition: 0.3s ease;
        }
    </style>

    <!-- Hero Section -->
    <header class="py-5 text-white" style="background: linear-gradient(135deg, #7950f2, #f72585);">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">About TaskMaster</h1>
            <p class="lead mt-3">Where productivity meets simplicity. Organize, collaborate, and execute with ease.</p>
        </div>
    </header>

    <!-- About Content -->
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <img src="https://source.unsplash.com/700x450/?task,teamwork,productivity" class="img-fluid rounded shadow" alt="Task Management Image">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold section-title mb-3">Why Choose TaskMaster?</h2>
                <p class="text-muted">We built TaskMaster to solve everyday productivity problems—beautifully. Our app makes it easy to track goals, manage teams, and stay organized in a fast-paced digital world.</p>
                <ul class="list-unstyled mt-4">
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Colorful, customizable dashboards</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Real-time team collaboration</li>
                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> Smart reminders & progress tracking</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="py-5" style="background: linear-gradient(120deg, #f8f9fa, #e3f2fd);">
        <div class="container text-center mb-5">
            <h2 class="fw-bold section-title">What Makes Us Unique</h2>
            <p class="text-muted">Designed to help individuals and teams work better—together.</p>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 text-center rounded glass icon-box">
                        <i class="bi bi-lightning-fill text-primary fs-1 mb-3"></i>
                        <h5 class="fw-bold">Fast & Responsive</h5>
                        <p class="text-muted">Lightning-fast UI with no clutter. Stay productive on any device.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 text-center rounded glass icon-box">
                        <i class="bi bi-shield-lock-fill text-danger fs-1 mb-3"></i>
                        <h5 class="fw-bold">Secure & Private</h5>
                        <p class="text-muted">Your data is encrypted and protected. We never compromise privacy.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 text-center rounded glass icon-box">
                        <i class="bi bi-emoji-smile-fill text-warning fs-1 mb-3"></i>
                        <h5 class="fw-bold">Intuitive UX</h5>
                        <p class="text-muted">We make managing tasks feel like magic—clean, simple, and joyful.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
