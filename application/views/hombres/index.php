<h1 class="text-center mt-10 mb-5 font-sans text-5xl font-bold tracking-tight text-gray-900">Prendas de <span class="inline-block text-teal-400">Hombres</span></h1>
<div class="flex justify-center">
  <button type="button" class="bg-emerald-500 px-5 py-3 rounded-md text-white hover:bg-emerald-600 transition-all ease-in-out" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Agregar Prenda</button>
</div>

<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog relative w-auto pointer-events-none">
    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-slate-100 bg-clip-padding rounded-md outline-none text-current">
      <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="flex justify-center text-xl text-center font-medium leading-normal text-gray-800" id="exampleModalLabel">
          Agregar una nueva prenda de hombre
        </h5>
        <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        <form action="<?php echo site_url('hombres/guardarPrendaHombre'); ?>" method="post">
          <ul class="flex flex-col gap-3">
            <li class="flex flex-col justify-center">
              <label for="nombre">Nombre</label>
              <input class="p-2 rounded-md" type="text" name="nombre_ph" id="nombre" required>
            </li>
            <li class="flex flex-col justify-center">
              <label for="precio">Precio</label>
              <input class="p-2 rounded-md" type="text" name="precio_ph" id="precio" required>
            </li>
            <li class="flex flex-col justify-center">
              <label for="tipo">Tipo</label>
              <select class="p-2 rounded-md" name="tipo_ph" required>
                <option value="" selected>- Seleccione una opción -</option>
                <option value="Pantalon">Pantalón</option>
                <option value="Camiseta">Camiseta</option>
                <option value="Camisa">Camisa</option>
                <option value="Chaqueta">Chaqueta</option>
                <option value="Zapatos">Zapatos</option>
              </select>
            </li>
            <li class="flex flex-col justify-center">
              <label for="foto">Foto</label>
              <input class="p-2 rounded-md" type="text" name="foto_ph" id="foto">
            </li>
            <li class="flex flex-col justify-center">
              <label for="descripcion">Descripcion</label>
              <textarea class="p-2 rounded-md" type="text" name="descripcion_ph" id="descripcion"></textarea>
            </li>
          </ul>
          <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
            <button type="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">Agregar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<div class="flex flex-wrap justify-center">
  <?php foreach ($listaHombres as $prendaHombre) : ?>
    <div class="flex justify-center">
      <div id="card" class="flex-prendaHombre max-w-xs rounded-lg m-10 bg-slate-100 shadow-lg hover:scale-105 transition-all ease-in-out cursor-pointer">
        <img class="w-full rounded-t-xl max-h-fit" src="<?php echo $prendaHombre->foto_ph ?>" alt="" />
        <div class="p-6 flex flex-col justify-start">
          <h5 id="nombre-prenda" class="text-gray-900 text-xl font-medium mb-2"><?php echo $prendaHombre->nombre_ph ?></h5>
          <p class="text-gray-700 text-base mb-4">
            <?php echo $prendaHombre->descripcion_ph ?>
          </p>
          <p id="precio" class="text-gray-600 text-xl font-bold">$<?php echo $prendaHombre->precio_ph ?></p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<style>
  #card:hover #nombre-prenda {
    color: teal;
  }
</style>