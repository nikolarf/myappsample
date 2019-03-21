@extends('layouts.app')

@section('content')
	<h1>Home</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus id dignissimos dolores tempora esse vel ad culpa nulla, itaque quas. Sapiente dolores suscipit quo vel est ipsum vero dolorum atque.</p>
@endsection

@section('sidebar')
	@parent
	<div class="sidebar">
		<p>Appended Sidebar</p>
	</div>
@endsection