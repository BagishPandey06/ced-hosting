$(document).ready(function () {
    $("#hide").hide();
    $(document).on("change","#ques",function(){
        var ques=$("#ques").val();
       if(ques==0){
        $("#ans").val('');
        $("#hide").hide();
       } else {
           $("#hide").css("display",''); 
       }
       });
    
});