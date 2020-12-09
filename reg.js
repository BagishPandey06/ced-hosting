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
   
    // var pass;
    // var opass;
    
    // $("#mob").keypress(function(event) {
    //     var m=$(this).val();
    //              if(m.length<=10 || m.length>=10){
    //                  alert("mobile no. is valid of 10 digits only !");
    //                 return false;
    //              } else {
    //               return true; 
    //              }
    //   });
    //   $("#mob").keypress(function(event) {
    //     var character = String.fromCharCode(event.keyCode);
    //         return isValidm(character);  
    //       } );
    //     function isValidm(str) {
    //         return !/[~`.!@#$%\^&*()+=\-\[\]\\';(a-z)(A-Z),/{}|\\":<>\?]/g.test(str);
    //     }
    //     $("#name").keypress(function(event) {
    //         var character = String.fromCharCode(event.keyCode);
    //         return isValid(character);     
    //     });
        
    //     function isValid(str) {
    //         return !/[~`.!@#$%\^&*()+=\-\[\]\\';0123456789,/{}|\\":<>\?]/g.test(str);
    //     }
      
     
});