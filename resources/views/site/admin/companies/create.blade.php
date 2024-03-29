@extends('site.layout')

@section('title')
	Promotegh.com - Add Business
@stop

@section('content')
<div class="main-container">
	<div class="container">
		<div class="row">
			<div class="col-md-8 page-content">
				<div class="inner-box category-content">
					<h2 class="title-2"><i class="fa fa-home" aria-hidden="true"></i> Create your business account, Its free  </h2>
					<div class="row">
						<div class="col-sm-12">
						@if (count($errors) > 0)
		                    <div class="alert alert-danger">
		                        <ul>
		                            @foreach ($errors->all() as $error)
		                                <li>{{ $error }}</li>
		                            @endforeach
		                        </ul>
		                    </div>
		                @endif
							<form action="{{url('/companies')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
								{{ csrf_field() }}
								<fieldset>
									<div class="form-group">
										<label class="col-md-3 control-label">Registering As</label>
										<div class="col-md-8">
											<label class="radio-inline btn btn-warning" for="radios-0">
												<input style="margin: 4px 4px 0px -5px;" name="account_type" id="radios-0" value="1" type="radio" checked="checked">
												<strong>A Seller </strong>
											</label>
											<label class="radio-inline  btn btn-danger" for="radios-1">
												<input style="margin: 4px 4px 0px -5px;" name="account_type" id="radios-1" value="2" type="radio">
												<strong>A Manufacturers</strong>
											</label>
											<span class="help-block">Specify whether you produce the product or just sell them</span>
										</div>
									</div>

									<div class="form-group required">
										<label class="col-md-4 control-label">Company/Business Name <sup>*</sup></label>
										<div class="col-md-6">
											<input name="name" placeholder="Business Name" class="form-control input-md" value="{{ old('name') }}" required type="text">
										</div>
									</div>

									<div class="form-group required">
										<label class="col-md-4 control-label">Company/Business Location <sup>*</sup></label>
										<div class="col-md-4">
											<input name="company_location" id="company_location" placeholder="Select Business Location" value="{{ old('company_location') }}" class="form-control input-md" onkeypress="return false;" onkeydown="return false;" type="text" autocomplete="off" required>
											<input type="hidden" name="location_city" id="location_city" value="">
										</div>
										<div class="col-md-2">
											<a class="btn  btn-primary" data-toggle="modal" href="#changeLocation"><i class=" icon-location-2"></i> Select Location </a>
										</div>

									</div>


									<div class="form-group required">
										<label class="col-md-4 control-label">Phone Number <sup>*</sup></label>
										<div class="col-md-5">
											<input name="number" value="{{ $user['phone_number'] }}" placeholder="Phone Number" class="form-control input-md" type="text" required>
										</div>
										<div class="col-md-1">
											<label class="checkbox-inline" for="on_whatsapp">
												<input name="on_whatsapp" id="on_whatsapp" value="1" type="checkbox">
													<i class="fa fa-whatsapp fa-2x" style="color: green;"></i>
											</label>
										</div>

									</div>

									<div class="form-group">
										<label class="col-md-4 control-label" for="textarea">About Business</label>
										<div class="col-md-6">
											<textarea class="form-control" id="textarea" name="other_description" placeholder="A little About Your Business">{{ old('other_description') }}</textarea>
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-3 control-label" for="textarea"> Logo </label>
										<div class="col-md-8">
											<div class="mb10">
												<input id="Comp_logo" name="logo" type="file" class="file" data-preview-file-type="image" accept=".png,.jpg">
											</div>
											<p class="help-block">Add Your Company/Business Logo</p>
										</div>
									</div>


									<hr/>
									<h4>Optional Map Feature</h4>
									<div class="form-group">
										<label for="searchmap" class="col-md-4 control-label">Search Your Location
										</label>
										<div class="col-md-6">
											<input id="searchmap" class="form-control" type="text">
										</div>
									</div>
									
									<div class="form-group">
										<sup style="color: #318434; text-align: center;">Move Position Marker To The Location Of Your Business/Shop</sup>
										<div class="col-md-12" id="map-canvas" style="height: 250px;"></div>
									</div>

									<div class="form-group">
										<label for="searchmap" class="col-md-3 control-label">Your Map Coordinates</label>
										<div class="col-md-4">
											<label for="lat" class="col-md-2 control-label">Lat</label>
											<div class="col-md-10">
												<input id="lat" class="form-control input-md" name="lat" type="text" readonly="">
											</div>
										</div>
										<div class="col-md-4">
											<label for="lat" class="col-md-2 control-label">Lng</label>
											<div class="col-md-10">
												<input id="lng" class="form-control input-md" name="lng" type="text" readonly="">
											</div>
										</div>

									</div>
									<hr/>
										
									<div class="form-group">
										<label class="col-md-4 control-label"></label>
										<div class="col-md-8">
											<div class="termbox mb10">
												<label class="checkbox-inline" for="checkboxes-1">
													<input name="checkboxes" id="checkboxes-1" value="1" type="checkbox" required="">
														I have read and agree to the 
														<a href="#">Terms
													& Conditions</a> 
												</label>
											</div>
											<div style="clear:both"></div>
											
											<button id="Submitbutton" type="submit" class="btn btn-primary">
												Create Business Profile
											</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 reg-sidebar">
				<div class="reg-sidebar-inner text-center">

				<div class="inner-box no-padding">
					<img class="img-responsive" src="{{url('images/add3.jpg')}}" alt="">
				</div>

					<div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>
						<h3><strong>Post a Free Product or Service</strong></h3>
						<p> Post your free product or service ads with us. Get your product onto the large family of GH products </p>
					</div>
					<div class="promo-text-box"><i class=" icon-pencil-circled fa fa-4x icon-color-2"></i>
						<h3><strong>Create and Manage Items</strong></h3>
						<p>Easily Add and Manage your Ghana Made Products or Services posted here.</p>
					</div>
					<div class="promo-text-box"><i class="  icon-heart-2 fa fa-4x icon-color-3"></i>
						<h3><strong>Create your Favorite ads list.</strong></h3>
						<p> Boost your favorite products by setting a list of your best products or service.</p>
					</div>

				
				</div>
			</div>
		</div>

	</div>

	@include('site.location_modal')
</div>
@stop

@section('scripts')
<script type="text/javascript" src="{{asset('/assets/js/map_init_function.js')}}"></script>
<?php 
		if(session('info_message')){
			?>
			<script type="text/javascript">
				setTimeout(function() {
	            	Materialize.toast('<span><b>{{ session('info_message') }}</b></span>', 6000, 'btn-primary');
	        	}, 600);
			</script>
			<?php
		}
	?>

<script type="text/javascript">
$('#company_location').on('change keyup paste click keypress keydown', function () {
	return false;
});

initialize_image_input('Comp_logo');

</script>
<script type="text/javascript">
	var pos = {
      	lat:5.6037168,
      	lng:-0.1869644
      };
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
      	//set the mapto the current location
         var currentpos = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };
        create_map(currentpos);

      }, function() {
        //set the map to the default location if location fails
       create_map(pos);
      });
    } else {
      // Browser doesn't support Geolocation
      // set the map to the default location 
      create_map(pos);
    }

    


</script>
	
@stop