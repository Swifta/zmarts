<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

 <head>
 
 

	<!-- Dependencies: JQuery and GMaps API should be loaded first -->
	
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!-- CSS and JS for our code -->
	<link rel="stylesheet" type="text/css" href="<?php echo PATH; ?>css/map/jquery-gmaps-latlon-picker.css"/>
	<script src="<?php echo PATH; ?>js/map/jquery-gmaps-latlon-picker.js"></script>
      
    <script>
  
   $(document).ready(function(){					   		   
	    //Close Popups and Fade Layer
	    //Fade in the fade layer 
	    $('a#close8').live('click', function() { //When clicking on the close or fade layer...
		    $('#popup6').css({'display' : 'none'});
			    $('.popup_block5').css({'display' : 'none'});
			    $('#fade').css({'display' : 'none'});
	      	
		    return false;
	    });		
    });
	function show_popup()
    {
	$('.popup_block5').css({'display' : 'block'});
	
	
    }

</script>
</head>

<div class="bread_crumb"><a href="<?php echo PATH."merchant.html"; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang["HOME"]; ?> <span class="fwn">&#155;&#155;</span></a><p><?php echo $this->template->title; ?></p></div>
<div class="cont_container mt15 mt10">
    <div class="content_top"><div class="top_left"></div><div class="top_center"></div><div class="top_rgt"></div></div>
    <div class="content_middle">

	 <div id="popup6" class="popup_block5">
        <div class="login1">
          <div class="log_in_top1">
            <div class="share_top_lft">
              <div class="share_top_rgt">
                <!--<div class="share_top_mid"> </div>-->
              </div>
            </div>
          </div>
          <div class="log_middle">
            <div class="con_mid_lft">
              <div class="con_mid_rgt">
                <div class="con_mid_mid">
					<? /*<form name="share" method="post" action="<?php echo PATH; ?>welcome/share_offers">
                  <div class="share_social">
                    <h1></h1>
                    <a class="share_close" id="close8">&nbsp;</a>
                   <div align="center" id="map" style="width: 500px; height: 400px"></div>
                      
                     </div> 
		            </form> */ ?>
                  </div>                
                  
                </div>
              </div>
            </div>
          </div>
          <div class="log_bot">
            <div class="con_bot_lft_r">
              <div class="con_bot_rgt_r">
                <div class="con_bot_mid_r"> </div>
              </div>
            </div>
          </div>
       
        </div>
    
	<div class="gllpLatlonPicker">
        <form method="post"  class="admin_form" enctype="multipart/form-data">
                <table>                       
                         <tr>
                                <td><label><?php echo $this->Lang["STORE_NAME"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input autofocus type="text" name="storename" maxlength="255" value="<?php if(!isset($this->form_error['storename']) && isset($this->userPost['storename'])){echo $this->userPost['storename'];}?>"/>
                                <em><?php if(isset($this->form_error['storename'])){ echo $this->form_error["storename"]; }?></em>
                                </td>
                        </tr>
                        
                        <tr>
                                <td><label><?php echo $this->Lang["USER_NAME"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="username" maxlength="255" value="<?php if(!isset($this->form_error['username']) && isset($this->userPost['username'])){echo $this->userPost['username'];}?>" />
                                <em><?php if(isset($this->form_error['username'])){ echo $this->form_error["username"]; }?></em>
                                </td>
                        </tr>
                        <tr>
                                <td><label><?php echo $this->Lang["EMAIL_ID"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="store_email" maxlength="255" value="<?php if(!isset($this->form_error['store_email']) && isset($this->userPost['store_email'])){echo $this->userPost['store_email'];}?>" />
                                <em><?php if(isset($this->form_error['store_email'])){ echo $this->form_error["store_email"]; }?></em>
                                </td>
                        </tr>

                        <tr>
                        <td><label><?php echo $this->Lang["SECTOR"]; ?></label><span>*</span></td>
                        <td><label>:</label></td>
                        <td>
                                <select autofocus name="sector" onchange="return change_sector(this.value);">
				     
                                <?php 
                                if(!isset($this->form_error["sector"]) && isset($this->userPost["sector"])){ 
				    
				    if($this->userPost["sector"] != 0){ ?>
					                  <?php   foreach($this->sector_list as $c){
                                                if($c->sector_id == $this->userPost["sector"]){ ?>
                                                <option value="<?php echo $c->sector_id; ?>" selected="selected"><?php echo ucfirst($c->sector_name); ?></option> 
                                                <?php 
                                                }
                                        }
				    }
                                } else { ?>
                                        <option value=""> <?php echo $this->Lang['SELECT_SECTOR']; ?> </option>
                                <?php } foreach($this->sector_list as $c){ ?>
                                        <option value="<?php echo $c->sector_id; ?>"><?php echo ucfirst($c->sector_name); ?></option>  
                                <?php } ?>
                                </select>
                                <em><?php if(isset($this->form_error["sector"])){ echo $this->form_error["sector"]; }?></em>
                        </td>
                        </tr>
                        <tr id="subsector" class="subsector_list">
                                <td><label><?php echo $this->Lang["SUBSECTOR"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>

                                <td>
									 <?php if(!isset($this->form_error['sector']) && isset($_POST['sector'])){ ?>
									 <select name="subsector" >
									 <?php foreach($this->sub_sector_list as $s){
										 $theme_check = true;
										$theme_name = strtolower($s->sector_name);
										if(!file_exists(DOCROOT.'modules/'.$theme_name.'/controllers/'.$theme_name.'.php'))
											$theme_check = false;
										if(!file_exists(DOCROOT.'modules/'.$theme_name.'/models/'.$theme_name.'.php'))
											$theme_check = false;
										if(!file_exists(DOCROOT.'modules/'.$theme_name.'/config/routes.php'))
											$theme_check = false;
										if(!is_dir(DOCROOT.'themes/'.THEME_NAME.'/css/'.$theme_name))
											$theme_check = false;
										if(!is_dir(DOCROOT.'application/views/themes/'.THEME_NAME.'/'.$theme_name))
											$theme_check = false;
										if($theme_check==true){  ?>

				<?php if($s->main_sector_id == $_POST['sector']){ ?>
			                <option value="<?php echo $s->sector_id; ?>" <?php if(isset($_POST['subsector'])){ if($_POST['subsector'] == $s->sector_id){ ?> selected <?php } } ?> > <?php echo $s->sector_name; ?></option>
				<?php }} } ?>
				 </select>
			<?php } else{ ?>
			<select name="subsector" >
                                <option value=""><?php echo $this->Lang['SELECT_SECTORS_FIRST']; ?></option>
                               
                                </select>
                                 <?php }?>
                                <em><?php if(isset($this->form_error['subsector'])){ echo $this->form_error["subsector"]; }?></em>
                                </td>
                        </tr>
                        
                        <tr>
                                <td><label><?php echo $this->Lang["PHONE"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="mobile" maxlength="15" value="<?php if(!isset($this->form_error['mobile']) && isset($this->userPost['mobile'])){echo $this->userPost['mobile'];}?>"/>
                                <em><?php if(isset($this->form_error['mobile'])){ echo $this->form_error["mobile"]; }?></em>
                                </td>
                        </tr>
                         <tr>
                                <td><label><?php echo $this->Lang["ADDR1"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="address1" maxlength="255" value="<?php if(isset($this->userPost['address1'])){echo $this->userPost['address1'];}?>"/>
                                <em><?php if(isset($this->form_error['address1'])){ echo $this->form_error["address1"]; }?></em>
                                </td>
                        </tr>
                        <tr>
                                <td><label><?php echo $this->Lang["ADDR2"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="address2" maxlength="255" value="<?php if(isset($this->userPost['address2'])){echo $this->userPost['address2'];}?>"/>
                                <em><?php if(isset($this->form_error['address2'])){ echo $this->form_error["address2"]; }?></em>
                                </td>
                        </tr>                     
                       
                        <tr>
                        <td><label><?php echo $this->Lang["SEL_COUNTRY"]; ?><span>*</span></label></td>
                        <td><label>:</label></td>
                        <td>
                        <select name="country" onchange="return city_change_merchant(this.value);">
                        <option value=""><?php echo $this->Lang["SEL_COUNTRY"]; ?></option>
                        
                        <?php foreach($this->country_list as $d){ ?>
                        
                        <option value="<?php echo $d->country_id ?>"><?php echo $d->country_name; ?></option>
                          <?php } ?>
                        </select>
                        <em><?php if(isset($this->form_error["country"])){ echo $this->form_error["country"]; }?></em>
                        </td>
                        </tr>

                        <tr id="CitySD">
                        <td><label><?php echo $this->Lang["SEL_CITY"]; ?><span>*</span></label></td>
                        <td><label>:</label></td>
                        <td>
                        <select name="city">
                        <option value=""><?php echo $this->Lang["CITY_FIRST"]; ?></option>
                        </select>
                        <em><?php if(isset($this->form_error["city"])){ echo $this->form_error["city"]; }?></em>
					</td>
                        </tr> 
                        
                        <tr>
                                <td><label><?php echo $this->Lang["ZIP_CODE"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="zipcode" maxlength="9"value="<?php if(!isset($this->form_error['zipcode']) && isset($this->userPost['zipcode'])){echo $this->userPost['zipcode'];}?>"/>
                                <em><?php if(isset($this->form_error['zipcode'])){ echo $this->form_error["zipcode"]; }?></em>
                                </td>
                        </tr>
                        
                         <tr>
                                <td><label><?php echo $this->Lang["META_KEY"]; ?></label></td>
                                <td><label>:</label></td>
                                <td>
                                <textarea name="meta_keywords"><?php if(!isset($this->form_error["meta_keywords"])&&isset($this->userPost["meta_keywords"])){ echo $this->userPost["meta_keywords"]; }?></textarea>
                                <em><?php if(isset($this->form_error["meta_keywords"])){ echo $this->form_error["meta_keywords"]; }?></em>
                                </td>
                        </tr>

                        <tr>
                                <td><label><?php echo $this->Lang["META_DESC"]; ?></label></td>
                                <td><label>:</label></td>
                                <td>
                                <textarea name="meta_description"><?php if(!isset($this->form_error["meta_description"])&&isset($this->userPost["meta_description"])){ echo $this->userPost["meta_description"]; }?></textarea>
                                <em><?php if(isset($this->form_error["meta_description"])){ echo $this->form_error["meta_description"]; }?></em>
                                </td>
                        </tr>
                        
                         <tr>
                                <td><label><?php echo $this->Lang["WEBSITE"]; ?></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="website" maxlength="100" value="<?php if(!isset($this->form_error['website']) && isset($this->userPost['website'])){echo $this->userPost['website'];}?>"/>
                                <em><?php if(isset($this->form_error['website'])){ echo $this->form_error["website"]; }?></em>
                                </td>
                        </tr>
                        
						<tr>
						  <td><label><?php echo $this->Lang['MAP_SEARCH_LO']; ?><span>*</span></label></td>
                                <td><label>:</label></td>
								  <td >
                       
                   
                    <input type="text" class="gllpSearchField">
		            <input type="button" class="gllpSearchButton" value="<?php echo $this->Lang['SEARCH']; ?>">
		            <br/><br/><br/>
		            <div class="gllpMap" ><?php echo $this->Lang['GOOG_MAP']; ?></div>
		           
                       
                        </td>
							</tr>  
							   <td><label><?php echo $this->Lang["LATITUDE"]; ?><span>*</span></label></td>
								<td><label>:</label></td>
								<td>
								<input type="text" onclick="show_popup();" name="latitude" class="gllpLatitude" readonly value="<?php if(!isset($this->form_error['latitude']) && isset($this->userPost['latitude'])){echo $this->userPost['latitude'];}?>"/>
								<em><?php if(isset($this->form_error['latitude'])){ echo $this->form_error["latitude"]; }?></em>
								</td>
								</tr>
								<tr>
								<td><label><?php echo $this->Lang["LONGITUDE"]; ?><span>*</span></label></td>
								<td><label>:</label></td>
								<td>
								<input type="text" name="longitude" class="gllpLongitude" readonly value="<?php if(!isset($this->form_error['longitude']) && isset($this->userPost['longitude'])){echo $this->userPost['longitude'];}?>"/>
								<em><?php if(isset($this->form_error['longitude'])){ echo $this->form_error["longitude"]; }?></em>
								<input type="hidden" class="gllpZoom" value="3"/>
								<input type="hidden" class="gllpUpdateButton" value="update map">
								</td>
						</tr>
                            
                      <tr>
                    <td><label><?php echo $this->Lang["STORES_IMG"]; ?></label></td>
                    <td><label>:</label></td>
                    <td>
                        <input type="file" name="image" />
                        <em><?php if(isset($this->form_error["image"])){ echo $this->form_error["image"]; }?></em>
                         <label><?php echo $this->Lang['IM_UP_S']; ?> <?php echo STORE_DETAIL_WIDTH; ?> X <?php echo STORE_DETAIL_HEIGHT; ?> </label>
                    </td>
                </tr>                    
                        
                        <tr>
                                <td></td>
                                <td></td>
                                <td><input type="submit" id="submit" value="<?php echo $this->Lang['SUBMIT']; ?>" /><input type="button" value="<?php echo $this->Lang['RESET']; ?>" onclick="javascript:window.location='<?php echo PATH; ?>admin/add-merchant-shop/<?php echo $this->m_id; ?>.html'"/></td>
                        </tr>
                </table>
        </form>
    </div>
    
</div>

<div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>




