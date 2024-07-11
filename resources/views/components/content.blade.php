  <main class="flex mt-6">

    <div class="flex flex-wrap items-stretch w-full md:w-1/2 px-3">
      <div class="w-full bg-[#00609c] p-6 my-6 rounded-2xl">
        <x-heading>Certificados ESEDCO</x-heading>
        <x-divider />
        <p class="text-xl text-white mb-4">
          Desde esta página podrá consultar y descargar certificados de algún evento o programa de la
          <strong>
            <a href="https://esedco.edu.co" target="_blank" class=" text-color3 hover:text-color2 duration-300">
              Escuela de Educación Para el Desarrollo de Colombia - ESEDCO
            </a>
          </strong> del departamento de Arauca.
        </p>
        <p class="text-xl text-white mb-4">
          Se puede descargar certificados con el número de documento o verificar su atenticidad mediante código de
          registro.
        </p>
      </div>
    </div>

    <div class="flex flex-wrap items-stretch w-full md:w-1/2 px-3">
      <div class="w-full bg-[#00437b] p-6 my-6 rounded-2xl text-center">
        <!-- Options -->
        <x-divider color="color2" />
        <!-- Formulario de consulta -->
        <form id="frmConsulta" onsubmit="return false" action="return false" method="post">
          <!-- Controles para la consulta por documento -->
          <x-forms.input label="Número de documento:" name="txtNumDoc" type="number" w="w-[260px]" required />

          <button class="btn btn-warning text-color4 my-2" name="cmdBuscar" id="cmdBuscar">
            Consultar
          </button>
        </form>
      </div>
    </div>

    <!-- Imagen del loading - preloader -->
    <div id="preloader" class="hidden m-0 p-0 mx-auto">
      <p class="text-center text-color2 mb-4">
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
