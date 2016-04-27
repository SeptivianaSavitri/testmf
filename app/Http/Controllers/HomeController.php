<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Restoran;
use App\Menu;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

use Session;

class HomeController extends Controller
{
    public function home()
	{
		return view('home');
	}

	public function calculateFood(Request $request)
	{

		$user = $request->session()->get('email');
		if($user == null){
			return view('home');
		}
		//echo $user;
		$restoran = Input::get('restoran');
		$jmlOrang =Input::get('orang');
		if($restoran===null){
            return Redirect::to('/home');
        } else { 
		$resto = Restoran::find($restoran);
		$menus = Menu::where('id_restoran', '=', $restoran)->lists('nama', 'id');
		$data = array(
                'resto'      => $resto,
                'jmlOrang'     => $jmlOrang,
                'menus'  => $menus,
                'orang' => 1
            );
		Session::put($data);
		return Redirect::to('/calculateFood/1');
	}
	}
}
