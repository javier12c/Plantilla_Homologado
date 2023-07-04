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
        <div class="p-6  mt-14 ">
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


            <main>
                <h1 class=" font-bold text-3xl mt-14 mb-4">Registros de usuarios </h1>

                <!-- Start coding here -->
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-1/2">
                            <form class="flex items-center">
                                <label for="simple-search" class="sr-only">Buscar</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Buscar" required="">
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-formulario dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-2">id</th>
                                    <th scope="col" class="px-4 py-3">Nombre</th>
                                    <th scope="col" class="px-4 py-3">Depedencia</th>
                                    <th scope="col" class="px-4 py-3">Numero de registro</th>
                                    <th scope="col" class="px-4 py-3">
                                        <span class="sr-only">Acciones</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">12</th>
                                    <td class="px-4 py-3">Francisco Javier Sarao Aguilar</td>
                                    <td class="px-4 py-3">Organo Interno de control</td>
                                    <td class="px-4 py-3">123</td>
                                    <td class="px-4 py-3 flex gap-4 items-center justify-end">
                                        <a href="registros.php">
                                            <img src="../img/Vector1.svg" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="../img/Vector3.svg" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">12</th>
                                    <td class="px-4 py-3">Francisco Javier Sarao Aguilar</td>
                                    <td class="px-4 py-3">Organo Interno de control</td>
                                    <td class="px-4 py-3">123</td>
                                    <td class="px-4 py-3 flex gap-4 items-center justify-end">
                                        <a href="registros.php">
                                            <img src="../img/Vector1.svg" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="../img/Vector3.svg" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">12</th>
                                    <td class="px-4 py-3">Francisco Javier Sarao Aguilar</td>
                                    <td class="px-4 py-3">Organo Interno de control</td>
                                    <td class="px-4 py-3">123</td>
                                    <td class="px-4 py-3 flex gap-4 items-center justify-end">
                                        <a href="registros.php">
                                            <img src="../img/Vector1.svg" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="../img/Vector3.svg" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">12</th>
                                    <td class="px-4 py-3">Francisco Javier Sarao Aguilar</td>
                                    <td class="px-4 py-3">Organo Interno de control</td>
                                    <td class="px-4 py-3">123</td>
                                    <td class="px-4 py-3 flex gap-4 items-center justify-end">
                                        <a href="registros.php">
                                            <img src="../img/Vector1.svg" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="../img/Vector3.svg" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">12</th>
                                    <td class="px-4 py-3">Francisco Javier Sarao Aguilar</td>
                                    <td class="px-4 py-3">Organo Interno de control</td>
                                    <td class="px-4 py-3">123</td>
                                    <td class="px-4 py-3 flex gap-4 items-center justify-end">
                                        <a href="registros.php">
                                            <img src="../img/Vector1.svg" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="../img/Vector3.svg" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">12</th>
                                    <td class="px-4 py-3">Francisco Javier Sarao Aguilar</td>
                                    <td class="px-4 py-3">Organo Interno de control</td>
                                    <td class="px-4 py-3">123</td>
                                    <td class="px-4 py-3 flex gap-4 items-center justify-end">
                                        <a href="registros.php">
                                            <img src="../img/Vector1.svg" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="../img/Vector3.svg" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">12</th>
                                    <td class="px-4 py-3">Francisco Javier Sarao Aguilar</td>
                                    <td class="px-4 py-3">Organo Interno de control</td>
                                    <td class="px-4 py-3">123</td>
                                    <td class="px-4 py-3 flex gap-4 items-center justify-end">
                                        <a href="registros.php">
                                            <img src="../img/Vector1.svg" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="../img/Vector3.svg" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">12</th>
                                    <td class="px-4 py-3">Francisco Javier Sarao Aguilar</td>
                                    <td class="px-4 py-3">Organo Interno de control</td>
                                    <td class="px-4 py-3">123</td>
                                    <td class="px-4 py-3 flex gap-4 items-center justify-end">
                                        <a href="registros.php">
                                            <img src="../img/Vector1.svg" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="../img/Vector3.svg" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">12</th>
                                    <td class="px-4 py-3">Francisco Javier Sarao Aguilar</td>
                                    <td class="px-4 py-3">Organo Interno de control</td>
                                    <td class="px-4 py-3">123</td>
                                    <td class="px-4 py-3 flex gap-4 items-center justify-end">
                                        <a href="registros.php">
                                            <img src="../img/Vector1.svg" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="../img/Vector3.svg" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">12</th>
                                    <td class="px-4 py-3">Francisco Javier Sarao Aguilar</td>
                                    <td class="px-4 py-3">Organo Interno de control</td>
                                    <td class="px-4 py-3">123</td>
                                    <td class="px-4 py-3 flex gap-4 items-center justify-end">
                                        <a href="registros.php">
                                            <img src="../img/Vector1.svg" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="../img/Vector3.svg" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">12</th>
                                    <td class="px-4 py-3">Francisco Javier Sarao Aguilar</td>
                                    <td class="px-4 py-3">Organo Interno de control</td>
                                    <td class="px-4 py-3">123</td>
                                    <td class="px-4 py-3 flex gap-4 items-center justify-end">
                                        <a href="registros.php">
                                            <img src="../img/Vector1.svg" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="../img/Vector3.svg" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">12</th>
                                    <td class="px-4 py-3">Francisco Javier Sarao Aguilar</td>
                                    <td class="px-4 py-3">Organo Interno de control</td>
                                    <td class="px-4 py-3">123</td>
                                    <td class="px-4 py-3 flex gap-4 items-center justify-end">
                                        <a href="registros.php">
                                            <img src="../img/Vector1.svg" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="../img/Vector3.svg" alt="">
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">12</th>
                                    <td class="px-4 py-3">Francisco Javier Sarao Aguilar</td>
                                    <td class="px-4 py-3">Organo Interno de control</td>
                                    <td class="px-4 py-3">123</td>
                                    <td class="px-4 py-3 flex gap-4 items-center justify-end">
                                        <a href="registros.php">
                                            <img src="../img/Vector1.svg" alt="">
                                        </a>
                                        <a href="#">
                                            <img src="../img/Vector3.svg" alt="">
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                            Mostrar
                            <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                            de
                            <span class="font-semibold text-gray-900 dark:text-white">1000</span>
                        </span>
                        <ul class="inline-flex items-stretch -space-x-px">
                            <li>
                                <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Previous</span>
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Next</span>
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </main>
        </div>
    </div>


    <?php
    include '../../includes/templates/footer2.html'
    ?>
</body>