<?php 

	/**
	 * 
	 */
	class Card extends CI_Model
	{
		function get_produk($limit, $start){
			$query = $this->db->get_where('tbl_produk', array('status' => 1), $limit, $start);
        return $query;
		}
	}

 ?>