<?php

class userController
{
     protected $userModel;

     public function __construct()
     {
          $this->userModel = new users();
     }

     public function add()
     {
          // count $_post variable to see submitted data  
          if (count($_POST) > 0) {
               // create users model object 

               // call add method
               $lastInsertedId = $this->userModel->add();

               // check if last inserted id is greater than 0
               if ($lastInsertedId) {
                    // redirect to user list page
                    header("Location: ?page=user&todo=list");
               }
          } else {
               loadMainView("user.add");
          }
     }

     public function edit()
     {

          $id = _get("id");
          // get user data by id
          if (count($_POST) > 0) {
               $this->userModel->update();
               header("Location: ?page=user&todo=list");
          }

          $user = $this->userModel->getById($id);

          loadMainView("user.edit", $user);
     }
     /**
      * list user method
      */
     public function list()
     {
          // create users model object 
          $userModel = new users();
          // call list method
          $users = $userModel->list();
          // load view file 
          loadMainView("user.list", $users);
     }
     public function delete()
     {
          loadMainView("index.php");
     }
}
