$(document).ready(function () {
    var pass;
    var opass;
    $("#hide").hide();
    $("#mob").keypress(function(event) {
        var m=$(this).val();
                 if(m.lenth<=10 || m.length>=10){
                     alert("mobile no. is valid of 10 digits only !");
                    return false;
                 } else {
                  return true; 
                 }
      });
      $("#mob").keypress(function(event) {
        var character = String.fromCharCode(event.keyCode);
            return isValidm(character);  
          } );
        function isValidm(str) {
            return !/[~`.!@#$%\^&*()+=\-\[\]\\';(a-z)(A-Z),/{}|\\":<>\?]/g.test(str);
        }
        $("#name").keypress(function(event) {
            var character = String.fromCharCode(event.keyCode);
            return isValid(character);     
        });
        
        function isValid(str) {
            return !/[~`.!@#$%\^&*()+=\-\[\]\\';0123456789,/{}|\\":<>\?]/g.test(str);
        }
        $(document).on("click",".que",function(){
            $("#hide").css("display","");
        });
       $(document).on("change","#ques",function(){
           var ques=$(this).val();
           var ans=$("#secans").val();
       });
        $(document).on("click","#submit",function(){
            name=$("#name").val();
            mob=$("#mob").val();
            mail=$("#mail").val();
            pass=$("#pass").val();
            opass=$("#opass").val();
            if(pass!=opass){
                alert("Your password and confirmation password do not match. !!");
                $("#pass").val('');
                $("#opass").val('');
                return false;   
            }
            $.ajax({
                var action="sign";
                url: "helper.php",
             type: "post",
             data:{
                 name: name,
                 mob: mob,
                 mail: mail,
                 pass: pass,
                 ques: ques,
                 ans: ans,
                 action: action
            },dataType: 'json',
            success: function (result) {
              
            }
            });
        });
     
});