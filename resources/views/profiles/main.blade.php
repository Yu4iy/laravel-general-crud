
@extends('layouts.main')

@section('content')
	<section class="profiles">
		<div class="container">
			<ul class="profiles__row">
				@forelse ($profiles as $profile )
				<a href="{{route('profiles.show', $profile['id'])}}">
					<li class="profiles__item">
						<img src="{{$profile['img_url']}}" alt="">
						<h4>{{$profile['first_name'].' '.$profile['last_name']}}</h4>
						<div>age: {{$profile['age']}}</div>
						<div>Criminal: @if ($profile['criminal'] === 1) <span class="yes">Yes</span> @else <span class="no">No</span> @endif</div>
						<div>Active Warants: @if ($profile['active_warants'] === 1) <span class="yes">Yes</span> @else <span class="no">No</span> @endif</div>
					</li>
				</a>
					@empty
					<h2 class="profiles__placeholder">DATA BASE EMPTY</h2>
					@endforelse



			</ul>
		</div>
	</section>
@endsection