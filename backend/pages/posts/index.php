<header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        <i class="fa fa-pencil"></i> Posts</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Action -->
    <!-- <section id="acttion" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-primary">Search</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- POSTS -->
    <section id="posts">
        <div class="container py-4">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header mb-3">
                            <h4>Latest Posts</h4>
                        </div>
                        <table id="example" class="table table-hover table-striped dt-responsive" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Post_ID</th>
                                    <th>POST_TITLE</th>
                                    <th>POST_DESC</th>
                                    <th>POST_CREATED</th>
                                    <th>POST_UPDATED</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query_posts = "SELECT * FROM tb_posts ORDER BY post_id DESC";
                                $result_posts = $mysqli->query($query_posts);
                                while ($row = mysqli_fetch_array($result_posts, MYSQLI_ASSOC)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['post_id'];?></td>
                                    <td><?php echo $row['post_title'];?></td>
                                    <td><?php echo $row['post_desc'];?></td>
                                    <td><?php echo $row['post_created_at'];?></td>
                                    <td><?php echo $row['post_updated_at'];?></td>
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
            </div>
        </div>
    </section>

    