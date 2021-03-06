@extends('layouts.layout')
@section('content')
	<div class="main-container">
		<div class="pd-ltr-20">
		
			<div class="pd-20 card-box mb-30">
				<h2 class="h4 pd-20">Create Product</h2>
<hr>

{{ Form::open(array('url' => route('product.store'), 'method' => 'POST', 'files' => true ,  'class'=>'col-md-12')) }}
                
@include('product.form')

{{ Form::close() }}

							
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box" style="bottom: 0;">
				E-Gunj Bazar
			</div>
		</div>
    </div>
@endsection

	