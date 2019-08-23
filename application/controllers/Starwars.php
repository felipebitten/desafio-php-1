<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Starwars extends CI_Controller {

	public function index()
	{
		//Carrega o Model
		$this->load->model('model','starwars');

		//Array para armazenar os starwars
		//Função no model getAcao
		$data['starwars'] = $this->starwars->getAcao();

		//Carrega a View e passa o Array
		$this->load->view('listar', $data);
	}

	public function add(){

		//Carrega a Model
		$this->load->model('model','starwars');

		//Carrega a View
		$this->load->view('addAcao');
	}

	//Salvar no Banco
	public function salvar()
	{
		//Verifica se foi passado o campo nome vazio.
		if ($this->input->post('name') == NULL) {
			echo 'O compo nome do starwars é obrigatório.';
			echo '<a href="/index.php/starwars/add" title="voltar">Voltar</a>';
		} else {
			//Carrega o Model				
			$this->load->model('model', 'starwars');
			//Pega dados do post e guarda na array $dados
			$dados['name'] = $this->input->post('name');
			$dados['height'] = $this->input->post('height');
			$dados['mass'] = $this->input->post('mass');
			$dados['hair_color'] = $this->input->post('hair_color');
			$dados['skin_color'] = $this->input->post('skin_color');
			$dados['eye_color'] = $this->input->post('eye_color');
			$dados['birth_year'] = $this->input->post('birth_year');
			$dados['gender'] = $this->input->post('gender');
			$dados['homeworld'] = $this->input->post('homeworld');
			$dados['films'] = $this->input->post('films');
			$dados['species'] = $this->input->post('species');
			$dados['vehicles'] = $this->input->post('vehicles');
			// $dados['created'] = $this->input->post('created');
			$dados['edited'] = $this->input->post('edited');
	
			//Verifica se foi passado via post a id do starwars
			if ($this->input->post('id') != NULL) {		
				//Se foi passado ele vai fazer atualização no registro.	
				$this->starwars->editarAcao($dados, $this->input->post('id'));
			} else {
				//Se Não foi passado id ele adiciona um novo registro
				$this->starwars->addAcao($dados);
			}	
			//Faz um redirecionamento para a página 		
			header("Location: /desafio-php-1");	
		}		
	}

	public function editar($id=NULL)	
	{						
		//Verifica se foi passado um ID, se não vai para a página listar
		if($id == NULL) {
			header("Location: /desafio-php-1");
		}

		//Carrega o Model 				
		$this->load->model('model', 'starwars');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->starwars->getByID($id);

		//Verifica que a consulta voltar um registro, se não vai para a página listar 
		if($query == NULL) {
			header("Location: /desafio-php-1");
		}
		
		//Cria uma array onde vai guardar os dados do produto e passa como parametro para view;	
		$dados['starwar'] = $query;

		//Carrega a View
		$this->load->view('editar', $dados);		
	}

	public function info($id=NULL)	
	{						
		//Verifica se foi passado um ID, se não vai para a página listar
		if($id == NULL) {
			header("Location: /desafio-php-1");
		}

		//Carrega o Model 				
		$this->load->model('model', 'starwars');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->starwars->getByID($id);

		//Verifica que a consulta voltar um registro, se não vai para a página listar 
		if($query == NULL) {
			header("Location: /desafio-php-1");
		}
		
		//Cria uma array onde vai guardar os dados do produto e passa como parametro para view;	
		$dados['starwar'] = $query;

		//Carrega a View
		$this->load->view('informacao', $dados);		
	}

	public function apagar($id=NULL)
	{
		//Verifica se foi passado um ID, se não vai para a página listar 
		if($id == NULL) {
			header("Location: /desafio-php-1");
		}

		//Carrega o Model				
		$this->load->model('model', 'starwars');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->starwars->getByID($id);

		//Verifica se foi encontrado um registro com a ID passada
		if($query != NULL) {
			
			//Executa a função apagar do model
			$this->starwars->apagarAcao($query->id);
			header("Location: /desafio-php-1");

		} else {
			//Se não encontrou nenhum registro no banco de dados com a ID passada ele volta para página listar
			header("Location: /desafio-php-1");
		}	
	}


}
