<form action="" method="post">
  <input name="nome" placeholder="Nome"></br> 
  <input name="cidade" placeholder="Cidade"></br></br>
  <button> Enviar </button>

</form>

<?php 
  if ($_POST){
    echo "Oi ".$_POST["nome"];
  }
?>
