<?php 
	
	use Alura\Leilao\Model\{Leilao,Usuario,Lance};
	use Alura\Leilao\Service\Avaliador;

	require 'vendor/autoload.php';

	$leiao = new Leilao('fiat 147 0km');

	$maria = new Usuario('maria');
	$joao = new Usuario('joao');

	$leiao->recebeLance(new Lance ($joao,2000));
	$leiao->recebeLance(new Lance ($maria,2500));

	$leiloeiro = new Avaliador();
	$leiloeiro->avalia($leiao);

	$maiorValor = $leiloeiro->getMaiorValor();

	echo $maiorValor;