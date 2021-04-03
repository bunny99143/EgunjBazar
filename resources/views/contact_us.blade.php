
@extends('fornt_layout.layout')
@section('content')
	
<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
  }
  
  * {
    box-sizing: border-box;
  }
  
  /* Style inputs */
  input[type=text],input[type=email], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
  
  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  /* Style the container/contact section */
  /* .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
  } */
  
  /* Create two columns that float next to eachother */
  .column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
  }
  
  /* Clear floats after the columns */
  /* .row:after {
    content: "";
    display: table;
    clear: both;
  } */
  
  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .column, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }
  </style>

<section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6 bg-section-secondary">
  <div class="container">
<div style="text-align:center">
@if ($message = Session::get('success'))
    <div class="row alert" >
       <div class="col-4" ></div>				<div class="col-4" >
        <p style="margin:0px;color:white;border-color: rgba(0, 128, 0, 0.54);background-color: rgba(0, 128, 0, 0.54);border-radius: 4px;padding: 10px 10px;width:300px;text-align:center;">{{ $message }}</p>
      </div>
      <div class="col-4" ></div>	
      </div>
    @endif
    @if ($message = Session::get('error'))
      <div class="alert" >
        <p style="margin:0px;color:white;border-color: #F64E60;background-color:#F64E60;border-radius: 4px;padding: 10px 10px;width:300px;text-align:center;">{{ $message }}</p>
      </div>
    @endif
  <h2>Contact Us</h2>
  <p>Email us with any question or inquires or call +918200383167 .We would be happy to answer your question:</p>
</div>
<div class="row">
  <div class="column">
    <img src="/w3images/map.jpg" style="width:100%">
  </div>
  <div class="column">

  <form action="{{ url('/contact_us') }}" method="post" style="display: inline-block;">
  @csrf
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="f_name" placeholder="Your name..">
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="l_name" placeholder="Your last name..">
      
      <label for="lname">E-mail</label>
      <input type="email" id="email" name="email" placeholder="Your Email..">
      
      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
      <input type="submit" value="Submit">
    </form>
  </div>
</div>
</div>

  </section>

@endsection

	