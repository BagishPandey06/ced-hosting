$(document).ready(function () {
    $("#cattable").dataTable();
    $(document).on("click",".edit",function (){
      var id=$(this).data('id');
      $.ajax({
        url: "adminhelper.php",
        type: "post",
        data: {
            action: "edit",
            id: id
        },
        dataType: 'json',
        success: function (result) {
            var html='';
            //alert(result[0]['prod_name']);
            for(var i=0;i<result.length;i++)
{           var avilable='';
    if(result[i]['prod_available']=='1') {
           avilable='<option value="1" selected>Avilable</option>\
           <option value="0">Not-Avilable</option>';
    } else if(result[i]['prod_available']=='0'){
        avilable='<option value="1" >Avilable</option>\
           <option value="0" selected>Not-Avilable</option>';
    }
      
            html+=' <form>\
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
                        <input class="form-control" id="catname"value="'+result[i]['prod_name']+'" name="newcat" type="text">\
                      </div>\
                    </div>\
                    <div class="form-group mb-3">\
                      <div class="input-group input-group-merge input-group-alternative">\
                        <div class="input-group-prepend">\
                          <span class="input-group-text">\
                          <i class="fa fa-list"></i></span>\
                        </div>\
                        <select name="avi" id="avi" class="form-control" style="font-weight:bolder">"'+avilable+'"</select>\
                      </div>\
                    </div>\
                    <div class="form-group">\
                      <div class="input-group input-group-merge input-group-alternative">\
                        <div class="input-group-prepend">\
                          <span class="input-group-text"><i class="fa fa-link"></i></span>\
                        </div>\
                        <input class="form-control" id="link" value="'+result[i]['link']+'" name="link" type="text">\
                      </div>\
                    </div>\
                    <div class="text-center">\
                      <input type="submit" name="submit" data-id="'+result[i]['id']+'"class="btn btn-primary my-4 upcat" value="Update-Category">\
                    </div>\
            </form>';
            $(".modal-body").html(html);
        }
        }
    });
 
    });

    $(document).on("click",".upcat",function (){
             var catname=$("#catname").val();
             var avi=$("#avi").val();
             var link=$("#link").val();
             var id=$(this).data('id');
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

                }
            });
    });
});