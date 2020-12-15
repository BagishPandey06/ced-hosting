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
require 'header.php';
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
                  <li class="breadcrumb-item"><a href="#">
                    <i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Maps</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Google maps</li>
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
              <form >
                <h6 class="heading-small text-muted mb-4">Enter Product Details</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">
                          <span>Select Product Category 
                            <label style="color:red">*</label></span>
                        </label>
                        <select class="form-control"name="" id="prntcat" required>
                        <option value="Choose">Choose...</option>
                                    <?php foreach($out1 as $key=>$v): ?>
                                <?php if (!($v['prod_name']=='Hosting')) :?>
                                <option value="<?php echo $v['id']?>">
                                <?php echo $v['prod_name']?></option>
                                <?php 
                                endif; ?>
                                <?php 
                                    endforeach;?>
                                    </select>

                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">
                          <span>Enter Product Name <label style="color:red">*</label>
                        </span></label>
                        <input type="text" id="prdname" class="form-control " 
                        placeholder="Enter Product Name" required>
                        <div class="invalid-feedback">Required field</div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">
                          <span>Page URL</span></label>
                        <input type="text" id="url" class="form-control" 
                        placeholder="URL" required>
                        <div class="invalid-feedback">Required field</div>
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
                        <label class="form-control-label" for="input-username">
                          <span>Enter Monthly Price <label style="color:red">
                          *</label></span></label>
                        <input type="text" id="mnthprc" maxlength="10" 
                        pattern="[0-9]"class="form-control" 
                        placeholder="Enter Monthly Price" required >
                        <div class="invalid-feedback">Required field</div>
                           <h5 class="text-muted">This would be Monthly Plan </h5>
                    </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">
                          <span>Enter Annual Price<label style="color:red">
                          *</label></span></label>
                        <input type="email" id="anprc" maxlength="10" 
                        pattern="[0-9]" class="form-control" 
                        placeholder="Enter Annual Price" required>
                        <div class="invalid-feedback">Required field</div>
                        <h5 class="text-muted">This would be Annual Price  </h5>
                    </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">
                          <span>SKU<label style="color:red">*</label></span></label>
                        <input type="text" id="sku" 
                        class="form-control" placeholder="SKU" required>
                        <div class="invalid-feedback">Required field</div>

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
                        <label class="form-control-label" for="input-username">
                          <span>Web Space(in GB)<label style="color:red">
                          *</label></span></label>
                        <input type="text" id="ws" class="form-control" 
                        maxlength="5" placeholder="Web Space" required>
                        <div class="invalid-feedback">Required field</div>
                        <h5 class="text-muted">Enter 0.5 for 512 MB  </h5>

                    </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">
                          <span>Bandwidth (in GB) <label style="color:red">
                          *</label></span></label>
                        <input type="email" id="band" 
                        class="form-control" maxlength="5"
                        placeholder="Bandwidth" required>
                        <div class="invalid-feedback">Required field</div>
                        <h5 class="text-muted">Enter 0.5 for 512 MB  </h5>

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">
                          <span>Free Domain <label style="color:red">
                          *</label></span></label>
                        <input type="text" id="domain" 
                        class="form-control" placeholder="Free Domain" required>
                        <div class="invalid-feedback">Required field</div>
                        <h5 class="text-muted">
                          Enter 0 if no domain available in this service</h5>

                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="input-first-name"><span>Language / Technology Support
                          <label style="color:red">*</label></span></label>
                        <input type="text" id="sup" 
                        class="form-control" 
                        placeholder="Language / Technology Support" required >
                        <div class="invalid-feedback">Required field</div>
                        <h5 class="text-muted"> 
                          Separate by (,) Ex: PHP, MySQL, MongoDB </h5>

                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" 
                        for="input-first-name"><span>Mailbox 
                          <label style="color:red">*</label></span></label>
                        <input type="text" id="mail" 
                        class="form-control" placeholder="Mailbox" required>
                        <div class="invalid-feedback">Required field</div>
                        <h5 class="text-muted">
                          Enter Number of mailbox will be 
                          provided, enter 0 if none </h5>

                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <div class="text-center">
                <input type="button" value="Add product" 
                class="btn btn-primary prod">
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