<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
include("conexao.php");

/**
  zera os votos
*/

$sql = "UPDATE candidatos SET quantidade_votos = 0";

$result = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="display:flex; flex:1;  justify-content:center; align-items: center;">
    <div class="" style="display:flex; flex:1; flex-direction:column; justify-content:center; align-items: center; margin-top:30px;">
        <h5> Votos zerados com sucesso. </h5>
        <button type="button" name="button" onclick="location.href='./bonieky-live-javascript/urna-eletronica';"  style="padding:10px;"> Voltar para votacao! </button>
    </div>
  </body>
</html>
