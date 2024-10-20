<?php echo $this->extend('template/layout'); ?>

<?php echo $this->section('contenido'); ?>
<section>
    <div class="container flex flex-col items-center px-4 py-8 mx-auto text-center md:px-10 lg:px-32 xl:max-w-3xl">
        <h1 class="text-4xl font-bold leading-none sm:text-5xl mb-6">Crear producto</h1>
        <div class="w-full"> <!-- Aseguramos que el contenedor también ocupe el 100% del ancho -->
            <?php
            $atributes = [
                'class' => 'border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                        block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white',
                'required' => true
            ];
            echo form_open("products/store", 'class="w-full max-w-sm mx-auto" id="form_product"')
            ?>

            <?php echo form_label('Nombre:', 'nombre') ?>
            <?php echo form_input(
                'nombre',
                '',
                array_merge($atributes, ['placeholder' => 'Nomb'])
            ) ?>

            <?php echo form_label('Codigo:', 'codigo') ?>
            <?php echo form_input(
                'code',
                '',
                array_merge($atributes, ['placeholder' => 'Codigo de producto'])
            ) ?>

            <?php echo form_label('Stock:', 'stock') ?>
            <?php echo form_input(
                'stock',
                '',
                array_merge($atributes, ['placeholder' => 'Stock'])
            ) ?>

            <?php echo form_label('Precio:', 'price') ?>
            <?php echo form_input(
                'price',
                '',
                array_merge($atributes, ['placeholder' => 'Precio'])
            ) ?>

            <?php echo form_label('Almacen:', 'warehouse') ?>
            <?php echo form_input(
                'warehouse',
                '',
                array_merge($atributes, ['placeholder' => 'Selecciona almacen'])
            ) ?>

            <?php echo form_submit('submit', 'guardar', [
                'class' => 'px-8 py-3 m-2 text-lg font-semibold rounded bg-violet-400 text-gray-900 cursor-pointer'
            ]); ?>

            <?php echo form_close(); ?>
            <!-- </div> -->
            <div class="flex flex-wrap justify-center">
                <button class="px-8 py-3 m-2 text-lg font-semibold rounded bg-violet-400 text-gray-900">Get started</button>
                <button class="px-8 py-3 m-2 text-lg border rounded text-gray-50 border-gray-700">Learn more</button>
            </div>
        </div>

</section>
<?php echo $this->endSection(); ?>