<h1>Listar categorias</h1>

<div class='mb-3 text-end'>
  <a href="/categorias/nova" class="btn btn-outline-primary">Nova categoria</a>
</div>

<table class="table table-hover table-striped">
  <thead class="tb-dark">
    <tr>
      <th>#ID</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      while ($category = $data->fetch(\PDO::FETCH_ASSOC)){
        extract($category);

        echo '<tr>';
          echo "<td>{$id}</td>";
          echo "<td>{$name}</td>";
          echo "<td>{$description}</td>";
          echo "<td><a href='/categorias/editar?id={$id}' class='btn btn-warning btn-sm'>Editar</a></td>";
          echo "<td><a href='/categorias/excluir?id={$id}' class='btn btn-danger btn-sm'>Excluir</a></td>";
      }
    ?>
  </tbody>
</table>