<form action="" method="post">
  <input name="n1" type="text" placeholder="1 número"></br> 
  <input name="n2" type="text" placeholder="2 número"></br></br>
  <button name="soma"> Somar </button>
  <button name="subtrai"> Subtrair </button>
  <button name="multiplica" > Multiplicar </button>
  <button name="divide"> Dividir </button>
</form>

<?php 
  if ($_POST){
    if (isset($_POST['soma'])){
      echo $_POST["n1"] + $_POST['n2'];
    }
    if (isset($_POST['subtrai'])){
      echo $_POST["n1"] - $_POST['n2'];
    }
    if (isset($_POST['multiplica'])){
      echo $_POST["n1"] * $_POST['n2'];
    }
    if (isset($_POST['divide'])){
      echo $_POST["n1"] / $_POST['n2'];
    }
    
  }
  

  //var_dump($_POST)
?>
