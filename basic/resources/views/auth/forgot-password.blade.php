@extends('auth.auth_master')
@section('title')
<title>Recovery | Admin</title>
@endsection
@section('content')
    
<h4 class="text-muted text-center font-size-18"><b>Register</b></h4>

<div class="p-3">
    <form class="form-horizontal mt-3" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="alert alert-info alert-dismissible fade show" role="alert">
        Forgot your password? <strong>No problem.</strong> Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="form-group mb-3">
            <div class="col-xs-12">
                <input class="form-control" type="email" required="" placeholder="Email" id="email" name="email" :value="old('email')">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <div class="form-group pb-2 text-center row mt-3">
            <div class="col-12">
                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Send Email</button>
            </div>
        </div>
    </form>
    <!-- end form -->
</div>
@endsection