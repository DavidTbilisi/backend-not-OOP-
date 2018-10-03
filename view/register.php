<?php include_once 'header.php' ?>

<a href="<?php echo BASE_URL.HOME.'login'?>"> L O G I N </a>

<div class="login">
    <form action="<?php echo BASE_URL.HOME.'dashboard'?>" method="post">
        <input type="email" name="mail" placeholder="mail">
        <input type="text" name="pass" placeholder="pass">
        <input type="text" name="name" placeholder="name">
        <input type="submit" value="register" name="register">
    </form>
</div>



<style>

    .login{
        position: relative;
        margin: 20%;
    }
    input{
        display: block;
    }


</style>
<?php  include_once 'footer.php' ?>
