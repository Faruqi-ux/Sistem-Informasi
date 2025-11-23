<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'admin') {
            return view('dashboard', [
                'totalAnggota' => User::where('role', 'user')->count(),
                'totalBuku' => Buku::count(),
                'totalDipinjam' => Peminjaman::where('status', 'dipinjam')->count(),
                'totalDikembalikan' => Peminjaman::whereDate('tanggal_kembali', today())->count(),
            ]);
        } else {
            $userId = Auth::id();
            return view('dashboard', [
                'bukuDipinjam' => Peminjaman::where('user_id', $userId)->where('status', 'dipinjam')->count(),
                'perluDikembalikan' => Peminjaman::where('user_id', $userId)
                    ->where('status', 'dipinjam')
                    ->where('tanggal_kembali', '<', now())
                    ->count(),
            ]);
        }
    }
}