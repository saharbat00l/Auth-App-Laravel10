@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Authentication App') }}</div>

                <div class="card-body">
                    @if (Auth::check())
                        <p>Welcome, {{ Auth::user()->name }}!</p>
                        <p>Your Role: {{ Auth::user()->role }}</p>
                    @else
                        <p>You are not logged in. </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
