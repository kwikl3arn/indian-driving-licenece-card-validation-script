<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <title></title>
    </head>
    <body>
        <input type="text" id="d_lic" minlength="15" maxlength="16" onchange="return fun();">
        <span id="dr_lic"></span>
    </body>
    <script>
        function fun() { 
  var Obj = document.getElementById("d_lic");
        if (Obj.value != "") {
            ObjVal = Obj.value;
            var panPat = /^([a-zA-Z]{2})([0-9]{2}|[0-9]{3})(\d{4})([0-9]{7})$/;
            if (ObjVal.search(panPat) == -1) {
                document.getElementById("dr_lic").style.color = "red";
              document.getElementById("dr_lic").innerHTML="in valid";
              
                Obj.focus();
                return false;
            }
          else
            {
              document.getElementById("dr_lic").style.color = "green";
              document.getElementById("dr_lic").innerHTML="valid";
              }
        }
  } 
    </script>
</html>
