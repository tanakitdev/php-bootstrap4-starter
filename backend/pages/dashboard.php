<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    <i class="fa fa-gear"></i> Dashboard</h1>
            </div>
        </div>
    </div>
</header>

<!-- Action -->
<section id="acttion" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModal">
                    <i class="fa fa-plus"></i> Add Post
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModal">
                    <i class="fa fa-plus"></i> Add Category
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addUserModal">
                    <i class="fa fa-plus"></i> Add User
                </a>
            </div>
        </div>
    </div>
</section>

<!-- POSTS -->
<section id="posts">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header mb-3">
                        <h4>Latest Posts</h4>
                    </div>
                    <table id="example" class="table table-hover table-striped dt-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10%">Post_ID</th>
                                <th>POST_TITLE</th>
                                <th>POST_DESC</th>
                                <th>POST_CREATED</th>
                                <th>POST_UPDATED</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    $query_posts = "SELECT * FROM tb_posts  ORDER BY post_id DESC";
                    $result_posts = $mysqli->query($query_posts);
                    while ($row = mysqli_fetch_array($result_posts, MYSQLI_ASSOC)) {
                    ?>
                                <tr>
                                    <td>
                                        <?php echo $row['post_id'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['post_title'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['post_desc'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['post_created_at'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['post_updated_at'];?>
                                    </td>
                                    <td>
                                        <a href="index.php?page=posts/view&post_id=<?php echo $row['post_id'];?>" class="btn btn-secondary">
                                            <i class="fa fa-angle-double-right"></i> Details
                                        </a>
                                    </td>
                                </tr>
                                <?php
                    }
                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center bg-primary text-white mb-3">
                    <div class="card-body">
                        <h3>Posts</h3>
                        <?php
                        $count_post = "SELECT count(*) as total FROM tb_posts";
                        $result_post = $mysqli->query($count_post);
                        $post = mysqli_fetch_assoc($result_post);
                        ?>
                        <h1 class="display-4">
                            <i class="fa fa-pencil"></i> <?php echo $post['total'];?>
                        </h1>
                        <a href="index.php?page=posts/index" class="btn btn-outline-light btn-sm">View</a href="#">
                    </div>
                </div>
                <div class="card text-center bg-success text-white mb-3">
                    <div class="card-body">
                        <h3>Category</h3>
                        <h1 class="display-4">
                            <i class="fa fa-folder"></i> 4
                        </h1>
                        <a href="index.php?page=categories/index" class="btn btn-outline-light btn-sm">View</a href="#">
                    </div>
                </div>
                <div class="card text-center bg-warning text-white mb-3">
                    <div class="card-body">
                        <h3>Users</h3>
                        <h1 class="display-4">
                            <i class="fa fa-user"></i> 2
                        </h1>
                        <a href="index.php?page=users/index" class="btn btn-outline-light btn-sm">View</a href="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- POST MODAL -->
<div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Add Post</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <form action="posts/controller.php?action=create_post" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="post_title">Title</label>
                        <input type="text" name="post_title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="post_desc">Description</label>
                        <textarea name="post_desc" class="form-control" required>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fuga cumque illo. Eos, expedita ad!</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- <div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Add Post</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="output.php" method="get">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control">
                            <option value="">Web Development</option>
                            <option value="">Tech Gadgets</option>
                            <option value="">Business</option>
                            <option value="">Health & Wellness</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="file">Image Upload</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="editor1" class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>
</div> -->

<!-- CATEGORY MODAL -->
<div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Add Category</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-success" data-dismiss="modal">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<!-- USER MODAL -->
<div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title">Add User</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-warning" data-dismiss="modal">Save Changes</button>
            </div>
        </div>
    </div>
</div>