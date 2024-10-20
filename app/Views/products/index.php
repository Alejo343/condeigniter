<?php echo $this->extend('template/layout'); ?>

<?php echo $this->section('contenido'); ?>

<section>
    <div class="container flex flex-col items-center px-4 py-8 mx-auto text-center md:px-10 lg:px-32 xl:max-w-3xl">
        <h1 class="text-4xl font-bold leading-none sm:text-5xl">Tabla de productos</h1>
        </h1>
        <p class="px-8 mt-8 mb-12 text-lg">Descripcion</p>

        <div class="dark relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-2xl text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Codigo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Stock
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Almacen
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Estado
                        </th>
                        <td scope="col" class="px-6 py-3">
                            Acciones
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?= $product['id']; ?>
                            </th>
                            <td class="px-6 py-4">
                                <?= $product['code']; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $product['name']; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $product['stock']; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $product['warehouse']; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $product['status']; ?>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

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