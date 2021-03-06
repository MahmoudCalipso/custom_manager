@section('leftbar')
<div class="leftbar leftbar-close clearfix">
    <div class="admin-info clearfix">
        <div class="admin-thumb">
            <i class="icon-user"></i>
        </div>
        <div class="admin-meta">
            <ul>
                <li class="admin-username">Kamrujam Shohel</li>
                <li><a href="#">Edit Profile</a></li>
                <li><a href="#">View Profile </a><a href="#"><i class="icon-lock"></i> Logout</a></li>
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
                    </li>
                    <li><a href="login.html"><i class=" icon-unlock"></i> Login Page</a></li>
                    <li><a href="profile.html"><i class="icon-file"></i> Profile Page</a></li>
                    <li><a href="search-page.html"><i class="icon-file"></i> Search Page</a></li>
                    <li><a href="invoice.html"><i class="icon-file"></i> Invoice Page</a></li>
                    <li><a href="gallery.html"><i class=" icon-picture"></i> Gallery</a></li>
                    <li><a href="pricing.html"><i class="icon-money"></i> Pricing Page</a></li>
                    <li><a href="chat.html"><i class="icon-comments"></i> Chat Page</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
    @show
