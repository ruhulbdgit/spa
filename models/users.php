<?php

class users {

    /**
     * Add user method 
     * 
     */
    public function add() {
       
        $firstName = _post("firstName");
        $lastName = _post("lastName");
        $email = _post("email");
        $password = _post("password");
        $registrationDate = date("Y-m-d H:i:s");

        $sql = "INSERT INTO spa_users (firstName, lastName, email, password,registerDate,status) VALUES ('$firstName', '$lastName', '$email', '$password', '$registrationDate',1)";
        
        $result = mysqli_query(dbconnect(), $sql);
        // get last inserted id
        $lastInsertedId = mysqli_insert_id(dbconnect());
      
        // return last insert id 
        return $lastInsertedId;
    }
    /**
     * List user method
     */
    public function list() {
        $sql = "SELECT * FROM spa_users";
        $result = mysqli_query(dbconnect(), $sql);
        $users = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
        return $users;
    }
    /**
     * Select a single users from database 
     */
    public function select($id) {
        $sql = "SELECT * FROM spa_users WHERE id=$id";
        $result = mysqli_query(dbconnect(), $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }
    
}