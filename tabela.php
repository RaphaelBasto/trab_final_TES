



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Patrick+Hand&display=swap');

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Patrick Hand', cursive;
    color: rgb(238, 236, 236);
}

body {
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(to right bottom, #828282, #839fb5, #5fc5d0, #73e7b8, #d6fb84);
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-direction: row;
}

#table{
    text-align: center;
    border-collapse: collapse;
}

.table-rows {
    transition: all 0.3s ease;
    cursor: pointer;
}

.items {
    padding: 15px 35px;
    font-size: 19px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.7);
}

.icons {
    width: 15px;
    height: 15px;
    display: inline-block;
}

.dec {
    fill: rgba(239, 49, 49, 0.56);
    opacity: 0;
    transition: all 0.5s ease;
}

.inc {
    fill: rgba(110, 227, 89, 0.56);
    opacity: 0;
    transition: all 0.5s ease;
}

.table-rows:nth-child(even) {
    background-color: rgba(95, 197, 208, 0.21);
}

.table-rows:nth-child(odd) {
    background-color: rgba(55, 131, 138, 0.17);
}

.header-row {
    background-color: rgba(255, 255, 255, 0.31);
}

.table-rows:hover {
    background-color: #652479;
    transform: scale(1.1);
}

.table-rows:hover svg {
    opacity: 1;
    transform: scale(1.2);
}

    </style>
  </head>
  <form action="zeravotos.php" method="post">
  <div class="" style="display:flex; flex-direction:row; justify-content:center; margin-top:18px;">
      <button type="submit" name="button"  style="padding:10px; color:black;"> LIMPAR </button>
  </div>
  </form>
  <body>
    <div>
    <h2>Vereadores</h2>
<div class="table-section">
    <table id="table">
        <tr class="header-row">
            <th class="header-item items">Votos</th>
            <th class="header-item items">Nome</th>
            <th class="header-item items">Numero</th>
            <th class="header-item items">Partido</th>
        </tr>

          <?php
          header("Access-Control-Allow-Origin: *");
          header("Access-Control-Allow-Methods: POST");
include("conexao.php");
          $sql = "SELECT * from candidatos where tipo = 0 order by quantidade_votos DESC";

          $result = $mysqli->query($sql);

            if($result->num_rows > 0) {
              $output = array();

              /**
                cria a tabela
              */

              while($row = $result->fetch_assoc()) {
                echo '<tr class="table-rows">';
                echo '<td class="items">'.$row['quantidade_votos'].'</td>';
                echo '<td class="items">'.$row['nome'].'</td>';
                echo '<td class="items">'.$row['numero_candidato'].'</td>';
                echo '<td class="items">'.$row['partido'].'</td>';
                echo '</tr>';
                //$output[] = array( 'idcandidatos' => $row['idcandidatos'], 'quantidade_votos' => $row['quantidade_votos'], 'numero_candidato' => $row['numero_candidato'], 'nome' => $row['nome'], 'partido' => $row['partido'], 'foto' => $row['foto'], 'tipo' => $row['tipo'] );
              }
            }

          ?>



    </table>
</div>
</div>
<div>
<h2>Prefeitos</h2>
<div class="table-section">
<table id="table">
    <tr class="header-row">
        <th class="header-item items">Votos</th>
        <th class="header-item items">Nome</th>
        <th class="header-item items">Numero</th>
        <th class="header-item items">Partido</th>
    </tr>

      <?php
      header("Access-Control-Allow-Origin: *");
      header("Access-Control-Allow-Methods: POST");
      include("conexao.php");

      $sql = "SELECT * from candidatos where tipo = 1 order by quantidade_votos DESC";

      $result = $mysqli->query($sql);

      if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        if($result->num_rows > 0) {
          $output = array();

          while($row = $result->fetch_assoc()) {
            echo '<tr class="table-rows">';
            echo '<td class="items">'.$row['quantidade_votos'].'</td>';
            echo '<td class="items">'.$row['nome'].'</td>';
            echo '<td class="items">'.$row['numero_candidato'].'</td>';
            echo '<td class="items">'.$row['partido'].'</td>';
            echo '</tr>';
            //$output[] = array( 'idcandidatos' => $row['idcandidatos'], 'quantidade_votos' => $row['quantidade_votos'], 'numero_candidato' => $row['numero_candidato'], 'nome' => $row['nome'], 'partido' => $row['partido'], 'foto' => $row['foto'], 'tipo' => $row['tipo'] );
          }
        }

      }



      ?>

</table>
</div>
</div>

  </body>
</html>
