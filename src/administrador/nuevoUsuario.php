<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="../../dist/output.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
</head>

<body class="flex flex-col h-screen justify-between ">

    <?php
    include '../../includes/templates/navbar2.html'
    ?>
    <?php
    include 'aside.php'
    ?>

    <div class="p-6 sm:ml-64">
        <div class=" p-6  mt-14 ">
            <div class="flex gap-4">
                <div class=" w-24 h-10 mt-6 px-6 sm:w-1/4 xl:w-1/3 sm:mt-0">
                    <div class="flex items-center  shadow-sm rounded-md bg-gray-50">
                        <div class="p-3 rounded-full  bg-opacity-75">
                            <img src="../img/Icon3.svg" alt="">
                        </div>
                        <div class="mx-5">
                            <h4 class="text-2xl font-semibold text-gray-700">Creados</h4>
                            <div class="text-gray-500 text-center text-2xl">14</div>
                        </div>
                    </div>
                </div>
                <div class=" w-24 h-14 mt-6 px-6 sm:w-1/4 xl:w-1/3 sm:mt-0">
                    <div class="flex items-center  shadow-sm rounded-md bg-gray-50">
                        <div class="p-3 rounded-full  bg-opacity-75">
                            <img src="../img/Icon4.svg" alt="">
                        </div>
                        <div class="mx-5">
                            <h4 class="text-2xl font-semibold text-gray-700">Resguardos</h4>
                            <div class="text-gray-500 text-center text-2xl">14</div>
                        </div>
                    </div>
                </div>
            </div>


            <main class="md:flex md:flex-row md:mt-2 md:justify-center md:items-center">
                <form class=" w-3/4" action="tableUsuario.php">
                    <div class="space-y-14">
                        <div class="border-b border-gray-900/10 p-11 bg-formulario mt-16 rounded-sm">
                            <h2 class=" font-bold text-3xl leading-7 text-gray-900 text-center">Registrar Usuario</h2>

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-6 sm:col-start-1">
                                    <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                                    <div class="mt-2">
                                        <input type="text" name="nombre" id="nombre" placeholder="Escribe el nombre completo" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  pl-5  p-2.5">
                                    </div>
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="correo" class="block text-sm font-medium leading-6 text-gray-900">Correo Electronico</label>
                                    <div class="mt-2">
                                        <input type="email" name="correo" id="correo" placeholder="Escribe el correo" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  pl-5  p-2.5">
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="contraseña" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                                    <div class="mt-2">
                                        <input type="password" name="contraseña" id="contraseña" autocomplete="contraseña" placeholder="**********" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="telefono" class="block text-sm font-medium leading-6 text-gray-900">Telefono</label>
                                    <div class="mt-2">
                                        <input type="text" name="telefono" id="telefono" autocomplete="contraseña" placeholder="ej. 9934306821" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="depedencia" class="block text-sm font-medium leading-6 text-gray-900">Depedencia</label>
                                    <div class="mt-2">
                                        <select id="dependencia" name="dependencia" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <option>Organo Interno</option>
                                            <option>Secretaria General</option>
                                            <option>Area Coordinadora de archivos</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Genero</label>

                                    <div class="flex gap-4">
                                        <div class="">
                                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Masculino</label>
                                        </div>
                                        <div class="">
                                            <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Femenino</label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input type="submit" value="Guardar" class=" w-full text-white bg-header boton-hover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm  py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>


    <?php
    include '../../includes/templates/footer2.html'
    ?>
</body>