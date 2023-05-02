<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{$empleado->Nombre}}" id="Nombre"> <br>
<label for="ApeelidoPaterno">Apellido Paterno</label>
<input type="text" name="ApeelidoPaterno" value="{{$empleado->ApeelidoPaterno}}" id="ApeelidoPaterno"> <br>
<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" name="ApellidoMaterno" value="{{$empleado->ApellidoMaterno}}" id="ApellidoMaterno"> <br>
<label for="Correo">Correo</label>
<input type="text" name="Correo" value="{{$empleado->Correo}}" id="Correo"> <br>
<label for="Foto">Foto</label>
<!-- {{$empleado->Foto}} <br> -->
<img src="{{asset('storage').'/'.$empleado->Foto}}" alt=""> <br>
<input type="file" name="Foto" value="" id="Foto"> <br>
<input type="submit" value="Guardar Datos"> <br>