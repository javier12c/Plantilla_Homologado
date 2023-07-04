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

            <?php

            include 'lateral.php'
            ?>

            <main class="md:flex md:flex-row md:mt-24 md:justify-center md:items-center">
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
                    <div class=" rounded-2xl bg-white mt-4 mx-10  h-12 py-2 px-2 mb-9">
                        <h1 class=" font-bold">Puesto: <span class="text-usuario-letra">Secretario
                            </span></h1>
                    </div>
                </div>

            </main>
        </div>
    </div>


    <?php
    include '../includes/templates/footer2.html'
    ?>
</body>