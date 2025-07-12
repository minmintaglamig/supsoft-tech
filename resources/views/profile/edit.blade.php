@extends('layouts.profile')

@section('title', 'Profile')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-white">Profile</h2>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Profile Information</h5>
            @include('profile.partials.update-profile-information-form')
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Update Password</h5>
            @include('profile.partials.update-password-form')
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Delete Account</h5>
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</div>
@endsection