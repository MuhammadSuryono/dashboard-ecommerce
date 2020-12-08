<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends My_Controller
{

    public function index()
    {
        $data = [
            [
                "id" => "1",
                "kode" => "3321",
                "nama" => "john"
            ],
            [
                "id" => "2",
                "kode" => "654",
                "nama" => "doe"
            ],
            [
                "id" => "3",
                "kode" => "3444",
                "nama" => "foo"
            ],
            [
                "id" => "4",
                "kode" => "353",
                "nama" => "bar"
            ]
        ];
        $this->parseData['title_budge'] = 'Category';
        $this->parseData['title_tab'] = 'Category';
        $this->parseData['content'] = 'content/category';
        $this->parseData['data'] = $data;
        $this->load->view('index', $this->parseData);
    }
}
