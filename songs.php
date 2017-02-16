<?php require_once('templates/head.php'); ?>
<?php require_once('templates/header.php'); ?>
<?php require_once('controllers/songs.php'); ?>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Songs
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-microphone"></i> Songs
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Summary of artists and song durations:</h3>
            </div>
            <div class="panel-body">
                 <table class="table table-striped table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>Artist</th>
                            <th>Songs</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <?php                         
                            //make a table from the common query dataset
                            foreach($songsDuration as $song){ ?> 
                                <tr>
                                <?php
                                    if(isset($song['ArtistName'])){ 
                                        ?><td><?php echo $song['ArtistName'];?></td><?php
                                    }                                        
                                    //some artists dont have songs therefore we dont want to try and print undefined fields
                                    if(isset($song['Title'])){
                                        ?><td><?php echo $song['Title'];?></td><?php
                                    }

                                    if(isset($song['Duration'])){
                                        ?><td><?php echo $song['Duration'];?></td><?php
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

<?php require_once('templates/footer.php'); ?>