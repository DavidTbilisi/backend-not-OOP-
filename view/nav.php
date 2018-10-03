<div class="page-content">
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="dashboard"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="edit"><i class="glyphicon glyphicon-calendar"></i> Editable </a></li>
                    <li class="submenu">
                        <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                        </a>
                        <!-- Sub menu -->
                        <ul>
                            <?php if ( isLogedin() ) :?>
                                <li><a href="logout">Logout</a></li>
                                <li><a href="profile">Profile</a></li>
                            <?php else: ?>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>


        <div class="col-md-10">