<?php

class ProfController
{
	public function getAllProf()
	{
		$prof = Prof::getAll();
		return $prof;
	}

	public function addProf()
	{
		if (isset($_POST['addProf'])) {
			$data = array(
				'full_name' => $_POST['full_name'],
				'gender' => $_POST['gender'],
				'classe' => $_POST['classe'],
				'matiere' => $_POST['matiere'],
				'phone' => $_POST['phone'],
			);
			$result = Prof::add($data);

			// if($result === 'ok'){
			// 	Session::set('success','Employé Ajouté');
			// 	Redirect::to('index');
			// }else{
			// 	echo $result;
			// }
		}
		if (isset($_POST['submit'])) {

			$_SESSION['logged'] = true;
			
		
			$_SESSION['gender'] = $data['gender'];
			$_SESSION['matiere'] = $data['matiere'];
	
			
	}
	}

	public function deleteProf()
	{
		if (isset($_POST['delete'])) {
			$data['id_prof'] = $_POST['id_prof'];
			$result = Prof::delete($data);
			if ($result === ' Etudiant has been Delete in the list') {
				header('Location:prof');
			}
		}
	}

	public function updateProf()
	{
		if (isset($_POST['updateProf'])) {
			$data = array(
				'id_prof' => $_POST['id_prof'],
				'full_name' => $_POST['full_name'],
				'gender' => $_POST['gender'],
				'classe' => $_POST['classe'],
				'matiere' => $_POST['matiere'],
				'phone' => $_POST['phone'],
			);
			$result = Prof::update($data);
			if($result === 'An Etudiant has been Update in the list'){
				header('location:prof');
			}
			// if ($result === 'ok') {
			// 	Session::set('success', 'Employé Modifié');
			// 	Redirect::to('home');
			// } else {
			// 	echo $result;
			// }
		}
	}
	public function getOneId(){
		if(isset($_POST['id_prof'])){
			$result = Prof::getOne($_POST['id_prof']);
			return $result;
		}
	}




    public function CountAllProfs(){  
        $prof = prof::CountAll();
        return $prof; 
    }
  
  
}
