<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Falgun - Metro Style Bootstrap Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Admin Panel Template">
<meta name="author" content="Westilian: Kamrujaman Shohel">
<!-- styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/jquery.gritter.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.css">

<link href="css/tablecloth.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<!--fav and touch icons -->
<link rel="shortcut icon" href="ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
<!--============ javascript ===========-->
<script src="js/jquery.js"></script>
<script src="js/jquery-ui-1.10.1.custom.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.sparkline.js"></script>
<script src="js/bootstrap-fileupload.js"></script>
<script src="js/jquery.metadata.js"></script>
<script src="js/jquery.tablesorter.min.js"></script>
<script src="js/jquery.tablecloth.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/jquery.flot.selection.js"></script>
<script src="js/excanvas.js"></script>
<script src="js/jquery.flot.pie.js"></script>
<script src="js/jquery.flot.stack.js"></script>
<script src="js/jquery.flot.time.js"></script>
<script src="js/jquery.flot.tooltip.js"></script>
<script src="js/jquery.flot.resize.js"></script>
<script src="js/jquery.collapsible.js"></script>
<script src="js/accordion.nav.js"></script>
<script src="js/jquery.gritter.js"></script>
<script src="js/tiny_mce/jquery.tinymce.js"></script>
<script src="js/custom.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/ios-orientationchange-fix.js"></script>

