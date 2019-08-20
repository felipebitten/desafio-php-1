<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function index()
	{
		//Carrega o Model
		$this->load->model('produtos_model','produtos');

		//Array para armazenar os produtos
		//Função no produtos_model getprodutos
		$data['produtos'] = $this->produtos->getProdutos();

		//Carrega a View e passa o Array
		$this->load->view('listarprodutos', $data);
	}

	public function add(){

		//Carrega a Model Produtos
		$this->load->model('produtos_model','produtos');

		//Carrega a View
		$this->load->view('addprodutos');
	}

	//Salvar no Banco
	public function salvar()
	{
		//Verifica se foi passado o campo nome vazio.
		if ($this->input->post('nome') == NULL) {
			echo 'O compo nome do produto é obrigatório.';
			echo '<a href="/index.php/produtos/add" title="voltar">Voltar</a>';
		} else {
			//Carrega o Model Produtos				
			$this->load->model('produtos_model', 'produtos');
			//Pega dados do post e guarda na array $dados
			$dados['nome'] = $this->input->post('nome');
			$dados['descricao'] = $this->input->post('descricao');
			$dados['quantidade'] = $this->input->post('quantidade');		

			//Verifica se foi passado via post a id do produtos
			if ($this->input->post('id') != NULL) {		
				//Se foi passado ele vai fazer atualização no registro.	
				$this->produtos->editarProduto($dados, $this->input->post('id'));
			} else {
				//Se Não foi passado id ele adiciona um novo registro
				$this->produtos->addProduto($dados);
			}	
			//Faz um redirecionamento para a página 		
			header("Location: /desafio-php-1");	
		}		
	}

	public function editar($id=NULL)	
	{						
		//Verifica se foi passado um ID, se não vai para a página listar produtos
		if($id == NULL) {
			header("Location: /desafio-php-1");
		}

		//Carrega o Model Produtos				
		$this->load->model('produtos_model', 'produtos');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->produtos->getProdutoByID($id);

		//Verifica que a consulta voltar um registro, se não vai para a página listar produtos
		if($query == NULL) {
			header("Location: /desafio-php-1");
		}
		
		//Cria uma array onde vai guardar os dados do produto e passa como parametro para view;	
		$dados['produto'] = $query;

		//Carrega a View
		$this->load->view('editarprodutos', $dados);		
	}

	public function apagar($id=NULL)
	{
		//Verifica se foi passado um ID, se não vai para a página listar produtos
		if($id == NULL) {
			header("Location: /desafio-php-1");
		}

		//Carrega o Model Produtos				
		$this->load->model('produtos_model', 'produtos');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->produtos->getProdutoByID($id);

		//Verifica se foi encontrado um registro com a ID passada
		if($query != NULL) {
			
			//Executa a função apagarProdutos do produtos_model
			$this->produtos->apagarProduto($query->id);
			header("Location: /desafio-php-1");

		} else {
			//Se não encontrou nenhum registro no banco de dados com a ID passada ele volta para página listar produtos
			header("Location: /desafio-php-1");
		}	
	}


}
