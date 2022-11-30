<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>MLM Admin panel</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="{{asset('/admin/js/all.min.js')}}"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{asset('/admin/css/portal.css')}}">


</head> 

<body class="app">   	
    <header class="app-header fixed-top">	   	            
       
        <div id="app-sidepanel" class="app-sidepanel"> 
	        <div id="sidepanel-drop" class="sidepanel-drop"></div>
	        <div class="sidepanel-inner d-flex flex-column">
		        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
		        <div class="app-branding">
		            <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"><span class="logo-text">PORTAL</span></a>
	
		        </div><!--//app-branding-->  
		        
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
					   
					  
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link active" href="/administrator/users">
		                         <span class="nav-link-text">Users</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->

					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="/administrator/news">
		                         <span class="nav-link-text">News</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->	
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="/administrator/settings">
		                         <span class="nav-link-text">Settings</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->					   
					  
					   			    
				    </ul><!--//app-menu-->
			    </nav><!--//app-nav-->

		       
	        </div><!--//sidepanel-inner-->
	    </div><!--//app-sidepanel-->
    </header><!--//app-header-->

@yield('content')

 <footer class="app-footer">
		    

	    </footer><!--//app-footer-->
	    
    </div><!--//app-wrapper-->    					


    <!-- Page Specific JS -->
    <script src="{{asset('/admin/js/app.js')}}"></script> 

</body>
</html> 
