
<?php
 include 'common/header.php';?>
<?php include 'common/left.php';?>
<section class="rev_slider_wrapper">
	<div id="rev_slider_3" class="rev_slider" data-version="5.0">

		<div class="row" style="margin-top: 182px;">
			<div class="col-xs-3"></div>
			<div class="col-xs-2" style="text-align: left; z-index: 1;">
				<!--<img  src="<?php echo base_url("assets")?>/images/notifications.png" style="width:100%;" alt="logo">
-->
			</div>


			<div class="col-xs-7" style="text-align: right; z-index: 1;">
				<!--<img  src="<?php echo base_url("assets")?>/images/services.png" style="width:20%;" alt="logo"> 
-->

			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-9" style="z-index: 1">
					<div class="row">
						<div class="col-xs-12" style="text-align: Center">
						
 <!-- <h4 id="hours" style="color:red;"></h4>
 <br><br>-->
						</div>
					
					</div>

				</div>
			</div>
			
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-9" style="z-index: 1">
					<div class="row">
					    <div class="col-xs-1" style=""></div>
						<div class="col-xs-5" style=""> 
					 <button class="btn btn-primary"  onclick="show_notification()">Notifications
   </button>
<br>
						<div class="list-group mb-5 shadow notification_panel" style="max-height:300px; overflow-y:scroll; box-shadow: 5px 9px 11px -4px; display:none;position: absolute;">
               <?php if(isset($notifications)){ foreach($notifications as $row){?>
                <a href="<?php if(isset($url)) echo $url?>"><div class="list-group-item">
                    <div class="row">
                        <div class="col">
                            <strong class="mb-0" style="margin-left:10px;"><?php echo $row['title'];?></strong>
                            <p class="text-muted mb-0" style="margin-left:10px;"><?php echo $row['text'];?></p>
                            <p class="text-muted mb-0" style="text-align:right; font-size:10px;"><?php echo date("d M H:i A",strtotime($row['datetime']));?></p>
                        </div>
                          </div>
                </div></a>
                <?php }}?>
               
            </div>
							<br>
 
 
						</div>
						<div >
						<div class="col-xs-4">
						    
				<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="<?php echo base_url('Services')?>">Job Post</a></li>
      <?php if (isset($_SESSION['userdata']['category']) && ($_SESSION['userdata']['category'] == "Companies")){?>
      
      <li><a href="<?php echo base_url('Services/construction_contracts_list')?>">Construction Contracts</a></li>
  <?php }?>
    </ul>
  </div>
				</div>
				</div>

					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<img style="width: 100%;"
						src="<?php echo base_url("assets")?>/images/conbridlogo.jpg"
						alt="" data-bgposition="center center" data-bgfit="cover"
						class="rev-slidebg">
				</div>
			</div>
		</div>
		<div class="row" style="">
			<div class="col-md-3"></div>



		</div>
	</div>
</section>
<!--SLIDER -->



<!-- TEAM -->
<section id="team-sev" class="padding bg_light"
	style="margin-top: 550px;">
	<div class="row">


		<div class="col-md-3"></div>
		<div class="col-md-9">

			<br>
			<h2 class="text-uppercase">
				Conbrid<span class="color_red"> Challenge Members</span>
			</h2>

			<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1"
				id="MultiCarousel" data-interval="1000">
				<div class="MultiCarousel-inner">
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-1.jpg"
								style="width: 120px;">
							<p>Unitglo Solutions</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-2.jpg"
								style="width: 120px;">
							<p>Staff On Field</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-3.jpg"
								style="width: 120px;">
							<p>Gharbechoo.com</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-4.jpg"
								style="width: 120px;">
							<p>Tata Consultancy</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-2.jpg"
								style="width: 120px;">
							<p>Staff On Field</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-3.jpg"
								style="width: 120px;">
							<p>Gharbechoo.com</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-4.jpg"
								style="width: 120px;">
							<p>Tata Consultancy</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-2.jpg"
								style="width: 120px;">
							<p>Staff On Field</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-3.jpg"
								style="width: 120px;">
							<p>Gharbechoo.com</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-4.jpg"
								style="width: 120px;">
							<p>Tata Consultancy</p>
						</div>
					</div>
				</div>
				<button class="btn btn-primary leftLst"><</button>
				<button class="btn btn-primary rightLst">></button>
			</div>
		</div>
	</div>



