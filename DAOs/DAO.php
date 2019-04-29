<?php



 abstract class DAO
 {

     public $db;
     private static $single;


     function __construct()
     {

         $this->connectToDB('root','','mysql:host=localhost;dbname=u1753777');

     }

     function connectToDB($user, $pass, $database)
     {
         $this->db = new PDO($database, $user, $pass);

     }

     function closeDB()
     {
         $this->db = null;
     }


     public function getTableData($value, $field = NULL)
     {
         $query = $this->db->query("SELECT * FROM {$this->tableName} WHERE {$field} = '{$value}'");

         while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
             $rows = $row;
         }

         return $rows;


     }

     function getAllTableData()
     {
         $query = $this->db->query("SELECT * FROM {$this->tableName}");

         while ($row = $query->fetchall(PDO::FETCH_ASSOC)) {
             $rows = $row;
         }

         return $rows;
     }


 }






        /*$sql = "SELECT * FROM `fss_person`, `fss_customer` WHERE personemail=?; AND custid = personid";
        $stmt = mysqli_stmt_init($this->connectToDB());

        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }

        else {

            mysqli_stmt_bind_param($stmt,"s",$personemail);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);


            if ($row = mysqli_fetch_assoc()) {
                $passwordCheck = password_verify($password, $row['custpassword']);
                if ($passwordCheck==false) {
                    header("Location: ../login.php?error=wrongPassword");
                    exit();
                }
                else if ($passwordCheck==true) {
                    session_start();
                    $_SESSION['personid'] = $row['personid'];
                    $_SESSION['personname'] = $row['personname'];

                    header ("Location: ../login.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../login.php?error=wrongPassword");
                    exit();
                }
            }

            else {
                header("Location: ../login.php?error=noUser");
                exit();
            }
        }*/



