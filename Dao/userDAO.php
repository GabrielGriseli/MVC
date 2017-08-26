<?php
    include '../Persistance/ConnectionDB.php';
    
class UserDAO{
    private $connection = null;
    
    public function __construct(){
        $this->connection = ConnectionDB::getInstance();
    }
    
    public function  insetUser($user){
        try {
            $status = $this->connection->prepare("Insert Into users, user, nome, sobrenome,"
                                                    . "idade, password, email)"
                                                    . "values:null,?,?,?,?,?,?)");
            
            $status->bindValue(1, $user->user);
            $status->bindValue(2, $user->nome);
            $status->bindValue(3, $user->sobrenome);
            $status->bindValue(4, $user->idade);
            $status->bindValue(5, $user->password);
            $status->bindValue(6, $user->email);
            
            $static->execute();
            
            $this->connection = null;
        } catch (Exception $ex) {
            echo "Ocorreram errso ao incerrir novo usuario";
        }
    }
}


?>

