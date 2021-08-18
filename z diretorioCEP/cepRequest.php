<?php

$json = file_get_contents('https://viacep.com.br/ws/' . ($_GET["cep"]) . '/json');
echo json_encode($json);
?>