@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-8">
			<img src="/storage/{{ $show->image }}" class="w-100" alt="">
		</div>
		<div class="col-4">
			<div>
				<h3>{{$show->user->username}}</h3>

				<p>{{$show->caption}}</p>
			</div>
		</div>
	</div>
</div>
@endsection
