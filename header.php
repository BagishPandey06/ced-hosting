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
require 'Config.php';
require 'admin/product.php';
$obj =new Config();
$data = $obj->Connect();
$obj=new Product();
$out1=$obj->getproavi($data);

?>
<!---header--->
<div class="header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <i class="sr-only">Toggle navigation</i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </button>
                    <div class="navbar-brand">
                        <h1 id="logo"><a href="index.php">CED-H<img src="img.png"
                                    style="width:50px;height:50px;vertical-align: top;">STING</a></h1>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="<?php if ($menu =="home") { 
                                echo "active"; 
                           }?>"><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
                        <li class="<?php if ($menu =="about") {
                                 echo "active"; 
                           } ?>"><a href="about.php">About</a></li>

                        <li class="<?php if ($menu =="services") {
                                echo "active"; 
                            }?>"><a href="services.php">Services</a></li>
                        <li class="dropdown <?php if ($menu=="host") { 
                                echo "active";
                                }?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <?php foreach($out1 as $key=>$v): ?>
                                <?php if (!($v['prod_name']=='Hosting')) :?>
                                <li><a href="catpage.php?id=<?php echo $v['id'];?>"><?php echo $v['prod_name']?></a>
                                </li>
                                <?php endif; ?>
                                <?php endforeach;?>
                            </ul>
                        </li>
                        <li class="<?php if ($menu=="pricing") {
                                echo "active";
                                }?>"><a href="pricing.php">pricing</a></li>
                        <li class="<?php if ($menu=="blog") {
                                echo "active";
                                }?>"><a href="blog.php">Blog</a></li>
                        <li class="<?php if ($menu=="contact") {
                                echo "active"; 
                                }?>"><a href="contact.php">Contact</a></li>
                        <li><a href="contact.php"><i class="fa fa-shopping-cart" style="font-size:24px"
                                    aria-hidden="true"></i>
                            </a></li>
                        <li class="<?php if ($menu=="login") {
                                echo "active";
                                }?>"><a href="login.php">Login</a></li>

                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div>