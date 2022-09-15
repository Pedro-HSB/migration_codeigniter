<?php
     $dsn = "mysql:host=localhost;dbname=petscao";
     $user = "root";
     $passwd = "10I`mdontnow";
     $dao;

        try {
            $dao = new PDO($dsn, $user, $passwd);
            $dao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $erro) {
            echo "ERRO" . $erro->getMessage();
            exit();
        }
        

// $sql = "SELECT * FROM cliente";
// $sql = $dao->prepare($sql);

$sth = $dao->query('SELECT * FROM cliente', PDO::FETCH_ASSOC);
$rows = $sth->fetchAll();

foreach ($rows as $row) {
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">nome</th>
      <th scope="col">sobrenome</th>
      <th scope="col">usuario</th>
      <th scope="col">senha</th>
      <th scope="col">cpf</th>
      <th scope="col">complemento</th>
      <th scope="col">email_cli</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php
    print $row['id_end'] . "<br>";

      ?></td>
      <td><?php
    print $row['cep_end'] . "<br>";

?></td>
      <td><?php
    print $row['logradouro_end'] . "<br>";

?></td>
      <td><?php
    print $row['bairro_end'] . "<br>";

?></td>
      <td><?php
    print $row['cidade_end'] . "<br>";

?></td>
      <td><?php
    print $row['estado_end']. "<br>";

?></td>
  </tbody>
</table>
<?php
    // print $row['nome_cli'] . "<br>";
    // print $row['sobrenome_cli'] . "<br>";
    // print $row['usuario_cli'] . "<br>";
    // print $row['senha_cli'] . "<br>";
    // print $row['cpf_cli'] . "<br>";
    // print $row['complemento_cli']. "<br>";
    
    // print $row['email_cli']. "<br>";
}

/*

      <td><?php
    print $row['nome_cli'] . "<br>";

      ?></td>
      <td><?php
    print $row['sobrenome_cli'] . "<br>";

?></td>
      <td><?php
    print $row['usuario_cli'] . "<br>";

?></td>
      <td><?php
    print $row['senha_cli'] . "<br>";

?></td>
      <td><?php
    print $row['cpf_cli'] . "<br>";

?></td>
      <td><?php
    print $row['complemento_cli']. "<br>";

?></td>
      <td><?php
    print $row['email_cli']. "<br>";

?></td>
  </tbody>
</table>

*/