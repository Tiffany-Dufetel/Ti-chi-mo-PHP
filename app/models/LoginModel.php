<?php



class LoginModel
{

    /* Propriétés */
    protected $id;
    protected $email;
    protected $password;
    protected $dbh;



    public function __construct($id,$email,$password,$dbh)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->dbh = $dbh;
    }


    public function get($property)
    {
        if ($property !== "dbh") {
            return $this->$property;
        }
    }

    /**
     * Set
     */
    public function set($property, $value)
    {
        if ($property !== "dbh") {
            $this->$property = $value;
        }
    }


 
    static public function connexion($dbh, $id, $email,$password)
    {
        $dbh = database::createDBConnection();
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        $query = $dbh->prepare("SELECT * FROM utilisateurs WHERE mail = ?"); 
        $query->execute([$email]);
    
        $results = $query->fetchAll(); //var_dump($results); echo $results[0]["mdp"];

    }


}