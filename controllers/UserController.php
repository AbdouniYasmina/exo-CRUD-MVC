<?php

class UserController
{
    
    public function show() : void
    {

        $route = "show_user";
        require "templates/layout.phtml";

    }
    
    
    
    public function create() : void
    {

        $route = "create_user";
        require "templates/layout.phtml";

    }
    
    public function checkCreate()
    {
 
 
    }
    
    
    public function update() : void
    {

        $route = "update_user";
        require "templates/layout.phtml";

    }
    
    public function delete()
    {

    }
    
    public function list() : void
    {

        require "templates/layout.phtml";

    }
    
    public function home() : void 
    {
        $route = "home";
        require "templates/layout.phtml";
    }
    
}