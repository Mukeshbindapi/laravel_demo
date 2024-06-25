@extends('layouts.app')
@push('styles')
    <style>
       section{
            width: 100%;
       }
    </style>
@endpush
@section('content')
    <section class="h-100 gradient-form">
        <div class="container-fluid h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-lg-6">
                    <div class="card border-0 shadow rounded-3 text-dark">
                        <div class="card-body p-md-5 mx-md-4">
                            <div class="text-center">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" style="width: 185px;" alt="logo">
                                <h4 class="mt-1 mb-5">We are The Lotus Team</h4>
                            </div>
                            <form>
                                <p>Please login to your account</p>
                                <div class="mb-4">
                                    <input type="email" id="form2Example11" class="form-control" placeholder="Email address">
                                </div>
                                <div class="mb-4">
                                    <input type="password" id="form2Example22" class="form-control" placeholder="Password">
                                </div>
                                <div class="text-center mb-4">
                                    <button class="btn btn-primary btn-block gradient-custom-2" type="submit">Log in</button>
                                    <a href="#" class="text-muted">Forgot password?</a>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <p class="me-2 mb-0">Don't have an account?</p>
                                    <button class="btn btn-outline-danger" type="button">Create new</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                        <h4 class="mb-4">We are more than just a company</h4>
                        <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            console.log(123566);
        });
    </script>
@endpush
