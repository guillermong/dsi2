<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<form action="mailto:emaildelaempresaquehaceelformulario@email.com" method="post" enctype="text/plain">
Nombre: <input type="text" name="nombre" size="25" maxlength="50"><br><br>
Apellidos: <input type="text" name="apellidos" size="35" maxlength="100">
<br><br>
Correo electrónico: <input type="text" value="@" name="correo" size="40" maxlength="100">
<br><br>
Población: <input type="text" name="poblacion" size="15" maxlength="50">
<br><br>
Provincia: <input type="text" name="provincia" size="15" maxlength="50">
<table width="100%" border="0" cellspacing="0" cellpadding="10">
<tr>
<td>Edad:
<br>
<input type="radio" name="edad" value="020"> 0-20
<br>
<input type="radio" name="edad" value="2040" checked> 20-40
<br>
<input type="radio" name="edad" value="4060"> 40-60
<br>
<input type="radio" name="edad" value="60100"> 60-100</td>
<td>&iquest;C&oacute;mo nos conociste?<br>
<input type="checkbox" name="conocer">
A trav&eacute;s de un amigo.<br>
<input type="checkbox" name="conocer">
A trav&eacute;s de un buscador.<br>
<input type="checkbox" name="conocer">
Navegando por la red.<br>
<input type="checkbox" name="conocer">
Otros</td>
</tr>
</table>
Opinión sobre nuestra p&aacute;gina web<br>
<textarea cols="40" rows="5" name="opinion">Escriba aquí su opinión...</textarea>
<br><br>
Tiene alguna sugerencia...
<br>
<textarea cols="40" rows="5" name="sugerencias">Escriba aquí sus sugerencias...</textarea>
<br><br>
&iquest;C&uacute;anto navegas por intenet? (Se&ntilde;ala la opci&oacute;n que 
m&aacute;s se acerque)<br>
<select name="frecuencia" size="2">
<option value="1">2 horas al día.
<option value="2">4 horas al día.
<option value="3">10 horas a la semana.
<option value="4">20 horas al mes.
</select>
<br>
<br>
<table width="50%" border="0" align="center" cellpadding="10" cellspacing="0">
<tr>
<td><div align="center">
<input type="submit" value="Enviar formulario">
</div></td>
<td><div align="center">
<input type="Reset" value="Borrar formulario">
</div></td>
</tr>
</table>
</form>
<body>
</body>
</html>