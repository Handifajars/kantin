<?php

class routingtes extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
    }
    public function tes($handi)
    {
        echo $handi;
    }
}
?>