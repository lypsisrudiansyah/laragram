@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-8">
			<img src="/storage/{{ $show->image }}" class="w-100" alt="">
		</div>
		<div class="col-4">
			<div>
				<div class="d-flex align-items-center">
					<div class="pr-3">
						<img src="{{$show->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width: 40px;" alt="">
					</div>
					<div>
						<div class="font-weight-bold">
							<a href="/profile/{{$show->user->id}}">
								<span class="text-dark">{{$show->user->username}}</span>
							</a>
							<a href="javascript:void(0)" class="pl-3">Follow</a>
						</div>
					</div>
				</div>

				<hr>

				<p>
					<span class="font-weight-bold">
					<a href="/profile/{{$show->user->id}}">
						<span class="text-dark">{{ $show->user->username }}</span>
					</a>
					</span> {{$show->caption}}
				</p>
			</div>
		</div>
	</div>
</div>
@endsection
