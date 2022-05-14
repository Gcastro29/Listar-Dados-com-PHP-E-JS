<?php
include_once "conexao.php";

$query_usuarios = "SELECT usuario_id,usuario,senha FROM usuario LIMIT 10";
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->execute();

$dados = "";
while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
    extract($row_usuario);
    $senha = md5($senha);
    $dados .="<tr>
            <td>$usuario_id</td>;
            <td>$usuario</td>;
            <td>$senha</td>;
          </tr>";

}
echo $dados;
