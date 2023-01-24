
    <title><?php echo $page_title; ?></title> 
	
	     
    <div class="content-wrapper">
    
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                       
                        <h1 class="m-0"><?php if (isset($page_title)) echo $page_title?></h1>
                    </div>
    
                </div>
            </div>
        </section>
    
        <section class="content">
            <div class="container-fluid">

            <form enctype='multipart/form-data'
            method="POST"
            action="<?php echo base_url("index.php/admin/Company_Property/accept_sell_property")?><?php if(isset($id)) echo '/'.$id?>">
            
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Main Type Of Property</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[main_type_of_property]"> <b><?php  if(isset($main_type_of_property)) echo $main_type_of_property;?></b></label>
                            <input type="hidden" id="main_type_of_property_id" value="<?=isset($main_type_of_property)?$main_type_of_property:'' ?>">
    </div>
    
                        </div>
    
                    </div>
    
        <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Sub Categories</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[sub_categories]"> <b><?php  if(isset($sub_categories)) echo $sub_categories;?></b></label> 
    </div>
    
                        </div>
    
                    </div>
                        
                        <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Property Type </h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                                <label name="conbrid_sell_property[property_type]"> <b><?php  if(isset($property_type)) echo $property_type;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Company Name</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label  name="conbrid_sell_property[name]"> <b><?php  if(isset($name)) echo $name;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Project Name</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label  name="conbrid_sell_property[project_name]"> <b><?php  if(isset($project_name)) echo $project_name;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
                        <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Budget(Rs)</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[budget]"><b><?php  if(isset($budget)) echo $budget;?></b></label>
                            
    </div>
    
                        </div>
    
                    </div>
                         
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Budget Negotiable</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[budget_negotiable]"> <b><?php  if(isset($budget_negotiable)) echo $budget_negotiable;?></b></label>
                            <?php  if($budget_negotiable==1)
                                        {
                                            echo "Yes";
                            } else {
                                echo "No";
                            }
                                       ?>
                                              
    </div>
    
                        </div>
    
                    </div>
                         
                       
    
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Booking Amount(Rs)</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[booking_amount]"> <b><?php  if(isset($booking_amount)) echo $booking_amount;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Booking Amount Negotiable</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[booking_amount_negotiable]"> <b><?php  if(isset($booking_amount_negotiable)) echo $booking_amount_negotiable;?></b></label>
                            <?php  if($booking_amount_negotiable==1)
                                        {
                                            echo "Yes";
                            } else {
                                echo "No";
                            }
                                       ?>
    </div>
    
                        </div>
    
                    </div>
    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Maintenance(Rs)</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[maintenance]"><b><?php  if(isset($maintenance)) echo $maintenance;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Plot Area</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[plot_area]"><b><?php  if(isset($plot_area)) echo $plot_area;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Plot Area Measure Type</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[plot_area_measure_type]"><b><?php  if(isset($plot_area_measure_type)) echo $plot_area_measure_type;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Built-Up Area</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[builtup_area]"><b><?php  if(isset($builtup_area)) echo $builtup_area;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Built-Up Area Measure Type</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[builtup_area_measure_type]"><b><?php  if(isset($builtup_area_measure_type)) echo $builtup_area_measure_type;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Carpet Area</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[carpet_area]"><b><?php  if(isset($carpet_area)) echo $carpet_area;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Carpet Area Measure Type</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[carpet_area_measure_type]"><b><?php  if(isset($carpet_area_measure_type)) echo $carpet_area_measure_type;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">No.Of BHK</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[bhk]"><b><?php  if(isset($bhk)) echo $bhk;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">No.Of Bathroom</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[number_of_bathroom]"><b><?php  if(isset($number_of_bathroom)) echo $number_of_bathroom;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Type Of Flooring</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[type_of_flooring]"><b><?php  if(isset($type_of_flooring)) echo $type_of_flooring;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">All Basic And Additional Amenities Of Property</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[basic_amenities]"><b><?php  if(isset($basic_amenities)) echo $basic_amenities;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">RERA Number</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[rera_number]"><b><?php  if(isset($rera_number)) echo $rera_number;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Entrance Facing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[entrance_facing]"><b><?php  if(isset($entrance_facing)) echo $entrance_facing;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Bedroom Facing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[bedroom_facing]"><b><?php  if(isset($bedroom_facing)) echo $bedroom_facing;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Pooja Room Facing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[poojaroom_facing]"><b><?php  if(isset($Poojaroom_facing)) echo $Poojaroom_facing;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Kitchen Facing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[kitchen_facing]"><b><?php  if(isset($kitchen_facing)) echo $kitchen_facing;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Furnishing Status</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[furnishing_status]"><b><?php  if(isset($furnishing_status)) echo $furnishing_status;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Start Water Timing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[start_water_timing]"><b><?php  if(isset($start_water_timing)) echo $start_water_timing;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">End Water Timing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[end_water_timing]"><b><?php  if(isset($end_water_timing)) echo $end_water_timing;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Start Electricity Timing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[start_electricity_timing]"><b><?php  if(isset($start_electricity_timing)) echo $start_electricity_timing;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">End Electricity Timing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[end_electricity_timing]"><b><?php  if(isset($end_electricity_timing)) echo $end_electricity_timing;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Property Images</h3>
                            </div>
                            <div class="row">
<?php  if(isset($property_image)) $image_array=(json_decode($property_image,true));
                            foreach($image_array as $image){
                            ?>
<div class="col-md-3">
<br><img style="width:250px;" src="<?php echo base_url($image)?>">
                           
</div>        
    <?php }?>
    </div>
                            
    
                        </div>
    
                    </div>

                         
                    
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Nearby Places</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[nearby_places]"><b><?php  if(isset($nearby_places)) echo $nearby_places;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Ownership Type</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[ownership_type]"><b><?php  if(isset($ownership_type)) echo $ownership_type;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Property Features And Details</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label id="abc1"name="conbrid_sell_property[description]"><b><?php  if(isset($description)) echo $description;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4 hide_for_industrial hide_for_commercial">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Offers If Any</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label id="abc2" name="conbrid_sell_property[offers]"><b><?php  if(isset($offers)) echo $offers;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Uploaded Pancard</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[pancard]">&nbsp;&nbsp;&nbsp;<?php  if(isset($pancard)) echo '<a target="_blank" href="'.base_url("images/property_images/".$pancard).'">View Pancard</a>'?>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Address</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[address1]"><b><?php  if(isset($address1)) echo $address1;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Landmark</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[landmark]"><b> <?php  if(isset($landmark)) echo $landmark;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Area</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[area]"><b> <?php  if(isset($area)) echo $area;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Pincode</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_sell_property[pincode]"><b><?php  if(isset($pincode)) echo $pincode;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
                    <br>
                    <div class="col-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Reason</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <textarea name="note" rows="4" cols="80"></textarea>
                                
    </div>
    
                        </div>
    
                    </div>
                    
                    <br><br>
                    
    
                   <input type="submit" value="approve" name="status" class="btn btn-success" style="border-radius:9px; margin-right:10px;"> <br><br>
                   <input type="submit" value="reject" name="status" class="btn btn-danger" style="border-radius:9px; margin-right:10px;">
    </form>	
    
                </div>
        </section>
    </div>
    


    <script
	src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    var type = $('#main_type_of_property_id').val();
    if(type!='') {
        if(type == 'industrial') {
            $('.hide_for_industrial').hide();

        } else if(type == 'residential') {
            $('.hide_for_residential').hide();
        }
        else if(type == 'commercial' || 'institutional') {
            $('.hide_for_commercial').hide();
        }
        else if(type == 'institutional') {
            $('.hide_for_institutional').hide();
        }
    }
    </script>
    