<?php
$post_id = $_GET['post_id'];
$query_post = "SELECT * FROM tb_posts WHERE post_id='$post_id'";
$result_post = $mysqli->query($query_post);
$data =mysqli_fetch_assoc($result_post);
?>
<header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><?php echo $data['post_title'];?></h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Action -->
    <section id="acttion" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mr-auto">
                    <a href="index.php" class="btn btn-light btn-block">
                        <i class="fa fa-arrow-left"></i> Back To Dashboard
                    </a>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success btn-block" form="edit_post_form"><i class="fa fa-check"></i> Save Changes</button>
                </div>
                <div class="col-md-3">
                    <a href="posts/controller.php?action=delete_post&post_id=<?php echo $data['post_id'];?>" class="btn btn-danger btn-block">
                        <i class="fa fa-remove"></i> Delete Post
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- DETAILS -->
    <section id="details">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Post</h4>
                        </div>
                        <div class="card-body">
                            <form id="edit_post_form" action="posts/controller.php?action=edit_post&edit_id=<?php echo $data['post_id'];?>" method="post">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="post_title" class="form-control" value="<?php echo $data['post_title'];?>">
                                </div>
                               
                                <div class="form-group">
                                    <label for="post_desc">Description</label>
                                    <textarea name="post_desc" class="form-control"><?php echo $data['post_desc'];?></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>