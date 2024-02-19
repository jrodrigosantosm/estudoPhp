<?php


$dsn = 'mysql:host=localhost;dbname=nome_do_banco_de_dados';
$username = 'usuario';
$password = 'senha';

try {
    // Cria uma nova conexão PDO
    $pdo = new PDO($dsn, $username, $password);

    // Configura o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query SQL
    $sql = "SELECT * FROM tabela";

    // Prepara a declaração SQL
    $stmt = $pdo->prepare($sql);

    // Executa a declaração
    $stmt->execute();

    // Recupera os resultados como um array associativo
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Exibe os resultados
    foreach ($results as $row) {
        echo "ID: {$row['id']} - Nome: {$row['nome']} - Email: {$row['email']}<br>";
    }
} catch (PDOException $e) {
    // Em caso de erro, exibe a mensagem de erro
    echo "Erro: " . $e->getMessage();
}
?>


// Neste exemplo:

// Substitua 'localhost', 'nome_do_banco_de_dados', 'usuario' e 'senha' com as configurações do seu banco de dados MySQL.
// A conexão é estabelecida usando new PDO($dsn, $username, $password), onde $dsn é uma string de conexão que contém o tipo de banco de dados, o host e o nome do banco de dados.
// O modo de erro do PDO é configurado para exceções para facilitar a detecção e o tratamento de erros.
// A consulta SQL é preparada com $pdo->prepare() e executada com $stmt->execute().
// Os resultados são recuperados com $stmt->fetchAll(PDO::FETCH_ASSOC), que retorna um array associativo.
// Os resultados são então percorridos em um loop foreach e exibidos na página.