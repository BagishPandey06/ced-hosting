<?php 
require 'header.php';
   require '../Config.php';
   require 'product.php';
   $obj =new Config();
$data = $obj->Connect();
$obj=new Product();
$out1=$obj->getpro($data);
//print_r($out1);
if (isset($_POST['submit'])) {
    $newcat=$_POST['newcat'];
    $avi=$_POST['avi'];
    $link=isset($_POST['link'])?$_POST['link']:'';
    
    $out=$obj->addcat($newcat, $avi, $link, $data);
    echo ("<script>alert('Category Added Succesfully');
    window.location.href='createcat.php';</script>");
}

?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Create Category</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create Category</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
     <!-- Page content -->
     <div class="container mt--6">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-5">
            <div class="card-header bg-transparent ">
              <div class=" text-center ">
              <h6 style="font-size:35px">Add-Category</h6></div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" action="createcat.php" method="post">
              <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                      <i class="fa fa-lock"></i></span>
                    </div>
                    <?php //foreach($out1 as $key=>$v) :?>
                    <?php //if($v['prod_name']=='Hosting') :?>
                    <input class="form-control"   type="text" value ="Hosting" readonly>
                    <?php //endif;?>
                    <?php //endforeach;?>
                  </div>
                </div>
               
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                      <i class="fa fa-list"></i></span>
                    </div>
                    <input class="form-control" placeholder="New Category" name="newcat" type="text">
                  </div>
                </div>

                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                      <i class="fa fa-list"></i></span>
                    </div>
                    <select name="avi" id="" class="form-control" style="font-weight:bolder">
                    <option value="1">Avilable</option>
                    <option value="0">Not-Avilable</option>
                    </select>
                  </div>
                </div>


                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-link"></i></span>
                    </div>
                    <input class="form-control" placeholder="link(optional)" name="link" type="text">
                  </div>
                </div>
                <div class="text-center">
                  <input type="submit" name="submit" class="btn btn-primary my-4" value="Add-Category">
                </div>
              </form>
            </div>
          </div>
        
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-lg-10 col-md-7">
    <table id="cattable">
      <thead class="bg-info">
        <tr>
        <th>Category Parent Name</th>
          <th>Category Name</th>
          <th>Category Link</th>
          <th>Category Availabilty</th>
          <th>Category Action</th>
        </tr>
      </thead>
      <tbody class="bg-secondary">
      <?php if(!empty($out1)) :?>
        <?php foreach($out1 as $key=>$v) :?>
          <?php if(!($v['prod_name']=='Hosting')) :?>
        <tr>
        <td><?php echo $v['prod_parent_name'];?></td>
          <td><?php echo $v['prod_name'];?></td>
        <td><?php echo $v['link']?></td>
        <td><?php if ($v['prod_available']==0) {
          echo ("Not-Available"); 
          } else if ($v['prod_available']==1) {
            echo ("Available");
            }?></td>
        <td><button  class="btn btn-outline-success edit" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $v['id'];?>">Edit</button>
        <button class="btn btn-outline-danger del" data-id="<?php echo $v['id']?>">Delete</button></td>
      </tr>
        <?php endif;?>
        <?php endforeach;?>
        <?php endif;?>
      </tbody>
    </table>
    
    </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-center">
        <h5 class="modal-title " id="exampleModalLabel">Edit Category</h5>  
        <button type="button" class="close" data-dismiss="modal">&times;</button>    </div>
      <div class="modal-body">
       
               
              
      
      </div>
    </div>
  </div>
</div>
  <script src="admin.js">
  </script>
    <?php require 'footer.php';?>