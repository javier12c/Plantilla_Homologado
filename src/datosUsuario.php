<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="../dist/output.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
</head>

<body class="flex flex-col h-screen justify-between ">

    <?php
    include '../includes/templates/navbar2.html';
    include 'aside.php'
    ?>
    <div class="p-6 sm:ml-64">
        <div class=" p-6  mt-14 ">
            <div class="flex gap-4">
                <div class=" w-24 h-10 mt-6 px-6 sm:w-1/4 xl:w-1/3 sm:mt-0">
                    <div class="flex items-center  shadow-sm rounded-md bg-gray-50">
                        <div class="p-3 rounded-full  bg-opacity-75">
                            <img src="img/Icon3.svg" alt="">
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
                            <img src="img/Icon4.svg" alt="">
                        </div>
                        <div class="mx-5">
                            <h4 class="text-2xl font-semibold text-gray-700">Resguardos</h4>
                            <div class="text-gray-500 text-center text-2xl">14</div>
                        </div>
                    </div>
                </div>
            </div>


            <main class="md:flex md:flex-row md:mt-24 md:justify-center md:items-center ">
                <div class="md:w-2/3 bg-login shadow-md">
                    <h1 class=" font-bold uppercase text-center pt-10 text-usuario-letra">Francisco Javier Sarao Aguilar</h1>
                    <div class="container w-16 mx-auto text-center">
                        <img src="img/236831.png" alt="sexo">
                    </div>
                    <div class=" rounded-2xl bg-white mt-10 mx-10  h-12 py-2 px-2">
                        <h1 class="  font-bold mr-5">Unidad administrativa: <span class="text-usuario-letra">Unidad de apoyo juridico
                            </span></h1>
                    </div>
                    <div class=" rounded-2xl bg-white mt-4 mx-10  h-12 py-2 px-2">
                        <h1 class=" font-bold">Correo: <span class="text-usuario-letra">javier99sarao@gmail.com
                            </span></h1>
                    </div>
                    <div class=" rounded-2xl bg-white mt-4 mx-10  h-12 py-2 px-2">
                        <h1 class=" font-bold">Telefono: <span class="text-usuario-letra">9934306821
                            </span></h1>
                    </div>
                    <div class=" rounded-2xl bg-white mt-4 mx-10  h-12 py-2 px-2 mb-5">
                        <h1 class=" font-bold">Puesto: <span class="text-usuario-letra">Secretario
                            </span></h1>
                    </div>

                    <div class="container pb-6 px-10  min-w-full flex  items-center gap-4 object-center mx-auto">
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-header boton-hover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 " type="button">
                            Editar Perfil
                        </button>
                        <button data-modal-target="contraseña-modal" data-modal-toggle="contraseña-modal" class="block text-white bg-header boton-hover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 " type="button">
                            Cambier Contraseña
                        </button>
                    </div>
                </div>

            </main>

            <!--Modal-->
            <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="px-6 py-6 lg:px-6">
                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">
                                Modificando datos de usuario
                            </h3>
                            <form class="space-y-6" action="#">
                                <div class="mt-10 grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3 sm:col-start-1">
                                        <label for="folio" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                                        <div class="mt-2">
                                            <input type="text" name="folio" id="folio" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-5 p-2.5" />
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="tdocumento" class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                                        <div class="mt-2">
                                            <input type="text" name="folio" id="folio" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-5 p-2.5" />
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="tdocumento" class="block text-sm font-medium leading-6 text-gray-900">Correo</label>
                                        <div class="mt-2">
                                            <input type="text" name="folio" id="folio" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 pl-5 p-2.5" />
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="tdocumento" class="block text-sm font-medium leading-6 text-gray-900">Unidad o depedencia</label>
                                        <div class="mt-1">
                                            <select id="dependencia" name="dependencia" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <option>Organo Interno</option>
                                                <option>Secretaria General</option>
                                                <option>Area Coordinadora de archivos</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="puesto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puesto</label>
                                        <div class="mt-1">
                                            <input type="text" name="puesto" id="puesto" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required />
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
                                        <div class="mt-1">
                                            <input type="text" name="telefono" id="telefono" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required />
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" class="w-full text-white bg-header boton-hover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Guardar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cierre modal-->
            <!--Modal-->
            <div id="contraseña-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="contraseña-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="px-6 py-6 lg:px-6">
                            <h3 class=" text-xl font-medium text-gray-900 dark:text-white">
                                Cambiando Contraseña
                            </h3>
                            <form class="space-y-4" action="datosUsuario.php">
                                <div class="mt-8 grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-5">
                                    <div class="sm:col-span-5 sm:col-start-1">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                            Nueva contraseña
                                        </label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-color-iconos">
                                                    <g id="style=fill">
                                                        <g id="key">
                                                            <path id="Subtract" fill-rule="evenodd" clip-rule="evenodd" d="M19.7245 4.25634C16.8672 1.40867 12.2422 1.40731 9.39229 4.25664C7.50743 6.13282 6.87285 8.78545 7.46375 11.1886L6.75131 11.901C6.77638 11.92 6.80046 11.9409 6.82333 11.9638L8.80539 13.9459C9.07435 14.2148 9.07435 14.6509 8.80539 14.9198C8.53643 15.1888 8.10036 15.1888 7.8314 14.9198L5.84934 12.9378C5.82647 12.9149 5.80554 12.8908 5.78656 12.8657L4.56916 14.0831L6.5821 16.0961C6.85106 16.365 6.85106 16.8011 6.5821 17.07C6.31314 17.339 5.87707 17.339 5.60811 17.07L3.59516 15.0571L2.7613 15.8909L2.75414 15.8983C2.51883 16.1408 2.35105 16.4612 2.24946 16.7659C2.14833 17.0693 2.08799 17.4316 2.13777 17.7776L2.13823 17.7807L2.39979 19.6821L2.40133 19.6922C2.47514 20.1754 2.7279 20.61 3.04998 20.9335C3.37189 21.2569 3.80877 21.5143 4.30034 21.5826L6.20174 21.8442L6.20497 21.8447C6.54317 21.8934 6.9021 21.8415 7.21104 21.7414C7.51802 21.6419 7.84612 21.4719 8.09426 21.2183L12.8009 16.5199C15.2002 17.1184 17.8514 16.4729 19.7329 14.6006L19.734 14.5994C22.5836 11.7499 22.5836 7.10579 19.7245 4.25634ZM14.6197 6.92451C13.2731 6.92451 12.1815 8.01611 12.1815 9.36267C12.1815 10.7092 13.2731 11.8008 14.6197 11.8008C15.9662 11.8008 17.0578 10.7092 17.0578 9.36267C17.0578 8.01611 15.9662 6.92451 14.6197 6.92451Z" fill="#9f2241" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <input class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 block w-full pl-10 p-2.5 focus:outline-none" id="password" type="password" placeholder="******************">
                                        </div>

                                    </div>
                                    <div class="sm:col-span-5 sm:col-start-1">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                            Repetir contraseña
                                        </label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-color-iconos">
                                                    <g id="style=fill">
                                                        <g id="key">
                                                            <path id="Subtract" fill-rule="evenodd" clip-rule="evenodd" d="M19.7245 4.25634C16.8672 1.40867 12.2422 1.40731 9.39229 4.25664C7.50743 6.13282 6.87285 8.78545 7.46375 11.1886L6.75131 11.901C6.77638 11.92 6.80046 11.9409 6.82333 11.9638L8.80539 13.9459C9.07435 14.2148 9.07435 14.6509 8.80539 14.9198C8.53643 15.1888 8.10036 15.1888 7.8314 14.9198L5.84934 12.9378C5.82647 12.9149 5.80554 12.8908 5.78656 12.8657L4.56916 14.0831L6.5821 16.0961C6.85106 16.365 6.85106 16.8011 6.5821 17.07C6.31314 17.339 5.87707 17.339 5.60811 17.07L3.59516 15.0571L2.7613 15.8909L2.75414 15.8983C2.51883 16.1408 2.35105 16.4612 2.24946 16.7659C2.14833 17.0693 2.08799 17.4316 2.13777 17.7776L2.13823 17.7807L2.39979 19.6821L2.40133 19.6922C2.47514 20.1754 2.7279 20.61 3.04998 20.9335C3.37189 21.2569 3.80877 21.5143 4.30034 21.5826L6.20174 21.8442L6.20497 21.8447C6.54317 21.8934 6.9021 21.8415 7.21104 21.7414C7.51802 21.6419 7.84612 21.4719 8.09426 21.2183L12.8009 16.5199C15.2002 17.1184 17.8514 16.4729 19.7329 14.6006L19.734 14.5994C22.5836 11.7499 22.5836 7.10579 19.7245 4.25634ZM14.6197 6.92451C13.2731 6.92451 12.1815 8.01611 12.1815 9.36267C12.1815 10.7092 13.2731 11.8008 14.6197 11.8008C15.9662 11.8008 17.0578 10.7092 17.0578 9.36267C17.0578 8.01611 15.9662 6.92451 14.6197 6.92451Z" fill="#9f2241" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <input class="bg-white border border-gray-300 text-sm rounded-lg focus:ring-blue-500 block w-full pl-10 p-2.5 focus:outline-none" id="password" type="password" placeholder="******************">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="w-full mt-5 text-white bg-header boton-hover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Guardar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cierre modal-->

        </div>
    </div>
    <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>


    <?php
    include '../includes/templates/footer2.html'
    ?>
</body>