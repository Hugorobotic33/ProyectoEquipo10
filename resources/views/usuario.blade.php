@extends('layouts.app')

@section('content')


<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> --}}



            </div>
        </div>
    </div>
</div>

                <!---->

    <!---->

@endsection

@section("book")
<div class="container">
    <h2>Bienvenido a Colibros!</h2>
    <hr>
   <!--Carrito-->
   <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Libro(s)</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Acción</th>
        <th scope="col">Total</th>
      </tr>
    </thead>
    <tbody id="items"></tbody>
    <tfoot>
      <tr id="footer">
        <th scope="row" colspan="5">Carrito vacío - comience a comprar!</th>
      </tr>
    </tfoot>
  </table>
   <!--end-->  
    <div class="row" id="cards"></div>

</div>



<template id="template-footer">
    <th scope="row" colspan="2">Total productos</th>
    <td>10</td>
    <td>
        <button class="btn btn-danger btn-sm" id="vaciar-carrito">
            vaciar todo
        </button>
    </td>
    <td class="font-weight-bold">$ <span>5000</span>
     
    </td>
    <td>
      <a href="/paypalxd">Realizar Pago con Paypal</a>
    </td>
    
  
</template>


<template id="template-carrito">
  <tr>
    <th scope="row">id</th>
    <td>Café</td>
    <td>1</td>
    <td>
        <button class="btn btn-info btn-sm">
            +
        </button>
        <button class="btn btn-danger btn-sm">
            -
        </button>
    </td>
    <td>$ <span>500</span></td>
  </tr>
 
</template>


  



    <div style="display: none">
        <template id="template-card">

            <div class="col-6 mb-2">
              <div class="card">
                  <img src="" alt="" class="card-img-top">
                <div class="card-body">
                  <h5>Titulo</h5>
                  <h6>Autor</h6>
                  <span>Genero</span><br>

                  <p>precio</p>
                  
                  
                  <button class="btn btn-dark">
                    
                    Comprar
                  </button>
                </div>
              </div>
            </div>
    
          </template>
     </div>

      @endsection

@section("script")
<script type="text/javascript" src="{{asset('js/index.js')}}"></script>



@endsection
