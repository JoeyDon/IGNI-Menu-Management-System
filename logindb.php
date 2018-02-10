<?php 

class USER
{
    private $db;
 
    function __construct($dbo)
    {
      $this->db = $dbo;
    }

    public function login($Username,$Password)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM login WHERE Username=:Username");
          $stmt->execute(array(':Username'=>$Username));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          $hash = password_hash($userRow['Password'], PASSWORD_DEFAULT);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($Password, $hash))
             {
                $_SESSION['Username'] = $userRow['Username'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
   public function is_loggedin()
   {
      if(isset($_SESSION['Username']))
      {
         return true;
      }
   }

   public function redirect($url)
   {
       header("Location: $url");
   }
 
 
}


 ?>