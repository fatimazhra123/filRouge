<?php
class contactController
{

    public function getAllcontact()
    {

        $contact = contact::getAll();
        return $contact;
    }

    public function addContact()
    {
        if (isset($_POST['submit'])) {
                $data = array(
                    'name' => $_POST['name'],
                    'telephone' => $_POST['telephone'],
                    'adresse' => $_POST['adresse'],
                    'email' => $_POST['email'],
                    'Message' => $_POST['Message'],
                );
          contact::add($data);
             
               
           
        }
    }
}


