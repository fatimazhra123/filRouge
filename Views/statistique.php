<?php
  $dataProf = new  ProfController();
  $nbrProfs =$dataProf->CountAllProfs();
  $dataEtd=new étudiantsController();
  $nbrEtds =$dataEtd->CountAllEtds();
  $dataPrnt=new  AnnonceController();
  $nbrAnnonce =$dataAnnonce->CountAllAnnonce();
 