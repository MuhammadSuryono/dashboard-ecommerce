<?php

class My_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public $parseData = [
        'navbar' => 'parts/navbar',
        'sidebar' => 'parts/sidebar',
        'modal' => 'parts/modal',
        'content' => 'errors/error',
        'footer' => 'parts/footer',

        'title_budge' => 'Not Found!',
        'title_tab' => 'Not Found!'
    ];
}
