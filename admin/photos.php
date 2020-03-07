<?php include("includes/header.php"); ?>
<?php if(!$session->is_signed_in()){redirect("login.php");} ?>
<?php
$photos = Photo::find_all();

?>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php include("includes/top_nav.php");?>
            
            
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
   <?php include("includes/side_nav.php");?>
           
           
           
           
            <!-- /.navbar-collapse -->
        </nav>

       
       
       
       
        <div id="page-wrapper">
  <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Photos
                            <small>Subheading</small>
                        </h1>
   <div class="col-md-12">
   <table class="table table-hover">
   <thead>
   <tr>
   <th>Photo</th>
   <th>Id</th>
   <th>File Name</th>
   <th>Title</th>
   <th>Size</th>
   <th>Comments</th>
   </tr>
   </thead>
   <tbody>
   <?php foreach($photos as $photo) : ?>
   <tr>
   <td><img class="admin-photo-thumbnail" src="<?php echo $photo->picture_path();?>" alt="">
   <div class="action_links">
   <a href="delete_photo.php?id=<?php echo $photo->id;?>">Delete</a>
   <a href="edit_photos.php?id=<?php echo $photo->id;?>">Edit</a>
   <a href="../photo.php?id=<?php echo $photo->id;?>">View</a>
   
   
   
   </div>
   
   
   </td>
   <td><?php echo $photo->id;?></td>
   <td><?php echo $photo->filename;?></td>
   <td><?php echo $photo->title;?></td>
   <td><?php echo $photo->size;?></td>
   <td>
   <a href="comment_photo.php?id=<?php echo $photo->id;?>">
   <?php
   $comments = Comment::find_the_comment($photo->id);

   echo count($comments);
   ?>
   </a>
   </td>
   </tr>
<?php endforeach;?>
   </tbody>
   </table><!--end of table-->
   
   
   
   </div>



                        <!--<ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>-->
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>