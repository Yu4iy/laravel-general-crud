
@extends('layouts.main')

@section('content')
<section class="form-create">
	<div class="form-create__wrap">
			<a class="close-btn" href="{{route('profiles.index')}}"><i class="fas fa-times"></i></a>
			<form action="{{route('profiles.update', $profile['id'])}}" method="POST">
				@csrf
				@method('PATCH')
				<div class="form-create__item">
					<label for="first_name"  ">First Name:</label>
					<input value="{{$profile['first_name']}}" id="first_name"  type="text" name="first_name" />
				</div>

				<div class="form-create__item">
					<label for="last_name" >Last Name:</label>
					<input value="{{$profile['last_name']}}"  id="last_name"  type="text" name="last_name" />
				</div>

				<div class="form-create__item">
					<label for="age" >Age:</label>
					<input value="{{$profile['age']}}" id="age"  type="number" name="age" />
				</div>

				<div class="form-create__item">
					<label for="date_of_birth" >Date of Birth:</label>
					<input value="{{$profile['date_of_birth']}}" id="date_of_birth"  type="date" name="date_of_birth" />
				</div>
				
				<div class="form-create__item">
					<label for="gender" >Gender:</label>
					<input value="{{$profile['gender']}}" id="gender" type="text" name="gender" />
				</div>

				<div class="form-create__item">
					<label for="country">Country:</label>
					<input value="{{$profile['country']}}" id="country"  type="text" name="country" />
				</div>

				<div class="form-create__item">
					<label for="city" >City:</label>
					<input value="{{$profile['city']}}" id="city" type="text" name="city" />
				</div>

				<div class="form-create__item">
					<label for="address">Address:</label>
					<input value="{{$profile['address']}}" id="address"  type="text" name="address" />
				</div >
				<div class="form-create__item">
					<label for="img_url">Img url:</label>
					<input value="{{$profile['img_url']}}" id="img_url"  type="text" name="img_url" />
				</div >

				<div class="form-create__item">
					<label for="cell" >Cell:</label>
					<input value="{{$profile['cell']}}" id="cell"  type="tel" name="cell" />
				</div>

				<div class="form-create__item">	
					<label for="criminal" >Criminal:</label>
					<select  id="criminal" name="criminal" >
						<option value="{{$profile['criminal']}}" value="1">Yes</option>
						<option value="{{$profile['criminal']}}" value="0">No</option>
					 </select>
				</div>
				<div class="form-create__item">
					<label for="active_warants" >Warants:</label>
					<select id="active_warants" name="active_warants">
						<option value="{{$profile['active_warants']}}" value="1">Yes</option>
						<option value="{{$profile['active_warants']}}" value="0">No</option>
					 </select>
				</div>
				<button class="form-create__btn">EDIT</button>
			</form>
	</div>
</section>
@endsection