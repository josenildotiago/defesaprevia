<style type="text/css">
    body { 
        background-color: #B0C4DE; 
    }
</style>
<div class="wrapper fadeInDown">
    <div id="formContent">
    <?php if (isset($_SESSION['msg'])) { echo $_SESSION['msg']; unset($_SESSION['msg']); } ?>
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="<?php echo BASE_URL; ?>assets/images/ico.png" id="icon" alt="Prefeitura de Mossoró" />
        </div>

        <!-- Login Form -->
        <form method="POST" action="<?php echo BASE_URL; ?>contatos/logar">
            <input type="email" id="login" class="fadeIn second" name="email" placeholder="E-mail" required autofocus >
            <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Senha">
            <input type="submit" class="fadeIn fourth" value="Entrar">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Esqueçeu a senha?</a>
        </div>

    </div>
</div>