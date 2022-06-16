<?php

class AnnonceController
{
	public function getAllAnnonce()
	{
		$Annonce = AnnonceModel::getAll();
		return $Annonce;
	}

	public function addAnnonce()
	{
		if (isset($_POST['addAnnonce'])) {
			$data = array(
                'id_Annonce' => $_POST['id_Annonce'],
				'Usernname' => $_POST['Username'],
				'image' => $_POST['image'],
				'Subject' => $_POST['Subject'],
				'tele' => $_POST['tele'],
				'Message' => $_POST['Message'],
				
			);

			AnnonceModel::add($data);
		}
	}

	public function deleteAnnonce()
	{
		if (isset($_POST['delete'])) {
			$data['id_Annonce'] = $_POST['id_Annonce'];
			$result = AnnonceModel::delete($data);
			if ($result === 'ok') {
				header('Location:dashboard');
			}
		}
	}

	public function updateAnnonce()
	{
		if (isset($_POST['updateAnnonce'])) {
			$data = array(
				'id_Annonce' => $_POST['id_Annonce'],
				'Username' => $_POST['Username'],
				'image' => $_POST['image'],
				'Subject' => $_POST['Subject'],
				'tele' => $_POST['tele'],
				'Message' => $_POST['Message'],
			
			);
			$result = AnnonceModel::update($data);
			if ($result === 'ok') {
				header('location:dashboard');
			}
		}
	}

	public function getOneId()
	{
		if (isset($_POST['id_Annonce'])) {
			$result = AnnonceModel::getOne($_POST['id_Annonce']);
			return $result;
		}
	}

	// public function getOneCategorie()
	// {
	// 		$result = AnnonceModel::getCategorie($_GET['url']);
	// 		return $result;
	// }
}