</section>


<section id="team-sev" class="padding bg_light"
	style="padding: 0px !important;">
	<div class="row">


		<div class="col-md-3"></div>
		<div class="col-md-9">

			<br>
			<h2 class="text-uppercase">
				Conbrid<span class="color_red"> Members</span>
			</h2>

			<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1"
				id="MultiCarousel" data-interval="1000">
				<div class="MultiCarousel-inner">
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-1.jpg"
								style="width: 120px;">
							<p>Unitglo Solutions</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-2.jpg"
								style="width: 120px;">
							<p>Staff On Field</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-3.jpg"
								style="width: 120px;">
							<p>Gharbechoo.com</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-4.jpg"
								style="width: 120px;">
							<p>Tata Consultancy</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-2.jpg"
								style="width: 120px;">
							<p>Staff On Field</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-3.jpg"
								style="width: 120px;">
							<p>Gharbechoo.com</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-4.jpg"
								style="width: 120px;">
							<p>Tata Consultancy</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-2.jpg"
								style="width: 120px;">
							<p>Staff On Field</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-3.jpg"
								style="width: 120px;">
							<p>Gharbechoo.com</p>
						</div>
					</div>
					<div class="item">
						<div class="pad15">
							<img src="<?php echo base_url("assets")?>/images/agen-s-3-4.jpg"
								style="width: 120px;">
							<p>Tata Consultancy</p>
						</div>
					</div>
				</div>
				<button class="btn btn-primary leftLst"><</button>
				<button class="btn btn-primary rightLst">></button>
			</div>
		</div>
	</div>



