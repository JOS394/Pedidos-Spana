
@extends('adminlte::page')

@section('title', 'Melo Express')

@section('content_header')
    <h1 style="text-align:center">Melo Express</h1>
@stop

@section('content')

<h2>Formulario de Recolectas</h2>
<br>
<div class="container ">
<form action="/vendedores" method="POST">
    @csrf
  <div class="row border" style="background-color: white; padding: 15px; border-radius:20px;">
   
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NOMBRE</label>

    <div class="col-sm-8">
    <input type="text" id="nombre" name="nombre" class="form-control" tabindex="1" placeholder="NOMBRE DEL COMERCIO / TIENDA" >
    </div>
    </div>
    
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">DIRECCION DE RECOELCTA</label>

    <div class="col-sm-8">
    <input type="text" id="dire" name="dire" class="form-control" tabindex="1" placeholder="DIRECCION" >
    </div>
    </div>
    
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">FECHA DE RECOLECTA</label>
    
    <div class="col-sm-3">
    <input type="date" id="tele" name="tele" class="form-control" tabindex="3" placeholder="FECHA">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">TELEFONO</label>
    <div class="col-sm-3">
    <input type="text" id="what" name="what" class="form-control" tabindex="3" placeholder="TELEFONO">
    </div>

    </div>
   

   

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">REPARTIDOR ASIGNADO</label>
    
    <div class="col-sm-3">
    <input type="text" id="fech" name="fech" class="form-control" tabindex="1"  >
    </div>

    <label for="inputEmail3" class="col-sm-2 col-form-label">ESTADO DE RECOELCTA</label>
    <div class="col-sm-3">
    <select id="tipo" name="tipo" aria-label="Select a Timezone"  class="form-select ">
			<option value="Corriente">SELECCIONAR TIPO</option>		
			<option value="Pequeño">CREADA</option>
      <option value="Pequeño">RECOLECTADA</option>
            <option value="Grande">NO RECOELCTADA</option>
			<option value="Nuevo">PROGRAMADA</option>
      
			
		</select>
    </div>

    </div>

    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NOTA</label>

    <div class="col-sm-8">
    <input type="text" id="dire" name="dire" class="form-control" tabindex="1" placeholder="NOTA" >
    </div>
    </div>
    




  </div>
  





<br>
 
 
<br>
   <button type="submit" class="btn btn-primary">Guardar</button>


</form>
</div>


   

   
  


@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@stop
