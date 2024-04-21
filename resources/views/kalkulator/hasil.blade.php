<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Kalkulator</title>
<style> 
form {
  width: 400px;
  margin: 0 auto; 
  padding: 20px;
  border: 3px solid black;
  border-radius: 8px;
  background-color: skyblue;
}


input[type="number"] {
  width: 200px;
  padding: 10px;
  border: 3px solid #ccc;
  border-radius: 5px;
  align-items: center;
}

input[type="submit"] {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

 </style> 
</head>


<body>
    <h1><center>KALKULATOR </center></h1>
   <center>
<br>
    <form action=" {{ route('proses.store') }} " method="post">
     @csrf 
      <table border=1 width=300>

          <tr>
            <td colspan=1> <input type="number" name="a" id=""></td>
            <td colspan=1 rowspan=2> <input type="Reset" value="Reset" name="op"></td>
          </tr>

          <tr>
            <td colspan=1><input type="number" name="b" id=""></td>
          </tr>

          <tr>
            <td colspan=4>HASIL : {{ $hasil }}</td> 
          </tr>

          <td colspan=2>
            <input type="submit" value="+" name="op">
            <input type="submit" value="-" name="op">
            <input type="submit" value="*" name="op">
            <input type="submit" value="/" name="op">
          </td>

          <tr>
            <td colspan=4>
               <center>
              Nama : Fikri
              <br>
              Kelas : 12 PPLG2
            </td>
          </tr>
      </table>
    </form>
</center>
    
</body>
</html>