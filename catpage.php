<!--
Au
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
/**
 * * PHP version 7.2.10
 * 
 * @category Components
 * @package  PackageName
 * @author   Bagish <Bagishpandey999@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     http://localhost/training/taskmy/register.php?
 */
if (empty($_REQUEST['id']) ) {
    echo '<script>window.location.href="../cedhosting/"</script>';
    //header("Location:../cedhosting/admin/");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
            <script src="js/jquery.swipebox.min.js"></script> 
                <script type="text/javascript">
                    jQuery(function($) {
                        $(".swipebox").swipebox();
                    });
                </script>
<!--script-->
</head>
<body>
<?php
require 'user.php';
require 'header.php';

//$out1=$obj->getallprod($data);
// print_r($out1);

$id=$_REQUEST['id'];

echo '<script>var id ='.$_GET['id'].'; </script>';

?>

          <!---singleblog--->
          <div class="content">
                    <div class="linux-section">
                        <div class="container">
                            <div class="linux-grids">
                            </div>
                        </div>
                    </div>
                    <div class="tab-prices">
                        <div class="container">
                            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">IN Hosting</a></li>
                                    <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">US Hosting</a></li>
                                    </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                        <div class="linux-prices">                                                                                                                                                                                                       
                                            <!--     -->
                                            <div class="clearfix"></div>
                                    </div>
                                </div>
                                    <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                        <div class="linux-prices">
                                            <div class="col-md-3 linux-price">
                                                <div class="linux-top us-top">
                                                <h4>Standard</h4>
                                                </div>
                                                <div class="linux-bottom us-bottom">
                                                    <h5>$259 <span class="month">per month</span></h5>
                                                    <h6>Single Domain</h6>
                                                    <ul>
                                                    <li><strong>Unlimited</strong> Disk Space</li>
                                                    <li><strong>Unlimited</strong> Data Transfer</li>
                                                    <li><strong>Unlimited</strong> Email Accounts</li>
                                                    <li><strong>Includes </strong>  Global CDN</li>
                                                    <li><strong>High Performance</strong>  Servers</li>
                                                    <li><strong>location</strong> : <img src="images/us.png"></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="us-button">buy now</a>
                                            </div>
                                            <div class="col-md-3 linux-price">
                                                <div class="linux-top us-top">
                                                <h4>Advanced</h4>
                                                </div>
                                                <div class="linux-bottom us-bottom">
                                                    <h5>$359 <span class="month">per month</span></h5>
                                                    <h6>2 Domains</h6>
                                                    <ul>
                                                    <li><strong>Unlimited</strong> Disk Space</li>
                                                    <li><strong>Unlimited</strong> Data Transfer</li>
                                                    <li><strong>Unlimited</strong> Email Accounts</li>
                                                    <li><strong>Includes </strong>  Global CDN</li>
                                                    <li><strong>High Performance</strong>  Servers</li>
                                                    <li><strong>location</strong> : <img src="images/us.png"></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="us-button">buy now</a>
                                            </div>
                                            <div class="col-md-3 linux-price">
                                                <div class="linux-top us-top">
                                                <h4>Business</h4>
                                                </div>
                                                <div class="linux-bottom us-bottom">
                                                    <h5>$539 <span class="month">per month</span></h5>
                                                    <h6>3 Domains</h6>
                                                    <ul>
                                                    <li><strong>Unlimited</strong> Disk Space</li>
                                                    <li><strong>Unlimited</strong> Data Transfer</li>
                                                    <li><strong>Unlimited</strong> Email Accounts</li>
                                                    <li><strong>Includes </strong>  Global CDN</li>
                                                    <li><strong>High Performance</strong>  Servers</li>
                                                    <li><strong>location</strong> : <img src="images/us.png"></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="us-button">buy now</a>
                                            </div>
                                            <div class="col-md-3 linux-price">
                                                <div class="linux-top us-top">
                                                <h4>Pro</h4>
                                                </div>
                                                <div class="linux-bottom us-bottom">
                                                    <h5>$639 <span class="month">per month</span></h5>
                                                    <h6>Unlimited Domains</h6>
                                                    <ul>
                                                    <li><strong>Unlimited</strong> Disk Space</li>
                                                    <li><strong>Unlimited</strong> Data Transfer</li>
                                                    <li><strong>Unlimited</strong> Email Accounts</li>
                                                    <li><strong>Includes </strong>  Global CDN</li>
                                                    <li><strong>High Performance</strong>  Servers</li>
                                                    <li><strong>location</strong> : <img src="images/us.png"></li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="us-button">buy now</a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- clients -->
                <div class="clients">
                    <div class="container">
                        <h3>Some of our satisfied clients include...</h3>
                        <ul>
                            <li><a href="#"><img src="images/c1.png" title="disney" /></a></li>
                            <li><a href="#"><img src="images/c2.png" title="apple" /></a></li>
                            <li><a href="#"><img src="images/c3.png" title="microsoft" /></a></li>
                            <li><a href="#"><img src="images/c4.png" title="timewarener" /></a></li>
                            <li><a href="#"><img src="images/c5.png" title="disney" /></a></li>
                            <li><a href="#"><img src="images/c6.png" title="sony" /></a></li>
                        </ul>
                    </div>
                </div>
       <!-- clients -->
                    <div class="whatdo">
                        <div class="container">
                            <h3>Linux Features</h3>
                            <div class="what-grids">
                                <div class="col-md-4 what-grid">
                                    <div class="what-left">
                                    <i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
                                    </div>
                                    <div class="what-right">
                                        <h4>Expert Web Design</h4>
                                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-md-4 what-grid">
                                    <div class="what-left">
                                    <i class="glyphicon glyphicon-dashboard" aria-hidden="true"></i>
                                    </div>
                                    <div class="what-right">
                                        <h4>Expert Web Design</h4>
                                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-md-4 what-grid">
                                    <div class="what-left">
                                    <i class="glyphicon glyphicon-stats" aria-hidden="true"></i>
                                    </div>
                                    <div class="what-right">
                                        <h4>Expert Web Design</h4>
                                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="what-grids">
                                <div class="col-md-4 what-grid">
                                    <div class="what-left">
                                    <i class="glyphicon glyphicon-download-alt" aria-hidden="true"></i>
                                    </div>
                                    <div class="what-right">
                                        <h4>Expert Web Design</h4>
                                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-md-4 what-grid">
                                    <div class="what-left">
                                    <i class="glyphicon glyphicon-move" aria-hidden="true"></i>
                                    </div>
                                    <div class="what-right">
                                        <h4>Expert Web Design</h4>
                                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-md-4 what-grid">
                                    <div class="what-left">
                                    <i class="glyphicon glyphicon-screenshot" aria-hidden="true"></i>
                                    </div>
                                    <div class="what-right">
                                        <h4>Expert Web Design</h4>
                                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <script>
                     $(document).ready(function(){
                        //  alert(id);
                     $.ajax({
                        url: "helper.php",
                        type: "post",
                        data:{
                            prod_id: id,
                            action: "catpage"
                        },
                        success: function (result) {
                            
                        $('.linux-grids').html(result);
                        }
                        });


                        $.ajax({
                        url: "helper.php",
                        type: "post",
                        data:{
                            prod_id: id,
                            action: "catpagedesc"
                        },
                        dataType: "json",
                        success: function (result) {
                            
                            html='';
                            for (i=0;i<result.length;i++) {
                                html+='  <div class="col-md-3 linux-price">\
                                                <div class="linux-top">\
                                                <h4>'+result[i]['prod_name']+'</h4>\
                                                </div>\
                                                <div class="linux-bottom da">\
                                        <h5>$'+result[i]['mon_price']+' <span class="month">/per month</span></h5>\
                                    <h6>'+result[i]['domain']+' Domains</h6>\
                                    <ul>\
                                    <li><strong>'+result[i]['ws']+'</strong> Web Space</li>\
                                    <li><strong>'+result[i]['band']+'</strong> Bandwidth</li>\
                                    <li><strong>'+result[i]['sup']+'</strong> Language/Technology Support</li>\
                                    <li><strong>'+result[i]['mail']+' </strong>  MailBox</li>\
                                    <li><strong>location</strong> : <img src="images/india.png"></li>\
                                    </ul> </div>\
                                                <a href="#">buy now</a>\
                                            </div>';
                                            $(".linux-prices").html(html);
                            }
  
                        }
                        });
                        
                     });
                </script>
<?php require 'footer.php';?>