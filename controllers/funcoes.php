<?php
function mostrarDados()
{
    include("models/conexao.php");
    if (empty($_POST["buscar"])) {
        echo "Nenhum resultado";
    } else {
        $varBusca = $_POST["buscar"];

        echo "<table class='table table-bordered table-striped table-hover' border='1' width='450'><tr><td>Frase</td><td>Editar</td><td>Excluir</td></tr>";

        $query = mysqli_query($conexao, "SELECT * FROM aluno WHERE nome LIKE '%$varBusca%'");
        while ($exibe = mysqli_fetch_array($query)) {
            $varSexo = ($exibe[3] == "m") ? "o" : "a";
            echo "<tr>" .
                "<td class='text-start'>" . strtoupper($varSexo) . " alun$varSexo <b>" . $exibe[1] . "</b> mora na cidade de " . $exibe[2] . ".</td>" .
                "<td><a href='views/cadastroAtualiza.php?ida=" . $exibe[0] . "'><button type='button' class='btn btn-secondary'>Editar</button></a></td>" .
                "<td><a href='controllers/deletarAluno.php?ida=" . $exibe[0] . "'><button type = 'button' class='btn btn-danger'>Excluir</button></a></td>" .
                "</tr>";
        }

        echo "</table>";
    }

}
?>