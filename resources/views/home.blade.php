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
<div class="container">
    <h2>Bienvenido a Colibros!</h2>
    <hr>
    <div class="row" id="items"></div>

</div>


    <div style="display: none">
        <template id="template-card">

            <div class="col-6 mb-2">
              <div class="card">
                <div class="card-body">
                  <h5>Titulo</h5>
                  <h6>Autor</h6>
                  <span>Genero</span><br>

                  <p>precio</p>
                  
                  
                  <button class="btn btn-dark">Comprar</button>
                </div>
              </div>
            </div>
    
          </template>
     </div>

      
    <!---->

@endsection
