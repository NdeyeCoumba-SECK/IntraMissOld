<?php
namespace GM\ProjetBundle\Service;
use Doctrine\DBAL\Driver\Connection;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Requete
 *
 * @author a618095
 */
class Requete {
    //put your code here
    
    private $connexion;
    public function __construct(Connection $connection)
    {
        $this->connexion = $connection;
    }
    
    
    public function getCollaborateurLibres($id){
        $rq = "SELECT id, user FROM collaborateur "
                . "WHERE id NOT IN "
                . "(SELECT collaborateur_id FROM projet_collaborateur WHERE projet_id = :id)";
        $statement = $this->connexion->prepare($rq);
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetchAll();
    }
    
}
