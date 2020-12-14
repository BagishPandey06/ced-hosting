$(document).ready(function () {
  var inputstatecount=0;
  var productnamecount=0;
  var monthlypricecount=0;
  var annualpricecount=0;
  var skucount=0;
  var webspacecount=0;
  var bandwidthcount=0;
  var freedomaincount=0;
  var languagetechnologycount=0;
  var mailboxcount=0;
  $(".prod").prop('disabled', true
  );
  $('#prntcat').focusout(function(){
    inputState();
  });
  function inputState(){
    var value=($('#prntcat').val()).trim();
    if (value=="Please select") {
      $("select").addClass("is-invalid");
      $(".prod").prop('disabled', true);
      inputstatecount=0;
      return false;
    }
    else {
      $("select").removeClass("is-invalid");
      inputstatecount=1;
      if (inputstatecount+productnamecount+monthlypricecount+
      annualpricecount+skucount+webspacecount+bandwidthcount+
      freedomaincount+languagetechnologycount+mailboxcount>=10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#prdname').focusout(function(){
   productName();
  });
  function productName(){
    var regproductname=/(^([a-zA-Z]+\-[0-9]+$))|(^([a-zA-Z])+$)/;
    var value=($('#prdname').val()).trim();
    if (value=="" || !(value.match(regproductname))) {
      $("#prdname").addClass("is-invalid");
      $(".prod").prop('disabled', true);
      productnamecount=0;
      return false;
    } else {
      $("#prdname").removeClass("is-invalid");
      productnamecount=1;
      if (inputstatecount+productnamecount+monthlypricecount+
      annualpricecount+skucount+webspacecount+bandwidthcount+
      freedomaincount+languagetechnologycount+mailboxcount>=10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#mnthprc').focusout(function(){
    monthlyPrice();
  });
  function monthlyPrice(){
    var regprice=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
    var value=($('#mnthprc').val()).trim();
    if (value=="" || !(value.match(regprice))) {
      $("#mnthprc").addClass("is-invalid");
      $(".prod").prop('disabled', true);
      monthlypricecount=0;
      return false;
    }
    else {
      $("#mnthprc").removeClass("is-invalid");
      monthlypricecount=1;
      if (inputstatecount+productnamecount+monthlypricecount+
      annualpricecount+skucount+webspacecount+bandwidthcount+
      freedomaincount+languagetechnologycount+mailboxcount>=10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#anprc').focusout(function(){
    annualPrice();
  });
  function annualPrice(){
    var regprice=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
    var value=($('#anprc').val()).trim();
    if (value=="" || !(value.match(regprice))) {
      $("#anprc").addClass("is-invalid");
      $(".prod").prop('disabled', true);
      annualpricecount=0;
      return false;
    }
    else {
      $("#anprc").removeClass("is-invalid");
      annualpricecount=1;
      if (inputstatecount+productnamecount+monthlypricecount+
      annualpricecount+skucount+webspacecount+bandwidthcount+
      freedomaincount+languagetechnologycount+mailboxcount>=10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#sku').focusout(function(){
    sku();
  });
  function sku(){
    var regsku=/^(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+))|(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+)([-#?]))+$/;
    var value=($('#sku').val()).trim();
    if (value=="" || !(value.match(regsku))) {
      $("#sku").addClass("is-invalid");
      $(".prod").prop('disabled', true);
      skucount=0;
      return false;
    }
    else {
      $("#sku").removeClass("is-invalid");
      skucount=1;
      if (inputstatecount+productnamecount+monthlypricecount+
      annualpricecount+skucount+webspacecount+bandwidthcount+
      freedomaincount+languagetechnologycount+mailboxcount>=10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#ws').focusout(function(){
    webSpace();
  });
  function webSpace(){
    var regwebspace=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
    var value=($('#ws').val()).trim();
    if (value=="" || (!value.match(regwebspace))) {
      $("#ws").addClass("is-invalid");
      $(".prod").prop('disabled', true);
      webspacecount=0;
      return false;
    }
    else {
      $("#ws").removeClass("is-invalid");
      webspacecount=1;
      if (inputstatecount+productnamecount+monthlypricecount+
      annualpricecount+skucount+webspacecount+bandwidthcount+
      freedomaincount+languagetechnologycount+mailboxcount>=10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#band').focusout(function(){
    bandWidth();
  });
  function bandWidth(){
    var regbandwidth=/^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
    var value=($('#band').val()).trim();
    if (value=="" || value.match(!(regbandwidth))) {
      $("#band").addClass("is-invalid");
      $(".prod").prop('disabled', true);
      bandwidthcount=0;
      return false;
    }
    else {
      $("#band").removeClass("is-invalid");
      bandwidthcount=1;
      if (inputstatecount+productnamecount+monthlypricecount+
      annualpricecount+skucount+webspacecount+bandwidthcount+
      freedomaincount+languagetechnologycount+mailboxcount>=10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#domain').focusout(function(){
    freeDomain();
  });
  function freeDomain(){
    var regfreedomain=/^([a-zA-Z]+$)|(^([0-9])+$)/;
    var value=($('#domain').val()).trim();
    if (value=="" || !(value.match(regfreedomain))) {
      $("#domain").addClass("is-invalid");
      $(".prod").prop('disabled', true);
      freedomaincount=0;
      return false;
    }
    else {
      $("#domain").removeClass("is-invalid");
      freedomaincount=1;
      if (inputstatecount+productnamecount+monthlypricecount+
      annualpricecount+skucount+webspacecount+bandwidthcount+
      freedomaincount+languagetechnologycount+mailboxcount>=10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }

  $('#sup').focusout(function(){
    languageTechnology();
  });
  function languageTechnology(){
    var reglanguagetech=/(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+$))|(^([a-zA-Z]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+\,[a-zA-Z]+$))|(^([a-zA-Z])+$)/;
    var value=($('#sup').val()).trim();
    if (value=="" || !(value.match(reglanguagetech))) {
      $("#sup").addClass("is-invalid");
      $(".prod").prop('disabled', true);
      languagetechnologycount=0;
      return false;
    }
    else {
      $("#sup").removeClass("is-invalid");
      languagetechnologycount=1;
      if (inputstatecount+productnamecount+monthlypricecount+annualpricecount+
      skucount+webspacecount+bandwidthcount+freedomaincount+
      languagetechnologycount+mailboxcount>=10) 
      {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#mail').focusout(function(){
   mainBox();
  });
  function mainBox(){
    var regmailbox=/^([0-9])+$/;
    var value=($('#mail').val()).trim();
    if (value=="" || !(value.match(regmailbox))) {
      $("#mail").addClass("is-invalid");
      $(".prod").prop('disabled', true);
      mailboxcount=0;
      return false;
    }
    else {
      $("#mail").removeClass("is-invalid");
      mailboxcount=1;
      if (inputstatecount+productnamecount+monthlypricecount+annualpricecount+
      skucount+webspacecount+bandwidthcount+freedomaincount+
      languagetechnologycount+mailboxcount>=10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  


  //////////////////////////////////////////////////////////////////////////////////////////////////

  $("#prodtable").dataTable();
  $("#cattable").dataTable();
  $(document).on("click", ".edit", function () {
    //debugger
    var id = $(this).data('id');
    
    $.ajax({
      url: "adminhelper.php",
      type: "post",
      data: {
        action: "edit",
        id: id
      },
      dataType: 'json',
      success: function (result) {
        //debugger
        var html = '';
        //alert(result[0]['prod_name']);
        for (var i = 0; i < result.length; i++) {
          var avilable = '';
          if (result[i]['prod_available'] == '1') {
            avilable = '<option value="1" selected>Avilable</option>\
           <option value="0">Not-Available</option>';
          } else if (result[i]['prod_available'] == '0') {
            avilable = '<option value="1" >Available</option>\
           <option value="0" selected>Not-Available</option>';
          }

          html += ' <form>\
            <div class="form-group mb-3">\
                      <div class="input-group input-group-merge input-group-alternative">\
                        <div class="input-group-prepend">\
                          <span class="input-group-text">\
                          <i class="fa fa-lock"></i></span>\
                        </div>\
                        <input class="form-control"   type="text" value ="Hosting" readonly>\
                      </div>\
                    </div><div class="form-group mb-3">\
                      <div class="input-group input-group-merge input-group-alternative">\
                        <div class="input-group-prepend">\
                          <span class="input-group-text">\
                          <i class="fa fa-list"></i></span>\
                        </div>\
                        <input class="form-control" id="catname"value="'+ result[i]['prod_name'] + '" name="newcat" type="text">\
                      </div>\
                    </div>\
                    <div class="form-group mb-3">\
                      <div class="input-group input-group-merge input-group-alternative">\
                        <div class="input-group-prepend">\
                          <span class="input-group-text">\
                          <i class="fa fa-list"></i></span>\
                        </div>\
                        <select name="avi" id="avi" class="form-control" style="font-weight:bolder">"'+ avilable + '"</select>\
                      </div>\
                    </div>\
                    <div class="form-group">\
                      <div class="input-group input-group-merge input-group-alternative">\
                        <div class="input-group-prepend">\
                          <span class="input-group-text"><i class="fa fa-link"></i></span>\
                        </div>\
                        <input class="form-control" id="link" value="'+ result[i]['html'] + '" name="link" type="text">\
                      </div>\
                    </div>\
                    <div class="text-center">\
                      <input type="button" name="submit" data-id="'+ result[i]['id'] + '"class="btn btn-primary my-4 upcat" value="Update-Category">\
                    </div>\
            </form>';
          $(".modal-body").html(html);
        }
      }
    });
  });
  $(document).on("click", ".upcat", function () {
   // debugger
    var catname = $("#catname").val();
    var avi = $("#avi").val();
    var link = $("#link").val();
    var id = $(this).data('id');
    //alert(id);
    $.ajax({
      url: "adminhelper.php",
      type: "post",
      data: {
        action: "upcat",
        catname: catname,
        avi: avi,
        link: link,
        id: id
      },
      success: function (result) {
       //console.log(result);
       window.location.href = "createcat.php";
      }
    });
  });
  $(document).on("click", ".del", function () {
    var x = confirm("Are you sure you want to delete Category?");
    if (x) {
      var id = $(this).data('id');
      //alert(id);
      $.ajax({
        url: "adminhelper.php",
        type: "post",
        data: {
          action: "del",
          id: id
        },
        success: function (result) {
          window.location.href = "createcat.php";
        }
      });
    }
  });
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
  
  
  $(document).on("click", ".prod", function () {
  
      var prntcat=$("#prntcat").val().trim();
      var prdname=$("#prdname").val().trim();
      var url=$("#url").val().trim();
      var mnthprc=$("#mnthprc").val().trim();
      var anprc=$("#anprc").val().trim();
      var sku=$("#sku").val().trim();
      var ws=$("#ws").val().trim();
      var band=$("#band").val().trim();
      var domain=$("#domain").val().trim();
      var sup=$("#sup").val().trim();
      var mail=$("#mail").val().trim();
      if ((inputState()==false) || (productName()==false)  || 
      (monthlyPrice()==false) || (annualprice()==false) || 
      (sku()==false) || (webSpace()==false) || (bandwidth()==false) || 
      (freedomain()==false) || (languagetechnology()==false) || 
      (mailbox()==false)) {
        alert("Please Enter All Required Fields");
        return false;
      }
      else if(!isNaN(productname)){
        alert("Please Enter Valid Product Name");
        return false;
      }
    else{
      $.ajax({
        url: "adminhelper.php",
        type: "post",
        data: {
          action: "addprod",
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
          mail: mail
        },
        success: function (result) {
          alert("Product Added successfully");
          window.location.href="viewprod.php";
        }
      });
    }
  });
  $(document).on("click", ".editpro", function () {
    //debugger
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
       for (var i = 0; i < result.length; i++) {
          //alert(result[i]['id']);
          html += '<div class="col-lg-6">\
                <div class="form-group">\
                  <label class="form-control-label" for="input-email"><span>Enter Product Name <label style="color:red">*</label></span></label>\
                  <input type="text" id="eprdname" class="form-control " value="'+ result[i]['prod_name'] + '" required>\
                </div>\
              </div>\
            </div>\
            <div class="row">\
              <div class="col-lg-6">\
                <div class="form-group">\
                  <label class="form-control-label" for="input-first-name"><span>Page URL</span></label>\
                  <input type="text" id="eurl" class="form-control" value="'+ result[i]['link'] + '" required>\
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
                  <input type="text" id="emnthprc" maxlength="10" pattern="[0-9]"class="form-control" value="'+ result[i]['mon_price'] + '" required >\
                     <h5 class="text-muted">This would be Monthly Plan </h5>\
              </div>\
              </div>\
              <div class="col-lg-6">\
                <div class="form-group">\
                  <label class="form-control-label" for="input-email"><span>Enter Annual Price<label style="color:red">*</label></span></label>\
                  <input type="email" id="eanprc" maxlength="10" pattern="[0-9]" class="form-control" value="'+ result[i]['annual_price'] + '" required>\
                  <h5 class="text-muted">This would be Annual Price  </h5>\
              </div>\
              </div>\
            </div>\
            <div class="row">\
              <div class="col-lg-6">\
                <div class="form-group">\
                  <label class="form-control-label" for="input-first-name"><span>SKU<label style="color:red">*</label></span></label>\
                  <input type="text" id="esku" class="form-control" value="'+ result[i]['sku'] + '" required>\
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
                  <input type="text" id="ews" class="form-control" maxlength="5" value="'+ result[i]['ws'] + '" required>\
                  <h5 class="text-muted">Enter 0.5 for 512 MB  </h5>\
              </div>\
              </div>\
              <div class="col-lg-6">\
                <div class="form-group">\
                  <label class="form-control-label" for="input-email"><span>Bandwidth (in GB) <label style="color:red">*</label></span></label>\
                  <input type="email" id="eband" class="form-control" maxlength="5"value="'+ result[i]['band'] + '" required>\
                  <h5 class="text-muted">Enter 0.5 for 512 MB  </h5>\
                </div>\
              </div>\
            </div>\
            <div class="row">\
              <div class="col-lg-6">\
                <div class="form-group">\
                  <label class="form-control-label" for="input-first-name"><span>Free Domain <label style="color:red">*</label></span></label>\
                  <input type="text" id="edomain" class="form-control" value="'+ result[i]['domain'] + '" required>\
                  <h5 class="text-muted">Enter 0 if no domain available in this service</h5>\
                </div>\
              </div>\
              <div class="col-lg-6">\
                <div class="form-group">\
                  <label class="form-control-label" for="input-first-name"><span>Language / Technology Support<label style="color:red">*</label></span></label>\
                  <input type="text" id="esup" class="form-control" value="'+ result[i]['sup'] + '" required >\
                  <h5 class="text-muted"> Separate by (,) Ex: PHP, MySQL, MongoDB </h5>\
                </div>\
              </div>\
            </div>\
            <div class="row">\
              <div class="col-lg-6">\
                <div class="form-group">\
                  <label class="form-control-label" for="input-first-name"><span>Mailbox <label style="color:red">*</label></span></label>\
                  <input type="text" id="email" class="form-control" value="'+ result[i]['mail'] + '" required>\
                  <h5 class="text-muted">Enter Number of mailbox will be provided, enter 0 if none </h5>\
                </div>\
              </div>\
            </div>\
          </div>\
          <hr class="my-4" />\
          <div class="text-center">\
          <input type="button" value="Update product" data-id="'+ result[i]['id'] + '"  class="btn btn-primary upprod">\
          </div>\
        </form>';
        
          $("#modal-body").html(html);
        }
      }
    });
  });
  $(document).on("click",".upprod",function(){
    var id=$(this).data('id');
    var prntcat=$("#eprntcat").val().trim();
    var prdname=$("#eprdname").val().trim();
    var url=$("#eurl").val().trim();
    var mnthprc=$("#emnthprc").val().trim();
    var anprc=$("#eanprc").val().trim();
    var sku=$("#esku").val().trim();
    var ws=$("#ews").val().trim();
    var band=$("#eband").val().trim();
    var domain=$("#edomain").val().trim();
    var sup=$("#esup").val().trim();
    var mail=$("#email").val().trim();
    if(prntcat==""||prdname==""||url==""||mnthprc==""||anprc==""||sku==""||ws==""||band==""||domain==""||sup==""||mail==""){
      alert("All feild are mandatory to be filled !!");
      return false;
  }
  else{
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
        alert("Product Updated successfully");
        window.location.href="viewprod.php";
      }
    });
  }
  });
});