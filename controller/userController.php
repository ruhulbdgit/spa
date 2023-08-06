<?php

class userController
{

   public function add()
   {
        // count $_post variable to see submitted data  
            if(count($_POST) > 0){
                 // create users model object 
                $userModel = new users();
                // call add method
                $lastInsertedId = $userModel->add();
               // check if last inserted id is greater than 0
                    if($lastInsertedId > 0){
                         // redirect to user list page
                         header("Location: ?page=user&todo=list");
                    }        
            }
            else {
               loadMainView("user.add");
            }
   }

   public function edit()
   {
      
        loadMainView("user.edit");
   }
   /**
    * list user method
    */
     public function list()
     {
            // create users model object 
           // $userModel = new users();
            // call list method
            //$users = $userModel->list();
            // load view file 
            loadMainView("user.list");
     }

}