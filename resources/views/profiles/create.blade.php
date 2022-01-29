
@extends('layouts.main')

@section('content')
<section class="form-create">
	<div class="form-create__wrap">
		<div class="form-create__filde">
			<form action="{{route('profiles.store')}}" method="POST">
				@csrf
				<div class="form-create__item">
					<label for="first_name"  ">First Name:</label>
					<input id="first_name"  type="text" name="first_name" />
				</div>

				<div class="form-create__item">
					<label for="last_name" >Last Name:</label>
					<input id="last_name"  type="text" name="last_name" />
				</div>

				<div class="form-create__item">
					<label for="age" >Age:</label>
					<input id="age"  type="number" name="age" />
				</div>

				<div class="form-create__item">
					<label for="date_of_birth" >Date of Birth:</label>
					<input id="date_of_birth"  type="date" name="date_of_birth" />
				</div>
				
				<div class="form-create__item">
					<label for="gender" >Gender:</label>
					<input id="gender" type="text" name="gender" />
				</div>

				<div class="form-create__item">
					<label for="country">Country:</label>
					<input id="country"  type="text" name="country" />
				</div>

				<div class="form-create__item">
					<label for="city" >City:</label>
					<input id="city" type="text" name="city" />
				</div>

				<div class="form-create__item">
					<label for="address">Address:</label>
					<input id="address"  type="text" name="address" />
				</div >
				<div class="form-create__item">
					<label for="img_url">Img url:</label>
					<input id="img_url"  type="text" name="img_url" />
				</div >

				<div class="form-create__item">
					<label for="cell" >Cell:</label>
					<input id="cell"  type="tel" name="cell" />
				</div>

				<div class="form-create__item">	
					<label for="criminal" >Criminal:</label>
					<select id="criminal" name="criminal" >
						<option value="1">Yes</option>
						<option value="0">No</option>
					 </select>
				</div>
				<div class="form-create__item">
					<label for="active_warants" >Warants:</label>
					<select id="active_warants" name="active_warants">
						<option value="1">Yes</option>
						<option value="0">No</option>
					 </select>
				</div>
				<button class="form-create__btn">CREATE</button>
			</form>
		</div>
	</div>
</section>
@endsection