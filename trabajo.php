<!DOCTYPE html>
<html>
<head>
	<title>Centro Nacional De Farmacovigilancia</title>
</head>
<body  style ="font-family:tahoma" background="Sin título.png"  align="right">
<form method="POST" action="procesa.php">
<table align="center" border="4" width="40">

<h2 width="200" align="center"> CENTRO NACIONAL DE FARMACOVIGILANCIA</h2> 

<h3 align="center">INFORMACIÓN RESERVADA</h3> 
<tr>
	<td colspan="6">
	<h3
	align="center"> Informe sobre casos sospechosos de reacción adversa a fármacos, vacunas y medicinas herbarias</h3></td>
</tr>
<td colspan="6" align="center">
(Aporte toda la información que sea posible, pero no renuncie a la notificación porque falte parte de la información)</td>

<tr>
<td colspan="6" bgcolor="#000000" ><font color="#ffffff"><h2  align="left">Información acerca del paciente</h2></font>	</td>
</tr>

<tr>
<td colspan="2"><h4 align="left">Apellido<INPUT TYPE="TEXT" id="a" NAME="apell" /></input></h4>
<td colspan="4"><h4 align="left">Sexo <input name="b" type="TEXT" cols="50" rows="1"></input></h4>
<tr>

	<td colspan="2"><h4 align="left">Nombre(s)<input name="c" type="TEXT" cols="50" rows="1"></input></td>
	<td colspan="4"><h4 align="left">Edad o fecha de nacimiento<input  type="TEXT" name="d" cols="50" rows="1"></input></td>
</tr>

<tr>
	<td colspan="2"><h4 align="left">Num.DPA/expediente<input type="TEXT" name="e" cols="50" rows="1"></input></h4></td>
	<td colspan="4"><h4 align="left">Peso (Kg)<input name="f" type="TEXT" cols="50" rows="1"></input></td>
</tr>

<tr>
	<td colspan="6"><h4 align="left">Hospital<input name="g"  type="TEXT" cols="150" rows="1"></input></h4></td>
</tr>
<tr>
	<td colspan="6" bgcolor="#000000" ><font color="#ffffff"><h2  align="left">Fármaco sospechoso</h2></font>	</td>
</tr>

<tr>
	<td colspan="2" align="left"> Nombre de marca:<input name="h" type="TEXT" cols="30" rows="1"/></td>
	<td colspan="2" align="left"> Nombre generico:<input type="TEXT" name="i"> cols="20" rows="1"></input></td>
	<td colspan="2" align="left"> Núm. de lote (si se conoce):<input  type="TEXT" name="j" cols="10" rows="1"></input></td>
</tr>

<tr>
  <td colspan="6" align="left">Nombre y direccion del fabricante (si se conoce):<input name="k" cols="110" type="TEXT" rows="1"></input></td>
</tr>

<tr>
	<td colspan="2" align="left">Indicación terapeutica (motivo por el que se prescribió o consumió el farmaco)</td>
	<td align="left">Dosis diaria</td>
	<td align="left">Via</td>
	<td align="left">Fecha de inicio</td>
	<td align="left">Fecha de finilización</td>
</tr>

</tr>
    <td colspan="2" height="50"><input cols="80" rows="2"></input></td>
	
	<td ><input type="text" name="zam1"></td>
	<td ><input type="text" name="zam2"></td>
	<td ><input type="date" name="zam3"></td>
	<td ><input type="date" name="zam4"></td>
<tr>

<tr>
	<td colspan="1" bgcolor="#000000" ><font color="#ffffff"><h2  align="left">Información acerca de la reacción experimentada por el paciente</h2></font></td>
	<td colspan="5" align="left"> (utilicese una hoja adicional en caso necesario)</td>
</tr>

<tr>
	<td colspan="6" align="left">Descripción de la reacción-></td>
</tr>
<tr>
	<td  align="left">Fecha de comienzo de la reaccion	</td>
    <td  align="left"><INPUT TYPE="TEXT" NAME="p" /></td>
    <td  align="left">Fecha de Cese de la reaccion </td>
    <td  align="left"><INPUT TYPE="TEXT" NAME="ads" /></td>
    <td colspan="2"  align="left">¿Se hospitalizó el paciente?
    Si<INPUT TYPE="RADIO" NAME="AÑ"/> No<INPUT TYPE="RADIO" NAME="q"/>

