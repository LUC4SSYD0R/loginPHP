<?php
    include("header.php");
    include("connect.php");

?>
<div class="container pl-11">
    <h2 class="text-white"><?php
        $nome = $_POST["email_usuario"];
        $password = $_POST["password"];
        echo $nome." sua senha ".$password
    ?><h2>
        
</div>
<?php
    include("footer.php")
?>