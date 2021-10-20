<?php
class Cdatabase
{
    /*
    Lorsqu'on déclare un attribut privé, pour l'utiliser dans les méthodes ci-dessous, il faut obligatoirement faire $this
    exemple : 
    private $test;

    function __construct(){
        $this->$test = 'a';
    }
    */
    //Attributs privés
    private $nomBaseDeDonnees;
    private $utilisateur;
    private $motDePasse;
    private $adresseHote;
    private $pdo;

    //Méthodes publiques 
    public function __construct($pAdresseHote, $pUtilisateur, $pMotDePasse, $pNomBaseDeDonnees)
    {
        //On associe les valeurs des paramètres de la méthode à leurs alter ego dans les attributs privés, pour pouvoir les utiliser ensuite dans toute la classe
        $this->nomBaseDeDonnees = $pNomBaseDeDonnees;
        $this->utilisateur = $pUtilisateur;
        $this->motDePasse = $pMotDePasse;
        $this->adresseHote = $pAdresseHote;
    }
    private function connection()
    {
        try {
            $bdd = new mysqli($this->adresseHote, $this->utilisateur, $this->motDePasse, $this->nomBaseDeDonnees);
            return $bdd;
        } catch (Exception $e) {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
            exit();
        }
    }

    public function recupererDonneesBdd(){
        $this->connection();
    }
}
