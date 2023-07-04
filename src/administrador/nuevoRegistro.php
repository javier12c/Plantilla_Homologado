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
            <form>
                <div class="space-y-14">
                    <div class="border-b border-gray-900/10 p-11 bg-formulario mt-16 rounded-sm">
                        <h2 class=" font-bold text-3xl leading-7 text-gray-900 text-center">Informacion General</h2>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="folio" class="block text-sm font-medium leading-6 text-gray-900">Folio</label>
                                <div class="mt-2">
                                    <input type="text" name="folio" id="folio" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  pl-5  p-2.5">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="tdocumento" class="block text-sm font-medium leading-6 text-gray-900">Tipo de documento</label>
                                <div class="mt-2">
                                    <select id="tdocumento" name="tdocumento" class=" block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option>Circular</option>
                                        <option>Copia de conocimiento</option>
                                        <option>Oficio</option>
                                    </select>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="ndocumento" class="block text-sm font-medium leading-6 text-gray-900">Numero de documento</label>
                                <div class="mt-2">
                                    <input type="text" name="ndocumento" id="ndocumento" autocomplete="ndocumento" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <label for="depedencia" class="block text-sm font-medium leading-6 text-gray-900">Depedencia u unidad administrativa</label>
                                <div class="mt-2">
                                    <select id="dependencia" name="dependencia" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option>Organo Interno</option>
                                        <option>Secretaria General</option>
                                        <option>Area Coordinadora de archivos</option>
                                    </select>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="asunto" class="block text-sm font-medium leading-6 text-gray-900">Asunto</label>
                                <div class="mt-2">
                                    <textarea type="text" name="asunto" id="asunto" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-20">
                                    </textarea>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Signado Por</label>
                                <div class="mt-2">
                                    <select id="dependencia" name="dependencia" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option>Francisco Javier Sarao Aguilar</option>
                                        <option>Juan Ignacio Lopez</option>
                                        <option>Pedro Enrique Perez</option>
                                    </select>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="cargo" class="block text-sm font-medium leading-6 text-gray-900">Cargo</label>
                                <div class="mt-2">
                                    <input type="text" name="cargo" id="cargo" autocomplete="cargo" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-empleado-boton bg-empleado-hover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full" type="button">
                                    No existe el funcionario
                                </button>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Dirigido a</label>
                                <div class="mt-2">
                                    <select id="dependencia" name="dependencia" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option>Francisco Javier Sarao Aguilar</option>
                                        <option>Juan Ignacio Lopez</option>
                                        <option>Pedro Enrique Perez</option>
                                    </select>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="cargo" class="block text-sm font-medium leading-6 text-gray-900">Cargo</label>
                                <div class="mt-2">
                                    <input type="text" name="cargo" id="cargo" autocomplete="cargo" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" disabled>
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-empleado-boton bg-empleado-hover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full" type="button">
                                    No existe el funcionario
                                </button>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Anexos</label>

                                <div class="flex gap-4">
                                    <div class="">
                                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">si</label>
                                    </div>
                                    <div class="">
                                        <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">no</label>
                                    </div>
                                </div>
                            </div>
                            <div class="sm:col-span-4">
                                <label for="asunto" class="block text-sm font-medium leading-6 text-gray-900">Seguimiento Realizado</label>
                                <div class="mt-2">
                                    <input type="text" name="cargo" id="cargo" autocomplete="cargo" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <label for="resguardo" class="block text-sm font-medium leading-6 text-gray-900">Resguardo</label>
                                <div class="mt-2">
                                    <input type="text" name="resguardo" id="resguardo" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <label for="fechadocumento" class="block text-sm font-medium leading-6 text-gray-900">Fecha del documento</label>
                                <div class="mt-2">
                                    <input type="date" name="fechadocumento" id="fechadocumento" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <!-- Main modal -->
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
                                                Agregando Funcionario
                                            </h3>
                                            <form class="space-y-6 " action="#">
                                                <div class="mt-10 grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-6">

                                                    <div class="sm:col-span-3 sm:col-start-1">
                                                        <label for="folio" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                                                        <div class="mt-2">
                                                            <input type="text" name="folio" id="folio" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  pl-5  p-2.5">
                                                        </div>
                                                    </div>

                                                    <div class="sm:col-span-3">
                                                        <label for="tdocumento" class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                                                        <div class="mt-2">
                                                            <input type="text" name="folio" id="folio" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  pl-5  p-2.5">

                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-3">
                                                        <label for="tdocumento" class="block text-sm font-medium leading-6 text-gray-900">Correo</label>
                                                        <div class="mt-2">
                                                            <input type="text" name="folio" id="folio" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6  pl-5  p-2.5">

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
                                                </div>
                                                <div class=" pb-8">
                                                    <label for="puesto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Puesto</label>
                                                    <input type="text" name="puesto" id="puesto" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required />
                                                </div>

                                                <button type="submit" class="w-full text-white bg-header boton-hover focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Guardar
                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Cierre modal-->

                        </div>
                    </div>
                </div>

                <div class="space-y-14">
                    <div class="border-b border-gray-900/10 p-11 bg-formulario mt-12 rounded-sm">
                        <h2 class=" font-bold text-3xl leading-7 text-gray-900 text-center">Guardado Virtual</h2>
                        <div class="sm:col-span-6 mt-3">
                            <label for="hipervinculo" class="block text-sm font-medium leading-6 text-gray-900">Subir PDF (Hipervinculo del documento)</label>
                            <div class="mt-2">
                                <input type="file" name="hipervinculo" id="hipervinculo" autocomplete="hipervinculo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-y-14">
                    <div class="border-b border-gray-900/10 p-11 bg-formulario mt-12 rounded-sm">
                        <h2 class=" font-bold text-3xl leading-7 text-gray-900 text-center">Guardado Fisico</h2>
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                            <div class="sm:col-span-3">
                                <label for="nombrexpediente" class="block text-sm font-medium leading-6 text-gray-900">Nombre del expediente donde se guarda</label>
                                <div class="mt-2">
                                    <input type="text" name="nombrexpediente" id="nombrexpediente" autocomplete="nombrexpediente" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <label for="series" class="block text-sm font-medium leading-6 text-gray-900">Sección con serie</label>
                                <div class="mt-2">
                                    <input type="text" name="series" id="series" autocomplete="series" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <label for="ubicacion" class="block text-sm font-medium leading-6 text-gray-900">Ubicación fisica</label>
                                <div class="mt-2">
                                    <input type="text" name="ubicacion" id="ubicacion" autocomplete="ubicacion" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="observaciones" class="block text-sm font-medium leading-6 text-gray-900">Observaciones</label>
                                <div class="mt-2">
                                    <textarea type="text" name="observaciones" id="observaciones" class="block p-2.5  w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-20" placeholder="Escribe tu observacion">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <input type="submit" class="rounded-md bg-header boton-hover focus:ring-4 focus:outline-none px-3 py-2 text-sm font-semibold text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-invisible" value="Guargar">
                </div>
            </form>
        </div>
    </div>
    <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>

    <?php
    include '../../includes/templates/footer2.html'
    ?>
</body>