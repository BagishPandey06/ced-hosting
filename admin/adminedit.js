$(document).ready(function () {
    var inputstatecount = 0;
    var productnamecount = 0;
    var monthlypricecount = 0;
    var annualpricecount = 0;
    var skucount = 0;
    var webspacecount = 0;
    var bandwidthcount = 0;
    var freedomaincount = 0;
    var languagetechnologycount = 0;
    var mailboxcount = 0;
    $(".upprod").prop('disabled', true);
    $('#eprntcat').focusout(function () {
      inputState();
    });
    function inputState() {
      var value = ($('#eprntcat').val()).trim();
      if (value == "Choose") {
        $("select").addClass("is-invalid");
        $(".upprod").prop('disabled', true);
        inputstatecount = 0;
        return false;
      }
      else {
        $("select").removeClass("is-invalid");
        inputstatecount = 1;
        if (inputstatecount + productnamecount + monthlypricecount +
          annualpricecount + skucount + webspacecount + bandwidthcount +
          freedomaincount + languagetechnologycount + mailboxcount >= 10) {
          $(".upprod").prop('disabled', false);
        }
        return true;
      }
    }
    $('#eprdname').focusout(function () {
      productName();
    });
    function productName() {
      var regproductname = /(^([a-zA-Z]+\-[0-9]+$))|(^([a-zA-Z])+$)/;
      var value = ($('#eprdname').val()).trim();
      if (value == "" || !(value.match(regproductname))) {
        $("#eprdname").addClass("is-invalid");
        $(".upprod").prop('disabled', true);
        productnamecount = 0;
        return false;
      } else {
        $("#eprdname").removeClass("is-invalid");
        productnamecount = 1;
        if (inputstatecount + productnamecount + monthlypricecount +
          annualpricecount + skucount + webspacecount + bandwidthcount +
          freedomaincount + languagetechnologycount + mailboxcount >= 10) {
          $(".upprod").prop('disabled', false);
        }
        return true;
      }
    }
    $('#emnthprc').focusout(function () {
      monthlyPrice();
    });
    function monthlyPrice() {
      var regprice = /^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
      var value = ($('#emnthprc').val()).trim();
      if (value == "" || !(value.match(regprice))) {
        $("#emnthprc").addClass("is-invalid");
        $(".upprod").prop('disabled', true);
        monthlypricecount = 0;
        return false;
      }
      else {
        $("#emnthprc").removeClass("is-invalid");
        monthlypricecount = 1;
        if (inputstatecount + productnamecount + monthlypricecount +
          annualpricecount + skucount + webspacecount + bandwidthcount +
          freedomaincount + languagetechnologycount + mailboxcount >= 10) {
          $(".upprod").prop('disabled', false);
        }
        return true;
      }
    }
    $('#eanprc').focusout(function () {
      annualPrice();
    });
    function annualPrice() {
      var regprice = /^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
      var value = ($('#eanprc').val()).trim();
      if (value == "" || !(value.match(regprice))) {
        $("#eanprc").addClass("is-invalid");
        $(".upprod").prop('disabled', true);
        annualpricecount = 0;
        return false;
      }
      else {
        $("#eanprc").removeClass("is-invalid");
        annualpricecount = 1;
        if (inputstatecount + productnamecount + monthlypricecount +
          annualpricecount + skucount + webspacecount + bandwidthcount +
          freedomaincount + languagetechnologycount + mailboxcount >= 10) {
          $(".upprod").prop('disabled', false);
        }
        return true;
      }
    }
    $('#esku').focusout(function () {
      skuf();
    });
    function skuf() {
      var regsku = /^(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+))|(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+)([-#?]))+$/;
      var value = ($('#esku').val()).trim();
      if (value == "" || !(value.match(regsku))) {
        $("#esku").addClass("is-invalid");
        $(".upprod").prop('disabled', true);
        skucount = 0;
        return false;
      }
      else {
        $("#esku").removeClass("is-invalid");
        skucount = 1;
        if (inputstatecount + productnamecount + monthlypricecount +
          annualpricecount + skucount + webspacecount + bandwidthcount +
          freedomaincount + languagetechnologycount + mailboxcount >= 10) {
          $(".upprod").prop('disabled', false);
        }
        return true;
      }
    }
    $('#ews').focusout(function () {
      webSpace();
    });
    function webSpace() {
      var regwebspace = /^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
      var value = ($('#ews').val()).trim();
      if (value == "" || (!value.match(regwebspace))) {
        $("#ews").addClass("is-invalid");
        $(".upprod").prop('disabled', true);
        webspacecount = 0;
        return false;
      }
      else {
        $("#ews").removeClass("is-invalid");
        webspacecount = 1;
        if (inputstatecount + productnamecount + monthlypricecount +
          annualpricecount + skucount + webspacecount + bandwidthcount +
          freedomaincount + languagetechnologycount + mailboxcount >= 10) {
          $(".upprod").prop('disabled', false);
        }
        return true;
      }
    }
    $('#eband').focusout(function () {
      bandWidth();
    });
    function bandWidth() {
      var regbandwidth = /^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
      var value = ($('#eband').val()).trim();
      if (value == "" || value.match(!(regbandwidth))) {
        $("#eband").addClass("is-invalid");
        $(".upprod").prop('disabled', true);
        bandwidthcount = 0;
        return false;
      }
      else {
        $("#eband").removeClass("is-invalid");
        bandwidthcount = 1;
        if (inputstatecount + productnamecount + monthlypricecount +
          annualpricecount + skucount + webspacecount + bandwidthcount +
          freedomaincount + languagetechnologycount + mailboxcount >= 10) {
          $(".upprod").prop('disabled', false);
        }
        return true;
      }
    }
    $('#edomain').focusout(function () {
      freeDomain();
    });
    function freeDomain() {
      var regfreedomain = /^([a-zA-Z]+$)|(^([0-9])+$)/;
      var value = ($('#edomain').val()).trim();
      if (value == "" || !(value.match(regfreedomain))) {
        $("#edomain").addClass("is-invalid");
        $(".upprod").prop('disabled', true);
        freedomaincount = 0;
        return false;
      }
      else {
        $("#edomain").removeClass("is-invalid");
        freedomaincount = 1;
        if (inputstatecount + productnamecount + monthlypricecount +
          annualpricecount + skucount + webspacecount + bandwidthcount +
          freedomaincount + languagetechnologycount + mailboxcount >= 10) {
          $(".upprod").prop('disabled', false);
        }
        return true;
      }
    }
  
    $('#esup').focusout(function () {
      languageTechnology();
    });
    function languageTechnology() {
      var reglanguagetech = /(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+$))|(^([a-zA-Z]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+\,[a-zA-Z]+$))|(^([a-zA-Z])+$)/;
      var value = ($('#esup').val()).trim();
      if (value == "" || !(value.match(reglanguagetech))) {
        $("#esup").addClass("is-invalid");
        $(".upprod").prop('disabled', true);
        languagetechnologycount = 0;
        return false;
      }
      else {
        $("#esup").removeClass("is-invalid");
        languagetechnologycount = 1;
        if (inputstatecount + productnamecount + monthlypricecount + annualpricecount +
          skucount + webspacecount + bandwidthcount + freedomaincount +
          languagetechnologycount + mailboxcount >= 10) {
          $(".upprod").prop('disabled', false);
        }
        return true;
      }
    }
    $('#email').focusout(function () {
      mailBox();
    });
    function mailBox() {
      var regmailbox = /^([0-9])+$/;
      var value = ($('#email').val()).trim();
      if (value == "" || !(value.match(regmailbox))) {
        $("#email").addClass("is-invalid");
        $(".upprod").prop('disabled', true);
        mailboxcount = 0;
        return false;
      }
      else {
        $("#email").removeClass("is-invalid");
        mailboxcount = 1;
        if (inputstatecount + productnamecount + monthlypricecount + annualpricecount +
          skucount + webspacecount + bandwidthcount + freedomaincount +
          languagetechnologycount + mailboxcount >= 10) {
          $(".upprod").prop('disabled', false);
        }
        return true;
      }
    }
  
  
  
    //////////////////////////////////////////////////////////////////////////////////////////////////
  
    $("#prodtable").dataTable();
  
    $(document).on("click", ".delpro", function () {
  
      var x = confirm("Are you sure you want to delete Category?");
      if (x) {
        var id = $(this).data('id');
        //alert(id);
        $.ajax({
          url: "adminhelper.php",
          type: "post",
          data: {
            action: "delpro",
            id: id
          },
          success: function (result) {
            window.location.href = "viewprod.php";
          }
        });
      }
    });


  
    $(document).on("click", ".editpro", function () {
      
      var id = $(this).data('id');
  
      $.ajax({
        url: "adminhelper.php",
        type: "post",
        data: {
          action: "editpro",
          id: id
        },
        dataType: 'json',
        success: function (result) {
          var html = '';
            
            html += '<form>\
            <h6 class="heading-small text-muted mb-4">Enter Product Details</h6>\
            <div class="pl-lg-4">\
              <div class="row">\
                <div class="col-lg-6">\
                  <div class="form-group">\
                    <label class="form-control-label" \
                    for="input-username"><span>Select Product Category \
                      <label style="color:red">*</label></span></label>\
                    <select class="form-control"  id="eprntcat" required>';
                    for(var i=0;i<result.category.length;i++) {
                        if(result.category[i]['id'] == result['Product']['prod_parent_id']) {
                            html += '<option value="'+result.category[i]['id']+'" selected>'+result.category[i]['prod_name']+'</option>';
                        }
                        else {
                            html += '<option value="'+result.category[i]['id']+'">'+result.category[i]['prod_name']+'</option>';
                        }
                    }
                    html += '</select>\
                  </div>\
                </div>\
            <div class="col-lg-6" >\
            <div class="form-group">\
                    <label class="form-control-label" for="input-email"><span>Enter Product Name <label style="color:red">*</label></span></label>\
                    <input type="text" id="eprdname" class="form-control " value="'+result['Product']['prod_name'] + '" required>\
                  </div>\
                </div>\
              </div>\
              <div class="row">\
                <div class="col-lg-6">\
                  <div class="form-group">\
                    <label class="form-control-label" for="input-first-name"><span>Page URL</span></label>\
                    <input type="text" id="eurl" class="form-control" value="'+ result['Product']['html'] + '" required>\
                  </div>\
                </div>\
              </div>\
            </div>\
            <hr class="my-4" />\
            <h6 class="heading-small text-muted mb-4">Product Description </h6>\
            <div class="pl-lg-4">\
              <div class="row">\
              <div class="col-lg-6">\
                  <div class="form-group">\
                    <label class="form-control-label" for="input-username"><span>Enter Monthly Price <label style="color:red">*</label></span></label>\
                    <input type="text" id="emnthprc" maxlength="10" pattern="[0-9]"class="form-control" value="'+  result['Product']['mon_price'] + '" required >\
                       <h5 class="text-muted">This would be Monthly Plan </h5>\
                </div>\
                </div>\
                <div class="col-lg-6">\
                  <div class="form-group">\
                    <label class="form-control-label" for="input-email"><span>Enter Annual Price<label style="color:red">*</label></span></label>\
                    <input type="email" id="eanprc" maxlength="10" pattern="[0-9]" class="form-control" value="'+  result['Product']['annual_price'] + '" required>\
                    <h5 class="text-muted">This would be Annual Price  </h5>\
                </div>\
                </div>\
              </div>\
              <div class="row">\
                <div class="col-lg-6">\
                  <div class="form-group">\
                    <label class="form-control-label" for="input-first-name"><span>SKU<label style="color:red">*</label></span></label>\
                    <input type="text" id="esku" class="form-control" value="'+  result['Product']['sku'] + '" required>\
                </div>\
                </div>\
              </div>\
            </div>\
            <hr class="my-4" />\
            <!-- Description -->\
            <h6 class="heading-small text-muted mb-4">Features</h6>\
            <div class="pl-lg-4">\
              <div class="row">\
              <div class="col-lg-6">\
                  <div class="form-group">\
                    <label class="form-control-label" for="input-username"><span>Web Space(in GB)<label style="color:red">*</label></span></label>\
                    <input type="text" id="ews" class="form-control" maxlength="5" value="'+  result['Product']['description']['ws'] + '" required>\
                    <h5 class="text-muted">Enter 0.5 for 512 MB  </h5>\
                </div>\
                </div>\
                <div class="col-lg-6">\
                  <div class="form-group">\
                    <label class="form-control-label" for="input-email"><span>Bandwidth (in GB) <label style="color:red">*</label></span></label>\
                    <input type="email" id="eband" class="form-control" maxlength="5"value="'+  result['Product']['description']['band'] + '" required>\
                    <h5 class="text-muted">Enter 0.5 for 512 MB  </h5>\
                  </div>\
                </div>\
              </div>\
              <div class="row">\
                <div class="col-lg-6">\
                  <div class="form-group">\
                    <label class="form-control-label" for="input-first-name"><span>Free Domain <label style="color:red">*</label></span></label>\
                    <input type="text" id="edomain" class="form-control" value="'+  result['Product']['description']['domain'] + '" required>\
                    <h5 class="text-muted">Enter 0 if no domain available in this service</h5>\
                  </div>\
                </div>\
                <div class="col-lg-6">\
                  <div class="form-group">\
                    <label class="form-control-label" for="input-first-name"><span>Language / Technology Support<label style="color:red">*</label></span></label>\
                    <input type="text" id="esup" class="form-control" value="'+  result['Product']['description']['sup'] + '" required >\
                    <h5 class="text-muted"> Separate by (,) Ex: PHP, MySQL, MongoDB </h5>\
                  </div>\
                </div>\
              </div>\
              <div class="row">\
                <div class="col-lg-6">\
                  <div class="form-group">\
                    <label class="form-control-label" for="input-first-name"><span>Mailbox <label style="color:red">*</label></span></label>\
                    <input type="text" id="email" class="form-control" value="'+  result['Product']['description']['mail'] + '" required>\
                    <h5 class="text-muted">Enter Number of mailbox will be provided, enter 0 if none </h5>\
                  </div>\
                </div>\
              </div>\
            </div>\
            <hr class="my-4" />\
            <div class="text-center">\
            <input type="button" value="Update product" data-id="'+  result['Product']['prod_id'] + '"  class="btn btn-primary upprod">\
            </div>\
          </form>';
  
            $(".modal-body").html(html);
          //}
        }
      });
    });
    $(document).on("click", ".upprod", function () {
       
      var id = $(this).data('id');
     
      
      var prntcat = $("#eprntcat").val().trim();
      var prdname = $("#eprdname").val().trim();
      var url = $("#eurl").val().trim();
      var mnthprc = $("#emnthprc").val().trim();
      var anprc = $("#eanprc").val().trim();
      var sku = $("#esku").val().trim();
      var ws = $("#ews").val().trim();
      var band = $("#eband").val().trim();
      var domain = $("#edomain").val().trim();
      var sup = $("#esup").val().trim();
      var mail = $("#email").val().trim();
      if (prntcat == "" || prdname == "" || mnthprc == "" || anprc == "" || sku == "" || ws == "" || band == "" || domain == "" || sup == "" || mail == "") {
        alert("All feild are mandatory to be filled !!");
        return false;
      }
      else {
        $.ajax({
          url: "adminhelper.php",
          type: "post",
          data: {
            action: "upprod",
            prntcat: prntcat,
            prdname: prdname,
            url: url,
            mnthprc: mnthprc,
            anprc: anprc,
            sku: sku,
            ws: ws,
            band: band,
            domain: domain,
            sup: sup,
            mail: mail,
            id: id
          },
          success: function (result) {
              //alert(result);
            alert("Product Updated successfully");
            window.location.href = "viewprod.php";
          }
        });
      }
    });
  });