<?php

Class Contact extends Controller
{
  function index()
  {
    $data['page_title'] = "about";
    $this->view("minima/contact", $data);
  }

}