<?php



class ContactModel
{

    /* Propriétés */
    protected $id;
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $mdp;

    protected $dbh;



    public function __construct($id, $nom, $prenom, $mail, $mdp, $dbh)
    {
        $this->id = $id;
        $this->nom = filter_var($nom, FILTER_SANITIZE_STRING);
        $this->prenom = filter_var($prenom, FILTER_SANITIZE_STRING);
        $this->mail = filter_var($mail, FILTER_SANITIZE_STRING);
        $this->mdp = password_hash($mdp, PASSWORD_BCRYPT);

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


 
    public function insert()
    {

        $query = $this->dbh->prepare("INSERT INTO utilisateurs (nom, prenom, mail, mdp) VALUES (?,?,?,?)");
        return $query->execute([$this->nom, $this->prenom, $this->mail, $this->mdp]);
    }



   public static function fetchByEmail($mail, $dbh)
    {

        $mail = filter_var($mail, FILTER_SANITIZE_STRING);

        $query = $dbh->prepare("SELECT * FROM utilisateurs WHERE mail = ?");
        $results = $query->execute([$mail])->fetchAll(PDO::FETCH_ASSOC);

        $contacts = [];

        foreach ($results as $result) {
            array_push($contacts, new ContactModel($result['id'], $result['nom'], $result['prenom'], $result["mail"], $dbh));
        }

        return $contacts;
    }
}