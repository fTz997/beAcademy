<?php

$a1 = [
  'nome'=>'Chiquim',
  'email' => 'chiquim@email.com',
  'telefone' => '85 9 8999-9999',
  'notas' => [9, 8.9, 7, 6]
];

$a2 = [
  'nome' => 'Maria',
  'email' => 'maria@email.com',
  'telefone' => '85 9 9999-0000',
  'notas' => [9, 8.9, 7, 6]
];

$a3 =[
  "nome" => "Sam",
  "email" => "samo@gmail.com",
  "telefone" => "69 99956 5000",
  "notas" => [7, 8, 7, 9 ]
];

$a4 =["nome" => "Vander",
      "email" => "Vander@gmail.com",
      "telefone" => "69 90678 5143",
      "notas" => [7, 10, 7, 9 ]
];

$alunos = [$a1, $a2, $a3, $a4];
?>
<div class="container">
    <table>
        <h2>Tabela de média dos Alunos</h2>
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Média</th>
            </tr>
        </thead>
        <tbody>
                <?php

                    foreach($alunos as $aluno){

                            $index = 0;
                            $total = 0;
                            while($index < count($aluno['notas'])){

                                $total += $aluno['notas'][$index];
                                $index++;
                            }

                            $media = $total / 4;

                            $mediaFormatada = number_format($media, 1, '.', '');

                        echo "<tr>
                                <td>{$aluno['nome']}</td>
                                <td>{$aluno['email']}</td>
                                <td>{$aluno['telefone']}</td>
                                <td>{$mediaFormatada}</td>
                            </tr>";


                    }

                ?>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>