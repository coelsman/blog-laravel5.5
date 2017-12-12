@extends('layouts.app')
@section('content')
	<section id="menu" class="bg-orange">
		<div class="container-fluid row relative">
			<div class="col col-sm-9 col-xs-12">
				<ul>
					<li><a href="#">Posted</a></li>
					<li><a href="#">Filled</a></li>
					<li><a href="#">Today</a></li>
					<li><a href="#">Completed</a></li>
				</ul>
			</div>

			<div class="col col-xs-3">
				<div class="search relative">
					<input type="text" name="" class="form-control" placeholder="Search" id="txt-search">
					<i class="fa fa-search absolute"></i>
				</div>
			</div>
		</div>
	</section>

	<section id="content">
		<div class="container-fluid">
			<div class="clearfix">
				<div class="col col-xs-12">
					<div class="date-dropdown relative">
						<span tabindex="0">OCT 23-29/2017</span>
						<ul class="absolute">
							<li>OCT 17-22/2017</li>
							<li>OCT 11-16/2017</li>
							<li>OCT 02-10/2017</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			@include('handlebars.all_events')
		</div>
	</section>

	@section('scripts')
		 <script src="http://localhost:8890/socket.io/socket.io.js"></script>
		 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script> -->
	@stop
@stop