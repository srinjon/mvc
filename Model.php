<?php
include './Book.php';
class Model{
    public function getbookdetails(){
        return array(
            "abc"=>new Book("abc book","Srinjon Sadhukhan","Scifi book"),
            "xyz"=>new Book("xyz book","John Khan","Classic book"),
        );
    }
    public function getBook($title){
        $allbooks=$this->getbookdetails();
        return $allbooks['$title'];
    }
}