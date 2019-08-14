<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nhansu_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
    public function insertDataToMysql($ten, $tuoi, $sdt, $anhavatar, $linkfb, $gia)
    {
        $dulieu = array(
            'ten' => $ten , 
            'tuoi' =>$tuoi , 
            'sdt' => $sdt, 
            'anhavatar' => $anhavatar, 
            'linkfb' => $linkfb, 
            'gia' =>$gia 
    );
    
    $this->db->insert('nhan_vien', $dulieu);
    return $this->db->insert_id();
    
    
    }
    public function getAllData()
    {
        $this->db->select('*');
        $dulieu = $this->db->get('nhan_vien' );
        $dulieu = $dulieu->result_array();
        return $dulieu; 
    }
   
}

/* End of file  */
/* Location: ./application/models/ */