<?php require_once('templates/head.php'); ?>
<?php require_once('templates/header.php'); ?>        
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Home Page
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-home"></i> Home
            </li>
        </ol>
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

<?php require_once('templates/footer.php'); ?>