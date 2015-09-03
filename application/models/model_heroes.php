<?php


class Model_Heroes extends CI_Model {
    
    //Funcion para insertar nuevos heroes
    function insert($data){
        $this->db->insert('Hero',$data);
    }
    //Funcion para sacar todos los heroes
    function getAll(){
        $query= $this->db->get('Hero');
        return $query-> result();
        
    }
    function get_categories(){
	$query = $this->db -> query('Select id, name_category from Category');
        if($query->num_rows() > 0)
	{
            foreach($query->result() as $row)
                $arrDatos[htmlspecialchars($row->id, ENT_QUOTES)] = 
                htmlspecialchars($row->name_category, ENT_QUOTES);
                $query->free_result();
                return $arrDatos;
        }
    }
    
    
    
    
}

?>