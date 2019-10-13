@extends('layouts.app')

@section('content')
<div class="container bg-gray">
    <div class="columns full-screen">
        <div class="card col-auto auto-margin">
            <div class="card-header">
                <div class="card-title h4 text-center">Login</div><div id="login_loading" class="loading-lg"></div>
            </div>
            <div class="card-body">
                <form id="login_form">
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input name="username" class="form-input" type="text">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input name="password" class="form-input" type="password">
                    </div>
                    <div class="text-center">
                        <a class="btn btn-primary" href="#" id="login_submit">Login</a>
                        <a class="btn btn-link" href="{{ url('/') }}">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
@endsection
