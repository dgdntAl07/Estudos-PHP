<?php
require 'nameSpace.php';

$sobre = new \aplicacao\v1\Sobre();

echo "Versão: ".$sobre->getVersion();
?>