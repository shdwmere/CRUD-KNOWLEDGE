<h1>Listar Usuários</h1>
<?php // READ
$sql = "SELECT * FROM usuarios";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    // a variavel $row irá retornar todos os dados do resultado da query $res
    print "<table class='table table-hover'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Nome</th>";
    print "<th>E-mail</th>";
    print "<th>Pass</th>";
    print "<th>Data de Nascimento</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {

        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->senha . "</td>";
        print "<td>" . $row->data_nasc . "</td>";
        print "<td>
            
            <button onclick=\"
            
            location.href='?page=editar&id=" . $row->id . "';\" class='btn btn-success'>Editar
            
            </button>

            <button onclick=\"if (confirm) {location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}
            else{false;}\" 
            class='btn btn-danger'>Deletar
            
            </button>

        </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'> 0 Results found </p>";
}
?>