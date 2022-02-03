@extends('layouts.app')

@section('template_title')
    {{ $categoria->name ?? 'Show Categoria' }}
@endsection


@section('content')
<div class="container d-flex align-items-center justify-content-center ">

   <div class="row">
   
       <div class="col-12 col-lg-9 col-md-8 bg-info">
      
          <h1 class="text-white"> Payment</h1>
      
          <p> Hola como estan </p>

          <div class="row">
              <div class="col-12 col-lg-8 bg-dark">
              <h1 class="text-white"> dark</h1>
      
              <p> hola como estas hola como estas hola como estas hola como estas hola como estas  </p>
              </div>

              <div class="col-12 col-lg-4 bg-success">
              <h1 class="text-white"> success</h1>
      
              <p> hola como estas hola como estas hola como estas hola como estas hola como estas  </p>
              </div>

              <div class="col-12 col-lg-4 bg-danger">
              <h1 class="text-white"> success</h1>
      
              <p> hola como estas hola como estas hola como estas hola como estas hola como estas  </p>
              </div>

              <div class="col-12 col-lg-8 bg-warning">
              <h1 class="text-white"> success</h1>
      
              <p> hola como estas hola como estas hola como estas hola como estas hola como estas  </p>
              </div>

          </div>
      
       </div>
      
      
      
      
      <div class="col-12 col-lg-3 col-md-4 bg-secondary">
   
         <h1 class="text-white"> selection you mwthod pay</h1>
   
         <p> pagos </p>
   
   
       
       </div>
   
   </div>
</div>
@endsection