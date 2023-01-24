
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
            action="<?php echo base_url("index.php/admin/Company_Property/accept_rental_property")?><?php if(isset($id)) echo '/'.$id?>">
            
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Main Type Of Property</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[main_type_of_property]"> <b><?php  if(isset($main_type_of_property)) echo $main_type_of_property;?></b></label>
                           
    </div>
    
                        </div>
    
                    </div>
    
        
                        
                        <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Property Type </h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                                <label name="conbrid_rental_property[property_type]"> <b><?php  if(isset($property_type)) echo $property_type;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Customer Name</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label  name="conbrid_rental_property[name]"> <b><?php  if(isset($name)) echo $name;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
                
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Monthly Rent Amount(Rs)</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[monthly_rent]"> <b><?php  if(isset($monthly_rent)) echo $monthly_rent;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Monthly Rent Amount Negotiable</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[monthly_rent_negotiable]"> <b><?php  if(isset($monthly_rent_negotiable)) echo $monthly_rent_negotiable;?></b></label>
                            <?php  if($monthly_rent_negotiable==1)
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
                                <h3 class="card-title">Security Deposit Amount(Rs)</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[security_deposit]"> <b><?php  if(isset($security_deposit)) echo $security_deposit;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Security Deposit Amount Negotiable</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[security_deposit_negotiable]"> <b><?php  if(isset($security_deposit_negotiable)) echo $security_deposit_negotiable;?></b></label>
                            <?php  if($security_deposit_negotiable==1)
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
                            <label name="conbrid_rental_property[maintenance]"><b><?php  if(isset($maintenance)) echo $maintenance;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    
                   
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Built-Up Area</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[builtup_area]"><b><?php  if(isset($builtup_area)) echo $builtup_area;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Built-Up Area Measure Type</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[builtup_area_measure_type]"><b><?php  if(isset($builtup_area_measure_type)) echo $builtup_area_measure_type;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                   
                    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Rental Agreement Date</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[rental_aggr_date]"><b><?php  if(isset($rental_aggr_date)) echo $rental_aggr_date;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Rental Period</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[rental_period]"><b><?php  if(isset($rental_period)) echo $rental_period;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    
                   
                   
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Entrance Facing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[entrance_facing]"><b><?php  if(isset($entrance_facing)) echo $entrance_facing;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Bedroom Facing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[bedroom_facing]"><b><?php  if(isset($bedroom_facing)) echo $bedroom_facing;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Pooja Room Facing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[poojaroom_facing]"><b><?php  if(isset($Poojaroom_facing)) echo $Poojaroom_facing;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Kitchen Facing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[kitchen_facing]"><b><?php  if(isset($kitchen_facing)) echo $kitchen_facing;?></b></label>
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
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">E-Stamp Certificate</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[e_stamp]">&nbsp;&nbsp;&nbsp;<?php  if(isset($e_stamp)) echo '<a target="_blank" href="'.base_url("images/property_images/".$e_stamp).'">View Estamp Certificate</a>'?>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Electricity Bill</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[electricity]">&nbsp;&nbsp;&nbsp;<?php  if(isset($electricity)) echo '<a target="_blank" href="'.base_url("images/property_images/".$electricity).'">View Electricity Bill</a>'?>
    </div>
    
                        </div>
    
                    </div>

                         
                    
                   
                    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Property Features And Details</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[description]"><b><?php  if(isset($description)) echo $description;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                   
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Uploaded Pancard</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[pancard]">&nbsp;&nbsp;&nbsp;<?php  if(isset($pancard)) echo '<a target="_blank" href="'.base_url("images/property_images/".$pancard).'">View Pancard</a>'?>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Address</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[address1]"><b><?php  if(isset($address1)) echo $address1;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Landmark</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[landmark]"><b> <?php  if(isset($landmark)) echo $landmark;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Area</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[area]"><b> <?php  if(isset($area)) echo $area;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Pincode</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_rental_property[pincode]"><b><?php  if(isset($pincode)) echo $pincode;?></b></label>
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
                   <input type="submit" value="reject" name="status" class="btn btn-danger" style="border-radius:9px;">
    </form>	
    
                </div>
        </section>
    </div>
    
   