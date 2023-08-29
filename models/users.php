<?php

class users
{

    /**
     * Add user method 
     * 
     */
    public function add()
    {

        $firstName = _post("firstName");
        $lastName = _post("lastName");
        $email = _post("email");
        $password = _post("password");
        $registrationDate = date("Y-m-d H:i:s");

        $sql = "INSERT INTO spa_users (firstName, lastName, email, password,registerDate,status) VALUES ('$firstName', '$lastName', '$email', '$password', '$registrationDate',1)";


        $result = mysqli_query(dbconnect(), $sql);

        //$result = mysqli_query(dbconnect(), $sql);
        // get last inserted id
        return true;
    }
    /**
     * List user method
     */
    public function list()
    {
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
    public function select($id)
    {
        $sql = "SELECT * FROM spa_users WHERE id=$id";
        $result = mysqli_query(dbconnect(), $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }

    /**
     * get user by id
     * @param int $id
     */
    public function getById($id)
    {
        $sql = "SELECT * FROM spa_users WHERE id=$id";
        $result = mysqli_query(dbconnect(), $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }
    /**
     * update user method
     */
    public function update()
    {
        $id = _post("id");
        $firstName = _post("firstName");
        $lastName = _post("lastName");
        $email = _post("email");
        $password = _post("password");
        $sql = "UPDATE spa_users SET firstName='$firstName', lastName='$lastName', email='$email', password='$password' WHERE id=$id";
        $result = mysqli_query(dbconnect(), $sql);
        return $result;
    }
    /**
     * delete user methood 
     */
    public function delete($id)
    {
        $sql = "DELETE FROM spa_users WHERE id=$id";
        $result = mysqli_query(dbconnect(), $sql);
        return $result;
    }
}
