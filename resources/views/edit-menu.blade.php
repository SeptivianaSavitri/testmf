@extends('layout')

@section('title')
<title> MargoFoodies - Edit Restoran</title>
@stop

@section('content')
<div class="container">
 	<div class="row profileResto">
		<div class="col-md-4">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-restopic">
					<div class="hovereffect">
						<img class="img-responsive fotoRestoran" src="uploads/{{$restoran->nama}}.png" alt="">
				        <br>
					</div>
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						{{ $restoran->nama }}
					</div>
					<div class="profile-usertitle-email">
						{{ $user }}
					</div>
					<div class="profile-usertitle-desc">
						{{ $restoran->deskripsi }}
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
						<li>
							<a href="{{ URL::to('/profileRestoran') }}"><i class="glyphicon glyphicon-home"></i> My Profile </a>
						</li>
						<li class="active">
							<a href="{{ URL::to('/editMenu') }}"><i class="glyphicon glyphicon-tasks"></i> Edit Menu </a>
						</li>
						<li>
							<a href="{{ URL::to('/editRestoran') }}"><i class="glyphicon glyphicon-grain"></i> Edit Restoran </a>
						</li>
						<li>
							<a href="{{ URL::to('/editWaktuOperasional') }}"><i class="glyphicon glyphicon-grain"></i> Edit Waktu Operasional </a>
						</li>
						<li>
							<a href="{{ URL::to('/editFasilitasRestoran') }}"><i class="glyphicon glyphicon-grain"></i> Edit Fasilitas Restoran </a>
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
		<div class="col-md-8">
			<div class="profile-content">
				<h2 style="color : red;">Edit Menu</h2>

				@if(count($menus))
				{!! $menus->links() !!}
				<div class="panel panel-default">
                    <div class="panel-heading">
                        Menu {{$restoran->nama}}
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">

                            <!-- Table Headings -->
                            <thead>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>&nbsp;</th>
                            </thead>

                            <!-- Table Body -->
                            <tbody>
                                @foreach ($menus as $menu)
                                    <tr>
                                       
                                        <td class="table-text">
                                           <div>{{$menu->nama}}</div>
                                        </td>
                                        <td class="table-text">
                                            <div>Rp.{{$menu->harga}},00</div>
                                        </td>
                                        <td>
                                            <form action="{{ url('deleteMenu') }}" method="POST" style="display:inline;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" name="menu" value="{{ $menu->id }}" class="btn btn-danger">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </form>
                                            <form action="{{ url('deleteMenu') }}" method="POST" style="display:inline;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" name="menu" value="{{ $menu->id }}" class="btn btn-danger">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </form>
                                            <form action="{{ url('deleteMenu') }}" method="POST" style="display:inline;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" name="menu" value="{{ $menu->id }}" class="btn btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
				@endif

			</div>
		</div>
	</div>
</div>
<br>
<br>
<script type="text/javascript">
	$(document).ready(function() {

		var a = document.getElementById("browse");
		a.onclick = function() {
			var btn = document.getElementById("pic-btn");
			btn.click();
		}
	});
</script>
</div>
@stop