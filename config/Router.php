<?php

class Routeur
{

    public function __construct(){

    }
    
    public function handleRequest(array $get) : void
    {
        $controller = new UserController();
        
        if(isset($get["route"]) && $get["route"] === "show_user")
        {   
           // $controller -> show();
        }
        
        else if(isset($get["route"])&& $get["route"] === "create_user")
        {
           // $controller -> create();
        }
        
        else if(isset($get["route"])&& $get["route"] === "check_create_user")
        {
           // $controller -> checkCreate();
        }        


        else if(isset($get["route"])&& $get["route"] === "update_user")
        {
           // $controller -> update();
        }           
        

        else if(isset($get["route"])&& $get["route"] === "check_update_user")
        {
           // $controller -> checkUpdate();
        }   
        
        else if(isset($get["route"])&& $get["route"] === "delete_user")
        {
           // $controller -> delete();
        }   
        
        else 
        {
           // $controller -> list();
        }
    }
}