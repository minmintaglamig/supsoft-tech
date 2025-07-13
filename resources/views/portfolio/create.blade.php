@extends('layouts.dashboard')

@section('content')
    <div class="profile-image-edit-form">
        @if (session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        @if ($errors->has('profile_image'))
            <div class="error-message">{{ $errors->first('profile_image') }}</div>
        @endif

        <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="profile_image">Change Profile Image</label>
                <input type="file" name="profile_image" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="portfolio_category">Change Profile Image</label>
                <select name="portfolio_category" id="portfolio_category">
                    <option value="UI_UX">UI/UX</option>
                    <option value="WEB_DEVELOPMENT">WEB DEVELOPMENT</option>
                    <option value="GRAPHIC_DESIGN">GRAPHIC DESIGN</option>
                </select>
            </div>

            <div class="form-group">
                <label for="image_name">IMAGE NAME</label>
                <input type="text" name="image_name" required>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
