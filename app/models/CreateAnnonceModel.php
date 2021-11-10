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
class CreateAnnonceModel
{

    /* Propriétés */
    protected $id;
    protected $id_utilisateurs;
    protected $title;
    protected $modele;
    protected $marque;
    protected $date_fin;
    protected $description;
    protected $puissance;
    protected $annee;
    protected $prix_depart;
    protected $status;
    protected $dbh;


    /**
     * Constructeur
     */
    public function __construct($id, $id_utilisateurs, $title, $modele, $marque, $date_fin, $description, $puissance,$annee, $prix_depart, $status, $dbh)
    {
        /* Nettoyage des données */
        $this->id = $id;
        $this->id_utilisateurs = $id_utilisateurs;
        $this->title = filter_var($title, FILTER_SANITIZE_STRING);
        $this->modele = filter_var($modele, FILTER_SANITIZE_STRING);
        $this->marque = filter_var($marque, FILTER_SANITIZE_STRING);
        $this->date_fin = filter_var($date_fin, FILTER_SANITIZE_STRING);
        $this->description = filter_var($description, FILTER_SANITIZE_STRING);
        $this->puissance = filter_var($puissance, FILTER_SANITIZE_STRING);
        $this->annee = filter_var($annee, FILTER_SANITIZE_STRING);
        $this->prix_depart = filter_var($prix_depart, FILTER_SANITIZE_STRING);
        $this->status = $status;
        $this->dbh = $dbh;
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


    /**
     * Insertion dans la base de données
     */
    public function insert()
    {
        $query = $this->dbh->prepare("INSERT INTO annonces (id_utilisateurs,title,modele,marque,date_fin,description,puissance,annee,prix_depart,status) VALUES (?,?,?,?,?,?,?,?,?,?)");
        return $query->execute([$this->id_utilisateurs, $this->title, $this->modele, $this->marque, $this->date_fin, $this->description, $this->puissance, $this->annee, $this->prix_depart, $this->status]);
    }


    /**
     * Récupération de contact par email
     */
    public static function fetchAllAnnonces($dbh)
    {

        $query = $dbh->prepare("SELECT * FROM annonces");
        $query->execute() ;
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        $annonces = [];

        foreach ($results as $result) {
            array_push($annonces, new CreateAnnonceModel(
                $result['id'],
                $result['id_utilisateurs'], 
                $result['title'], 
                $result['modele'], 
                $result['marque'],
                $result['date_fin'], 
                $result['description'], 
                $result['puissance'],
                $result['annee'],
                $result['prix_depart'],
                $result['status'],
                $dbh));
        }

        return $annonces;
    }
}
