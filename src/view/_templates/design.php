<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
		<title>Title</title>
		<meta name="description" content="">

		<?php if(ENV == 'prod') { ?>
			<?php/*Google analystic*/?>
		<?php } ?>

		<?php /*TODO: Add a if to use the non minified file when in dev env to be able to debug*/?>
        <link rel="icon" type="image/png" href="<?=URL?>img/icon.png">
        <link href="<?=URL?>css/style.css" rel="stylesheet">
	</head>
	<body>

        <nav>
            
        </nav>

        <div>
            <?php require ROOT.'src/view/'.$view.'.php'; ?>
        </div>

        <footer>

        </footer>

        <script>
            var url = "<?=URL?>"
        </script>

        <?php /*TODO: Add a if to use the non minified file when in dev env to debug*/?>
        <script src="<?=URL?>js/application.min.js"></script>
	</body>
</html>