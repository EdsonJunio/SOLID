<?php


namespace src\extrator;

class Xlsx extends Arquivo
{

	public function lerArquivo(string $caminho): array
	{
		// Logica para leitura

		return $this->getDados();
	}

}