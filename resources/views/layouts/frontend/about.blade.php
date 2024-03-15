  <!--==========================
  About Section
  ============================-->
<br>
<br>
{{-- <style>
  /* Estilos para centrar el contenedor */
  .f {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Esto centra verticalmente también */
  } 
</style> --}}
<h1 style="color: #008000" class="section-title">Bienvenidos al Sistema de  TRANSPORTE</h1>
  <br>
  <h2 class="section-description"> nosotros Viajamos <span class="rotating">por todo el departamento del Beni</span></h2>
  
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div  class= "col-md-12">
          <h3 class="section-title">Buscar</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Se busca el carnet de identidad del chofer del auto</p>
          
            <div style="display: flex; justify-content: center;" class="">            
              <div  class="col-md-8">
                {{-- {{ route('') }} --}}
                  <form action="" method="GET"> <!-- Se especifica la ruta adecuada -->
                      <div  class="input-group input-group-lg">
                          <input type="text" name="ci" class="form-control" placeholder="Buscar por Carnet de Identidad..." value="">
                          <span class="input-group-btn">
                              <button class="btn btn-success" id="btn-search" type="submit">Buscar</button> <!-- Se cambia el tipo de botón a submit -->
                          </span>
                      </div><!-- /input-group -->
                  </form>
              </div><!-- /input-group -->
            </div>
            <br>
            <div  class="container">
              {{-- @if ($associate) --}}
                    <h2>Detalles del Asociado</h2>
                    <ul class="list-group list-group-2">
                      {{-- {{ $associate->full_name }} --}}
                        <li class="list-group-item"><strong>Nombre Completo:</strong> Milton Daniel Hipamo</li>
                        <li class="list-group-item"><strong>CI:</strong> 1234556</li>
                        <li class="list-group-item"><strong>Fecha de Expedición CI:</strong> BN</li>
                        <li class="list-group-item"><strong>Activo:</strong> Sí</li>
                        <!-- Puedes mostrar más detalles según tus necesidades -->
                    </ul>
             {{-- @else
                    <p>No se encontró ningún asociado con el CI proporcionado.</p>
                  @endif --}}
            </div>
          </div>
        </div>
        <br> 
      </div>
    </div>    
  </section>
<br>