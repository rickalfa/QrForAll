@extends('layouts.app')

@section('template_title')
    {{ $categoria->name ?? 'Show Categoria' }}
@endsection


@section('content')
<div class="container d-flex align-items-center justify-content-center">

   <div class="row">
   
       <div class="col-12 col-lg-9 col-md-8 bg-info">
      
          <h1 class="text-white"> Payment</h1>
      
          <p> Hola como estan </p>

          <div class="row">
              <div class="col-12 col-lg-8 bg-dark" >
              <h1 class="text-white"> dark</h1>
              
                <!--Card -->
              <div class="bg-image card shadow-1-strong h-90" style="background-image: url('../public/img/hs-2.png');  background-position: center;background-size: cover;" >
                  <div class="card-body text-white">
                      <div class="d-flex mb-3">
                      
                          <img src="../public/img/face-marine-hs.jpg" class="border border-secondary border-5 rounded-circle " height="100px" alt="">
                          <div class="ps-3">
                              <h6 class="m-4">face hellbat</h6>
                          </div>

                      </div>
                       <h5 class="card-title">Card title</h5>
                       <p class="card-text">
                         Some quick example text to build on the card title and make up the bulk of the
                         card's content.
                       </p>
                       <a href="#!" class="btn btn-outline-light">Button</a>
                  </div>
                </div>
                 <!--End Card -->
              
      
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

              <div class="col-12 col-lg-8 text-black bg-warning">
              <h1 class="text-black"> success</h1>
      
              <p class="text-dark"> hola como estas hola como estas hola como estas hola como estas hola como estas  </p>
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