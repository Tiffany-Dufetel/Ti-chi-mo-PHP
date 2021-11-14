<?php

/**
 * models/contact.php - Modèle Contact
 * Cette classe modélise une entrée de la table contact de la base de donnée.
 */


/* Alias */
//use PDO;


/**
 * Modèle Contact
 */
class ListeEnchereModel
{

    /* Propriétés */
    protected $id;
    protected $dbh;
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $mdp;
    protected $mise;
    protected $date;


    /**
     * Constructeur
     */
    public function __construct(
        $id, 
        $dbh,
        $nom,
        $prenom,
        $mail,
        $mdp,
        $mise,
        $date)
    {
        /* Nettoyage des données */
        $this->id = $id;
        $this->dbh = $dbh;
        $this->nom = filter_var($nom, FILTER_SANITIZE_STRING);
        $this->prenom = filter_var($prenom, FILTER_SANITIZE_STRING);
        $this->mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
        $this->mdp = $mdp;
        $this->mise= filter_var($mise, FILTER_SANITIZE_NUMBER_FLOAT);
        $this->date = $date;
    }

    /**
     * Get
     */
    public function __get($property)
    {
        if ($property !== "dbh") {
            return $this->$property;
        }
    }

    /**
     * Set
     */
    public function __set($property, $value)
    {
        if ($property !== "dbh") {
            $this->$property = $value;
        }
    }




    public static function fetchByidAnnonce($dbh,$id){
        $query = $dbh->prepare(
            "SELECT u.*, e.* FROM utilisateurs u 
            INNER JOIN enchere e ON u.id = e.id_utilisateurs WHERE e.id_annonces =$id ORDER BY mise DESC");
        $query->execute();
        $results = $query ->fetchAll(PDO::FETCH_ASSOC);


                    
        $encheres = [];
        foreach ($results as $result) {
            array_push($encheres,new ListeEnchereModel(
                $result['id'],
                $dbh,
                $result['nom'],
                $result['prenom'],
                $result['mail'],
                $result['mdp'],
                $result['mise'],
                $result['date']));
        }

        return $encheres;
    }


}
