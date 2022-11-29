<h1 class="text-center mt-10 mb-5 font-sans text-5xl font-bold tracking-tight text-gray-900">Prendas de <span class="inline-block text-teal-400">Mujeres</span></h1>
<div class="flex flex-wrap justify-center">
  <?php foreach ($listaMujeres as $prendaMujer) : ?>
    <div class="flex justify-center">
      <div id="card" class="flex-prendaMujer max-w-xs rounded-lg m-10 bg-slate-100 shadow-lg hover:scale-105 transition-all ease-in-out cursor-pointer">
        <img class="w-full rounded-t-xl max-h-fit" src="<?php echo $prendaMujer->foto_pm ?>" alt="" />
        <div class="p-6 flex flex-col justify-start">
          <h5 id="nombre-prenda" class="text-gray-900 text-xl font-medium mb-2"><?php echo $prendaMujer->nombre_pm ?></h5>
          <p class="text-gray-700 text-base mb-4">
            <?php echo $prendaMujer->descripcion_pm ?>
          </p>
          <p id="precio" class="text-gray-600 text-xl font-bold"><?php echo $prendaMujer->precio_pm ?></p>
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