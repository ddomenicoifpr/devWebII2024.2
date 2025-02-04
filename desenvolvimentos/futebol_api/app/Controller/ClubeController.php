<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Dao\ClubeDAO;
use App\Mapper\ClubeMapper;
use App\Service\ClubeService;
use App\Util\MensagemErro;

use \PDOException;

class ClubeController {

	private ClubeDAO $clubeDAO;
	private ClubeMapper $clubeMapper;
	private ClubeService $clubeService;

	public function __construct() {
		$this->clubeDAO = new ClubeDAO();
		$this->clubeMapper = new ClubeMapper();
		$this->clubeService = new ClubeService();
	}

    public function listar(Request $request, Response $response, array $args): Response {
		$clubes = $this->clubeDAO->list();

		$response->getBody()->write(print_r($clubes, true));
		
		return $response;
    }

	public function buscarPorId(Request $request, Response $response, array $args): Response {
		return $response;
    }

	public function inserir(Request $request, Response $response, array $args): Response {
		return $response;
    }

	public function atualizar(Request $request, Response $response, array $args): Response {
		return $response;
    }

	public function deletar(Request $request, Response $response, array $args): Response {
		return $response;
    }

}