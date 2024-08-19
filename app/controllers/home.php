<?php

Class Home extends Controller
{
  function index()
  {
    
    $DB = new Database();
    
    //$data['result'] = $DB->read("Select * from images");
   
    //$data['page_body'] = "We like programming  everyday";
    // show($data[0]->image);// The way we can access to object
    //show($DB->read("Select * from images"));
    //$image_class = $this->loadModel("image_class");
    $data['page_title'] = "Home";
    $this->view("minima/index", $data);
  }

  
}

  



