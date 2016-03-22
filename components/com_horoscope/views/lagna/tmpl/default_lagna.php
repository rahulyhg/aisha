<?php
defined('_JEXEC') or die();
//print_r($this->data);exit;
$array = array($this->data['fname'],$this->data['gender'],str_replace("\/","-",$this->data['dob']),
                                  $this->data['tob'],$this->data['pob'],$this->data['lat'],
                                  $this->data['lon'],$this->data['tmz']);
$array = json_encode($array);
?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Horoscope</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Planet Details</a></li>
          <li><form method="post"enctype="application/x-www-form-urlencoded" action="<?php echo JRoute::_('index.php?option=com_horoscope&task=lagna.getascendant'); ?>"><input type="hidden" name="data" value="<?php echo htmlspecialchars($array); ?>" /><input type="submit" class="navbar-brand navbar-inverse" value="Ascendant" /></form></li>
          <li><form method="post"enctype="application/x-www-form-urlencoded" action="<?php echo JRoute::_('index.php?option=com_horoscope&task=lagna.getmoon'); ?>"><input type="hidden" name="data" value="<?php echo htmlspecialchars($array); ?>" /><input type="submit" class="navbar-brand navbar-inverse" value="Moon" /></form></li>
          <li><form method="post"enctype="application/x-www-form-urlencoded" action="<?php echo JRoute::_('index.php?option=com_horoscope&task=lagna.getnakshatra'); ?>"><input type="hidden" name="data" value="<?php echo htmlspecialchars($array); ?>" /><input type="submit" class="navbar-brand navbar-inverse" value="Nakshatra" /></form></li>
          <li><a href="#">Navamsha</a></li>
        </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
<div class="spacer"></div>
<h3>User Details</h3>
<table class="table table-striped">
    <tr>
        <th>Name</th>
        <td><?php echo ucfirst($this->data['fname']); ?></td>
    </tr>
    <tr>
        <th>Gender</th>
        <td><?php echo ucfirst($this->data['gender']); ?></td>
    </tr>
    <tr>
        <th>Date Of Birth</th>
        <td><?php echo $this->data['dob']; ?></td>
    </tr>
    <tr>
        <th>Time Of Birth</th>
        <td><?php echo $this->data['tob']; ?></td>
    </tr>
    <tr>
        <th>Place Of Birth</th>
        <td><?php echo $this->data['pob']; ?></td>
    </tr>
    <tr>
        <th>Latitude</th>
        <td><?php echo $this->data['lat']; ?></td>
    </tr>
    <tr>
        <th>Longitude</th>
        <td><?php echo $this->data['lon']; ?></td>
    </tr>
    <tr>
        <th>Time Zone</th>
        <td>GMT<?php echo $this->data['tmz']; ?></td>
    </tr>
</table>
<div class="spacer"></div>
<h3>Planetary Table</h3>
<div class="table-responsive">
<table class="table table-hover">
    <tr>
        <th>Planets</th>
        <th>Sign</th>
        <th>Distance</th>
    </tr>
    <tr>
        <th>Ascendant</th>
        <td><?php echo $this->data['lagna_sign'] ?></td>
        <td><?php echo $this->data['lagna_distance'] ?></td>
    </tr>
    <tr>
        <th>Sun</th>
        <td><?php echo $this->data['surya_details']; ?></td>
        <td><?php echo $this->data['surya_distance']; ?></td>
    </tr>
    <tr>
        <th>Moon</th>
        <td><?php echo $this->data['moon_details']; ?></td>
        <td><?php echo $this->data['moon_distance']; ?></td>
    </tr>
    <tr>
        <th>Mars</th>
        <td><?php echo $this->data['mangal_details']; ?></td>
        <td><?php echo $this->data['mangal_distance']; ?></td>
    </tr>
    <tr>
        <th>Mercury</th>
        <td><?php echo $this->data['budh_details']; ?></td>
        <td><?php echo $this->data['budh_distance']; ?></td>
    </tr>
    <tr>
        <th>Jupiter</th>
        <td><?php echo $this->data['guru_details']; ?></td>
        <td><?php echo $this->data['guru_distance']; ?></td>
    </tr>
    <tr>
        <th>Venus</th>
        <td><?php echo $this->data['shukra_details']; ?></td>
        <td><?php echo $this->data['shukra_distance']; ?></td>
        
    </tr>
    <tr>
        <th>Saturn</th>
        <td><?php echo $this->data['shani_details']; ?></td>
        <td><?php echo $this->data['shani_distance']; ?></td>
    </tr>
    <tr>
        <th>Rahu</th>
        <td><?php echo $this->data['rahu_details']; ?></td>
        <td><?php echo $this->data['rahu_distance']; ?></td>
    </tr>
    <tr>
        <th>Ketu</th>
        <td><?php echo $this->data['ketu_details']; ?></td>
        <td><?php echo $this->data['ketu_distance']; ?></td>
    </tr>
</table>
</div>
<?php
unset(
        $this->data['surya_details'],$this->data['surya_distance'],
        $this->data['moon_details'],$this->data['moon_distance'],
        $this->data['mangal_details'],$this->data['mangal_distance'],
        $this->data['budh_details'],$this->data['budh_distance'],
        $this->data['guru_details'],$this->data['guru_distance'],
        $this->data['shukra_details'],$this->data['shukra_distance'],
        $this->data['shani_details'],$this->data['shani_distance'],
        $this->data['rahu_details'],$this->data['rahu_distance'],
        $this->data['ketu_details'],$this->data['ketu_distance']
    );
?>