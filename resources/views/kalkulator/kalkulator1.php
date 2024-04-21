<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style> 

        table{ 
            border: 1px solid black; 
            margin-left: auto; 
            margin-right: auto; 
        } 
          
        input[type="button"] { 
            width: 100%; 
            padding: 20px 40px; 
            background-color: skyblue; 
            color: white; 
            font-size: 24px; 
            font-weight: bold; 
            border: none; 
            border-radius:5px; 
        } 
          
        input[type="text"] { 
            padding: 20px 30px; 
            font-size: 24px; 
            font-weight: bold; 
            border: none; 
            border-radius: 8px; 
            border: 4px solid black; 
        } 
 </style>

<body>
          
<form name="form1" action="" method="post">
 
 <tr>
     <td>
        <h1>
          <center><font color="black">KALKULATOR </font></center>
         </h1>
     </td>
</tr>
    <center>
         
         <input type="text" name="text1" id="">
 <table>
     <tr1>
         <td><input type="button" value="1" onClick="form1.text1.value+='1'"></td>
         <td><input type="button" value="2" onClick="form1.text1.value+='2'"></td>
         <td><input type="button" value="3" onClick="form1.text1.value+='3'"></td>
         <td><input type="button" value="+" onClick="form1.text1.value+='+'"></td>
     </tr1>

     <tr>
         <td><input type="button" value="4" onClick="form1.text1.value+='4'"></td>
         <td><input type="button" value="5" onClick="form1.text1.value+='5'"></td>
         <td><input type="button" value="6" onClick="form1.text1.value+='6'"></td>
         <td><input type="button" value="-" onClick="form1.text1.value+='-'"></td>
     </tr>

     <tr>
     <td> <input type="button" value="7" onClick="form1.text1.value+='7'"></td>
     <td><input type="button" value="8" onClick="form1.text1.value+='8'"></td>
     <td><input type="button" value="9" onClick="form1.text1.value+='9'"></td>
     <td><input type="button" value="*" onClick="form1.text1.value+='*'"></td>
     </tr>

     <tr>
     <td><input type="button" value="C" onClick="form1.text1.value=''"></td>
     <td><input type="button" value="0" onClick="form1.text1.value+='0'"></td>
     <td><input type="button" value="=" onClick="form1.text1.value=eval(form1.text1.value)"></td>
     <td><input type="button" value="/" onClick="form1.text1.value+='/'"></td>
     </tr>
 </table>


 
</form>
</body>
</html>