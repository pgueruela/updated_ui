<?php 
require 'includes/header.php';
 ?>
<span class="border-right"></span>
 <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div id="dismiss">
                    <i class="far fa-times-circle"></i>
                </div>

                <div class="sidebar-header">
                    <h3>Sidebar</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>Folder</p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Home 1</a></li>
                            <li><a href="#">Home 2</a></li>
                            <li><a href="#">Home 3</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </nav>

                 <!-- Control Buttons -->
            <div id="cb-container">
                <div class="container-fluid">
                    <h2>Control Buttons</h2>
                    <p></p>
                </div>
            </div>

            <!-- 3D Object Model -->
            <div id="model">
                <div class="container-fluid">
                    <h2>3D Model</h2>
                </div>
            </div>
        </div>
        </div>



        <div class="overlay"></div>


        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

       
    </body>
</html>