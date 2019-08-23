<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model{

    public function getAcao(){
        $query = $this->db->get('starwars');
        return $query->result();
    }

    public function addAcao($dados=NULL)
	{
	if ($dados != NULL):
		$this->db->insert('starwars', $dados);		
	endif;
    }   
    
    public function getByID($id=NULL)
    {
    if ($id != NULL):
        //Verifica se a ID no banco de dados
        $this->db->where('id', $id);        
        //limita para apenas um regstro    
        $this->db->limit(1);
        //pega os starwars
        $query = $this->db->get("starwars");        
        //retorna o starwars
        return $query->row();   
    endif;
    } 

    public function editarAcao($dados=NULL, $id=NULL)
    {
    //Verifica se foi passado $dados e $id    
    if ($dados != NULL && $id != NULL):
        //Se passou ele vai a atualizar
        $this->db->update('starwars', $dados, array('id'=>$id));      
    endif;
    }
    
    public function apagarAcao($id=NULL){
        //Verifica se foi passado o ID como parametro
        if ($id != NULL):
            //Executa a função DB DELETE para apagar o starwars
            $this->db->delete('starwars', array('id'=>$id));            
        endif;
    }  

}