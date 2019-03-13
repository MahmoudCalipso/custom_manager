
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Falgun - Metro Style Bootstrap Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Panel Template">
    <meta name="author" content="Westilian: Kamrujaman Shohel">
    <!-- styles -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/jquery.gritter.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.css">

    <link href="../css/tablecloth.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    <!--fav and touch icons -->
    <link rel="shortcut icon" href="../ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../ico/apple-touch-icon-57-precomposed.png">
    <!--============ javascript ===========-->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-ui-1.10.1.custom.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery.sparkline.js"></script>
    <script src="../js/bootstrap-fileupload.js"></script>
    <script src="../js/jquery.metadata.js"></script>
    <script src="../js/jquery.tablesorter.min.js"></script>
    <script src="../js/jquery.tablecloth.js"></script>
    <script src="../js/jquery.flot.js"></script>
    <script src="../js/jquery.flot.selection.js"></script>
    <script src="../js/excanvas.js"></script>
    <script src="../js/jquery.flot.pie.js"></script>
    <script src="../js/jquery.flot.stack.js"></script>
    <script src="../js/jquery.flot.time.js"></script>
    <script src="../js/jquery.flot.tooltip.js"></script>
    <script src="../js/jquery.flot.resize.js"></script>
    <script src="../js/jquery.collapsible.js"></script>
    <script src="../js/accordion.nav.js"></script>
    <script src="../js/jquery.gritter.js"></script>
    <script src="../js/tiny_mce/jquery.tinymce.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/respond.min.js"></script>
    <script src="../js/ios-orientationchange-fix.js"></script>

</head>
<body>
@section('navbar')
<div class="layout">
    <!-- Navbar -->
    <div class="navbar navbar-inverse top-nav">
        <div class="navbar-inner">
            <div class="container">
                <span class="home-link"><a href="index.html" class="icon-home"></a></span><a class="brand" href="./index.html"><img src="../images/logo-falgun.png" width="103" height="50" alt="Falgun"></a>
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


</div>
@show


