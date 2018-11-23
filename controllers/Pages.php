<?php

// namespace controllers;
use Core\Controller;
class Pages extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        echo "Hola desde index del Pages";
    }
}