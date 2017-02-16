<?php require_once('templates/head.php'); ?>
<?php require_once('templates/header.php'); ?>
<?php require_once('controllers/artists.php'); ?>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Artists
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-music"></i> Artists
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-gears fa-fw"></i> Summary of artists and song count:</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-responsive table-hover">
                    <thead>
                        <tr>
                            <th>Artist</th>
                            <th>Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <?php                         
                            //make a table from the common query dataset
                            foreach($artistSongCount as $artist){ ?> 
                                <tr>
                                <?php
                                    if(isset($artist['Name'])){ 
                                        ?><td><?php echo $artist['Name'];?></td><?php
                                    }   
                                    if(isset($artist['Count'])){
                                        ?><td><?php echo $artist['Count'];?></td><?php
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