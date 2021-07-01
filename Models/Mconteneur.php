<?php

namespace App\Models;

use CodeIgniter\Model;

class Mconteneur extends Model
{
  protected $table = 'competition';
  protected $primaryKey = 'ID';
  protected $returnType = 'array';

  public function getAll()
  {
    $requete = $this->select('ID, Nom, Date');
   //return $requete->findAll();
    return $requete->paginate(10);
  }
  public function  getAllWithPager()
  {
  }

  public function getDetail($prmId)
  {
    $requete = $this->select('ID, Nom, Date, ')
      ->join('photo', 'competition.competitionID = photo.ID', 'left')
      ->where(['competition.ID' => $prmId]);
    return $requete->findAll();
  }

  public function getSearchWithPager($searchText)
  {
    $requete = $this->select('ID, Nom ')
      ->like(['Nom' => $searchText]);
    return $requete->paginate(10);
  }

  public function getSearch($searchText)
  {
    $requete = $this->select('ID, Nom ')
      ->like(['Nom' => $searchText]);
    return $requete->findAll();
  }

  public function getAllByIdTournee($prmIdTournee)
  {
    return $this->select('ID, Nom')
      ->where(['competition.competitionID' => $prmIdTournee])
      ->findAll();
  }

 
}
