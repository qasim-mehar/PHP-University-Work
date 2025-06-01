@extends('layout.app')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary">Contact Us</h2>
        <p class="text-muted">We’re here to help! Reach out to us anytime.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-3"><i class="bi bi-envelope-fill text-primary me-2"></i>Email</h5>
                    <p class="mb-4 text-muted">example@example.com</p>

                    <h5 class="fw-bold mb-3"><i class="bi bi-telephone-fill text-primary me-2"></i>Phone</h5>
                    <p class="mb-4 text-muted">+92 300 1234567</p>

                    <h5 class="fw-bold mb-3"><i class="bi bi-geo-alt-fill text-primary me-2"></i>Address</h5>
                    <p class="text-muted">123 Task Street, Islamabad, Pakistan</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
