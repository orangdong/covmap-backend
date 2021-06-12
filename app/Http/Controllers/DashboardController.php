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

    public function details($id){
        $user = Auth::user();
        $detail = Location::where('id', $id)->with('schedule', 'service')->first();

        return view('pages.checkout', [
            'user' => $user,
            'detail' => $detail
        ]);
    }

    public function checkout(){
        $user = Auth::user();

        return view('pages.checkout', [
            'user' => $user,
        ]);
    }

    public function search(Request $request){
        $user = Auth::user();
        $service = $request->input('service');
        $sort = $request->input('sort');

        if(!$user->kelurahan){
            return redirect(url('user/profile'));
        }

        if($service == 'test'){
            if(!$sort || $sort == 'near'){
                $near = Location::where(['kelurahan', $user->kelurahan], ['service', 'test'])->with('service')->get();
                $all = Location::where('service', 'test')->with('service')->get();

                return view('pages.search', [
                    'user' => $user,
                    'near' => $near,
                    'all' => $all
                ]);
            }else{
                $sorted = Location::where([$sort, $user->$sort], ['service', 'test'])->with('service')->get();

                return view('pages.sort', [
                    'user' => $user,
                    'sorted' => $sorted
                ]);
            }
        }else {
            if(!$sort || $sort == 'near'){
                $near = Location::where(['kelurahan', $user->kelurahan], ['service', 'vaccine'])->with('schedule')->get();
                $all = Location::where('service', 'vaccine')->with('schedule')->get();

                return view('pages.search', [
                'user' => $user,
                'near' => $near,
                'all' => $all
                ]);
            } else{
                $sorted = Location::where([$sort, $user->$sort], ['service', 'vaccine'])->with('schedule')->get();

                return view('pages.sort', [
                    'user' => $user,
                    'sorted' => $sorted
                ]);
            }
            
        }

    }
}
