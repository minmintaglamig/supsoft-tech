<?php

namespace App\Http\Controllers\Users\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminController extends Controller
{
        use SoftDeletes;
    public function index(){
        return view('admin.dashboard');
    }

    public function portfolio(){
        return view ('admin.portfolio');
    }

    public function teammembers(){

        $user = Auth::user();

        $allusers = User::where('role', 'User')->get();
        return view ('admin.team_members', compact('allusers'));
    }

    public function show($id)
    {
        $user_show = User::findOrFail($id); 
        return view('admin.showmember', compact('user_show'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => ['required', 'email', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'in:User,Admin'],
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'email' => $request->email,
            'name' => $request->name,
            'role' => $request->role,
        ]);

        return redirect()->back()->with('success', 'User updated successfully.');
    }

        public function delete(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }
}
