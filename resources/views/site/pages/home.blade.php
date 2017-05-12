@extends('site.layout')

@section('title')
	Welcome to Promotegh.com
@stop
@section('content')
<div class="intro" style="background-image: url(images/made-in-ghana1.jpg);">
<div class="dtable hw100">
	<div class="dtable-cell hw100">
		<div class="container text-center">
			<h1 class="intro-title animated fadeInDown"> 
				<i class="icon-location-2"></i>Find Ghana Made Products and Services 
			</h1>
			<p class="sub animateme fittext3 animated fadeIn">
				 Find locally produced products and services around you in Minutes
			</p>
				<div class="row search-row animated fadeInUp">
					<div class="col-lg-4 col-sm-4 search-col relative locationicon">
						<i class="icon-location-2 icon-append"></i>
						<input type="text" name="country" id="autocomplete-ajax" class="form-control locinput input-rel searchtag-input has-icon" placeholder="City/Zipcode..." value="">
					</div>
					<div class="col-lg-4 col-sm-4 search-col relative">
						<i class="icon-docs icon-append"></i>
						<input type="text" name="ads" class="form-control has-icon" placeholder="I'm looking for a ..." value="">
					</div>
					<div class="col-lg-4 col-sm-4 search-col">
						<button class="btn btn-primary btn-search btn-block"><i class="icon-search"></i><strong>Find</strong></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="main-container">
	<div class="container">
		<div class="col-lg-12 content-box ">
			<div class="row row-featured row-featured-category">
				<div class="col-lg-12  box-title no-border">
					<div class="inner"><h2><span>Browse by</span>
						Category <a href="/all-categories" class="sell-your-item"> View more <i class="  icon-th-list"></i> </a></h2>
					</div>
				</div>
				@foreach($categories as $category)
					<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 f-category">
						<a href="/categories/{{$category['id']}}/{{ strtolower(str_replace(' ','-',$category['name']) ) }}"><img src="/uploads/category_images_thumb/{{$category['image']}}" class="img-responsive" alt="img">
							<h6> {{$category['name']}} </h6></a>
					</div>
				@endforeach
			</div>
		</div>
												<div style="clear: both"></div>
												<div class="col-lg-12 content-box ">
													<div class="row row-featured">
														<div class="col-lg-12  box-title ">
															<div class="inner"><h2><span>Sponsored </span>
																Products <a href="category.html" class="sell-your-item"> View more <i class="  icon-th-list"></i> </a></h2>
															</div>
														</div>
														<div style="clear: both"></div>
														<div class=" relative  content featured-list-row clearfix">
															<nav class="slider-nav has-white-bg nav-narrow-svg">
																<a class="prev">
																	<span class="nav-icon-wrap"></span>
																</a>
																<a class="next">
																	<span class="nav-icon-wrap"></span>
																</a>
															</nav>
															<div class="no-margin featured-list-slider ">
																<div class="item"><a href="ads-details-automobile.html">
																	<span class="item-carousel-thumb">
																		<img class="img-responsive" src="images/auto/2012-mercedes-benz-sls-amg.jpg" alt="img">
																	</span>
																	<span class="item-name"> 2011 Mercedes-Benz SLS AMG </span>
																	<span class="price"> $204,990 </span>
																</a>
															</div>
															<div class="item">
																<a href="ads-details.html">
																	<span class="item-carousel-thumb">
																		<img class="img-responsive" src="images/item/tp/Image00011.jpg" alt="img">
																	</span>
																	<span class="item-name"> Lorem ipsum dolor sit amet </span>
																	<span class="price"> $ 260 </span>
																</a>
															</div>
															<div class="item"><a href="ads-details.html">
																<span class="item-carousel-thumb"> <img class="item-img" src="images/item/tp/Image00006.jpg" alt="img"> </span>
																<span class="item-name"> consectetuer adipiscing elit </span>
																<span class="price"> $ 240 </span></a></div>
																<div class="item"><a href="ads-details.html">
																	<span class="item-carousel-thumb"> <img class="item-img" src="images/item/tp/Image00022.jpg" alt="img"> </span>
																	<span class="item-name"> sed diam nonummy </span> <span class="price"> $ 140</span></a>
																</div>
																<div class="item"><a href="ads-details.html">
																	<span class="item-carousel-thumb"> <img class="item-img" src="images/item/tp/Image00013.jpg" alt="img"> </span><span class="item-name"> feugiat nulla facilisis </span> <span class="price"> $ 140 </span></a></div>
																	<div class="item"><a href="ads-details.html">
																		<span class="item-carousel-thumb"> <img class="item-img" src="images/item/3.jpg" alt="img"> </span> <span class="item-name"> praesent luptatum zzril </span>
																		<span class="price"> $ 220 </span></a></div>
																		<div class="item"><a href="ads-details.html">
																			<span class="item-carousel-thumb"> <img class="item-img" src="images/item/4.jpg" alt="img"> </span> <span class="item-name"> delenit augue duis dolore </span>
																			<span class="price"> $ 120 </span></a></div>
																			<div class="item"><a href="ads-details.html">
																				<span class="item-carousel-thumb"> <img class="item-img" src="images/item/6.jpg" alt="img"> </span> <span class="item-name"> te feugait nulla facilisi </span>
																				<span class="price"> $ 251 </span></a></div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-lg-12 content-box ">
																	<div class="row row-featured">
																		<div style="clear: both"></div>
																		<div class=" relative  content  clearfix">
																			<div class="">
																				<div class="tab-lite">

																					<ul class="nav nav-tabs " role="tablist">
																						<li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"><i class="icon-location-2"></i> Top Locations</a></li>
																						<li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><i class="icon-search"></i> Top Search</a>
																						</li>
																						<li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"><i class="icon-th-list"></i> Top Makes</a>
																						</li>
																					</ul>

																					<div class="tab-content">
																						<div role="tabpanel" class="tab-pane active" id="tab1">
																							<div class="col-lg-12 tab-inner">
																								<div class="row">
																									<ul class="cat-list col-sm-3  col-xs-6 col-xxs-12">
																										<li><a href="category.html">Atlanta</a></li>
																										<li><a href="category.html"> Dallas </a></li>
																										<li><a href="category.html"> New York </a></li>
																										<li><a href="category.html">Santa Ana/Anaheim </a></li>
																										<li><a href="category.html">Wichita </a></li>
																										<li><a href="category.html"> Anchorage </a></li>
																										<li><a href="category.html"> Miami </a></li>
																										<li><a href="category.html">Los Angeles</a></li>
																									</ul>
																									<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
																										<li><a href="category.html">Boston </a></li>
																										<li><a href="category.html">Houston</a></li>
																										<li><a href="category.html">Salt Lake City </a></li>
																										<li><a href="category.html">Virginia Beach </a></li>
																										<li><a href="category.html"> San Diego </a></li>
																										<li><a href="category.html">San Francisco </a></li>
																										<li><a href="category.html">Tampa </a></li>
																										<li><a href="category.html"> Washington DC </a></li>
																									</ul>
																									<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
																										<li><a href="category.html">Virginia Beach </a></li>
																										<li><a href="category.html"> San Diego </a></li>
																										<li><a href="category.html">San Francisco </a></li>
																										<li><a href="category.html">Tampa </a></li>
																										<li><a href="category.html"> Washington DC </a></li>
																										<li><a href="category.html">Boston </a></li>
																										<li><a href="category.html">Houston</a></li>
																										<li><a href="category.html">Salt Lake City </a></li>
																									</ul>
																									<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
																										<li><a href="category.html">Salt Lake City </a></li>
																										<li><a href="category.html">San Francisco </a></li>
																										<li><a href="category.html">Tampa </a></li>
																										<li><a href="category.html"> Washington DC </a></li>
																										<li><a href="category.html">Virginia Beach </a></li>
																										<li><a href="category.html"> San Diego </a></li>
																										<li><a href="category.html">Boston </a></li>
																										<li><a href="category.html">Houston</a></li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div role="tabpanel" class="tab-pane" id="tab2">
																							<div class="col-lg-12 tab-inner">
																								<div class="row">
																									<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
																										<li><a href="category.html">Virginia Beach </a></li>
																										<li><a href="category.html"> San Diego </a></li>
																										<li><a href="category.html">Boston </a></li>
																										<li><a href="category.html">Houston</a></li>
																										<li><a href="category.html">Salt Lake City </a></li>
																										<li><a href="category.html">San Francisco </a></li>
																										<li><a href="category.html">Tampa </a></li>
																										<li><a href="category.html"> Washington DC </a></li>
																									</ul>
																									<ul class="cat-list col-sm-3  col-xs-6 col-xxs-12">
																										<li><a href="category.html">Atlanta</a></li>
																										<li><a href="category.html">Wichita </a></li>
																										<li><a href="category.html"> Anchorage </a></li>
																										<li><a href="category.html"> Dallas </a></li>
																										<li><a href="category.html"> New York </a></li>
																										<li><a href="category.html">Santa Ana/Anaheim </a></li>
																										<li><a href="category.html"> Miami </a></li>
																										<li><a href="category.html">Los Angeles</a></li>
																									</ul>
																									<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
																										<li><a href="category.html">Virginia Beach </a></li>
																										<li><a href="category.html"> San Diego </a></li>
																										<li><a href="category.html">Boston </a></li>
																										<li><a href="category.html">Houston</a></li>
																										<li><a href="category.html">Salt Lake City </a></li>
																										<li><a href="category.html">San Francisco </a></li>
																										<li><a href="category.html">Tampa </a></li>
																										<li><a href="category.html"> Washington DC </a></li>
																									</ul>
																									<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
																										<li><a href="category.html">Virginia Beach </a></li>
																										<li><a href="category.html"> San Diego </a></li>
																										<li><a href="category.html">Boston </a></li>
																										<li><a href="category.html">Houston</a></li>
																										<li><a href="category.html">Salt Lake City </a></li>
																										<li><a href="category.html">San Francisco </a></li>
																										<li><a href="category.html">Tampa </a></li>
																										<li><a href="category.html"> Washington DC </a></li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div role="tabpanel" class="tab-pane" id="tab3">
																							<div class="col-lg-12 tab-inner">
																								<div class="row">
																									<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
																										<li><a href="category.html">Virginia Beach </a></li>
																										<li><a href="category.html"> San Diego </a></li>
																										<li><a href="category.html">Boston </a></li>
																										<li><a href="category.html">Houston</a></li>
																										<li><a href="category.html">Salt Lake City </a></li>
																										<li><a href="category.html">San Francisco </a></li>
																										<li><a href="category.html">Tampa </a></li>
																										<li><a href="category.html"> Washington DC </a></li>
																									</ul>
																									<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
																										<li><a href="category.html">Virginia Beach </a></li>
																										<li><a href="category.html"> San Diego </a></li>
																										<li><a href="category.html">Boston </a></li>
																										<li><a href="category.html">Houston</a></li>
																										<li><a href="category.html">Salt Lake City </a></li>
																										<li><a href="category.html">San Francisco </a></li>
																										<li><a href="category.html">Tampa </a></li>
																										<li><a href="category.html"> Washington DC </a></li>
																									</ul>
																									<ul class="cat-list col-sm-3  col-xs-6 col-xxs-12">
																										<li><a href="category.html">Atlanta</a></li>
																										<li><a href="category.html">Wichita </a></li>
																										<li><a href="category.html"> Anchorage </a></li>
																										<li><a href="category.html"> Dallas </a></li>
																										<li><a href="category.html"> New York </a></li>
																										<li><a href="category.html">Santa Ana/Anaheim </a></li>
																										<li><a href="category.html"> Miami </a></li>
																										<li><a href="category.html">Los Angeles</a></li>
																									</ul>
																									<ul class="cat-list cat-list-border col-sm-3  col-xs-6 col-xxs-12">
																										<li><a href="category.html">Virginia Beach </a></li>
																										<li><a href="category.html"> San Diego </a></li>
																										<li><a href="category.html">Boston </a></li>
																										<li><a href="category.html">Houston</a></li>
																										<li><a href="category.html">Salt Lake City </a></li>
																										<li><a href="category.html">San Francisco </a></li>
																										<li><a href="category.html">Tampa </a></li>
																										<li><a href="category.html"> Washington DC </a></li>
																									</ul>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-sm-9 page-content col-thin-right">
																		<div class="inner-box category-content">
																			<h2 class="title-2">Find Classified Ads World Wide </h2>
																			<div class="row">
																				<div class="col-md-4 col-sm-4 ">
																					<div class="cat-list">
																						<h3 class="cat-title"><a href="category.html"><i class="fa fa-car ln-shadow"></i>
																							Automobiles <span class="count">277,959</span> </a>
																							<span data-target=".cat-id-1" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
																						</h3>
																						<ul class="cat-collapse collapse in cat-id-1">
																							<li><a href="category.html">Car Parts &amp; Accessories</a></li>
																							<li><a href="category.html">Campervans &amp; Caravans</a></li>
																							<li><a href="category.html">Motorbikes &amp; Scooters</a></li>
																							<li><a href="category.html">Motorbike Parts &amp; Accessories</a></li>
																							<li><a href="category.html">Vans, Trucks &amp; Plant</a></li>
																							<li><a href="category.html">Wanted</a></li>
																						</ul>
																					</div>
																					<div class="cat-list">
																						<h3 class="cat-title"><a href="category.html"><i class="icon-home ln-shadow"></i>
																							Property <span class="count">228,705</span></a> <span data-target=".cat-id-2" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span></h3>
																							<ul class="cat-collapse collapse in cat-id-2">
																								<li><a href="category.html">House for Rent</a></li>
																								<li><a href="category.html">House for Sale </a></li>
																								<li><a href="category.html"> Apartments For Sale </a></li>
																								<li><a href="category.html">Apartments for Rent </a></li>
																								<li><a href="category.html">Farms-Ranches </a></li>
																								<li><a href="category.html">Land </a></li>
																								<li><a href="category.html">Vacation Rentals </a></li>
																								<li><a href="category.html">Commercial Building</a></li>
																							</ul>
																						</div>
																						<div class="cat-list">
																							<h3 class="cat-title"><a href="category.html"><i class="icon-home ln-shadow"></i>
																								Jobs <span class="count">6375</span></a>
																								<span data-target=".cat-id-3" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
																							</h3>
																							<ul class="cat-collapse collapse in cat-id-3">
																								<li><a href="category.html">Full Time Jobs</a></li>
																								<li><a href="category.html">Internet Jobs </a></li>
																								<li><a href="category.html">Learn &amp; Earn jobs </a></li>
																								<li><a href="category.html"> Manual Labor Jobs </a></li>
																								<li><a href="category.html">Other Jobs </a></li>
																								<li><a href="category.html">OwnBusiness </a></li>
																							</ul>
																						</div>
																					</div>
																					<div class="col-md-4 col-sm-4">
																						<div class="cat-list">
																							<h3 class="cat-title"><a href="category.html"><i class="fa fa-briefcase ln-shadow"></i> Services <span class="count">45,526</span></a>
																								<span data-target=".cat-id-4" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
																							</h3>
																							<ul class="cat-collapse collapse in cat-id-4">
																								<li><a href="category.html">Building, Home &amp; Removals</a></li>
																								<li><a href="category.html">Entertainment</a></li>
																								<li><a href="category.html">Health &amp; Beauty</a></li>
																								<li><a href="category.html">Miscellaneous</a></li>
																								<li><a href="category.html">Property &amp; Shipping</a></li>
																								<li><a href="category.html">Tax, Money &amp; Visas</a></li>
																								<li><a href="category.html">Telecoms &amp; Computers</a></li>
																								<li><a href="category.html">Travel Services &amp; Tours</a></li>
																								<li><a href="category.html">Tuition &amp; Lessons</a></li>
																							</ul>
																						</div>
																						<div class="cat-list">
																							<h3 class="cat-title"><a href="category.html"><i class="icon-book-open ln-shadow"></i> Learning <span class="count">26,529</span></a> <span data-target=".cat-id-5" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
																							</h3>
																							<ul class="cat-collapse collapse in cat-id-5">
																								<li><a href="category.html"> Automotive Classes </a></li>
																								<li><a href="category.html"> Computer Multimedia Classes </a></li>
																								<li><a href="category.html"> Sports Classes </a></li>
																								<li><a href="category.html"> Home Improvement Classes </a></li>
																								<li><a href="category.html"> Language Classes </a></li>
																								<li><a href="category.html"> Music Classes </a></li>
																								<li><a href="category.html"> Personal Fitness </a></li>
																								<li><a href="category.html"> Other Classes </a></li>
																							</ul>
																						</div>
																						<div class="cat-list">
																							<h3 class="cat-title"><a href="category.html"><i class="icon-guidedog ln-shadow"></i> Pets <span class="count">42,111</span></a>
																								<span data-target=".cat-id-6" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
																							</h3>
																							<ul class="cat-collapse collapse in cat-id-6">
																								<li><a href="category.html">Pets for Sale</a></li>
																								<li><a href="category.html">Petsitters &amp; Dogwalkers</a></li>
																								<li><a href="category.html">Equipment &amp; Accessories</a></li>
																								<li><a href="category.html">Missing, Lost &amp; Found</a></li>
																							</ul>
																						</div>
																					</div>
																					<div class="col-md-4 col-sm-4   last-column">
																						<div class="cat-list">
																							<h3 class="cat-title"><a href="category.html"><i class=" icon-basket-1 ln-shadow"></i> For Sale <span class="count">64,526</span></a> <span data-target=".cat-id-7" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
																							</h3>
																							<ul class="cat-collapse collapse in cat-id-7">
																								<li><a href="category.html">Audio &amp; Stereo</a></li>
																								<li><a href="category.html">Baby &amp; Kids Stuff</a></li>
																								<li><a href="category.html">CDs, DVDs, Games &amp; Books</a></li>
																								<li><a href="category.html">Clothes, Footwear &amp; Accessories</a></li>
																								<li><a href="category.html">Computers &amp; Software</a></li>
																								<li><a href="category.html">Home &amp; Garden</a></li>
																								<li><a href="category.html">Music &amp; Instruments</a></li>
																								<li><a href="category.html">Office Furniture &amp; Equipment</a></li>
																								<li><a href="category.html">Phones, Mobile Phones &amp; Telecoms</a></li>
																								<li><a href="category.html">Sports, Leisure &amp; Travel</a></li>
																								<li><a href="category.html">Tickets</a></li>
																								<li><a href="category.html">TV, DVD &amp; Cameras</a></li>
																								<li><a href="category.html">Video Games &amp; Consoles</a></li>
																								<li><a href="category.html">Freebies</a></li>
																								<li><a href="category.html">Miscellaneous Goods</a></li>
																								<li><a href="category.html">Stuff Wanted</a></li>
																								<li><a href="category.html">Swap Shop</a></li>
																							</ul>
																						</div>
																						<div class="cat-list ">
																							<h3 class="cat-title"><a href="category.html"><i class=" icon-theatre ln-shadow"></i> Community <span class="count">5,30</span> </a> <span data-target=".cat-id-8" data-toggle="collapse" class="btn-cat-collapsed collapsed"> <span class=" icon-down-open-big"></span> </span>
																							</h3>
																							<ul class="cat-collapse collapse in cat-id-8">
																								<li><a href="category.html">Announcements </a></li>
																								<li><a href="category.html">Car Pool - Bike Ride </a></li>
																								<li><a href="category.html">Charity - Donate - NGO </a></li>
																								<li><a href="category.html">Lost - Found </a></li>
																								<li><a href="category.html">Tender Notices </a></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="inner-box has-aff relative">
																				<a class="dummy-aff-img" href="category.html"><img src="images/aff2.jpg" class="img-responsive" alt=" aff"> </a>
																			</div>
																		</div>
																		<div class="col-sm-3 page-sidebar col-thin-left">
																			<aside>
																				<div class="inner-box no-padding">
																					<div class="inner-box-content"><a href="#"><img class="img-responsive" src="images/site/app.jpg" alt="tv"></a>
																					</div>
																				</div>
																				<div class="inner-box">
																					<h2 class="title-2">Popular Categories </h2>
																					<div class="inner-box-content">
																						<ul class="cat-list arrow">
																							<li><a href="sub-category-sub-location.html"> Apparel (1,386) </a></li>
																							<li><a href="sub-category-sub-location.html"> Art (1,163) </a></li>
																							<li><a href="sub-category-sub-location.html"> Business Opportunities (4,974) </a>
																							</li>
																							<li><a href="sub-category-sub-location.html"> Community and Events (1,258) </a></li>
																							<li><a href="sub-category-sub-location.html"> Electronics and Appliances
																								(1,578) </a></li>
																								<li><a href="sub-category-sub-location.html"> Jobs and Employment (3,609) </a></li>
																								<li><a href="sub-category-sub-location.html"> Motorcycles (968) </a></li>
																								<li><a href="sub-category-sub-location.html"> Pets (1,188) </a></li>
																								<li><a href="sub-category-sub-location.html"> Services (7,583) </a></li>
																								<li><a href="sub-category-sub-location.html"> Vehicles (1,129) </a></li>
																							</ul>
																						</div>
																					</div>
																					<div class="inner-box no-padding"><img class="img-responsive" src="images/add2.jpg" alt="">
																					</div>
																				</aside>
																			</div>
																		</div>
																	</div>
																</div>
@stop