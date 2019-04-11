@extends('layouts.auth')
@section('title','Sign Up')
@section('content')
    <div class="col-md-6 order-md-1 bg-white">
        <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
            <div class="mb-2 text-center">
                <a class="link-fx text-success font-w700 font-size-h1" href="{{url('/')}}">
                    <span class="text-dark">not</span><span class="text-success">justok</span>
                </a>
                <p class="text-uppercase font-w700 font-size-sm text-muted">Create New Account</p>
            </div>
            <form class="js-validation-signup" action="{{route('login')}}"
                  method="post">
                <div class="form-group">
                    <input type="text" class="form-control form-control-alt" id="signup-username" name="signup-username"
                           placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-alt" id="signup-email" name="signup-email"
                           placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-alt" id="signup-password"
                           name="signup-password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-alt" id="signup-password-confirm"
                           name="signup-password-confirm" placeholder="Password Confirm">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                        <label class="custom-control-label" for="signup-terms">I agree to Terms & Conditions</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-hero-success">
                        <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                    </button>
                    <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                        <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="{{route('login')}}">
                            <i class="fa fa-sign-in-alt text-muted mr-1"></i> Sign In
                        </a>
                        <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="#" data-toggle="modal" data-target="#modal-terms">
                            <i class="fa fa-book text-muted mr-1"></i> Read Terms
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6 order-md-0 bg-xeco-op d-flex align-items-center">
        <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
            <div class="media">
                <a class="img-link mr-3" href="javascript:void(0)">
                    <img class="img-avatar img-avatar-thumb" src="jpg/avatar1.jpg" alt="">
                </a>
                <div class="media-body">
                    <p class="text-white font-w600 mb-1">
                        The service was a valuable asset to improve our conversions and marketing efforts! Thank you!
                    </p>
                    <a class="text-white-75 font-w600" href="javascript:void(0)">Marie Duncan, CEO</a>
                </div>
            </div>
        </div>
    </div>
@endsection
