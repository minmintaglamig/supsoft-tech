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
                <option value="UI-UX">UI/UX</option>
                <option value="WEB_DEVELOPMENT">WEB DEVELOPMENT</option>
                <option value="GRAPHIC_DESIGN">GRAPHIC DESIGN</option>
            </select>
        </div>

        <div class="form-group">
            <label for="image_name">IMAGE NAME</label>
            <input type="text" name="image_name" required>
        </div>

        <button type="submit">Update Image</button>
    </form>
</div>
