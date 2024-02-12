@extends('admin.layouts.app')
@section('css_after')
    <style>
        .border_right {
            border-right: 2px solid #dee2e6;
        }
    </style>
@endsection
@section('content')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Change Password</h5>
                            <form action="{{ route('admin.change_password') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-12">Email</label>
                                    <div class="col-12">
                                        <input class="form-control"type="email"
                                            name="email" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-12">Current Password</label>
                                    <div class="col-12">
                                        <input class="form-control"type="password"
                                            name="current_password" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-12">New Password</label>
                                    <div class="col-12">
                                        <input class="form-control"type="password" name="new_password"
                                            required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
    </main>
@endsection
