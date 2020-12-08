<?php

class Tes extends CI_Controller {
	public function index()
	{
		$data = [
			"kode_kategori" => "ini data",
			"nama_kategori" => "Nama nya ya"
        ];

        echo json_encode($data);
	}
}
