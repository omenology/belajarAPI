<?php 

class Mahasiswa_model Extends CI_model{

	public function getMahasiswa($id = null){
		if($id == null){
			return $this->db->get('mahasiswa')->result_array();
		}else{
			return $this->db->get_where('mahasiswa',['id' => $id])->result_array();
		}
	}

	public function tambahData($data){
		$this->db->insert('mahasiswa',$data);
		return $this->db->affected_rows();
	}

	public function update($id,$data){
		$this->db->Where('id',$id);
		$this->db->update('mahasiswa',$data);
		return $this->db->affected_rows();
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('mahasiswa');
		return $this->db->affected_rows();
	}
} 