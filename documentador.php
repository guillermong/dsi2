
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style type="text/css">

#apDiv1 {
	position:absolute;
	left:180px;
	top:30px;
	width:450px;
	height:150px;
	z-index:1;
	background-image: url(solu1.jpg);
	background-repeat: no-repeat;
}
#apDiv2 {
	position:absolute;
	left:343px;
	top:210px;
	width:737px;
	height:400px;
	z-index:2;
	border-top-color: #CCC;
	border-right-color: #CCC;
	border-bottom-color: #CCC;
	border-left-color: #CCC;
}
#apDiv3 {
	position:absolute;
	left:180px;
	top:210px;
	width:150px;
	height:400px;
	z-index:3;
	background-color: #FCFCFC;
	border-top-style: solid;
	border-top-color: #CCC;
	border-right-color: #CCC;
	border-bottom-color: #CCC;
	border-left-color: #CCC;
	border-right-style: solid;
}
#apDiv5 #9 {
	position: absolute;
	left: 794px;
	top: 3px;
}
#apDiv4 {
	position:absolute;
	left:180px;
	top:30px;
	width:900px;
	height:150px;
	z-index:4;
}
#apDiv5 {
	position:absolute;
	left:180px;
	top:180px;
	width:900px;
	height:30px;
	z-index:5;
	border-top-style: solid;
	border-top-color: #CCC;
	border-right-color: #CCC;
	border-bottom-color: #CCC;
	border-left-color: #CCC;
}
#navlist ul li {
	background-color: #FCFCFC;
}
#navlist ul {
    list-style-type: none;
    margin: 0px;
    padding: 0px;
    width: 150px;
    font-family: Arial, sans-serif;
    font-size: 11pt;
}

#navlist ul li a {
	color: #000;
	text-decoration: none;
	text-transform: uppercase;
	display: block;
	padding: 10px 10px 10px 20px;
}


#navlist ul li a:hover {
    background: #000;
    border-left: 10px solid #333;
    color: #fff;
}

</style>
</head>

<body>

<div id="apDiv2">
  <p><strong>Ingreso Compromiso</strong></p>
  <p>Información Básica</p>
  
  <form name="form1" method="post" action="documentadordetalle.php">
  <p align="center">
    </p>
    
    <table width="373" border="0">
      <tr>
        <td width="182">Nro Orden de Trabajo:</td>
        <td width="181"><input type="text" name="2" id="2"></td>
      </tr>
      <tr>
        <td><label for="12">Nombre Empresa:</label></td>
        <td><input type="text" name="12" id="12"></td>
      </tr>
      <tr>
        <td>RUT Empresa:</td>
        <td><input type="text" name="14" id="14"></td>
      </tr>
      <tr>
        <td><label for="152">Centro de Costo</label>
:</td>
        <td><input type="text" name="15" id="15"></td>
      </tr>
      <tr>
        <td><label for="162">Codigo de Gastos:</label></td>
        <td><input type="text" name="16" id="16"></td>
      </tr>
      <tr>
        <td><label for="172">Proyecto:</label></td>
        <td><input type="text" name="17" id="17"></td>
      </tr>
    </table>
   <p align="center"> <input type="submit" name="19" id="19" value="Ingresar" ></p>
  </form>
  
  <p>&nbsp;</p>
</div>

<div id="apDiv3">
  <div id="navlist">
    <ul>	<h4><h4>
            <li><a href="#" class="active">MENU</a></li><hr>
            <li><a href="documentador.php">Ingresar Compromiso</a></li>
            <hr>
            <li><a href="documentadorfactura.php">Ingresar factura</a></li><hr>
        </ul>
</div>



</div>
<div id="apDiv4"><img src="banco.png" width="901" height="150"></div>
<div id="apDiv5">
  <input type="submit" name="9" id="9" value="Cerrar Sesion">
  Bienvenido, //php
</div>




</body>
</html>