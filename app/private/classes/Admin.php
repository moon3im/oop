<?php 
namespace App;

require_once 'DatabaseObject.php';

use App\DatabaseObject;


use function App\private\dd;

Class Admin extends DatabaseObject {
    static protected $table_name ="admins";
    static protected $db_table_columns =['id','first_name','last_name','email','username','hashed_password'];
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $username    ;
    public $hashed_password;
    public $password;
    public $confirm_password ;

    // public function __construct($args=[]){
    //     $this->first_name = $args['first_name'];
    //     $this->last_name = $args['last_name'];
    //     $this->email = $args['email'];
    //     $this->username = $args['username'];
    //     $this->hashed_password = $args['hashed_password'];
    // }

    public function full_name(){
        return $this->first_name . ' ' . $this->last_name;
    }
    public static function create_admin($args=[]){
        
        $sql = "INSERT INTO admins SET ";
        $sql.="first_name = '" . $args['first_name'] . "', ";
        $sql.="last_name = '" . $args['last_name'] . "', ";
        $sql.="email = '" . $args['email'] . "', ";
        $sql.="username = '" . $args['username'] . "', ";
        $sql.="hashed_password='" . password_hash($args['hashed_password'],PASSWORD_BCRYPT) ."'";
        $result = self::$database->query($sql);

        
            return $result;
    }
    public  static function find_all_admins(){
        $sql ="SELECT  * FROM admins" ;
        return self::find_by_sql($sql);
    }
    public static function find_admin_by_id($id){   
        $sql = "SELECT * FROM admins WHERE id = ";
        $sql .= $id ;
        $sql .= " LIMIT 1 ";
        // dd($sql);
        $ob_array= self::find_by_sql($sql);
        if(!empty($ob_array)){
            return array_shift($ob_array);
        }else{
            return false ;
        }
    }   
    public static function update_admin($args=[]){
      
            $sql = "UPDATE admins SET ";
            $sql .= "first_name = '" . $args['first_name'] . "', ";
            $sql .= "last_name = '" . $args['last_name'] . "', ";
            $sql .= "email = '" . $args['email'] . "', "; 
            $sql .= "username = '" . $args['username'] . "', ";
            $sql .= "hashed_password = '" . $args['hashed_password'] . "' ";
            $sql .= " LIMIT 1";
            $result = self::$database->query($sql);
            if (!$result) {
                exit("DB Query Failed");
            }
            return $result;
    }
    public static function login($email, $password) {
        $email = self::$database->real_escape_string($email);
        $sql = "SELECT * FROM admins WHERE email = '$email' AND hashed_password ='$password' LIMIT 1";
        $result = self::$database->query($sql);

        if ($result) {
            $admin = $result->fetch_object();
        }

        return $admin;
    }

}  