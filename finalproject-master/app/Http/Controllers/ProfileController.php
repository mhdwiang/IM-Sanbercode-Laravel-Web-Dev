<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $iduser = Auth::id();

        $detailProfile = Profile::where('user_id', $iduser)->first();

        return view('profile.index', ['detailProfile' => $detailProfile]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'umur' => 'required',
            'alamat' => 'required',
            'biodata' => 'required',
        ]);

        $profile = Profile::find($id);

        $profile->umur = $request->umur;
        $profile->alamat = $request->alamat;
        $profile->biodata = $request->biodata;

        $profile->save();

        return redirect('/profile');
    }
}
