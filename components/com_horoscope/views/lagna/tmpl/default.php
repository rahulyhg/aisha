<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die();
		
?>
<div class="spacer"></div>
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> This feature is in Testing Phase. Also values are based on Raman Ephemeris 
  and some difference possible in values from standard Lahiri Ephemeris.
</div>
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Timezone need to be entered in format +05:30 for India 
  +00:00 for Greenwich Mean Time and -05:00 for Eastern Time, US and so on. Also Daylight Savings Time need to be entered if Country 
  follows system of Daylight Savings
</div>
<div class="spacer"></div>
<h2>Calculate Horoscope</h2>
<form role="form" enctype="application/x-www-form-urlencoded" method="post" 
      action="<?php echo JRoute::_('index.php?option=com_horoscope&task=lagna.findlagna'); ?>">
    <div class="form-group" id="lagna_grp_1">
        <label for="inputName" class="control-label">Name:</label>
        <input type="text" name="fname" class="form-control" id="lagna_1" placeholder="Enter your name..." />
        <span class="error1" id="lagna_err_1">Please input a valid name.</span>
    </div>
    <div class="form-group">
        <label for="inputGender" class="control-label">Gender:</label>
         <input type="radio" name="gender" value="male" id="lagna_gender1"> Male
        <input type="radio" name="gender" value="female" id="lagna_gender2" checked> Female
    </div>
    <div class="form-group" id="lagna_grp_3">
        <label for="dob" class="control-label">Date Of Birth(Year/Month/Date Format):</label>
        <input type="text" name="dob" id="datepicker" class="form-control" placeholder="Example: 1984/03/25" />
        <span class="error1" id="lagna_err_3">Please insert date in yyyy/mm/dd format.</span>
    </div>
    <div class="form-group">
        <label for="dob" class="control-label">Time Of Birth(24 Hour Format):</label><br/>
        <select class="select2" id="lagna_tob_hr" name="lagna_hr">
        <?php
             for($i=0;$i<24;$i++)
             {
                 if($i<10)
                 {
        ?>
                <option><?php echo "0".$i; ?></option>
        <?php
                 }
                else
                {
        ?>
                <option><?php echo $i; ?></option>
        <?php
                }
             }
        ?>
        </select>
        <select class="select2" id="lagna_tob_min" name="lagna_min">
        <?php
            for($i=0;$i<60;$i++)
            {
               if($i<10)
               {
                ?>
                <option><?php echo "0".$i; ?></option>
                <?php    
               }
               else
                {
        ?>
                <option><?php echo $i; ?></option>
        <?php
                }
            }
        ?>
        </select>
        <select class="select2" id="lagna_tob_sec" name="lagna_sec">
        <?php
            for($i=0;$i<60;$i++)
            {
               if($i<10)
               {
                ?>
                <option><?php echo "0".$i; ?></option>
                <?php    
               }
               else
                {
        ?>
                <option><?php echo $i; ?></option>
        <?php
                }
            }
        ?>
        </select>
        
    </div>
    <div class="form-group" id="lagna_grp_4">
        <label for="dob" class="control-label">Place Of Birth</label>
        <div class="ui-widget">
        <input type="text" id="lagna_pob" name="lagna_pob" class="form-control ui-autocomplete-input" placeholder="Enter text for list of places" />
        <span class="error1" id="lagna_err_4">Please enter place of birth</span>
        </div>
    </div>
    <div class="form-group">
        <label for="longitude" class="control-label">Longitude</label><br/>
        <input type="text" id="lagna_long_1" class="form-text" name="lon_deg"  />
        <input type="text" id="lagna_long_2" class="form-text" name="lon_min" />
        <select class="select2" id="lagna_long_direction" name="lon_dir">
            <option>E</option>
            <option>W</option>
        </select>

    </div>
    <div class="form-group">
        <label for="latitude" class="control-label">Latitude</label><br/>
        <input type="text" id="lagna_lat_1" class="form-text" name="lat_deg"  />
        <input type="text" id="lagna_lat_2" class="form-text" name="lat_min" />
        <select class="select2" id="lagna_lat_direction" name="lat_dir">
            <option>N</option>
            <option>S</option>
        </select>
    </div>
    <div class="form-group">
        <label for="latitude" class="control-label">Timezone: <strong>GMT</strong></label>
        <input type="text" id="lagna_timezone" class="form-text" name="lagna_timezone"  />
    </div>
    <div class="form-group">
        <label for="lagna_dst" class="control-label">DST/Summer War:</label>
        <select class="select2" name="lagna_dst" id="lagna_dst">
            <option value="00:00:00">None</option>
            <option value="01:00:00">One Hour</option>
            <option value="02:00:00">Two Hour</option>
            <option value="03:00:00">Three Hour</option>
        </select>
        <a href="http://www.timeanddate.com/time/dst/" title="Click on link to understand about Daylight Saving Timings" target="_blank">What is DST?</a>
    </div>
    <div class="form-group">
            <button type="submit" class="btn btn-primary" name="lagnasubmit" onclick="javascript:getLagna();return false;">Get Horoscope</button>
             <button type="reset" class="btn btn-danger">Reset Form</button>
    </div>
</form>
<div class="spacer"></div>