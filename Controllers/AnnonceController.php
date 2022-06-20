<?php

class AnnonceController
{
	public function getAllAnnonce()
	{
		$annonce = AnnonceModel::getAll();
		return $annonce;
	}

	public function add()
	{
		if (isset($_POST['submit'])) {
			$data = array(
               
				'Username' => $_POST['Username'],
				'image' => $_FILES['image']['name'],
				'Subject' => $_POST['Subject'],
				'tele' => $_POST['tele'],
				'Message' => $_POST['Message'],
				
			);

			AnnonceModel::add($data);
			move_uploaded_file($_FILES['image']['tmp_name'],'Views/Assets/image/'.$_FILES['image']['name']);
			
		}
		if (isset($_POST['submit'])) {

			$_SESSION['logged'] = true;
			
			$_SESSION['Username'] = $data['Username'];
			$_SESSION['image'] = $data['image'];
			$_SESSION['Subject'] = $data['Subject'];
			$_SESSION['tele'] = $data['tele'];
			$_SESSION['Message'] = $data['Message'];
			
	}
	}
	public function deleteAnnonce()
	{
		if (isset($_POST['delete'])) {
			$data['id_Annonce'] = $_POST['id_Annonce'];
			$result = AnnonceModel::delete('id_Annonce');
			if ($result === 'ok') {
				header('Location:admin');
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

	public function getOneAnnonce()
	{
			$Annonce = AnnonceModel::getAnnonce($_GET['url']);
			return $Annonce;
	}
}
