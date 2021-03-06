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

        // return $history;
        return view('dashboard', [
            'user' => $user,
            'history' => $history
        ]);
    }

    public function details(Request $request, $id){
        $user = Auth::user();
        $service = $request->input('service');
        if($service == 'test'){
            $detail = Location::where('id', $id)->with('service')->first();
        }elseif($service == 'vaccine'){
            $detail = Location::where('id', $id)->with('schedule')->first();
        }else{
            return redirect(route('dashboard'));
        }

        $isregis = Registrant::where([['user_id', $user->id], ['location_id', $id]])->first();

        
        if($isregis){
            $bool = 'no';
        } else {
            $bool = 'yes';
        }
        return view('pages.detail', [
            'user' => $user,
            'detail' => $detail,
            'location_id' => $id,
            'possible' => $bool
        ]);
    }

    public function checkout(Request $request){
        $user = Auth::user();
        $location = $request->input('location');

        $data = [
            'user_id' => $user->id,
            'location_id' => $location
        ];

        Registrant::create($data);

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
                $near = Location::where([['kelurahan', $user->kelurahan], ['service_type', 'test']])->with('service')->get();
                $all = Location::where('service_type', 'test')->with('service')->get();

                // return $near;
                return view('pages.search', [
                    'user' => $user,
                    'near' => $near,
                    'all' => $all
                ]);
            }else{
                $sorted = Location::where([[$sort, $user->$sort], ['service_type', 'test']])->with('service')->get();

                return view('pages.sort', [
                    'user' => $user,
                    'sorted' => $sorted
                ]);
            }
        }else {
            if(!$sort || $sort == 'near'){
                $near = Location::where([['kelurahan', $user->kelurahan], ['service_type', 'vaccine']])->with('schedule')->get();
                $all = Location::where('service_type', 'vaccine')->with('schedule')->get();

                // return $all;
                return view('pages.search', [
                'user' => $user,
                'near' => $near,
                'all' => $all
                ]);
            } else{
                $sorted = Location::where([[$sort, $user->$sort], ['service_type', 'vaccine']])->with('schedule')->get();

                return view('pages.sort', [
                    'user' => $user,
                    'sorted' => $sorted
                ]);
            }
            
        }

    }
}
