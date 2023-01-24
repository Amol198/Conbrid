
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
            action="<?php echo base_url("index.php/admin/Customer_Property/accept_lease_property")?><?php if(isset($id)) echo '/'.$id?>">
            
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Main Type Of Property</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[main_type_of_property]"> <b><?php  if(isset($main_type_of_property)) echo $main_type_of_property;?></b></label>
                           
    </div>
    
                        </div>
    
                    </div>
    
        
                        
                        <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Property Type </h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                                <label name="conbrid_customer_lease_property[property_type]"> <b><?php  if(isset($property_type)) echo $property_type;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Customer Name</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label  name="conbrid_customer_lease_property[customer_name]"> <b><?php  if(isset($customer_name)) echo $customer_name;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
                
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Lease Amount(Rs)</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[lease_amount]"> <b><?php  if(isset($lease_amount)) echo $lease_amount;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Lease Amount Negotiable</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[lease_amount_negotiable]"> <b><?php  if(isset($lease_amount_negotiable)) echo $lease_amount_negotiable;?></b></label>
                            <?php  if($lease_amount_negotiable==1)
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
                            <label name="conbrid_customer_lease_property[maintenance]"><b><?php  if(isset($maintenance)) echo $maintenance;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    
                   
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Built-Up Area</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[builtup_area]"><b><?php  if(isset($builtup_area)) echo $builtup_area;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Built-Up Area Measure Type</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[builtup_area_measure_type]"><b><?php  if(isset($builtup_area_measure_type)) echo $builtup_area_measure_type;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                   
                    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Lease Year</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[lease_year]"><b><?php  if(isset($lease_year)) echo $lease_year;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Lease Month</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[lease_month]"><b><?php  if(isset($lease_month)) echo $lease_month;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Lock-In Year</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[lock_in_year]"><b><?php  if(isset($lock_in_year)) echo $lock_in_year;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Lock-In Month</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[lock_in_month]"><b><?php  if(isset($lock_in_month)) echo $lock_in_month;?></b></label>
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
                                <h3 class="card-title">All Basic And Additional Amenities Of Property</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[basic_amenities]"><b><?php  if(isset($basic_amenities)) echo $basic_amenities;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                   
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Entrance Facing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[entrance_facing]"><b><?php  if(isset($entrance_facing)) echo $entrance_facing;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Bedroom Facing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[bedroom_facing]"><b><?php  if(isset($bedroom_facing)) echo $bedroom_facing;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Pooja Room Facing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[poojaroom_facing]"><b><?php  if(isset($Poojaroom_facing)) echo $Poojaroom_facing;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Kitchen Facing</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[kitchen_facing]"><b><?php  if(isset($kitchen_facing)) echo $kitchen_facing;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                    
                   
                    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">E-Stamp Certificate</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[e_stamp]">&nbsp;&nbsp;&nbsp;<?php  if(isset($e_stamp)) echo '<a target="_blank" href="'.base_url("images/property_images/".$e_stamp).'">View Estamp Certificate</a>'?>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Electricity Bill</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[electricity]">&nbsp;&nbsp;&nbsp;<?php  if(isset($electricity)) echo '<a target="_blank" href="'.base_url("images/property_images/".$electricity).'">View Electricity Bill</a>'?>
    </div>
    
                        </div>
    
                    </div>

                         
                    
                   
                    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Property Features And Details</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[description]"><b><?php  if(isset($description)) echo $description;?></b></label>
    </div>
    
                        </div>
    
                    </div>
                   
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Uploaded Pancard</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[pancard]">&nbsp;&nbsp;&nbsp;<?php  if(isset($pancard)) echo '<a target="_blank" href="'.base_url("images/property_images/".$pancard).'">View Pancard</a>'?>
    </div>
    
                        </div>
    
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Address</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[address1]"><b><?php  if(isset($address1)) echo $address1;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Landmark</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[landmark]"><b> <?php  if(isset($landmark)) echo $landmark;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Area</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[area]"><b> <?php  if(isset($area)) echo $area;?></b></label>
    </div>
    
                        </div>
    
                    </div>
    
    
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Pincode</h3>
                            </div>
    
                            <div class="card-body" style="display: block;">
                            <label name="conbrid_customer_lease_property[pincode]"><b><?php  if(isset($pincode)) echo $pincode;?></b></label>
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
                    
    
                   <input type="submit" value="approve" name="status" class="btn btn-success" style="border-radius:9px; margin-right:10px ;"> <br><br>
                   <input type="submit" value="reject" name="status" class="btn btn-danger">
    </form>	
    
                </div>
        </section>
    </div>
    