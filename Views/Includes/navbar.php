<section class="navbar fixed-top ">
    <div class=" container-fluid">

        <div class="nvb d-flex md-1 ">
            <img src="Views/Assets/image/ccours_supplémentaires-removebg-preview.png" alt="" style="width:66px;">
            <i class="fa-solid fa-bars humberguer text-dark ms-1"></i>
            <form class="input-icons " style=" align-items:start; color:black;border:black">
                <i class="fa-solid fa-magnifying-glass icon"></i>
                <input class="input-field search form-control w-100 me-2 rounded-pill justify-self-start text-" type="search" placeholder="Search" aria-label="Search">
                
            </form>
        </div>

        
       

      
    <ul class="navbar-nav d-flex align-items-center  justify-content-between  ">
        
		    <div class="d-flex flex-row ">
            <li class="nav-item"><button class="btn bnt-hover  border-dark d-flex align-items-center text-dark mt-0"><a href="Deconnexion" class="text-dark"><i class="fas fa-sign-out"></i> <h6>Se déconnecter</h6></a></button></li>
            <li class="nav-item">
		    <button href="#" class="btn bnt-hover d-flex align-items-center text-dark mt-0"><h4><span></h4> </span></button>
            <li class="nav-item row" ><button class="btn bnt-hover  border-dark d-flex align-items-center text-dark mt-0"><a href="admin" class="text-dark">  <a  href="admin"> <h6>Admin</h6> </a><h6><?php  echo $_SESSION['Username']; ?></h6><img src="Views/Assets/image/businesswoman.png" alt="image" style="width:55px;height:45px"></button></li>

	     	</li> 


               

		       
		    </div>
		   
		
    </ul>
</section>