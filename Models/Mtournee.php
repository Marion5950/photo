<?php
namespace App\Models;
use CodeIgniter\Model;

class Mtournee extends Model
{
 protected $table = 'photo';
 protected $primaryKey = 'ID';
 protected $returnType = 'array';

 public function getAllByIdCompet($prmIdCompetition)
 {
     $requete = $this->select('photo.ID, Titre,Classement,concurrent.Nom,Prenom,Pays')
     ->join('concurrent','photo.concurrentID=concurrent.ID', 'left')
     ->where(['photo.competitionID'=>$prmIdCompetition])
     ->orderby('Classement','asc');
     return $requete->findAll();
 }  

}
