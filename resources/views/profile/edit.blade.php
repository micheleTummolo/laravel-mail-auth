@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="fs-4 text-secondary my-4 text-white">
        {{ __('Profile') }}
    </h1>
    <div class="card p-4 mb-4 background_dark_2 text-white shadow rounded-lg">

        @include('profile.partials.update-profile-information-form')

    </div>

    <div class="card p-4 mb-4 background_dark_2 text-white shadow rounded-lg">


        @include('profile.partials.update-password-form')

    </div>

    <div class="card p-4 mb-4 background_dark_2 text-white shadow rounded-lg">


        @include('profile.partials.delete-user-form')

    </div>
</div>

@endsection
