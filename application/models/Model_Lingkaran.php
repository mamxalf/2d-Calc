<?php


class Model_Lingkaran extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('lingkaran')->result();
    }

    public function save()
    {
        $jari = $this->input->post('jari');
        $data =[
            'diameter' => $this->input->post('diameter', true),
            'jari' => $this->input->post('jari', true),
            'keliling' => 2*pi()*$jari,
            'luas' => pi()*$jari*$jari
        ];
        $this->db->insert('lingkaran', $data);
    }

    public function hitungJumlah()
    {
        $query = $this->db->get('lingkaran');
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
        $this->db->delete('lingkaran');
    }

    public function getDataById($id)
    {
        return $this->db->get_where('lingkaran', ['id' => $id])->row();
    }

    public function put($id)
    {
        $jari = $this->input->post('jari');
        $data =[
            'diameter' => $this->input->post('diameter', true),
            'jari' => $this->input->post('jari', true),
            'keliling' => 2*pi()*$jari,
            'luas' => pi()*$jari*$jari
        ];
        
        $this->db->where('id', $id);
        $this->db->update('lingkaran', $data);
    }
}