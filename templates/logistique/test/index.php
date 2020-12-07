<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pv de Réception</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/adminlte.min.css">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <script src="assets/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/adminlte.min.css">
        <link rel="stylesheet" href="../../../public/assets/fontawesome-free/css/all.min.css ">
        <script src="assets/jquery.min.js"></script>
    </head>
    <body>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Accuiel</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Recherche" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                            class="fas fa-th-large"></i></a>
            </li>
        </ul>
    </nav>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ path ('logistique') }}" class="brand-link text-center">
            <i class="fas fa-people-carry text-muted"><br>
                <span class="brand-text font-weight-light">MWANGEJI <br/> LOGISTIQUE</span>
            </i>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('dist/img/identity.jpeg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Hkap Insoftware</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ path ('logistique') }}" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Accueil
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ path ('materiels') }}" class="nav-link">
                            <i class="nav-icon fas fa-tools"></i>
                            <p>
                                Gestion des Materiels
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ path ('stock') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Gestion des stocks
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                Réquisition
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ path ("globale") }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Réquisition Globale</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ path ("partielle") }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Réquisition partielle</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                Pv Reception
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ path ("proces") }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Création PV</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ path ("afficheProces") }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gérer PV</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ path ('affectation') }}" class="nav-link">
                            <i class="nav-icon fas fa-donate"></i>
                            <p>
                                Affectation Matériels
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ path ('fournisseurs') }}" class="nav-link">
                            <i class="nav-icon fas fa-people-carry"></i>
                            <p>
                                Gestion Fournisseurs
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                Inventaire
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ path ("inventaire_global") }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inventaire Globale</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ path ("inventaire_partiel") }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inventaire partielle</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="tab-content" id="custom-content-below-tabContent">
                    <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel">
                        <h4 class="heading-small text-lg-center mb-4"><i class="fas fa-briefcase-medicale text-muted">Gestion des Materiels de l'Hopital</i></h4>
                        <div class="shadow">

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>