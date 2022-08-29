<!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-md navbar-dark bg-primary-customise">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <span class="d-inline-block align-top">Img</span>
        <span class="menu-collapsed">Ali Tahesh</span>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#top">Profile <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#top">Logout</a>
            </li>
            <!-- This menu is hidden in bigger devices with d-sm-none. 
           The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens  -->
            <li class="nav-item dropdown d-sm-block d-md-none">
                <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Menu </a>
                <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                    <a class="dropdown-item" href="#top">hjsahgjsa</a>
                    <a class="dropdown-item" href="#top">Profile</a>
                </div>
            </li><!-- Smaller devices menu END -->
        </ul>
    </div>
</nav><!-- NavBar END -->
<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Menu with submenu -->
            <a href={{route('home')}} class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-home fa-fw mr-3">
                    </span>
                    <span class="menu-collapsed">Home</span>
                </div>
            </a>

            <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-address-book fa-fw mr-3 "></span>
                    <span class="menu-collapsed">Transactions</span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu3' class="collapse sidebar-submenu">
                <a href={{route('transaction')}} class="list-group-item list-group-item-action text-white">
                    <span class="menu-collapsed">All Transactions</span>
                </a>
            </div>
              <div id='submenu3' class="collapse sidebar-submenu">
                <a href={{route('add-transaction')}} class="list-group-item list-group-item-action text-white">
                    <span class="menu-collapsed">Add Transaction</span>
                </a>
            </div>
           
 
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-address-book fa-fw mr-3 "></span>
                    <span class="menu-collapsed">Clients</span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action text-white">
                    <span class="menu-collapsed">All Clients</span>
                </a>
            </div>
              <div id='submenu2' class="collapse sidebar-submenu">
                <a href={{route('add-client')}} class="list-group-item list-group-item-action text-white">
                    <span class="menu-collapsed">Add Client</span>
                </a>
            </div>
           
            <a href="#top" data-toggle="sidebar-colapse" class="list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed">Hide</span>
                </div>
            </a>
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->
    <!-- MAIN -->
    

      <div class="col p-4">
        
        @yield('content')
        
    </div>

   
</div>