<h1>Editar produto</h1>
<?php extract($data);?>
<form action="" method="post">


  <label for="name">Nome</label>
  <input id="name" value="<?php echo $product['name'];?>" name="name" type="text" class="form-control mb-3">

  <label for="description">Descrição</label>
  <textarea id="description" name="description" type="text"
    class="form-control mb-3"><?php echo $product['description'];?></textarea>

  <label for="value">Preço</label>
  <input id="value" value="<?php echo $product['value'];?>" name="value" type="text" class="form-control mb-3">

  <label for="quantity">Quantidade</label>
  <input id="quantity" value="<?php echo $product['quantity'];?>" name="quantity" type="text" class="form-control mb-3">

  <label for="picture">Foto</label>
  <input id="picture" value="<?php echo $product['picture'];?>" name="picture" type="text" class="form-control mb-3">

  <button class="btn btn-primary mb-3">Atualizar</button>
</form>