</section>
<section id="team-sev" class="padding bg_light">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-9">
			<br>
			<h2 class="text-uppercase">
				New Property<span class="color_red"> Ad Launches</span>
			</h2>

			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="property_item bottom40">
						<div class="image">
							<img
								src="<?php echo base_url("assets")?>/images/property-listing-1.jpg"
								alt="listin" class="img-responsive">
							<div class="property_meta">
								<span><i class="fa fa-object-group"></i>530 sq ft </span> <span><i
									class="fa fa-bed"></i>2</span> <span><i class="fa fa-bath"></i>1
									Bathroom</span>
							</div>
							<div class="price">
								<span class="tag">For Rent</span>
							</div>
							<div class="overlay">
								<div class="centered">
									<a class="link_arrow white_border"
										href="property_details_1.html">View Detail</a>
								</div>
							</div>
						</div>
						<div class="proerty_content">
							<div class="proerty_text">
								<h3>
									<a href="property_details_1.html">South Mervin Boulevard</a>
								</h3>
								<span>45 Regent Street, London, UK</span>
								<p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer
									adipiscing elit, sed diam power nonummy nibh tempor cum soluta
									nobis…</p>
							</div>
							<div class="favroute clearfix">
								<p class="pull-md-left">$8,600 Per Month</p>
								<ul class="pull-right">
									<li><a href="#."><i class="icon-video"></i></a></li>
									<li><a href="#."><i class="icon-like"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="property_item bottom40">
						<div class="image">
							<img
								src="<?php echo base_url("assets")?>/images/property-listing-2.jpg"
								alt="listin" class="img-responsive">
							<div class="property_meta">
								<span><i class="fa fa-object-group"></i>530 sq ft </span> <span><i
									class="fa fa-bed"></i>2</span> <span><i class="fa fa-bath"></i>1
									Bathroom</span>
							</div>
							<div class="price">
								<span class="tag">For Rent</span>
							</div>
							<div class="overlay">
								<div class="centered">
									<a class="link_arrow white_border"
										href="property_details_1.html">View Detail</a>
								</div>
							</div>
						</div>
						<div class="proerty_content">
							<div class="proerty_text">
								<h3>
									<a href="property_details_1.html">The Helux villa</a>
								</h3>
								<span>45 Regent Street, London, UK</span>
								<p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer
									adipiscing elit, sed diam power nonummy nibh tempor cum soluta
									nobis…</p>
							</div>
							<div class="favroute clearfix">
								<p class="pull-md-left">$5,600,000</p>
								<ul class="pull-right">
									<li><a href="#."><i class=" icon-video"></i></a></li>
									<li><a href="#."><i class="icon-like"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="property_item bottom40">
						<div class="image">
							<img
								src="<?php echo base_url("assets")?>/images/property-listing-3.jpg"
								alt="listin" class="img-responsive">
							<div class="property_meta">
								<span><i class="fa fa-object-group"></i>530 sq ft </span> <span><i
									class="fa fa-bed"></i>2</span> <span><i class="fa fa-bath"></i>1
									Bathroom</span>
							</div>
							<div class="price">
								<span class="tag">For Sale</span>
							</div>
							<div class="overlay">
								<div class="centered">
									<a class="link_arrow white_border"
										href="property_details_1.html">View Detail</a>
								</div>
							</div>
						</div>
						<div class="proerty_content">
							<div class="proerty_text">
								<h3>
									<a href="property_details_1.html">House in New York City</a>
								</h3>
								<span>Merrick Way, Miami, USA</span>
								<p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer
									adipiscing elit, sed diam power nonummy nibh tempor cum soluta
									nobis…</p>
							</div>
							<div class="favroute clearfix">
								<p class="pull-md-left">$8,600 Per Month</p>
								<ul class="pull-right">
									<li><a href="#."><i class="icon-video"></i></a></li>
									<li><a href="#."><i class="icon-like"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="property_item bottom40">
						<div class="image">
							<img
								src="<?php echo base_url("assets")?>/images/property-listing-4.jpg"
								alt="listin" class="img-responsive">
							<div class="property_meta">
								<span><i class="fa fa-object-group"></i>530 sq ft </span> <span><i
									class="fa fa-bed"></i>2</span> <span><i class="fa fa-bath"></i>1
									Bathroom</span>
							</div>
							<div class="price">
								<span class="tag">For Sale</span>
							</div>
							<div class="overlay">
								<div class="centered">
									<a class="link_arrow white_border"
										href="property_details_1.html">View Detail</a>
								</div>
							</div>
						</div>
						<div class="proerty_content">
							<div class="proerty_text">
								<h3>
									<a href="property_details_1.html">House in New York City</a>
								</h3>
								<span>Merrick Way, Miami, USA</span>
								<p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer
									adipiscing elit, sed diam power nonummy nibh tempor cum soluta
									nobis…</p>
							</div>
							<div class="favroute clearfix">
								<p class="pull-md-left">$32,650,000</p>
								<ul class="pull-right">
									<li><a href="#."><i class="icon-video"></i></a></li>
									<li><a href="#."><i class="icon-like"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="property_item bottom40">
						<div class="image">
							<img
								src="<?php echo base_url("assets")?>/images/property-listing-5.jpg"
								alt="listin" class="img-responsive">
							<div class="property_meta">
								<span><i class="fa fa-object-group"></i>530 sq ft </span> <span><i
									class="fa fa-bed"></i>2</span> <span><i class="fa fa-bath"></i>1
									Bathroom</span>
							</div>
							<div class="price">
								<span class="tag">For Rent</span>
							</div>
							<div class="overlay">
								<div class="centered">
									<a class="link_arrow white_border"
										href="property_details_1.html">View Detail</a>
								</div>
							</div>
						</div>
						<div class="proerty_content">
							<div class="proerty_text">
								<h3>
									<a href="property_details_1.html">Triple Story</a>
								</h3>
								<span>Merrick Way, Miami, USA</span>
								<p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer
									adipiscing elit, sed diam power nonummy nibh tempor cum soluta
									nobis…</p>
							</div>
							<div class="favroute clearfix">
								<p class="pull-md-left">$8, 600 Per Month</p>
								<ul class="pull-right">
									<li><a href="#."><i class=" icon-video"></i></a></li>
									<li><a href="#."><i class="icon-like"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="property_item bottom40">
						<div class="image">
							<img
								src="<?php echo base_url("assets")?>/images/property-listing-6.jpg"
								alt="listin" class="img-responsive">
							<div class="property_meta">
								<span><i class="fa fa-object-group"></i>530 sq ft </span> <span><i
									class="fa fa-bed"></i>2</span> <span><i class="fa fa-bath"></i>1
									Bathroom</span>
							</div>
							<div class="price">
								<span class="tag">For Rent</span>
							</div>
							<div class="overlay">
								<div class="centered">
									<a class="link_arrow white_border"
										href="property_details_1.html">View Detail</a>
								</div>
							</div>
						</div>
						<div class="proerty_content">
							<div class="proerty_text">
								<h3>
									<a href="property_details_1.html">House in New York City</a>
								</h3>
								<span>Merrick Way, Miami, USA</span>
								<p class="p-font-15">Lorem ipsum dolor sit amet, consectetuer
									adipiscing elit, sed diam power nonummy nibh tempor cum soluta
									nobis…</p>
							</div>
							<div class="favroute clearfix">
								<p class="pull-md-left">$1,350,000</p>
								<ul class="pull-right">
									<li><a href="#."><i class="icon-video"></i></a></li>
									<li><a href="#."><i class="icon-like"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!--TEAM -->



