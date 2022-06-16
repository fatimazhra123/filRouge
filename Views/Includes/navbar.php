<section class="navbar">
    <div class=" container-fluid">

        <div class="nvb d-flex md-1 ">
            <img src="Views/Assets/image/ccours_supplémentaires-removebg-preview.png" alt="" style="width:66px;">
            <i class="fa-solid fa-bars humberguer text-dark ms-3 align-self-end"></i>
        </div>

        <div style="display:flex; align-items:center justify-content-between">

            <form class="input-icons" style=" align-items:start; color:black">
                <i class="fa-solid fa-magnifying-glass icon"></i>
                <input class="input-field search form-control w-100 me-2 rounded-pill justify-self-start text-" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>

       

      
    <ul class="navbar-nav d-flex align-items-center  justify-content-between  ">
        
		    <div class="d-flex flex-row ">
            <li class="nav-item"><button class="btn bnt-hover d-flex align-items-center text-dark mt-0"><a href="Deconnexion" class="text-dark"><i class="fas fa-sign-out"></i> Se déconnecter</a></button></li>
            <li class="nav-item">
		    <button href="#" class="btn bnt-hover d-flex align-items-center text-dark mt-0"><h4><span><?php  echo $_SESSION['Username']; ?></h4> </span><i class='bx bxs-chevron-down'></i></button>
	     	</li> 


                <li> <img src="https://i.imgur.com/rvQ3LAt.jpg" class="rounded-circle" width="50"></li>

		       
		    </div>
		   
		
    </ul>
</section>