<?php echo $this->extend('template/layout'); ?>

<?php echo $this->section('contenido'); ?>


<section>
    <div class="container flex flex-col items-center px-4 py-8 mx-auto text-center md:px-10 lg:px-32 xl:max-w-3xl">
        <h1 class="text-4xl font-bold leading-none sm:text-5xl">Tabla de Almacenes</h1>
        </h1>
        <p class="px-8 mt-8 mb-12 text-lg">Descripcion</p>

        <div class="flex flex-wrap justify-center">
            <button class="px-8 py-3 m-2 text-lg font-semibold rounded bg-violet-400 text-gray-900">Get started</button>
            <button class="px-8 py-3 m-2 text-lg border rounded text-gray-50 border-gray-700">Learn more</button>
        </div>
    </div>
</section>

<section class="p-6 bg-gray-800 text-gray-100">
    <div class="container grid justify-center grid-cols-2 mx-auto text-center lg:grid-cols-3">
        <div class="flex flex-col justify-start m-2 lg:m-6">
            <p class="text-4xl font-bold leading-none lg:text-6xl">50+</p>
            <p class="text-sm sm:text-base">Clients</p>
        </div>
        <div class="flex flex-col justify-start m-2 lg:m-6">
            <p class="text-4xl font-bold leading-none lg:text-6xl">89K</p>
            <p class="text-sm sm:text-base">Followers on social media</p>
        </div>
        <div class="flex flex-col justify-start m-2 lg:m-6">
            <p class="text-4xl font-bold leading-none lg:text-6xl">3</p>
            <p class="text-sm sm:text-base">Published books</p>
        </div>
        <div class="flex flex-col justify-start m-2 lg:m-6">
            <p class="text-4xl font-bold leading-none lg:text-6xl">8</p>
            <p class="text-sm sm:text-base">TED talks</p>
        </div>
        <div class="flex flex-col justify-start m-2 lg:m-6">
            <p class="text-4xl font-bold leading-none lg:text-6xl">22</p>
            <p class="text-sm sm:text-base">Years of experience</p>
        </div>
        <div class="flex flex-col justify-start m-2 lg:m-6">
            <p class="text-4xl font-bold leading-none lg:text-6xl">10+</p>
            <p class="text-sm sm:text-base">Workshops</p>
        </div>
    </div>
</section>

<?php echo $this->endSection(); ?>