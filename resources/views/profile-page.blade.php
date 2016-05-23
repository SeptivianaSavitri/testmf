@extends('layout')

@section('title')
<title>MargoFoodies - Home</title>
@stop

@section('content')
<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->
<?php 
	$photo = DB::table('photos')->where('id_photo',$user->id_photo)->first();
	$link = $photo->alamat;
	if (!isset($link)) {
		$link = 'images/pp/default_pp.png';
	}
?>
<div class="container">
	<div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="{{$link}}" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						{{ $user->nama_lengkap }}
					</div>
					<div class="profile-usertitle-email">
						{{ $user->email }}
					</div>
					<div class="profile-usertitle-desc">
						{{ $user->deskripsi }}
					</div></br>
					<div class="profile-usertitle-poin">
						Poin : {{ $user->total_point }}
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<!-- <div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div> -->
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="{{ URL::to('/profile') }}"><i class="glyphicon glyphicon-home"></i> My Profile </a>
						</li>
						<li>
							<a href="{{ URL::to('/editProfile') }}"><i class="glyphicon glyphicon-user"></i> Account Settings </a>
						</li>
						<!-- <li>
							<a href="#" target="_blank"><i class="glyphicon glyphicon-ok"></i>Tasks </a>
						</li>
						<li>
							<a href="#"><i class="glyphicon glyphicon-flag"></i>Help </a>
						</li> -->
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
			<div class="profile-content">
				<h2>User Review</h2>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<?php 
if(Session::has('success')) {
	echo "<script type='text/javascript'>alert('Perubahan Berhasil');</script>";
}
?>
@stop