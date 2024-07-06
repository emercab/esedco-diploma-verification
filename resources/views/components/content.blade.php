  <main class="flex mt-6">

    <div class="flex flex-wrap items-stretch w-full md:w-1/2">
      <div class="w-full left-container my-4 py-4 px-4 rounded-4">
        <h1 class="text-color3 text-4xl font-bold">Certificados ESEDCO</h1>
        <hr style="border:1px solid var(--color2);">
        <p class="text-xl text-white">
          Desde esta página podrá consultar y descargar certificados de algún evento o programa de la <strong><a
              href="https://esedco.edu.co" target="_blank">Escuela de Educación Para el Desarrollo de Colombia -
              ESEDCO</a></strong> del departamento de Arauca.
        </p>
        <p class="text-xl text-white">
          Se puede descargar certificados con el número de documento o verificar su atenticidad mediante código de
          registro.
        </p>
      </div>
    </div>

    <div class="w-full md:w-1/2 flex items-stretch">
      <div class="w-full right-container my-4 pt-4 pb-3 rounded-4 text-center lead">
        <!-- Options -->
        <div class="form-check form-check-inline py-1">
          <input class="form-check-input" type="radio" name="optConsulta" id="optDocumento" value="Doc" checked>
          <label class="form-check-label text-color3">Consultar por documento</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="optConsulta" id="optCodigo" value="Cod">
          <label class="form-check-label text-color3">Verificar con código</label>
        </div>
        <hr class="text-color5">

        <!-- Formulario de consulta -->
        <form id="frmConsulta" onsubmit="return false" action="return false" method="post">
          <!-- Controles para la consulta por documento -->
          <div id="PorDocumento">
            <div class="mb-3">
              <label for="cboTipoDoc" class="form-label text-white">
                Tipo de documento:
              </label>
              <select class="form-select mx-auto" id="cboTipoDoc" name="cboTipoDoc" style="width:260px;">
                <option value="1">CÉDULA DE CIUDADANÍA</option> \n<option value="4">CÉDULA DE EXTRANJERÍA
                </option>
                \n
                <option value="0">OTRO</option> \n<option value="5">PASAPORTE</option> \n<option
                  value="7">
                  PERMISO DE
                  PROTECCIÓN TEMPORAL</option> \n<option value="6">PERMISO ESPECIAL DE PERMANENCIA</option> \n
                <option value="3">REGISTRO CIVIL</option> \n<option value="2">TARJETA DE IDENTIDAD</option> \n
              </select>
            </div>
            <div class="mb-3">
              <label for="txtNumDoc" class="form-label text-white">
                Número de documento:
              </label>
              <input type="number" class="form-control mx-auto number required" id="txtNumDoc" name="txtNumDoc"
                style="width: 260px;" placeholder="Sin puntos ni espacios." required>
              <div id="msjNumDoc" class="my-2"></div>
            </div>
          </div>

          <!-- Controles para la consulta por código -->
          <div id="PorCodigo">
            <div class="mb3">
              <label for="txtCodigo" class="form-label text-white">
                Código de verificación:
              </label>
              <input type="text" class="form-control mx-auto" id="txtCodigo" name="txtCodigo" style="width: 260px;">
              <div id="msjCodigo" class="my-2"></div>
            </div>
          </div>

          <button class="btn btn-warning text-color4 my-2" name="cmdBuscar" id="cmdBuscar">
            Consultar
          </button>
        </form>
      </div>
    </div>

    <!-- Imagen del loading - preloader -->
    <div id="preloader" class="hidden m-0 p-0 mx-auto">
      <p class="text-center text-color2">
        <img src="https://certificados.esedco.edu.co/img/loading.gif">
        <br> Buscando información, espere un momento.
      </p>
    </div>

  </main>

  <!-- Fila de resultados -->
  <section class="row mt-3 mb-4">
    <div class="col-md-12">
      <div class="result-container rounded-4 mb-5 py-4 px-4">
        <h2 class="text-color3">Resultados:</h2>
        <div id="result"></div>
        <div>
          <span class="text-white font-weight-bold" id="encontrados"></span>
        </div>
      </div>
    </div>
  </section>
