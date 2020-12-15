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
  $(".prod").prop('disabled', true);
  $('#prntcat').focusout(function () {
    inputState();
  });
  function inputState() {
    var value = ($('#prntcat').val()).trim();
    if (value == "Choose") {
      $("select").addClass("is-invalid");
      
      $(".prod").prop('disabled', true);
      inputstatecount = 0;
      return false;
    }
    else {
      $("select").removeClass("is-invalid");
      inputstatecount = 1;
      if (inputstatecount + productnamecount + monthlypricecount +
        annualpricecount + skucount + webspacecount + bandwidthcount +
        freedomaincount + languagetechnologycount + mailboxcount >= 10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#prdname').focusout(function () {
    productName();
  });
  function productName() {
    var regproductname = /^[^0-9][a-zA-Z0-9-\s]+$/;
    var value = ($('#prdname').val()).trim();
    if (value == "" || !(value.match(regproductname))) {
      $("#prdname").addClass("is-invalid");
      $('.invalid-feedback').html('Enter valid product name.<ul><li>Alpha numeric/ alphabetic</li>\
      <li>Not only numeric</li>\
      <li>Only "-" special char allowed</li>\
      <li>Ex-:Name,Name-01</li><ul>');
      $(".prod").prop('disabled', true);
      productnamecount = 0;
      return false;
    } else {
      $("#prdname").removeClass("is-invalid");
      productnamecount = 1;
      if (inputstatecount + productnamecount + monthlypricecount +
        annualpricecount + skucount + webspacecount + bandwidthcount +
        freedomaincount + languagetechnologycount + mailboxcount >= 10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#mnthprc').focusout(function () {
    monthlyPrice();
  });
  function monthlyPrice() {
    var regprice = /^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
    var value = ($('#mnthprc').val()).trim();
    if (value == "" || !(value.match(regprice))) {
      $("#mnthprc").addClass("is-invalid");
      $('.invalid-feedback').html('Enter valid product Monthly price.<ul>\
      <li>only numeric</li>\
      <li>Allowed single "."</li>\
      <li>Ex-:10,10.0</li><ul>');
      $(".prod").prop('disabled', true);
      monthlypricecount = 0;
      return false;
    }
    else {
      $("#mnthprc").removeClass("is-invalid");
      monthlypricecount = 1;
      if (inputstatecount + productnamecount + monthlypricecount +
        annualpricecount + skucount + webspacecount + bandwidthcount +
        freedomaincount + languagetechnologycount + mailboxcount >= 10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#anprc').focusout(function () {
    annualPrice();
  });
  function annualPrice() {
    var regprice = /^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
    var value = ($('#anprc').val()).trim();
    if (value == "" || !(value.match(regprice))) {
      $("#anprc").addClass("is-invalid");
      $('.invalid-feedback').html('Enter valid product Annual price.<ul>\
      <li>only numeric</li>\
      <li>Allowed single "."</li>\
      <li>Ex-:10,10.0</li><ul>');
      $(".prod").prop('disabled', true);
      annualpricecount = 0;
      return false;
    }
    else {
      $("#anprc").removeClass("is-invalid");
      annualpricecount = 1;
      if (inputstatecount + productnamecount + monthlypricecount +
        annualpricecount + skucount + webspacecount + bandwidthcount +
        freedomaincount + languagetechnologycount + mailboxcount >= 10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#sku').focusout(function () {
    skuf();
  });
  function skuf() {
    var regsku = /^(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+))|(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+)([-#?]))+$/;
    var value = ($('#sku').val()).trim();
    if (value == "" || !(value.match(regsku))) {
      $("#sku").addClass("is-invalid");
      $('.invalid-feedback').html('Enter valid product SKU.<ul>\
      <li>Not only special char</li>\
      <li>All combinations (only "#", "-" special char allowed)</li>\
      <li>Ex-:s1</li><ul>');
      $(".prod").prop('disabled', true);
      skucount = 0;
      return false;
    }
    else {
      $("#sku").removeClass("is-invalid");
      skucount = 1;
      if (inputstatecount + productnamecount + monthlypricecount +
        annualpricecount + skucount + webspacecount + bandwidthcount +
        freedomaincount + languagetechnologycount + mailboxcount >= 10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#ws').focusout(function () {
    webSpace();
  });
  function webSpace() {
    var regwebspace = /^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
    var value = ($('#ws').val()).trim();
    if (value == "" || (!value.match(regwebspace))) {
      $("#ws").addClass("is-invalid");
      $('.invalid-feedback').html('Enter valid product SKU.<ul>\
      <li>max-length:5</li>\
      <li>Only numeric</li>\
      <li>Allowed single "."</li>\
      <li>Ex-:10,10.0</li><ul>');
      $(".prod").prop('disabled', true);
      webspacecount = 0;
      return false;
    }
    else {
      $("#ws").removeClass("is-invalid");
      webspacecount = 1;
      if (inputstatecount + productnamecount + monthlypricecount +
        annualpricecount + skucount + webspacecount + bandwidthcount +
        freedomaincount + languagetechnologycount + mailboxcount >= 10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#band').focusout(function () {
    bandWidth();
  });
  function bandWidth() {
    var regbandwidth = /^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
    var value = ($('#band').val()).trim();
    if (value == "" || value.match(!(regbandwidth))) {
      $("#band").addClass("is-invalid");
      $('.invalid-feedback').html('Enter valid product SKU.<ul>\
      <li>max-length:5</li>\
      <li>Only numeric</li>\
      <li>Allowed single "."</li>\
      <li>Ex-:10,10.0</li><ul>');
      $(".prod").prop('disabled', true);
      bandwidthcount = 0;
      return false;
    }
    else {
      $("#band").removeClass("is-invalid");
      bandwidthcount = 1;
      if (inputstatecount + productnamecount + monthlypricecount +
        annualpricecount + skucount + webspacecount + bandwidthcount +
        freedomaincount + languagetechnologycount + mailboxcount >= 10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#domain').focusout(function () {
    freeDomain();
  });
  function freeDomain() {
    var regfreedomain = /^([a-zA-Z]+$)|(^([0-9])+$)/;
    var value = ($('#domain').val()).trim();
    if (value == "" || !(value.match(regfreedomain))) {
      $("#domain").addClass("is-invalid");
      $('.invalid-feedback').html('Enter valid product SKU.<ul>\
      <li>Only numeric/ only alphabetic(i.e. no combinations)</li>\
      <li>No white spaces</li>\
      <li>No "." allowed</li>\
      <li>Ex-:10,domain</li><ul>');
      $(".prod").prop('disabled', true);
      freedomaincount = 0;
      return false;
    }
    else {
      $("#domain").removeClass("is-invalid");
      freedomaincount = 1;
      if (inputstatecount + productnamecount + monthlypricecount +
        annualpricecount + skucount + webspacecount + bandwidthcount +
        freedomaincount + languagetechnologycount + mailboxcount >= 10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }

  $('#sup').focusout(function () {
    languageTechnology();
  });
  function languageTechnology() {
    var reglanguagetech = /(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+$))|(^([a-zA-Z]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+\,[a-zA-Z]+$))|(^([a-zA-Z])+$)/;
    var value = ($('#sup').val()).trim();
    if (value == "" || !(value.match(reglanguagetech))) {
      $("#sup").addClass("is-invalid");
      $('.invalid-feedback').html('Enter valid product SKU.<ul>\
      <li>Only "," allowed as special char</li>\
      <li>Only alphabetic/ alpha-numeric</li>\
      <li>Ex-:php10,domain</li><ul>');
      $(".prod").prop('disabled', true);
      languagetechnologycount = 0;
      return false;
    }
    else {
      $("#sup").removeClass("is-invalid");
      languagetechnologycount = 1;
      if (inputstatecount + productnamecount + monthlypricecount + annualpricecount +
        skucount + webspacecount + bandwidthcount + freedomaincount +
        languagetechnologycount + mailboxcount >= 10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }
  $('#mail').focusout(function () {
    mailBox();
  });
  function mailBox() {
    var regmailbox = /^([0-9])+$/;
    var value = ($('#mail').val()).trim();
    if (value == "" || !(value.match(regmailbox))) {
      $("#mail").addClass("is-invalid");
      $('.invalid-feedback').html('Enter valid product SKU.<ul>\
      <li>Only numeric/ only alphabetic(i.e. no combinations)</li>\
      <li>No white spaces</li>\
      <li>No "." allowed</li>\
      <li>Ex-:10,domain</li><ul>');
      $(".prod").prop('disabled', true);
      mailboxcount = 0;
      return false;
    }
    else {
      $("#mail").removeClass("is-invalid");
      mailboxcount = 1;
      if (inputstatecount + productnamecount + monthlypricecount + annualpricecount +
        skucount + webspacecount + bandwidthcount + freedomaincount +
        languagetechnologycount + mailboxcount >= 10) {
        $(".prod").prop('disabled', false);
      }
      return true;
    }
  }



  //////////////////////////////////////////////////////////////////////////////////////////////////

 
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
  
  $(document).on("click", ".prod", function () {

    var prntcat = $("#prntcat").val().trim();
    var prdname = $("#prdname").val().trim();
    var url = $("#url").val().trim();
    var mnthprc = $("#mnthprc").val().trim();
    var anprc = $("#anprc").val().trim();
    var sku = $("#sku").val().trim();
    var ws = $("#ws").val().trim();
    var band = $("#band").val().trim();
    var domain = $("#domain").val().trim();
    var sup = $("#sup").val().trim();
    var mail = $("#mail").val().trim();
    if ((inputState() == false) || (productName() == false) ||
      (monthlyPrice() == false) || (annualPrice() == false) ||
      (skuf() == false) || (webSpace() == false) || (bandWidth() == false) ||
      (freeDomain() == false) || (languageTechnology() == false) ||
      (mailBox() == false)) {
      alert("Please Enter All Required Fields");
      return false;
    }
    else if (!isNaN(prdname)) {
      alert("Please Enter Valid Product Name");
      return false;
    }
    else {
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
          window.location.href = "viewprod.php";
        }
      });
    }
  });
  
});