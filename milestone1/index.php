<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>AJAX-DISCHI</title>
</head>
<body>
    <header>
        <figure class="logo">
            <img class="logo" src="./logo.svg" alt="">
        </figure>
    </header>

    <main>

        <div class="container">
            <?php
                include __DIR__ .'/db.php';
            ?>
        </div>

    </main>
    
</body>
</html>


