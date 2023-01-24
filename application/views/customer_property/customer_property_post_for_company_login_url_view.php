<?php 

//$notification_details = $notification_details[0];
?>
<style>
sup {
	color: red;
}

.checked {
	color: orange;
}
		.element {
  border-radius: 50%;
  width: 70px;
  height: 70px;
  box-shadow: 0px 0px 28px -17px red;
  animation: glowShadow 1.5s linear infinite alternate;
}

.img {
  animation: glowImage 1.5s linear infinite alternate;
}

@keyframes glowShadow{
  to {
    box-shadow: 0px 0px 15px 15px red;
  }
}

@keyframes glowImage{
  to {
    -webkit-filter: brightness(2);
     filter: brightness(2);
  }
}

</style>
<section id="team-sev" class="padding bg_light" 
	style="margin-top: 157px;">

	<h1 style="text-align: center;">Company Property Details Post</h1>
	
	<div class="row">
	    <div class="col-md-2">&nbsp;</div>
	    <div class="col-md-9 row" style="background: white; text-align:center;"><br>
	        
	             <div class="col-md-12">
	       	<label>3 Star Ratings</label><br>
			<span class="fa fa-star checked"></span> <span
				class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
			<span class="fa fa-star"></span> <span class="fa fa-star"></span>
			<br>
			<br>
		
	            </div>

				
					
				<div class="col-md-6 row">
				<label> <h5><b>Main Type Of Property </b></h5></label> <br>
			    <label> <b><?php  if(isset($main_type_of_property)) echo $main_type_of_property;?></b></label>
			</div>
			<div class="col-md-6 row">
				<label> <h5><b> Type Of Property </b></h5></label> <br>
				<label><b><?php  if(isset($property_type)) echo $property_type;?></b></label>
			</div>
			<div class="col-md-6 row">
				<label> <h5><b> Customer Name </b></h5></label> <br>
				<label><b><?php  if(isset($customer_name)) echo $customer_name;?></b></label>
			</div>
			<div class="col-md-6 row">
				<label> <h5><b> Budget(Rs) </b></h5></label> <br>
				<label><b><?php  if(isset($customer_name)) echo $customer_name;?></b></label>
			</div>
			<div class="col-md-6 row">
				<label> <h5><b> Built-Up Area </b></h5></label> <br>
				<label><b><?php  if(isset($builtup_area)) echo $builtup_area;?></b></label>
				<label><b><?php  if(isset($builtup_area_measure_type)) echo $builtup_area_measure_type;?></b></label>
			</div>
			<div class="col-md-6 row">
				<label> <h5><b> Property Features And Details </b></h5></label> <br>
				<label><b><?php  if(isset($description)) echo $description;?></b></label>
				
			</div>

			<?php if(isset($main_type_of_property)&& $main_type_of_property=="residential") ?>
			
			<?php{?>
				<div class="col-md-6 row">
			  <label> <h5><b> Entrance Facing </b></h5></label> <br>
			 <label><b><?php  if(isset($entrance_facing)) echo $entrance_facing;?></b></label>
			  </div>
			<div class="col-md-6 row">
			<label> <h5><b> Kitchen Facing </b></h5></label> <br>
				<label><b><?php  if(isset($kitchen_facing)) echo $kitchen_facing;?></b></label>
			</div>
			<div class="col-md-6 row">
			<label> <h5><b> Bedroom Facing </b></h5></label> <br>
			 <label><b><?php  if(isset($bedroom_facing)) echo $bedroom_facing;?></b></label>
			</div>
			<div class="col-md-6 row">
			<label> <h5><b> Poojaroom Facing </b></h5></label> <br>
			 <label><b><?php  if(isset($poojaroom_facing)) echo $poojaroom_facing;?></b></label>
              </div>

			<?php}?>
          
           
           
	               
	            <br><br><br>
	              
	         <div class="col-md-12">
	         <a href="#interested_popup" class="btn btn-info" data-toggle="modal"><i class="fa fa-check" aria-hidden="true"></i> I am interested</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	         <a href="#not_interested_popup" class="btn btn-danger" data-toggle="modal"><i class="fa fa-times" aria-hidden="true"></i> I am not interested</a>
	         <br><br>
	         </div>
    	       
	    </div>
	   

</div>
</section>
<div id="not_interested_popup" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<h4 class="modal-title w-100">Are you sure?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to proceed? This process cannot be undone.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<a class="btn btn-secondary" data-dismiss="modal">Cancel</a>
				<a href="<?php echo base_url("Services/update_customer_property_post_for_company_login/3/".$notification_details['notification_id']."")?>" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> I am not interested</a>
			</div>
		</div>
	</div>
</div>     
<div id="interested_popup" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<h4 class="modal-title w-100">Are you sure?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
			</div>
			<div class="modal-body">
				<p>Do you really want to proceed? This process cannot be undone.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<a class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<a href="<?php echo base_url("Services/update_customer_property_post_for_company_login/2/".$notification_details['notification_id']."")?>" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i> I am interested</a>
			</div>
		</div>
	</div>
</div>     

<script
	src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$('.select2').select2();
</script>

