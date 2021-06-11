<?php

namespace App\Http\Controllers;

use App\Models\Location;
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

    public function search(Request $request){
        $user = Auth::user();

        if(!$user->kelurahan){
            return redirect(url('user/profile'));
        }
        $service = $request->input('service');
        $near = Location::where('kelurahan', $user->kelurahan)->get();

        return view('pages.search', [
            'user' => $user,
            'near' => $near
        ]);

    }
}
