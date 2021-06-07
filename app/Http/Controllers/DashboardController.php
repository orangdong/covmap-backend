<?php

namespace App\Http\Controllers;

use App\Models\Registrant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $user = Auth::user();
        $history = Registrant::with('location.schedule', 'location.service')->where('user_id', $user->id)->get();

        return view('dashboard', [
            'user' => $user,
            'history' => $history
        ]);
    }
}
