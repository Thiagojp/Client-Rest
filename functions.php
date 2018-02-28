<?php
  // Pega noticia especifica em JSON
  function show($value='') {
    $url = 'http://localhost:8080/Proj-Servidor-Rest/webresources/noticias/buscar?id=';
    $response = file_get_contents($url.$value);
    echo $http_response_header[0]; // PEGANDO STATUS DA REQUISIÇÃO
    echo "<br>";
    echo $response;
  }


  // Exclui noticia especifica
  function remove($id='') {
    $url = 'http://localhost:8080/Proj-Servidor-Rest/webresources/noticias/';
    $response = file_get_contents($url.$id, false,
      stream_context_create(array(
          'http' => array(
              'method' => 'DELETE',
              'header'  => 'Content-type: application/xml'
          )
      ))
    );
    echo $http_response_header[0]; // PEGANDO STATUS DA REQUISIÇÃO
    echo "<br>";
    echo '<pre>'.str_replace('<', '&lt;', $response).'</pre>';
  }
  // Cria uma Noticia no Servidor, retorna JSON
  function create($id='',$autor='', $conteudo='', $data='', $titulo='') {
    // TRATAMENTO PARA PODER PERSISTIR O VALOR DA DATA NO BANCO
    $date = strtotime($data);
    $dateformat = date('Y-m-d', $date);
    // CRIAÇÃO DO ARRAY QUE REPRESENTA NOTICIA (CONCATENAÇÃO EM DATA É NECESSARIA PARA PERSISTENCIA)
    $notice = array('id' => $id,'autor' => $autor, 'conteudo' => $conteudo, 'data' => $dateformat.'T00:00:00-03:00', 'titulo' => $titulo);
    // CRIAÇÃO DO CONTEXTO PARA A REQUISIÇÃO
    $context = stream_context_create(array(
      'http' => array(
        'method' => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => json_encode($notice) // converte o JSON para string (só consegui dessa forma)
        )
    ));
    $url = 'http://localhost:8080/Proj-Servidor-Rest/webresources/noticias/criar';
    $response = file_get_contents($url, false, $context);
    echo $http_response_header[0]; // PEGANDO STATUS DA REQUISIÇÃO
    echo "<br>";
    echo $response;
  }
  // Cria uma Noticia no Servidor, retorna JSON
  function update($id='', $titulo='') {
    // CRIAÇÃO DO ARRAY QUE REPRESENTA NOTICIA
    $notice = array('autor' => 'no', 'conteudo' => 'no', 'data' => '2017-08-25T00:00:00-03:00', 'titulo' => $titulo);
    // CRIAÇÃO DO CONTEXTO PARA A REQUISIÇÃO
    $context = stream_context_create(array(
      'http' => array(
        'method' => 'PUT',
        'header'  => 'Content-type: application/json',
        'content' => json_encode($notice) // converte o JSON para string (só consegui dessa forma)
        )
    ));
    $url = 'http://localhost:8080/Proj-Servidor-Rest/webresources/noticias/';
    $response = file_get_contents($url.$id, false, $context);
    echo $http_response_header[0]; // PEGANDO STATUS DA REQUISIÇÃO
    echo "<br>";
    echo $response;
  }
?>