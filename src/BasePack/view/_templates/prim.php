<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
        <title>Prim</title>
        <meta name="viewport" content="width=device-width">
        <style>
            body{
                background: #444;
                margin: 0;
            }

            header {
                font-size: 25px;
                height: 75px;
                background: #333;
                padding: 0 15%;
            }

            main {
                padding: 0 15%;
            }

            .logo {
                font-size: 30px;
                padding: 20px;
            }

            h1 {
                text-align: center;
            }

            h2 {
                color: rgb(190, 50, 50);
            }

            table {
                width: 800px;
                display: inline-block;
            }

            th {
                width: 80px;
            }

            tr {
                background-color: rgb(230,230,230);
            }
        </style>
    </head>
    <body>
        <header>
            <div class="logo">Prim</div>
        </header>

        <main role="main">
            <?= $this->section('default') ?>
        </main>

        <?php $this->toolbar(); ?>
    </body>
</html>