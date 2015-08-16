<?php
    error_reporting(0);
    defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<?php
    $doc = JFactory::getDocument();
    $head_data = $doc->getHeadData();
?>
<title><?php echo $head_data['title']; ?></title>
<meta name="description" content="<?php echo $head_data['description']; ?>">
<meta name="keywords" content="<?php echo $head_data['metaTags']['standard']['keywords']; ?>">
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="msvalidate.01" content="E689BB58897C0A89BDC88E5DF8800B2F" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/bootstrap/css/bootstrap-theme.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/jquery-ui.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/jquery-ui.structure.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/jquery-ui.theme.min.css" type="text/css" />
<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicon.ico" type="image/x-icon" />
<link rel="icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/favicon.ico" type="image/x-icon">
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.min.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/bootstrap/js/bootstrap.min.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/jquery-ui/jquery-ui.min.js" language="javascript"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/common.js" type="text/javascript" language="javascript"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="body">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=220390744824296";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <?php
     // Get option and view
    $option = JRequest::getVar('option');
    $view = JRequest::getVar('view');
    // Make sure it is a single article
    if ($option == 'com_content' && $view == 'article'):
      $id = JRequest::getInt('id');
   ?>
    <div id="<?php echo $id; ?>" class="accordion-id"></div>
    <?php
      endif;
      ?>

<div id="fb-root"></div>
    <div id="loadergif" class="loader"><img src="<?php echo $this->baseurl ?>/images/loader.gif" /></div>
<div class="main-header">
    <div class="header-logo">
        <h1 id="heading"><a href="<?php echo JURI::base(); ?>"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/jv_logo4.png" alt="Astro Isha" title="Navigate to Home Page" class="image-logo" /><span class="head_title">Astro Isha</span></a></h1>
    </div>
    <div class="login-module" id="login-cred">
        <jdoc:include type="modules" name="userlogin" style="none" />
    </div>
    <div class="header-menu visible-md visible-lg" id="header-menu">
        <div class="home_icon">
            <a style="text-decoration: none;" href="<?php echo JURI::base(); ?>">
            <button type="button" class="btn btn-primary" aria-label="Navigate To Home Page">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            </button></a>
        </div>
        <div class="navigation_menu">
            <ul class="nav nav-pills">
                <li class="dropdown">
                    <jdoc:include type="modules" name="menu1" style="none" />
                </li>
                <li class="dropdown">
                    <jdoc:include type="modules" name="menu2" style="none" />
                </li>
                <li class="dropdown">
                    <jdoc:include type="modules" name="menu3" style="none" />
                </li>
                <li class="dropdown">
                    <jdoc:include type="modules" name="menu4" style="none" />
                </li>
                <li class="dropdown">
                    <jdoc:include type="modules" name="menu" style="none" />
                </li>
            </ul>
        </div>
     </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="hidden-md hidden-lg" id="mob_menu">
            <button type="button" class="btn btn-primary" aria-label="Show Menu" onclick="javascript:showSideMenu();">
                <span class="glyphicon glyphicon-list" aria-hidden="true"></span>
            </button>
             <a style="text-decoration: none;" href="<?php echo JURI::base(); ?>">
            <button type="button" class="btn btn-primary" aria-label="Navigate To Home Page">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
            </button></a>
            </button></a>
        </div>
    <div class="col-md-3 hidden-xs hidden-sm" id="sidebar">
        <div class="spacer"></div>
        <jdoc:include type="modules" name="sidebar" style="none" />
        <div class="hidden-xs hidden-sm">
        <div class="spacer"></div>
        <jdoc:include type="modules" name="paypaldonate" style="none" />
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="spacer"></div>
        <button type="button" class="btn btn-warning" data-toggle="collapse" href="#noticeone" 
             aria-expanded="false" aria-controls="#noticeone">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Notice
        </button>
        <div class="collapse" id="noticeone">
            <div class="well">
                There is update to our <a href="http://www.astroisha.com/privacy" target="_blank" title="Navigate to Privacy Policy in New Window">Privacy Policy</a> and the way in which Astro Isha collects information from users. Please check the link provided for more information.
              </div>
        </div>
          <button type="button" class="btn btn-success" data-toggle="collapse" href="#noticetwo" 
             aria-expanded="false" aria-controls="#noticetwo">
            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Payments
        </button>
        <div class="collapse" id="noticetwo">
            <div class="well">
            <img src="<?php echo $this->baseurl ?>/images/paypal_icon.png" alt="Paypal" title="Paypal Logo" height="64px" width="64px" />
            <br/>Paypal Payments are now accepted on Astro Isha: <a href="<?php echo JUri::base().'ask-question'; ?>">Ask An Astrologer</a> for all countries except India. Due to RBI (Reserve Bank Of India) Guidelines Indian Customers cannot transfer money 
             via Paypal to India Based Businesses. But we are working on it to solve the issue. Also payment via Credit or Debit Card is
             not possible at present for other countries.
              </div>
        </div>
        <div class="spacer"></div>
        <div class="breadcrumb">
            <jdoc:include type="modules" name="breadcrumbs" style="none" />
        </div>
        <div class="container-main">
            <div class="spacer"></div>
            <jdoc:include type="modules" name="articleslider" style="none" />
            <div class="spacer"></div>
            <jdoc:include type="modules" name="articleslider2" style="none" />
            <div class="spacer"></div>
            <jdoc:include type="component" />
            <div class="spacer"></div>
            <jdoc:include type="message" />
            <div class="spacer"></div>
            <jdoc:include type="modules" name="relatedarticles" style="none" />
        </div>
    </div>
    <div class="col-md-3 hidden-xs hidden-sm">
        <div class="spacer"></div>
        <jdoc:include type="modules" name="socialplugins" style="none" />
        <div class="spacer"></div>
        <jdoc:include type="modules" name="fblikeplugin" style="none" />
        <div class="spacer"></div>
        <jdoc:include type="modules" name="searchbox" style="none" />
    </div>
    </div>
</div>
<div class="footer2">
    <div class="spacer"></div>
    <jdoc:include type="modules" name="footer2" style="none" />
</div>
<div class="footer">
    <jdoc:include type="modules" name="footer" style="none" />
</div>
<!--Scripts at the bottom of the Page -->
<script>
  $(function() {
    $( "#datepicker" ).datepicker({ yearRange: "1940:2050",changeMonth: true,
      changeYear: true, dateFormat: "yy/mm/dd"  });
  });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49809214-1', 'astroisha.com');
  ga('require', 'linkid', 'linkid.js');
  ga('send', 'pageview');

</script>

</body>
</html>
