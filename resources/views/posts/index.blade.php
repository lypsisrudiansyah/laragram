@extends('layouts.app')

@section('content')
<div class="container">
	@foreach ($posts as $opm)

		<div class="row">
			<div class="col-6 offset-3">
				<a href="/profile/{{$opm->user->id}}">
					<img src="/storage/{{ $opm->image }}" class="w-100" alt="">
				</a>
			</div>
		</div>
		<div class="row pt-2 pb-4">
			<div class="col-6 offset-3">
				<div>

					<p>
						<span class="font-weight-bold">
							<a href="/profile/{{$opm->user->id}}">
								<span class="text-dark">{{ $opm->user->username }}</span>
							</a>
						</span> {{$opm->caption}}
					</p>
				</div>
			</div>
		</div>


	@endforeach

	<div class="row">
		<div class="col-12 d-flex justify-content-center">
			{{$posts->links()}}
		</div>
	</div>
</div>
@endsection
