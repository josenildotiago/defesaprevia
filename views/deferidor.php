<?php
if (isset($_SESSION['painel'])) {
    
} else {
    header("Location: ".BASE_URL);
    exit;
}
?>
<?php include (__INCLUDES_NAV_DEF__); ?>
<div class="container" >
    <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; unset($_SESSION['msg']); } ?>
</div>