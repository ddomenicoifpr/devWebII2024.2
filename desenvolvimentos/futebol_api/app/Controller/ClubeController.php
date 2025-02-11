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

		$json = json_encode($clubes, 
					JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES |
					JSON_UNESCAPED_UNICODE);

		$response->getBody()->write($json);
		
		return $response
					->withStatus(200) //SUCESSO
					->withHeader("Content-Type", "application/json");
    }

	public function buscarPorId(Request $request, Response $response, array $args): Response {
		return $response;
    }

	public function inserir(Request $request, Response $response, array $args): Response {
		//Receber os dados do Clube (formato JSON)
		$json = $request->getParsedBody();
		
		//Criar o objeto Clube a partir do JSON
		$clube = $this->clubeMapper->mapFromJsonToObject($json);

		//Inserir no banco
		$clube = $this->clubeDAO->insert($clube);

		//Gerar a resposta (formato JSON do clube inserido)
		$json = json_encode($clube, 
					JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES |
					JSON_UNESCAPED_UNICODE);
		
		//Escrevi a resposta
		$response->getBody()->write($json);
		return $response
					->withStatus(201) //Criado
					->withHeader("Content-Type", "application/json");
    }

	public function atualizar(Request $request, Response $response, array $args): Response {
		return $response;
    }

	public function deletar(Request $request, Response $response, array $args): Response {
		return $response;
    }

}