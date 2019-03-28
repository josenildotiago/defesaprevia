<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?php echo BASE_URL; ?>assets/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/signin.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/font-awesome.min.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
    <title>Defesa Prévia</title>
</head>
    <body>

        <?php
        if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
            $this->loadTemplateHome($viewName, $viewData);
        }
        ?>
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>

        <p class="text-center mt-5 mb-3 text-muted">&copy;SESEM 2018</p>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>