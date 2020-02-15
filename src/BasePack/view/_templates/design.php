<?php declare(strict_types=1);
/**
 * @var $this \Prim\View
 * @var $_ callable
 * @var $e callable
 */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
		<title>Title</title>
		<meta name="description" content="">

        <link rel="icon" type="image/png" href="/img/icon.png">
        <link href="<?=$this->fileCache('/js/main.css')?>" rel="stylesheet">
        <?= $this->section('css') ?>
	</head>
	<body>

        <nav>
            
        </nav>

        <main>
            <?= $this->section('default') ?>
        </main>

        <footer>

        </footer>

        <script src="<?=$this->fileCache('/js/main.js')?>" defer></script>
        <?= $this->section('js') ?>

        <?=(isset($_getToolbar) AND $this->insert('toolbar', 'PrimPack'))?>
	</body>
</html>
