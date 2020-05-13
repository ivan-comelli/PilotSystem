@extends('app')

@section('title', 'Lista de Pilotos')

@section('content')
	<div class="clearfix">
		<div class="row" style="box-shadow: 0 0 1px black; display: flex; align-items: center; padding: 1em;">
			<b class="col" style="font-size: 2em;">Avatar</b>
			<b class="col" style="font-size: 2em;">Nombre</b>
			<b class="col" style="font-size: 2em;">Apellido</b>
			<b class="col" style="font-size: 2em;">Localidad</b>
			<b class="col" style="font-size: 2em;">Rol</b>
			<b class="col" style="font-size: 2em;">Nacimiento</b>
		</div>
		@foreach ($users as $user)
			<div class="row" style="box-shadow: 0 0 1px black; display: flex; align-items: center; padding: 1em;">
				<img class="col" src="{{ $user->file }}" style="width: 5em; border-radius: 1em">
				<span class="col" style="font-size: 2em;">
					{{ $user->firstname }}
				</span>
				<span class="col" style="font-size: 2em;">
					{{ $user->lastname }}
				</span>
				<span class="col" style="font-size: 2em;">
					{{ $user->location }}
				</span>
				<span class="col" style="font-size: 2em;">
					{{ $user->role }}
				</span>
				<span class="col" style="font-size: 2em;">
					{{ $user->birthdate }}
				</span>
			</div>
		@endforeach
	</div>
@endsection