<?php defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
    private $table = 'users';

    public $id;

    public $nik;

    public $nama_lengkap;

    public $jenis_kelamin;

    public $tanggal_lahir;

    public $alamat_lengkap;


    public function rules()
    {
        return [
            [
                'field' => 'nik',
                'label' => 'NIK',
                'rules' => 'required'
            ],

            [
                'field' => 'nama_lengkap',
                'label' => 'Nama Lengkap',
                'rules' => 'required'
            ],

            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'required'
            ],

            [
                'field' => 'tanggal_lahir',
                'label' => 'Tanggal Lahir',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat_lengkap',
                'label' => 'Alamat Lengkap',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nik = $post["nik"];
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->alamat_lengkap = $post["alamat_lengkap"];
        $this->db->insert($this->table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nik = $post["nik"];
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->alamat_lengkap = $post["alamat_lengkap"];
        $this->db->update($this->table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
}
