<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_masuk_m extends CI_Model
{

    private $_table = "surat_masuk";

    public function getAll()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->_table)->result_array();
    }

    public function countAll()
    {
        return $this->db->count_all($this->_table);
    }

    public function rules()
    {
        $this->form_validation->set_rules('no_indeks', 'Nomor indeks', 'trim|required');
        $this->form_validation->set_rules('no_urut', 'Nomor urut', 'trim|required');
        $this->form_validation->set_rules('tgl_terima', 'Tanggal terima', 'trim|required');
        $this->form_validation->set_rules('perihal', 'Perihal', 'trim|required');
        $this->form_validation->set_rules('asal_surat', 'Asal surat', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
    }

    public function editRules()
    {
        return [
            [
                'field' => 'no_indeks',
                'label' => 'Nomor indeks',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'no_urut',
                'label' => 'Nomor urut',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'tgl_terima',
                'label' => 'Tanggal terima',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'perihal',
                'label' => 'Perihal',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'asal_surat',
                'label' => 'Asal surat',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'keterangan',
                'label' => 'Keterangan',
                'rules' => 'trim|required'
            ],
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row_array();
    }

    public function save()
    {
        $no_indeks = $this->input->post('no_indeks', true);
        $no_urut = $this->input->post('no_urut', true);
        $tgl_terima = $this->input->post('tgl_terima', true);
        $perihal = $this->input->post('perihal', true);
        $asal_surat = $this->input->post('asal_surat', true);
        $keterangan = $this->input->post('keterangan', true);

        $data = [
            'no_indeks' => $no_indeks,
            'no_urut' => $no_urut,
            'tgl_terima' => $tgl_terima,
            'perihal' => $perihal,
            'asal_surat' => $asal_surat,
            'keterangan' => $keterangan
        ];
        $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        $id = $this->input->post('id', true);
        $no_indeks = $this->input->post('no_indeks', true);
        $no_urut = $this->input->post('no_urut', true);
        $tgl_terima = $this->input->post('tgl_terima', true);
        $perihal = $this->input->post('perihal', true);
        $asal_surat = $this->input->post('asal_surat', true);
        $keterangan = $this->input->post('keterangan', true);

        $data = [
            'no_indeks' => $no_indeks,
            'no_urut' => $no_urut,
            'tgl_terima' => $tgl_terima,
            'perihal' => $perihal,
            'asal_surat' => $asal_surat,
            'keterangan' => $keterangan
        ];
        $this->db->update($this->_table, $data, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id' => $id));
    }
}
