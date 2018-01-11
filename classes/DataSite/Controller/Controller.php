<?php

namespace DataSite\Controller;

use DataSite\Model\Comments;
use DataSite\Model\Users;

 class Controller
 {

     private $comments;
     private $users;

     public function __construct()
     {
         $this->comments = new Comments();
         $this->users = new Users();
     }

     public function authenticateUser($username, $password)
     {
         $this->users->authenticateUser($username, $password);
     }

     public function addComment($username, $comment, $type)
     {
         $this->comments->addComment($username, $comment, $type);
     }

     public function deleteComment($id)
     {
         $this->comments->deleteComment($id);
     }

     public function getAllComments($type)
     {
         return $this->comments->getAllComments($type);
     }

 }
