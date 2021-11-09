<html>
<body>

<form action="welcome.php" method="post">
	
<fieldset>
<legend>Datos personales:</legend>
	
<label for="nombre">Nombre:</label>
<input type="text" name="nombre"><br>

<label for="apellido">Apellido:</label>
<input type="text" name="apellido"><br>

<label for="email">Email:</label>
<input type="text" name="email"><br>

<label for="identi">Tipo de identificacion:</label>
<select id="identi" name="identi">
  <option value="Documento">Documento</option>
  <option value="Cedula">cedula de identificacion</option>
</select>

<label for="numidenti">Numero:</label>
<input type="text" name="numidenti"><br>

<label for="fnacimiento">Fecha de nacimiento:</label>
<input type="date" name="fnacimiento"><br>

<label for="gen">Genero:</label>
<input type="radio" name="gen" value="mujer">Mujer
<input type="radio" name="gen" value="hombre">Hombre
<input type="radio" name="gen" value="otro">Otro<br>

<label for="ecivil">Estado civil:</label>
<select id="ecivil" name="ecivil">
  <option value=""></option>
  <option value="Soltero">Soltero</option>
  <option value="Casado">Casado</option>
  <option value="Peronista">Peronista</option>
</select><br>

<label for="telefono">Telefono:</label>
<input type="text" name="telefono"><br>

<label for="skype">Skype:</label>
<input type="text" name="skype"><br>

<label for="pais">Pais:</label>
<input type="text" name="pais"><br>

<label for="region">Region/Provincia:</label>
<input type="text" name="region"><br>

<label for="ciudad">Ciudad:</label>
<input type="text" name="ciudad"><br>

<label for="codpostal"> Codigo postal:</label>
<input type="text" name="codpostal"><br>

<label for="direccion">Direccion:</label>
<input type="text" name="direccion"><br>

<label for="nacionalidad">Nacionalidad:</label>
<input type="text" name="nacionalidad"><br>


<label for="lic">Licencia de conducir:</label>
<input type="radio" name="lic" value="si">Si
<input type="radio" name="lic" value="no">No<br>

<label for="vehic">Dispone de vehiculo propio:</label>
<input type="radio" name="vehic" value="si">Si
<input type="radio" name="vehic" value="no">No<br>

<label for="disc">Discapacidad:</label>
<input type="radio" name="disc" value="si">Si
<input type="radio" name="disc" value="no">No<br>

<label for="discesp">Especifique su discapacidad:</label>
<textarea name="discesp" rows="5" cols="40"></textarea><br><br>

<label for="foto">Sube tu foto:</label>

<input accept="image/*" type="file" name="foto"><br><br>
</fieldset>

<fieldset>
<legend>Perfil profesional:</legend>


<label for="ciudad">Puesto:</label>
<input type="text" name="ciudad"><br><br>

<label for="fdesde">Desde:</label>
<input type="date" name="fdesde"> 

<label for="fdesde">Hasta:</label>
<input type="date" name="fhasta"><br>
</fieldset>

<fieldset>
<legend>Idioma:</legend>
<label for=""> Idiomas:</label>
    <input type="checkbox" name="idiomas[]" value="español">Español</input>
    <input type="checkbox" name="idiomas[]" value="inglés">Inglés</input>
    <input type="checkbox" name="idiomas[]" value="francés">Francés</input>    
    <input type="checkbox" name="idiomas[]" value="aleman">Alemán</input>
    <input type="checkbox" name="idiomas[]" value="otro">Otro</input><br><br>
    
</fieldset>

<fieldset>
<legend>Conocimientos informaticos:</legend>

<label for="progs">Que programas domina:</label>
<textarea name="progs" rows="4" cols="40"></textarea><br><br>

</fieldset>

<fieldset>
<legend>Conocimientos y habilidades:</legend>

<label for="">Escribe tus conocimientos:</label>
<textarea name="habs" rows="4" cols="40"></textarea><br><br>
</fieldset>

<fieldset>
<legend>Preferenias de trabajo:</legend>
<label for="slaboral">Situacion actual:</label>
<select id="slaboral" name="slaboral">
  <option value=""></option>
  <option value="disponible">Desempleado y enn busqueda de trabajo</option>
  <option value="trabajando">Empleado y en busqueda de trabajo</option>
  <option value="Peronista">Peronista</option>
</select><br>

<label for="puestodeseado">Puesto de trabajo deseado:</label>
<input type="text" name="puestodeseado"><br>

<label for="">Area:</label>
<input type="text" name="Area"><br>

<label for="sma">Salaro minimo aceptado:</label>
<input type="text" name="sma"><br>

<label for="prov">Provincia:</label>
<input type="text" name="prov"><br>

<label for="dv">Disponibilidad para viajar:</label>
<input type="radio" name="dv" value="si">Si
<input type="radio" name="dv" value="no">No<br>

<label for="dcr">Disponibilidad para cambio de residencia:</label>
<input type="radio" name="dcr" value="si">Si
<input type="radio" name="dcr" value="no">No<br>


<input type="submit" value="Enviar">
<input type="reset">
</form>

</body>
</html>
