<?php require 'header.php';?>
<?php 
   require '../Config.php';
   require 'product.php';
   $obj =new Config();
$data = $obj->Connect();
$obj=new Product();
$out1=$obj->getpro($data);
if (isset($_POST['submit'])) {
    $newcat=$_POST['newcat'];
    $avi=$_POST['avi'];
    $link=isset($_POST['link'])?$_POST['link']:'';
    
    $out=$obj->addcat($newcat, $avi, $link, $data);
    echo ("<script>alert('Category Added Succesfully');</script>");
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
                    <?php foreach($out1 as $key=>$v) :?>
                    <?php if($v['prod_name']=='Hosting') :?>
                    <input class="form-control"   type="text" value =<?php echo $v['prod_name'];?> readonly>
                    <?php endif;?>
                    <?php endforeach;?>
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
          
          <th>Category Name</th>
          <th>Link</th>
          <th>Avilabilty</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="bg-secondary">
        <?php foreach($out1 as $key=>$v) :?>
        <tr>
          
          <td><?php echo $v['prod_name'];?></td>
        <td><?php echo $v['link']?></td>
        <td><?php echo $v['prod_available']?></td>
        <td><button class="btn btn-outline-success delr" data-id=<?php $v['id']?>>Edit</button>
        <button class="btn btn-outline-danger delr" data-id=<?php $v['id']?>>Delete</button></td>
      </tr>
        <?php endforeach;?>
      </tbody>
    </table>
    
    </div>
  </div>
  <script>
    $(document).ready(function () {
    $("#cattable").dataTable();
  });
  </script>
    <?php require 'footer.php';?>