@extends('layouts.app')

@section('content')
	<h1>Contact123</h1>
	<br>
	<div class="container">
	<div class="row">
		<div class="form_main">
            <h4 class="heading"><strong>Quick </strong> Contact <span></span></h4>
            <div class="form">
                <form action="{{ url('contact/submit') }}" method="post" id="contactFrm" name="contactFrm">
                    {{ csrf_field() }}
                    <input type="text" placeholder="Please input your Name" value="" name="name" class="txt">
                    <input type="text" placeholder="Please input your Email" value="" name="email" class="txt">
                	<textarea placeholder="Your Message" name="message" type="text" class="txt_3"></textarea>
                    <input type="submit" value="submit" name="submit" class="txt2">
                </form>
        	</div>
        </div>
    </div>
</div>
@endsection