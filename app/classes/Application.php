<?php
namespace App\classes;

use App\classes\Database;

class Application
{
    public function getAllPublishedBlogInfo() {
        $sql = "SELECT * FROM blog WHERE status = 1 ";
        if(mysqli_query(Database::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;
        } else {
            die('Query problem'.mysqli_error(Database::dbConnection()));
        }
    }

    public function getBlogInfoById($id){
        $sql="SELECT * FROM blog WHERE id=$id";
        if(mysqli_query(Database::dbConnection(),$sql)){
            $result=mysqli_query(Database::dbConnection(),$sql);
            return $result;
        }
        else{die('Query problem. '.mysqli_error(Database::dbConnection()));
        }
    }
}