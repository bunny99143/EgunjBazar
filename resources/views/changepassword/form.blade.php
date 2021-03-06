
 <!-- <form method="POST" action="{{ url('/changepassword') }}" class="registration-form"> -->
@csrf

<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Old Password</label>
		<div class="col-sm-12 col-md-10">
			{!! Form::password('old_password', null,['placeholder'=>'Old Password', 'style'=>'width:40%;','class'=>'form-control','required']) !!}
			@error('old_password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">New Password </label>
		<div class="col-sm-12 col-md-10">
			{!! Form::password('new_password', null,['placeholder'=>'New Password', 'style'=>'width:40%;','class'=>'form-control','required']) !!}
			@error('new_password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Conform Password</label>
		<div class="col-sm-12 col-md-10">
			{!! Form::password('cpassword', null,['placeholder'=>'conform Password ', 'style'=>'width:40%;','class'=>'form-control','required']) !!}
			@error('cpassword')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary"> Submit</button>
	</div>