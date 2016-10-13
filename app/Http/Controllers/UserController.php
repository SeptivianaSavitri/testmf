<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\CheckIn;
use App\Photo;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use DB;
use Session;

class UserController extends Controller
{

    public function create()
    {
        return view('register');
    }

    // menyimpan (store) data yg sudah tervalidasi kedatabase
    public function store(Request $request)
    {
        //Users::create($request->all());
        $this->validate($request, [
            'nama' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|required',
            're-pass' => 'required|same:password',
            ]);
        $user = new User;
        $user->nama_lengkap = Input::get('nama');
        $user->email = Input::get('email');
        $user->password = md5(Input::get('password'));
        $user->id_photo = 'u'.Input::get('email');
        $user->save();

        $foto = new Photo;
        $foto->id_photo = 'u'.Input::get('email');
        $foto->save();

        return Redirect::to('/home');
    }

    /**
     * Autentikasi user yang mencoba untuk login
     *
     * @author Putra Muttaqin
     */
    public function dologin()
    {
        $email = Input::get('email');
        $pass = md5(Input::get('password'));
        $user= DB::table('users')->where([['email',$email],['password',$pass]])->first();
        if($user===null){

            $loginerr = 'Wrong email or password';
            return Redirect::to('/home')->with('loginerr',$loginerr);
        } else {

            $userdata = array(
                'nama'      => $user->nama_lengkap,
                'email'     => $user->email,
                'password'  => $user->password,
                'total_poin' => $user->total_point
                );
            // menambahkan poin apabila berhasil login, namun poin yg dihitung adalah 1 login tiap hari by Rama Rahmatullah
            $loginTime = Carbon::now();
            DB::table('waktu_login_users')->insert(['email' => $email],['login_time' => $loginTime]);
            $currTime = Carbon::now();
            $userLog = DB::table('waktu_login_users')->select('login_time')->where('email',$email)->orderBy('login_time','desc')->get();

            if( empty($userLog[1])   ){
                $lastLogin = Carbon::parse($userLog[0]->login_time);
                $userpoin = DB::table('users')->select('total_point')->where('email', $email)->first();
                $poinuser = $userpoin->total_point;
                $poin = $poinuser + 10;

                DB::table('point_history')->insert(['email' => $email, 'id_point' => 'PFL', 'waktu' => $loginTime]);
                DB::table('users')->where('email', $email)->update(['total_point' => $poin]);
            } else {
                $lastLogin = Carbon::parse($userLog[1]->login_time);

                if ($currTime->DiffInSeconds($lastLogin) > 86400) {
                    # code...
                    $userpoin = DB::table('users')->select('total_point')->where('email', $email)->first();
                    $poinuser = $userpoin->total_point;
                    $poin = $poinuser + 10;

                    DB::table('point_history')->insert(['email' => $email, 'id_point' => 'PFL', 'waktu' => $loginTime]);
                    DB::table('users')->where('email', $email)->update(['total_point' => $poin]);
                }
            }

            Session::put('user',$user);
            return Redirect::to('/home');
            // $loginerr = 'Wrong email or password';
            // return Redirect::to('/home')->with('loginerr',$loginerr);
        }
        // else {
        //     Session::put('user',$user);
        //     return Redirect::to('/home');
        // }
    }

    /**
     * Menghilangkan data user yang sudah login sebelumnya
     *
     * @author Putra Muttaqin
     */
    public function logout()
    {
        Session::flush();
        //Session::forget('nama','email','password');
        return Redirect::to('/home');
    }

    /**
     * Mengembalikan profile user
     *
     * @author Putra Muttaqin
     */
    public function profile() {
        //$poin = DB::table('users')->select('total_point')->where('email',Session::get('user')->email)->first();
        $user = \App\User::where('email',Session::get('user')->email)->first();
        // $poin = DB::table('users')->select('total_point')->where(['email',Session::get('user')->email])->first();
        return view("profile-page", compact('user'));
    }

    /**
     * Konfirmasi perubahan pada data profile
     *
     * @author Putra Muttaqin
     */
    public function confirmEdit(Request $request) {
        $this->validate($request, [
            'nama' => 'min:3|max:255',
            'newPass' => 'min:6',
            'confirmNewPass' => 'same:newPass',
            'desc' => '',
            'currPass' => 'required'
            ]);

        $user = User::where('email',Session::get('user')->email)->first();
        $currPass = Input::get('currPass');
        $nama = Input::get('nama', $user->nama_lengkap);
        $newPass = Input::get('newPass', null);
        $desc = Input::get('desc', $user->deskripsi);

        $pass = md5(empty($newPass) ? $currPass : $newPass);

        if (md5($currPass) == $user->password) {
            if (User::where('email',$user->email)->update(['nama_lengkap' => $nama, 'password' => $pass, 'deskripsi' => $desc])) {
                Session::put('user',User::where('email',Session::get('user')->email)->first());
                if (isset($_FILES["pic-btn"]["name"])) {

                    $name = $_FILES["pic-btn"]["name"];
                    $tmp_name = $_FILES['pic-btn']['tmp_name'];
                    $error = $_FILES['pic-btn']['error'];

                    if (!empty($name)) {
                        $location = 'images/pp/';

                        if (move_uploaded_file($tmp_name, $location.$name)){
                            Photo::where('id_photo',$user->id_photo)->update(array('alamat' => $location.$name));
                        } else {

                        }

                    } else {
                        echo 'please choose a file';
                    }
                } else {
                    echo "<script type='text/javascript'>alert('file gagal');</script>";
                }
                return Redirect::to('profile')->with('success', 'berhasil');
            } else {
                return Redirect::to('editProfile')->with('dbErr','Error saat menyimpan ke database')->with('gagal','tidak berubah')->withInput();
            }
        } else {
            return Redirect::to('editProfile')->with('passErr','Password Salah!')->with('gagal','tidak berubah')->withInput();
        }
    }

    /**
     * user akan mendapatkan poin apabila melalukan 'Check in' ke suatu restoran
     * @author rama
    **/
    public function checkin($id) {
        if(session()->has('user')){
            $checkinTime = Carbon::now();
            $email = session()->get('user')->email;
            $restoran = \App\Restoran::where('id',$id)->first()->id;
            $hiscek_user = \App\CheckIn::where('email',$email);
            $hiscek_resto = \App\CheckIn::where('id_restoran',$restoran);

            if($hiscek_user == $email && $hiscek_resto == $restoran){
                return redirect()->route('restoranku', $id);
                dd($hiscek_user);
            } else {
                $checkinku = new CheckIn;
                $checkinku->email = $email;
                $checkinku->id_restoran = $restoran;
                $checkinku->waktu = $checkinTime;
                $checkinku->save();
                return app('App\Http\Controllers\RestoranController')->show($id);
            }
        } else{
            return redirect()->route('restoranku', $id);
        }
    }
}