</tr>

<tr>
	<td colspan="1" bgcolor="#000000" ><font color="#ffffff"><h2  align="left">Farmacos consumidos en los últimos tres meses</h2></font></td>
	<td colspan="3" align="left">(incluyendo la automedicacion, las vacunas y los preparados herbarios</td>
	<td colspan="2" align="center">Maque el recuadro si no ha consumido fármacos<INPUT TYPE="RADIO" NAME="w"/></td>
	
	<tr>
	<td></td>
	<td align="center"><h3>1</h3></td>
	<td align="center"><h3>2</h3></td>
	<td align="center"><h3>3</h3></td>
	<td align="center"><h3>4</h3></td>
	<td align="center"><h3>5</h3></td>
	
	</tr>
	<tr>
		<td align="left"><h3>Nombre del farmaco </h3></td>
		<td><input></input></td>
		<td><input></input></td>
		<td><input></input></td>
		<td><input></input></td>
		<td><input></input></td>
	</tr>
<tr>
		<td align="left"><h3>Indicación del fármaco </h3></td>
		<td><input></input></td>
		<td><input></input></td>
		<td><input></input></td>
		<td><input></input></td>
		<td><input></input></td>
	</tr>
	<tr>
		<td align="left"><h3>Dosis Diario </h3></td>
		<td><input></input></td>
		<td><input></input></td>
		<td><input></input></td>
		<td><input></input> </td>
		<td><input></input> </td>
	</tr>
	<tr>
		<td align="left"><h3>Fecha de inicio</h3></td>
		<td><input type="date" name="lady6"></td>
		<td><input type="date" name="lady7"></td>
		<td><input type="date" name="lady8"></td>
		<td><input type="date" name="lady9"></td>
		<td><input type="date" name="lady0"></td>
	</tr>
	<tr>
		<td align="left"><h3>Fecha de Finalización</h3></td>
		<td><input type="date" name="lady1"></td>
		<td><input type="date" name="lady2"></td>
		<td><input type="date" name="lady3"></td>
		<td><input type="date" name="lady4"></td>
		<td><input type="date" name="lady5"></td>
	</tr>

	
   <tr>
   	 <td align="left">Resultados analiticos significativos, otras afecciones médicas, información de seguimiento (si existe)(utilicese una hoja adicional en caso necesario)</td>
   	 <td colspan="5" align="center"><input type="text" name="txt_resultados" size="80"></td>
   </tr>

 <tr>
 	<td colspan="1" bgcolor="#000000" ><font color="#ffffff"><h2  align="left">Notificante</h2></font></td>
 	<td colspan="5" align="center">Medico<input type="radio" name="z"/> Farmacéutico<input type="radio" name="z"/> Otro<input type="radio" name="z"></td>
 </tr>

 <tr>
 	<td align="left">Nombre:<input name="Nombre" cols="50" rows="1"></input><td colspan="5" align="left">Cargo y especialidad:<input name="especialidad" cols="60" rows="1"></input></td></td>
 	<tr>
 	<td align="left">Dirección del trabajo:<input name="trabajo" cols="50" rows="1"></input><td colspan="5" align="left">Telefono: <input name="Telefono" cols="60" rows="1"></input></td></td>
 	</tr>
 	<tr>
 	<td align="left">Firma:<input name="Firma" cols="60" rows="1"></input><td colspan="5" align="left">Fecha:<input type="date" name="fecha"></td></td>
 </tr>

 <td colspan="6" align="left">Para cualquier consulta acerca de reacciones adversas a medicamentos efectivas o sospechosas, llame por favor al Centro Nacional de Farmacolovigilancia de Ghana, al número +233(021) 675885, durante el horario de trabajo, o bien envíenos un FAX al número: +233(021) 668219 </td> </tr>
<tr> <td colspan="6" align="left">Por favor, remita el presente formulario al Centro de notificación de RAM(ADR Reporting Centre), Consejo de alimentos y Medicamentos (Food and Drugs Board), PO Box CT2783, Cantonments, Accra, Ghana. FAX: +233(021)660389. Dirección electrónica: fdb@ghana.com <p></p>
<p></p></td> </tr>
</TABLE>
	<DIV align="center" ><BUTTON >ENVIAR</BUTTON></DIV>



</form>
</body>
</html>