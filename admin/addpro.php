<?php require 'header.php';
require '../Config.php';
require 'product.php';
$obj =new Config();
$data = $obj->Connect();
$obj=new Product();
$out1=$obj->getpro($data);


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
    <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header ">
              <div class="row align-items-center ">
                <div class="col-8 text-center ml-8">
                  <h3 class="mb-0  " style="font-size:35px">Create New Product</h3>
                </div>
               
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Enter Product Details</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username"><span>Select Product Category <label style="color:red">*</label></span></label>
                        <select class="form-control"name="" id="prntcat">
                                    <?php foreach($out1 as $key=>$v): ?>
                              <?php if (!($v['prod_name']=='Hosting')) :?>
                                <option value="<?php echo $v['id']?>"><?php echo $v['prod_name']?></a></option>
                              <?php endif; ?>					
                                  <?php endforeach;?>
                                    </select>

                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email"><span>Enter Product Name <label style="color:red">*</label></span></label>
                        <input type="text" id="prdname" class="form-control" placeholder="jesse@example.com">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name"><span>Page URL</span></label>
                        <input type="text" id="url" class="form-control" placeholder="URL" >
                      </div>
                    </div>
                    
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Product Description </h6>
                <div class="pl-lg-4">
                  <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username"><span>Enter Monthly Price <label style="color:red">*</label></span></label>
                        <input type="text" id="mnthprc" class="form-control" placeholder="Enter Monthly Price" >
                           <h5 class="text-muted">This would be Monthly Plan </h5>
                    </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email"><span>Enter Annual Price<label style="color:red">*</label></span></label>
                        <input type="email" id="anprc" class="form-control" placeholder="Enter Annual Price">
                        <h5 class="text-muted">This would be Annual Price  </h5>
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name"><span>SKU<label style="color:red">*</label></span></label>
                        <input type="text" id="sku" class="form-control" placeholder="SKU" >

                    </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Features</h6>
                <div class="pl-lg-4">
                  <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username"><span>Web Space(in GB)<label style="color:red">*</label></span></label>
                        <input type="text" id="ws" class="form-control" placeholder="Web Space" >
                        <h5 class="text-muted">Enter 0.5 for 512 MB  </h5>

                    </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email"><span>Bandwidth (in GB) <label style="color:red">*</label></span></label>
                        <input type="email" id="band" class="form-control" placeholder="Bandwidth">
                        <h5 class="text-muted">Enter 0.5 for 512 MB  </h5>

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name"><span>Free Domain <label style="color:red">*</label></span></label>
                        <input type="text" id="domain" class="form-control" placeholder="Free Domain">
                        <h5 class="text-muted">Enter 0 if no domain available in this service</h5>

                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name"><span>Language / Technology Support<label style="color:red">*</label></span></label>
                        <input type="text" id="sup" class="form-control" placeholder="Language / Technology Support" >
                        <h5 class="text-muted"> Separate by (,) Ex: PHP, MySQL, MongoDB </h5>

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name"><span>Mailbox <label style="color:red">*</label></span></label>
                        <input type="text" id="mail" class="form-control" placeholder="Mailbox">
                        <h5 class="text-muted">Enter Number of mailbox will be provided, enter 0 if none </h5>

                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <div class="text-center">
                <input type="button" value="Add product" class="btn btn-primary prod">
                </div>
              </form>
            </div>
          </div>
          </div>
        </div>
      </div>
      </div>
      <script src="admin.js"></script>
      <?php require 'footer.php';?>