<?php


class Model_Segitiga extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('segitiga')->result();
    }

    public function save()
    {
        $alas = $this->input->post('alas');
        $tinggi = $this->input->post('tinggi');
        $garing = $alas = $this->input->post('garis_miring');
        $data = [
            'alas' => $this->input->post('alas', true),
            'tinggi' => $this->input->post('tinggi', true),
            'garis_miring' => $this->input->post('garis_miring', true),
            'keliling' => $alas + $tinggi + $garing,
            'luas' => $alas * $tinggi / 2
        ];
        $this->db->insert('segitiga', $data);
    }

    public function hitungJumlah()
    {
        $query = $this->db->get('segitiga');
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
        $this->db->delete('segitiga');
    }

    public function getDataById($id)
    {
        return $this->db->get_where('segitiga', ['id' => $id])->row();
    }

    public function put($id)
    {
        $alas = $this->input->post('alas');
        $tinggi = $this->input->post('tinggi');
        $garing = $alas = $this->input->post('garis_miring');
        $data = [
            'id' => $id,
            'alas' => $this->input->post('alas', true),
            'tinggi' => $this->input->post('tinggi', true),
            'garis_miring' => $this->input->post('garis_miring', true),
            'keliling' => $alas + $tinggi + $garing,
            'luas' => $alas * $tinggi / 2
        ];
        
        $this->db->where('id', $id);
        $this->db->update('segitiga', $data);
    }
}