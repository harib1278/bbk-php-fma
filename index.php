<?php require_once('models/database.class.php'); ?>
<?php require_once('config/config.php'); ?>
<?php require_once('controllers/common.php'); ?>
<?php require_once('controllers/queries.php'); ?>
<?php


?>

<?php require_once('templates/head.php'); ?>

<?php require_once('templates/header.php'); ?>



<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">W1 Music</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">   
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> W1 Music! <b class="caret"></b></a>                    
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="artists.php "><i class="fa fa-fw fa-music"></i> Artists</a>
                    </li>
                    <li>
                        <a href="songs.php "><i class="fa fa-fw fa-microphone"></i> Songs</a>
                    </li> 
                                 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <i>PHP TMA Homepage - &copy; Thomas Shaddock 2017</i>
                        </h1>
                        <div id="numerical-title">
                            <h4>Number of Artists and Songs in the database:</h4> 
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6 col-md-6">

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-music fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php //get the totals, doing this as two seperate foreach loops instead of a foreach inside a foreach gave me a lower complexity time and was more efficent
                                            foreach($artistWithSongs['NameTotal'] as $NameTotal){
                                                echo $NameTotal['NameTotal'];
                                            }
                                            ?>                                            
                                        </div>
                                        <div>Artists in the system</div>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-microphone fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php
                                            foreach($artistWithSongs['SongTotal'] as $SongTotal){   
                                                echo $SongTotal['SongTotal'];
                                            }
                                            ?>
                                        </div>
                                        <div>Songs in the system</div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>                   
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Summary of all the Artists and Songs from the database:</h3>
                            </div>
                            <div class="panel-body">
                               <table class="table table-striped table-responsive table-hover">
                                    <thead>
                                        <tr>
                                            <th>Artist</th>
                                            <th>Songs</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <?php                         
                                            //make a table from the common query dataset
                                            foreach($artistWithSongs as $artist){ ?> 
                                                <tr>
                                                <?php
                                                    if(isset($artist['Name'])){ 
                                                        ?><td><?php echo $artist['Name'];?></td><?php
                                                    }                                        
                                                    //some artists dont have songs therefore we dont want to try and print undefined fields
                                                    if(isset($artist['SongTitle'])){
                                                        ?><td><?php echo $artist['SongTitle'];?></td><?php
                                                    }
                                                ?>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>
                        </div>                
                    </div>
                </div>
               
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
