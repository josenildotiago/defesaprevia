<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?php echo BASE_URL; ?>assets/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/compiler/bootstrap.css" />
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/signin.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>font/css/all.min.css" />
    <!-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
    <title>Defesa Prévia</title>
</head>
    <body>
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        <?php $data_ano = date("Y"); ?>
        <script type="text/javascript">
            var BASE_URL = '<?php echo BASE_URL; ?>';
        </script>
        <p class="text-center mt-5 mb-3 text-muted">&copy;SESEM <?php echo $data_ano; ?></p>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>