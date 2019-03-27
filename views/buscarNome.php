<?php
if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
    
} else {
    header("Location: ".BASE_URL."login");
    exit;
}
?>
Buscar Nome