<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <li><a class="sidebar-brand d-flex align-items-center justify-content-center" href="/LiturgicalCalendar">
                <div class="sidebar-brand-text mx-3">Catholic Liturgical Calendar</div>
            </a></li>

        <!-- Divider -->
        <li>
            <hr class="sidebar-divider my-0" />
        </li>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/LiturgicalCalendar">
                <i class="fas fa-fw fa-cross"></i>
                <span>Home</span></a>
        </li>

        <!-- Divider -->
        <li>
            <hr class="sidebar-divider" />
        </li>

        <!-- Heading -->
        <li>
            <div class="sidebar-heading">
                Scripts
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="LitCalEngine.php">
                <i class="fas fa-fw fa-folder"></i>
                <span>API endpoint</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="dist/">
                <i class="fas fa-fw fa-folder"></i>
                <span>Swagger / Open API Docs</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="easter.php">
                <i class="fas fa-fw fa-folder"></i>
                <span>Date of Easter</span></a>
        </li>

        <!-- Divider -->
        <li>
            <hr class="sidebar-divider" />
        </li>

        <!-- Heading -->
        <li>
            <div class="sidebar-heading">
                Examples
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="examples/php/">
                <i class="fas fa-fw fa-folder"></i>
                <span>PHP + cURL</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="examples/javascript/">
                <i class="fas fa-fw fa-folder"></i>
                <span>HTML + AJAX</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="examples/fullcalendar/examples/month-view.html">
                <i class="fas fa-fw fa-folder"></i>
                <span>Full Calendar</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="examples/fullcalendar/examples/messages.html">
                <i class="fas fa-fw fa-folder"></i>
                <span>Full Calendar (messages first)</span></a>
        </li>

        <!-- Divider -->
        <li>
            <hr class="sidebar-divider d-none d-md-block" />
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <li>
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </li>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav">
                    <li class="nav-item active" href="#" id="topNavBar_API"><a class="nav-link">API</a></li>
                    <li class="nav-item" id="topNavBar_Usage"><a class="nav-link" href="#">Usage</a></li>
                    <li class="nav-item" id="topNavBar_Extending"><a class="nav-link" href="#">Extending the API</a></li>
                </ul>                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <!-- this should contain the value of the currently selected language, based on a cookie -->
                        <a class="nav-link dropdown-toggle" href="#" id="langChoicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          English
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="langChoicesDropdown" id="langChoicesDropdownItems">
                          <a class="dropdown-item" id="langChoiceEnglish" href="#">English</a>
                          <a class="dropdown-item" id="langChoiceFrench" href="#">French</a>
                          <a class="dropdown-item" id="langChoiceGerman" href="#">German</a>
                          <a class="dropdown-item" id="langChoiceItalian" href="#">Italian</a>
                          <a class="dropdown-item" id="langChoiceLatin" href="#">Latin</a>
                          <a class="dropdown-item" id="langChoicePortuguese" href="#">Portuguese</a>
                          <a class="dropdown-item" id="langChoiceSpanish" href="#">Spanish</a>
                        </div>
                      </li>
                </ul>

                <a class="btn btn-transparent-dark mr-2"
                    href="https://github.com/JohnRDOrazio/LiturgicalCalendar" target="_blank"
                    title="Fork me on GitHub">
                    <i class="fab fa-github"></i>
                </a>
            </nav>
            <div class="container-fluid">
