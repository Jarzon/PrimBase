<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
		<title>Title</title>
		<meta name="description" content="">

		<?php if(ENV == 'prod'): ?>
			<?php/*Google analystic*/?>
		<?php endif; ?>

		<?php /*TODO: Add a if to use the non minified file when in dev env to be able to debug*/?>
        <link rel="icon" type="image/png" href="/img/icon.png">
        <link href="/css/style.css" rel="stylesheet">
	</head>
	<body>

        <nav>
            
        </nav>

        <div>
            <?php require ROOT.'src/view/'.$view.'.php'; ?>
        </div>

        <footer>

        </footer>

        <?php /*TODO: Add a if to use the non minified file when in dev env to debug*/?>
        <script src="/js/application.min.js"></script>
	</body>
</html>