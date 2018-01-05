<?php
function formatBytes($bytes, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    // Uncomment one of the following alternatives
    $bytes /= pow(1024, $pow);

    return round($bytes, $precision) . ' ' . $units[$pow];
}
?>
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

            footer {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                font-size: 20px;
                height: 75px;
                background: #333;
                padding: 0 15%;
            }

            ul {
                list-style: none;
            }

            ul li {
                display: block;
                text-align: center;
                width: 200px;
                float: left;
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

        <footer>
            <?php if($xdebug): ?>
            <ul>
                <li>Time:<br> <?=floor(xdebug_time_index() * 1000)?> ms</li>
                <li>Memory:<br> <?=formatBytes(xdebug_memory_usage())?> / <?=formatBytes(xdebug_peak_memory_usage())?></li>
            </ul>
            <?php endif; ?>
        </footer>
    </body>
</html>