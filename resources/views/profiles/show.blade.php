
@extends('layouts.main')

@section('content')
<section class="show-page">
	<div class="profile-display">
		<div class="profile-display__info">
			<img class="profile-display__img" src="{{$profile['img_url']}}" alt="">
			<div>
				<div class="profile-display__info">Name: {{$profile['first_name']}} {{$profile['last_name']}}</div>
				<div class="profile-display__info">Age: {{$profile['age']}}</div>
				<div class="profile-display__info">Date of Birth: {{$profile['date_of_birth']}}</div>
				<div class="profile-display__info">Gender: {{$profile['gender']}}</div>
			</div>
		</div>
		<div class="profile-display__location">
			<div>Country: {{$profile['country']}}</div>
			<div>City: {{$profile['city']}}</div>
			<div>Address: {{$profile['address']}}</div>
			<div>Cell: {{$profile['cell']}}</div>
			<div>Criminal: @if ($profile['criminal'] === 1) <span class="yes">Yes</span> @else <span class="no">No</span> @endif</div>
			<div>Active Warants: @if ($profile['active_warants'] === 1) <span class="yes">Yes</span> @else <span class="no">No</span> @endif</div>
			<form action="{{route('profiles.destroy', $profile['id'])}}" method="POST">
				<a href="{{route('profiles.edit', $profile['id'])}}" class="profile-display__btn">edit</a>
				@csrf
				@method('DELETE')
				<button type="submit" class="profile-display__btn"">remove</a>
			</form>
		</div>
		
	</div>
</section>
@endsection