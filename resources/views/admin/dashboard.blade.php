@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="fs-4 text-secondary my-4 text-white">
        {{ __('Dashboard') }}
    </h1>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card background_dark_2">
                <div class="card-header text-white">{{ __('User Dashboard') }}</div>

                <div class="card-body text-white">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
