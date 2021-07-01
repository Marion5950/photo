<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Mconteneur;
use \CodeIgniter\Exceptions\PageNotFoundException;

class Cconteneur extends Controller
{
	public function index()
	{
		$model = new Mconteneur();
		$data['result'] = $model->getAll();
		$data['pager'] = $model->pager;



		$data['title'] = "Concours photographique";
		$data['heading'] = "Liste des compétions";

		$page['contenu'] = view('Conteneurs/v_liste_competions', $data);
		return view('Commun/v_template', $page);
	}

	public function detail($prmId = null)
	{
		if ($prmId != null) {
			$model = new Mconteneur();
			$data['result'] = $model->getDetail($prmId);
			if (count($data['result']) != 0) {
				$data['title'] = "Détail des compétitions";
				$data['heading'] = "Photo N° " . $prmId;

				$page['contenu'] = view('Conteneurs/v_detail_competition', $data);
				return view('Commun/v_template', $page);
			} else {
				throw PageNotFoundException::forPageNotFound("cette compétition n existe pas");
			}
		} else {
			throw PageNotFoundException::forPageNotFound("il faut choisir une autre compétition");
		}
	}


	public function search()
	{
	$searchText = $this->request->getGet('recherche');
	if ($searchText !="" ){
		$model = new Mconteneur();
	$data ['result'] = $model -> getSearchWithPager($searchText);
	$data['pager'] = $model -> pager;
	}else{
		$data['recherche_vide'] = true;
	}


	
	$data['searchText'] = $searchText ;
	$data ['title'] = "Les conteneurs";
	$data['heading'] = "La Liste des conteneurs";

		$page['contenu'] = view('Conteneurs/v_liste_competions', $data);
		return view('Commun/v_template', $page);

}
}