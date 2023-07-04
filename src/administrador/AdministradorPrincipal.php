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


            <main class="md:flex md:flex-row md:mt-24 md:justify-center md:items-center">
                <div class="md:w-2/3 bg-login shadow-md">
                    <p class=" px-6 mt-4 font-bold text-usuario-letra  ">Administrador</p>
                    <h1 class=" font-bold uppercase text-center pt-5 text-usuario-letra">Francisco Javier Sarao Aguilar</h1>
                    <div class="container w-16 mx-auto text-center">
                        <img src="../img/236831.png" alt="sexo">
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
                    <div class=" rounded-2xl bg-white mt-4 mx-10  h-12 py-2 px-2 mb-9">
                        <h1 class=" font-bold">Puesto: <span class="text-usuario-letra">Titular del Organo Interno
                            </span></h1>
                    </div>
                </div>

            </main>
        </div>
    </div>


    <?php
    include '../../includes/templates/footer2.html'
    ?>
</body>