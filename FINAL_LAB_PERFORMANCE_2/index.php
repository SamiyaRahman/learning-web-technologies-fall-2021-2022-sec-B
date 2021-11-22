//Samiya Rahman
//id 18-36272-1
<?php

?>
<html>
    <head>
        <title>Ajax Calculator</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <style>
            .but{
                width: 85px;
                height: 45px;
                font-weight: bold;
                text-align: center;
            }
            .cls{
                width: 85px;
                height: 45px;
                font-weight: bold;
                text-align: center;
               
               
            }
            .eql{
                width: 85px;
                height: 45px;
                font-weight: bold;
                text-align: center;
               
               
            }
            .display{
              
                border:1px #666 solid; 
                height: 60px; width: 350px; 
                text-align: right; 
                font-size: 20px;
            }
        </style>
        <script>
            $(document).ready(function(){
              
                $('input[type=button]').click(function(){
                    var num = $(this).val();
                    var old = $('#display').html();
                    
                    if( num === 'C' ){
                        $('#display').html('');
                        return;
                    }
                    if( num === '=' ){
                        $('#display').html(old);
                        return;
                    }
                  
                    $.ajax({
                            url:'ajax.php',
                            type: "POST",
                            data:{'action':'operation','num':num,'old':old},
                            success: function(msg){
                                $('#display').html(msg);
                            }
                        }).error(function(){
                            $('#display').html('Oops! An error occured');}
                           );
                });
                //equal button click
                $('#eql').click(function(){
                    var num = $('#display').html();
                    var old = $('#display').html();
                    $.ajax({
                            url:'ajax.php',
                            type: "POST",
                            data:{'action':'equal', 'num':num, 'old':old},
                            success: function(msg){
                                $('#display').html(msg);
                            }
                        }).error(function(){
                            $('#display').html('Oops! An error occured');}
                           );
                });
            });
        </script>
    </head>
    <body>
         
<center>

Calculator Using AJAX/PHP
<table width="120">
    <tr>
        <td colspan="5"><textarea id="display" class="display"></textarea></td>
    </tr>
    <tr>
    <td>
        <input id="" value="CE" type="button" class="cls"></td>
        <td><input id="plus" value="C" type="button" class="but"></td>
        <td><input id="" value="x" type="button" class="cls"></td>
        <td><input id="div" value="/" type="button" class="but"></td>
    </tr>
    <tr>
        <td><input value="7" type="button" class="but"></td>
        <td><input value="8" type="button" class="but"></td>
        <td><input value="9" type="button" class="but"></td>
        <td><input id="mul" value="*" type="button" class="but"></td>
     
    </tr>
    <tr>
        <td><input value="4" type="button" class="but"></td>
        <td><input value="5" type="button" class="but"></td>
        <td><input value="6" type="button" class="but"></td>
        <td><input id="sub" value="-" type="button" class="but"></td>
       
    </tr>
    <tr>
        <td><input value="1" type="button" class="but"></td>
        <td><input value="2" type="button" class="but"></td>
        <td><input value="3" type="button" class="but"></td>
       
        <td><input id="plus" value="+" type="button" class="but"></td>
    </tr>
    <tr>
    <td>
        <input id="neg" value="+/-" type="button" class="but"></td>
      
        <td><input value="0" type="button" class="but"></td>
        <td><input id="dot" value="." type="button" class="but"></td>
        <td><input id="eql" value="=" type="button" class="eql"></td>
    </tr>
   
</table>

</center>
</ol>
    </body>
</html>