</head>
<body>
    @section('sidebar')
    <div class="layout">
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse top-nav">
        <div class="navbar-inner">
            <div class="container">
                <span class="home-link"><a href="index.html" class="icon-home"></a></span><a class="brand" href="./index.html"><img src="images/logo-falgun.png" width="103" height="50" alt="Falgun"></a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-th-large"></i> Annuaire <b class="icon-angle-down"></b></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="research_contact.html"><i class="icon-list-alt"></i> Recherche un contact </a></li>
                                <li><a href="nv_ficheClient.html"><i class="icon-th"></i> Nouvelle fiche Client </a></li>
                                <li><a href="nv_ficheFournisseur.html"><i class="icon-ok-circle"></i> Nouvelle fiche Fournisseur</a></li>
                                <li><a href="nv_ficheContact.html"><i class="icon-external-link"></i> Nouvelle fiche Contact </a></li>
                            </ul>
                        </div>
                        </li>
                        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-beaker"></i> Catalogue <b class="icon-angle-down"></b></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="tables.html"><i class="icon-table"></i> Rechercher un article</a></li>
                                <li><a href="table-cloth.html"><i class="icon-table"></i> Nouvelle fiche article</a></li>
                                <li><a href="data-tables.html"><i class=" icon-th"></i> Modifier un article </a></li>
                                
                            </ul>
                        </div>
                        </li>
                        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-list-alt"></i> Ventes <b class="icon-angle-down"></b></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="vente_rech_doc.html"><i class=" icon-list-alt"></i> Rechercher un document</a></li>
                                <li><a href="vente_sv_devis.html"><i class=" icon-th-large"></i> Suivi des devis</a></li>
                                <li><a href="vente_relance_dev.html"><i class=" icon-th-large"></i> Relance de devis </a></li>
                                <li><a href="vente_sv_cmd.html"><i class=" icon-th-large"></i> Suivi des commandes</a></li>
                                <li><a href="vente_nv_dev.html"><i class=" icon-th-large"></i> Nouveau devis</a></li>
                                <li><a href="vente_nv_cmd.html"><i class=" icon-th-large"></i> Nouvelle commande</a></li>
                                <li><a href="vente_nv_bnlive.html"><i class=" icon-th-large"></i> Nouvelle Bon de livraison</a></li>
                                <li><a href="vente_nv_fact.html"><i class=" icon-th-large"></i> Nouvelle facture</a></li>
                            </ul>
                        </div>
                        </li>
                        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-file-alt"></i> Achats <b class="icon-angle-down"></b></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="achat_doc.html"><i class=" icon-file-alt"></i> Rechercher un document</a></li>
                                <li><a href="achat_cmd.html"><i class=" icon-file-alt"></i> Commande en cours</a></li>
                                <li><a href="achat_nv_devis.html"><i class=" icon-th-large"></i> Nouveau devis</a></li>
                                <li><a href="achat_nv_cmd.html"><i class=" icon-th-large"></i> Nouvelle commande</a></li>
                                <li><a href="achat_nv_recep.html"><i class=" icon-th-large"></i> Nouveau Bon de Reception</a></li>
                                <li><a href="achat_nv_facture.html"><i class=" icon-th-large"></i> Nouvelle facture</a></li>        
                            </ul>
                        </div>
                        </li>
                        <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-money"></i> Caissement  <b class="icon-angle-down"></b></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="Caissement.html"><i class="icon-bar-chart"></i> Caissement </a></li>
                                <li><a href="Cloture_caisse.html"><i class="icon-google-plus-sign"></i> Cloture de Caisse</a></li>
                            </ul>
                        </div>
                        </li>
                    </ul>
                </div>
                <div class="btn-toolbar pull-right notification-nav">
                    <div class="btn-group">
                        <div class="dropdown">
                            <a class="btn btn-notification"><i class="icon-lock"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- left_bar operation -->
        <div class="leftbar leftbar-close clearfix">
        <div class="admin-info clearfix">
            <div class="admin-thumb">
                <i class="icon-user"></i>
            </div>
            <div class="admin-meta">
                <ul>
                    @if (Route::has('login'))
                    @auth
                    <li class="admin-username"></li>
                    <li><a href="{{ route('/') }}">Edit Profile</a></li>
                    <li><a href="{{route('auth.logout')}}"> Logout</a></li>
                    @else
                       <li><a href="{{ route('auth.login') }}"> Login </a></li>
                    @if (Route::has('register'))
                     <li><a href="{{ route('auth.register') }}"> Registre </a></li>
                    @endif
                    @endauth
                    @endif
                    
                    
                </ul>
            </div>
        </div>
        <div class="left-nav clearfix">
            <div class="left-primary-nav">
                <ul id="myTab">
                    <li class="active"><a href="#main" class="icon-desktop" title="Dashboard"></a></li>
                    <li><a href="#forms" class="icon-th-large" title="Forms"></a></li>
                    <li><a href="#features" class="icon-beaker" title="Features"></a></li>
                    <li><a href="#ui-elements" class="icon-list-alt" title="UI&nbsp;Elements"></a></li>
                    <li><a href="#pages" class="icon-file-alt" title="Pages"></a></li>
                    <li><a href="#chart" class="icon-bar-chart" title="Chart"></a></li>
                </ul>
                <ul>
                    <li><a href="chat.html" class="icon-comments" title="Chat"></a></li>
                    <li><a href="text-editor.html" class="icon-pencil" title="WYSIWYG editor"></a></li>
                </ul>
            </div>
            <div class="responsive-leftbar">
                <i class="icon-list"></i>
            </div>
            <div class="left-secondary-nav tab-content">
                <div class="tab-pane active" id="main">
                    <h4 class="side-head">Dashboard</h4>
                    <div class="search-box">
                        <div class="input-append input-icon">
                            <input class="search-input" placeholder="Search..." type="text">
                            <i class=" icon-search"></i>
                            <button class="btn" type="button">Go!</button>
                        </div>
                    </div>
                    <ul class="metro-sidenav clearfix">
                        <li><span class="notify-tip">30</span><a href="#" class="brown"><i class="icon-user"></i><span>User</span></a></li>
                        <li><a href="#" class="orange"><i class="icon-cogs"></i><span>Settings</span></a></li>
                        <li><a href="#" class=" blue-violate"><i class="icon-lightbulb"></i><span>Support</span></a></li>
                        <li><a href="#" class=" magenta"><i class="icon-bar-chart"></i><span>Statistics</span></a></li>
                        <li><a href="#" class="green"><i class="icon-shopping-cart"></i><span>Orders</span></a></li>
                        <li><a href="#" class=" bondi-blue"><i class="icon-time"></i><span>Events</span></a></li>
                        <li><a href="#" class=" dark-yellow"><i class="icon-file-alt"></i><span>Post</span></a></li>
                        <li><a href="#" class=" blue"><i class="icon-copy"></i><span>Documents</span></a></li>
                    </ul>
                
                </div>
                <div class="tab-pane" id="forms">
                    <h4 class="side-head">Forms</h4>
                    <ul id="nav" class="accordion-nav">
                        <li><a href="form-elements.html"><i class="icon-list-alt"></i> Form Elements <span class="notify-tip">50</span></a></li>
                        <li><a href="form-components.html"><i class="icon-th"></i> Form Components </a></li>
                        <li><a href="form-validation.html"><i class="icon-ok-circle"></i> Form Validation<span>Quisque commodo lectus sit amet sem </span></a></li>
                        <li><a href="form-wizard.html"><i class="icon-external-link"></i> Wizard </a></li>
                        <li><a href="text-editor.html"><i class="icon-pencil"></i> WYSIWYG editor <span>Quisque commodo lectus sit amet sem </span></a></li>
                    </ul>
                </div>
                <div class="tab-pane" id="features">
                    <h4 class="side-head">Features</h4>
                    <ul class="accordion-nav">
                        <li><a href="tables.html"><i class="icon-table"></i> Basic Tables</a></li>
                        <li><a href="table-cloth.html"><i class="icon-table"></i> Tables-Theme</a></li>
                        <li><a href="data-tables.html"><i class=" icon-th"></i> Data Tables</a></li>
                        <li><a href="grid.html"><i class=" icon-columns"></i> Grid</a></li>
                        <li><a href="typography.html"><i class=" icon-font"></i> Typography</a></li>
                        <li><a href="calendar.html"><i class=" icon-calendar"></i> Calendar</a></li>
                        <li><a href="file-manager.html"><i class=" icon-folder-open"></i> File Manager</a></li>
                    </ul>
                </div>
                <div class="tab-pane" id="ui-elements">
                    <h4 class="side-head">UI Elements</h4>
                    <ul class="accordion-nav">
                        <li><a href="components-widgets.html"><i class=" icon-list-alt"></i> UI Components</a></li>
                        <li><a href="buttons-icons.html"><i class=" icon-th-large"></i> Buttons &amp; Icons</a></li>
                    </ul>
                </div>
                <div class="tab-pane" id="pages">
                    <h4 class="side-head">Pages</h4>
                    <ul class="accordion-nav">
                        <li><a href="#"><i class="icon-minus-sign"></i> Error Pages</a>
                        <ul>
                            <li><a href="page-403.html"><i class=" icon-file-alt"></i> 403 Error Page</a></li>
                            <li><a href="page-404.html"><i class=" icon-file-alt"></i> 404 Error Page</a></li>
                            <li><a href="page-405.html"><i class=" icon-file-alt"></i> 405 Error Page</a></li>
                            <li><a href="page-500.html"><i class=" icon-file-alt"></i> 500 Error Page</a></li>
                            <li><a href="page-503.html"><i class=" icon-file-alt"></i> 503 Error Page</a></li>
                        </ul>
                        
                    </ul>
                </div>
            
            </div>
        </div>
    </div>
      @show