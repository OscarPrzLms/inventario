@extends('layouts.app')

@section('content')
  <h2 class="text-center mb-5">Productos</h2>

  <div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">
      <thead class="bg-primary text-light">
        <tr>
          <th scole="col">id</th>
          <th scole="col">Producto</th>
          <th scole="col">Categoria</th>
          <th scole="col">Sucursal</th>
          <th scole="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Producto uno</td>
          <td>Lacteos</td>
          <td>Cuautla</td>
          <td>
            
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection