<?php
  $dataProf = new  ProfController();
  $nbrProfs =$dataProf->CountAllProfs();
  $dataEtd=new √©tudiantsController();
  $nbrEtds =$dataEtd->CountAllEtds();
  $dataPrnt=new  AnnonceController();
  $nbrAnnonce =$dataAnnonce->CountAllAnnonce();
 