<?php 
require 'header.php';
require '../Config.php';
require 'product.php';
$obj =new Config();
$data = $obj->Connect();
$obj=new Product();
$out1=$obj->getpro($data);
$out2=$obj->getallprod($data);




?>
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Google maps</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Maps</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Google maps</li>
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
    <div class="container-fluid mt--6 ">
  <div class="row justify-content-center">
    <div class="col-xl-12 order-xl-1">
      <div class="card">
        <div class="card-header ">
          <div class="row align-items-center ">
            <div class="col-8 text-center ml-8">
              <h3 class="mb-0  " style="font-size:35px">View Products</h3>
            </div>

          </div>
        </div>
        <div class="card-body">

          <table class="table align-items-center table-bordered table-flush table-responsive" id="prodtable">
            <thead class="bg-info">
              <tr>
                <th>Product Parent Name</th>
                <th>Product Name</th>
                <th>Product URL</th>
                <th>Product Monthly price</th>
                <th>Product Annual Price</th>
                <th>Product SKU</th>
                <th>Product WebSpace(GB)</th>
                <th>Product Bandwidth(GB)</th>
                <th>Product Free Domain</th>
                <th>Product Language/Technology Support</th>
                <th>Product MailBox</th>
                <th>Product Action</th>
              </tr>
            </thead>
            <tbody class="bg-secondary">
            <?php if ($out2=='false') :?>
              <p>No DATA found</p>
            <?php endif;?>
            <?php if (!empty($out2)) :?>
              <?php foreach ($out2 as $key=>$v) :?>
              <?php if (!($v['prod_name']=='Hosting') ) :?>
              <tr>
                <td><?php echo $v['prnt_prod_name'];?></td>
                <td><?php echo $v['prod_name'];?></td>
                <td><?php echo $v['link']?></td>
                <td><?php echo $v['mon_price'];?></td>
                <td><?php echo $v['annual_price'];?></td>
                <td><?php echo $v['sku'];?></td>
                <td><?php echo $v['ws']?></td>
                <td><?php echo $v['band']?></td>
                <td><?php echo $v['domain']?></td>
                <td><?php echo $v['sup']?></td>
                <td><?php echo $v['mail']?></td>
                <td><button name="edit" class="btn btn-outline-success editpro" data-toggle="modal" data-target="#exampleModal"
                    data-id="<?php echo $v['id']?>">Edit</button>
                  <button class="btn btn-outline-danger delpro" data-id="<?php echo $v['id']; ?>">Delete</button></td>
              </tr>
              <?php endif;?>
              <?php endforeach;?>
                <?php endif;?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-center ">
        <h5 class="modal-title " id="exampleModalLabel">Edit product</h5>  
        <button type="button" class="close" data-dismiss="modal">&times;</button>    </div>
      <div class="modal-body">

      <form>
          <h6 class="heading-small text-muted mb-4">Enter Product Details</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-username"><span>Select Product Category <label style="color:red">*</label></span></label>
                  <select class="form-control"  id="eprntcat" required>
                    <?php foreach($out1 as $key=>$v): ?>
                      <?php if (!($v['prod_name']=='Hosting')) :?>
                        <option value="<?php echo $v['id']?>"><?php echo $v['prod_name']?></a></option>
                      <?php endif; ?>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>
   
                                    <div id="modal-body"></div>
              
      
      </div>
    </div>
  </div>
</div>
                      
      <script src="admin.js"></script>
        <?php require 'footer.php';?>