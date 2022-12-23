<?php
class homeController{
    // public function __construct()
    // {
    //     echo "Hello Everyone";
        
    // }
    public function home(){
        echo "<h1>This is home</h1>";
    }
    public function about(){
        echo "<h1>This is about</h1>";
    }
}
$abc=new homeController();