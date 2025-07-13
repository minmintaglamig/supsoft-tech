<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
        public function create(Request $request)
    {
        return view('portfolio.create');
    }
    public function store(Request $request){
        $request->validate([
            'portfolio_category' => 'required|string|max:255',
            'image_name' => 'required|string|max:255',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5120', 
        ]);

        $user = User::find(Auth::id());
        $portfolio_category = $request->portfolio_category;
        $image_name = $request->image_name;

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $extension = $image->getClientOriginalExtension();
            $filename = $image_name . '.' . $extension;
            $path = $image->storeAs('portfolio/' . $portfolio_category, $filename, 'public');

            return back()->with('success', 'Image uploaded successfully.');
        }

        return back()->with('error', 'No image file was uploaded.');
    }

        public function getImages($category = null)
    {
        $basePath = 'portfolio';
        $folders = $category && strtoupper($category) !== 'ALL'
            ? [$basePath . '/' . $category]
            : Storage::disk('public')->directories($basePath);

        $data = [];

        foreach ($folders as $folder) {
            $categoryName = basename($folder);
            $images = Storage::disk('public')->files($folder);
            foreach ($images as $img) {
                $data[] = [
                    'url' => asset('storage/' . $img),
                    'category' => $categoryName,
                    'title' => pathinfo($img, PATHINFO_FILENAME),
                ];
            }
        }

        return response()->json($data);
    }

    public function deleteImage(Request $request)
    {
        $imageUrl = $request->input('imageUrl');
        if (!$imageUrl) {
            return response()->json(['success' => false, 'message' => 'No image URL provided']);
        }
        $parsedUrl = parse_url($imageUrl);
        $path = ltrim($parsedUrl['path'], '/'); 

        if (str_starts_with($path, 'storage/')) {
            $relativePath = substr($path, strlen('storage/'));
        } else {
            return response()->json(['success' => false, 'message' => 'Invalid image path']);
        }

        if (Storage::disk('public')->exists($relativePath)) {
            Storage::disk('public')->delete($relativePath);

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'File not found']);
    }
}
