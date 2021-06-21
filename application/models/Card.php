<?php 

	/**
	 * 
	 */
	class Card extends CI_Model
	{
		function get_produk($limit, $start){
			$query = $this->db->get('tbl_produk', $limit, $start);
        return $query;
		}
	}

 ?>