@extends('layouts.dashboard')

@section('content')
    <div class="alert alert-success text-center">
        SHOW TEAM MEMBER
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.update', $user_show->id) }}" method="POST">
                @csrf
                <h5 class="card-title">{{ $user_show->name }}</h5>
                <label for="email">EMAIL:</label>
                <p><input type="email" name="email" placeholder="EMAIL" value="{{ $user_show->email }}"></p>
                <label for="name">NAME</label>
                <p><input type="text" name="name" placeholder="NAME" value="{{ $user_show->name }}"></p>
                <label for="role">ROLE:</label>
                <p><input type="text" name="role" placeholder="role" value="{{ $user_show->role }}"></p>

                <button type="submit" name="updatebtn">UPDATE</button>
            </form>
        </div>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
