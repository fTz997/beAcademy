<h1>Listar contatos</h1>


<table class='table table-hover table-stripped'>
  <thead class='table-dark'>
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($contatos as $cadaContato){
        echo '<tr>';
          echo '<td>' . $cadaContato . '</td>';
        echo '</tr>';
      }
    ?>
</table>