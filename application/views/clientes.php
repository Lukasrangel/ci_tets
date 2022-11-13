<h3>Clientes:</h3>

<ul>
<?php

foreach($clientes as $cliente){
?>
    <li> <a href='clientes/<?php echo $cliente['id'];?>'> <?php echo $cliente['nome']; ?> </a></li>

<?php
    }
?>

</ul>

<h3>Cadastrar Cliente:</h3>

<?php echo validation_errors(); ?>
<?php echo form_open('clientes');?>

    <input type='text' name='nome' placeholder='Nome...'>
    <br><br>
    <input type='text' name='email' placeholder="Email...">
    <br><br>
    <input type='submit' value='Cadastrar!'>


</form>