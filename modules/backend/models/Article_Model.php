<?php if ( ! defined('BASEPATH')) exit('No direct script core allowed');

class Article_Model extends CI_Model {
	var $table = 'article';

	function __construct(){
		parent::__construct();
		$this->load->database();
	}


	function update($data=NULL){
	    if( !isset($data['alias']) OR  strlen($data['alias']) < 1 ){
	        set_error('Please enter alias');
	        return false;
	    }
	    if( is_null($data['category']) ){
	        $data['category'] = 0;
	    }
	    if( $this->check_exist($data['alias'],$data['id'],$data['category']) ){
	        set_error('Dupplicate Article');
	        return false;
	    } elseif( intval($data['id']) > 0 ) {
	        $data['modified'] = date("Y-m-d H:i:s");
	        $id = $data['id']; unset($data['id']);
	        $this->db->where('id',$id)->update($this->table,$data);
	        return $id;
	    } else {
	        $this->db->insert($this->table,$data);
	        return $this->db->insert_id();
	    }


	}


	function check_exist($alias,$id,$category=0){
	    if( !is_numeric($category) ){
	        $category = 0;
	    }
	    if( !is_numeric($id) ){
	        $id = 0;
	    }
	    $this->db->where('alias',$alias)
	    ->where("category = $category")
	    ->where('id <>',$id);
	    $result = $this->db->get($this->table);
        //bug($this->db->last_query());
	    return ( $result->num_rows() > 0) ? true : false;
	}
}