<?php

class Model_Persegi extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('persegi')->result();
    }

    public function save()
    {
        $sisi = $this->input->post('sisi', true);
        $data = [
            'sisi' => $this->input->post('sisi', true),
            'keliling' => $sisi*4,
            'luas' => $sisi*$sisi
        ];
        $this->db->insert('persegi', $data);
    }

    public function hitungJumlah()
    {
        $query = $this->db->get('persegi');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }

    public function destroy($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('persegi');
    }

    public function getDataById($id)
    {
        return $this->db->get_where('persegi', ['id' => $id])->row();
    }

    public function put($id)
    {
        $sisi = $this->input->post('sisi', true);
        $data = [
            "id" => $id,
            "sisi" => $this->input->post('sisi', true),
            'keliling' => $sisi*4,
            'luas' => $sisi*$sisi
        ];
        
        $this->db->where('id', $id);
        $this->db->update('persegi', $data);
    }
}