<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-9">

		<!-- CONTACT -->
		<section id="contact" class="bg-color-red">
			<div class="container" style="width: 100% !important;">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12 text-center">
						<div class="get-tuch">
							<i class="icon-telephone114"></i>
							<ul>
								<li>
									<h4>Phone Number</h4>
								</li>
								<li>
									<p>+1 900 234 567 - 68</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 text-center">
						<div class="get-tuch">
							<i class="icon-icons74"></i>
							<ul>
								<li><h4>Victoria Hall,</h4></li>
								<li><p>Idea Homes, australia</p></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 text-center">
						<div class="get-tuch">
							<i class=" icon-icons142"></i>
							<ul>
								<li><h4>Email Address</h4></li>
								<li><a href="#.">info@ideahomes.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- CONTACT -->
		<div class="color-picker">

			<a href="#" class="handle"><i class="fa fa-cog fa-spin"></i></a>

			<div class="settings-header">
				<h3>Navigation</h3>
			</div>
			<div class="section">

				<ul class="list-inline mt-5">
					<li class="m-0 pl-10 pr-10"><a class="text-gray" href="#.">Become A
							Conbrid Challenging Member</a> &nbsp;&nbsp;<br>
						<?php if(isset($_SESSION['userdata']['id'])){?>	<a
						href="<?php echo base_url('Challenge_Members/noms');?>" class="btn_fill">Refer</a>
					<?php } else{?>
					<a
						href="<?php echo base_url('Dashboard/registration');?>" class="btn_fill">Login</a>
					<?php }?>
					</li>
					<hr>
					<li class="m-0 pl-10 pr-10">My Conbrid Challenge Points: <b>71</b></li>
					<li class="m-0 pl-10 pr-10">My Membership Expiry:<b>07 Feb 2022</b></li>
					<hr>
					<li class="m-0 pl-10 pr-10"><a class="text-gray" href="#.">Become A
							Conbrid Member</a> &nbsp;&nbsp;<input type="button"
						class="btn_fill" value="Refer"></li>
					<hr>
					<li class="m-0 pl-10 pr-10">My Conbrid Points: <b>71</b></li>
					<li class="m-0 pl-10 pr-10">My Membership Expiry:<b>07 Feb 2022</b></li>
					<hr>
					<hr>
				</ul>

			</div>
		</div>

		<?php include 'common/footer.php';?>
		<script>function show_notification(){
		if($(".notification_panel").hasClass("show_panel")){
		    $(".notification_panel").removeClass("show_panel");
	$(".notification_panel").css("display","none");
		}else{
		    $(".notification_panel").addClass("show_panel");
			$(".notification_panel").css("display","block");
    
		}
		}
		
		$(".dropdown").click(function (){
    if( $(this).hasClass("open"))
        $(this).removeClass("open");
    else
        $(this).addClass("open")
})
		</script>