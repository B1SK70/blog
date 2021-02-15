@extends('plantilla')

@section('contenido')
    
<form>
    <div class="form-group">
      <label for="exampleInputEmail1">Tu correo</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Sugerencia</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Descripcion sugerencia</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



@endsection