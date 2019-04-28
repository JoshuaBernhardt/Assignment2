<?php



class DAO
{

    private $db;




    function __construct()
    {
        $servername = "localhost";
        $dBUsername ="root";
        $dBPassword ="";
        $dBName = "u1753777";




    }

    function connectToDB($servername,$dBUsername,$dBPassword,$dBName)
    {
        $this->db = new mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

        if (!$this->db) {
            die("Connection failed: ".mysqli_connect_error());
        }

    }


    public function getTableData($selectValue, $value,$field=NULL)
    {
        $query = "SELECT {$selectValue} FROM {$this->tableName} where {$field} = '{$value}'";
        $stmt = mysqli_stmt_init($this->db);


    }

    public function loginSQL($personemail,$password)
    {
        $sql = "SELECT * FROM `fss_person`, `fss_customer` WHERE personemail=?; AND custid = personid";

        $stmt = mysqli_stmt_init($this->db);

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
        }


    }

    function getAllTableData()
    {
        $query = $this->db->query("SELECT * FROM {$this->tableName}");

        while ($row = $query->fetchall(PDO::FETCH_ASSOC))
        {
            $rows = $row;
        }

        return $rows;
    }
}
