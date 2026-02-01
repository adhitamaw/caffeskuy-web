<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        // Pastikan hanya admin yang bisa mengakses ini
        $this->middleware('isAdmin');
    }

    // Menampilkan semua user
    public function index()
    {
        $users = User::all();
        return view('admin.userIndex', compact('users'));
    }

    // Menghapus user
    public function destroy(User $user)
    {
        // Cek apakah user adalah admin
        if ($user->role == 'admin') {
            return redirect()->back()->with('error', 'Admin tidak bisa dihapus');
        }
        
        // Hapus file PDF jika ada
        if ($user->pdf_file) {
            Storage::delete('pdfs/' . $user->pdf_file);
        }
        
        $user->delete();
        return redirect()->back()->with('success', 'User berhasil dihapus');
    }
}