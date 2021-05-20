<?php

if (!isset($_SESSION)) {
    session_start();
}
    //Executa comando Select
    function DBSelect($table, $params = null, $fields = '*')
    {
        $table = DB_PREFIX.$table;
        $params = ($params) ? " {$params}" : null;

        $query = "SELECT {$fields} FROM {$table}{$params}";
        $result = DBExecute($query);

        if (!mysqli_num_rows($result)) {
            return false;
        } else {
            while ($res = mysqli_fetch_assoc($result)) {
                $data[] = $res;
            }

            return $data;
        }
    }

    //Executa comando Insert
    function DBInsert($table, array $dados)
    {
        $table = DB_PREFIX.$table;
        $dados = DBEscape($dados);
        $fields = implode(', ', array_keys($dados));
        $values = "'".implode("', '", $dados)."'";

        $query = "INSERT INTO {$table} ( {$fields} ) VALUES ( {$values} )";

        return DBExecute($query);
    }

    //Executa Querys
    function DBExecute($query)
    {
        $link = DBConnect();
        $result = @mysqli_query($link, $query) or die($_SESSION['mensagemCadastro'] = '<script>alert("Erro ao executar o comando SQL: '.mysqli_error($link).'");</script>');

        DBClose($link);

        return $result;
    }
