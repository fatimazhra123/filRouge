<?php

class UsersController{

    public function getAllUsers(){
        $users = Users::getAll();
        return $users;
    }


    public function signUp()
	{
		if (isset($_POST['submit'])) {
  
			$data = array(
				'Username' => $_POST['Username'],
				'Email' => $_POST['Email'],
				'Password' => $_POST['Password'],
				'confirm_passw' => $_POST['confirm_passw'],
				'role' => 'client'
			);
			$result =  Users::createUser($data);
			if ($result === 'ok') {
                header ("location:SignIn");
            
			} else {
				echo $result;
			}
		}
	}




    public function checkUser($email,$mot){
        $inputEmail = FormValidation::emailValidation($email);
        $inputPassword = FormValidation::passwordValidation($mot);
        if($inputEmail == true && $inputPassword == true){
            $Log = Users::getOne($email,$mot);
            if(is_array( $Log)){


			
                $_SESSION['logged'] = true;
			
				$_SESSION['Username'] = $Log['Username'];
				$_SESSION['Email'] = $Log['Email'];
				$_SESSION['Password'] = $Log['Password'];
				$_SESSION['confirm_passw'] = $Log['confirm_passw'];

                if ( $Log['role'] === 'admin') {
					$_SESSION['role'] = 'admin';
                    
                    header ("location:dashboard");
				}else if( $Log['role'] === 'prof') {
					$_SESSION['role'] = 'prof';
                    header ("location:Annonce");
				}
				else {
					$_SESSION['role'] = 'client';
                    header ("location:AnnonceStud");
				}
				
			} else {
				session_name()::set('error', 'Email ou mot de passe incorrect');
                header ("location:SignIn");
                
			
			}
		}
	}
	static public function logout(){
		session_destroy();
	}
}






  




