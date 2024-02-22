<?php
/*
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Lo step successivo è quello di “testare" l'invio di un nuovo task, sapendo che manca comunque la persistenza lato server (ancora non memorizzate i dati da nessuna parte).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--My stylesheet-->
    <link rel="stylesheet" href="css/style.css">

    <!--Vue 3-->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!--JS-->
    <script defer src="js/script.js"></script>

    <!--AXIOS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body  class="bg-primary-subtle" id="app">

<header>
   <div class="container text-white py-5 text-center">
       <h1>TODO LIST</h1>
   </div>

</header>

<main>
    <div class="d-flex justify-content-center">
        <div class="bg-warning-subtle todo-container rounded py-2 px-2">
            <ul>
                <li>Primo task</li>
            </ul>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <div>
            <input type="text" placeholder="Inserisci task..." class="form-control">
            <button class="btn btn-outline-primary mt-2" type="submit">Inserisci</button>
        </div>
    </div>

</main>
</body>
</html>