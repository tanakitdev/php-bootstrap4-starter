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
                <div class="card-header">
                    <h4>Latest Posts</h4>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Date Posted</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Post One</td>
                            <td>Web Development</td>
                            <td>July 12, 2017</td>
                            <td>
                                <a href="index.php?page=posts/view" class="btn btn-secondary">
                                    <i class="fa fa-angle-double-right"></i> Details
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Post Two</td>
                            <td>Tech Gadgets</td>
                            <td>July 12, 2017</td>
                            <td>
                                <a href="index.php?page=posts/view" class="btn btn-secondary">
                                    <i class="fa fa-angle-double-right"></i> Details
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Post Three</td>
                            <td>Business</td>
                            <td>July 12, 2017</td>
                            <td>
                                <a href="index.php?page=posts/view" class="btn btn-secondary">
                                    <i class="fa fa-angle-double-right"></i> Details
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <td>Post Four</td>
                            <td>Health & Wellness</td>
                            <td>July 12, 2017</td>
                            <td>
                                <a href="index.php?page=posts/view" class="btn btn-secondary">
                                    <i class="fa fa-angle-double-right"></i> Details
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">5</td>
                            <td>Post Five</td>
                            <td>Web Development</td>
                            <td>July 12, 2017</td>
                            <td>
                                <a href="index.php?page=posts/view" class="btn btn-secondary">
                                    <i class="fa fa-angle-double-right"></i> Details
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center bg-primary text-white mb-3">
                <div class="card-body">
                    <h3>Posts</h3>
                    <h1 class="display-4">
                        <i class="fa fa-pencil"></i> 5
                    </h1>
                    <a href="index.php?page=posts/index" class="btn btn-outline-light btn-sm">View</a href="#">
                </div>
            </div>
            <div class="card text-center bg-success text-white mb-3">
                <div class="card-body">
                    <h3>Category</h3>
                    <h1 class="display-4">
                        <i class="fa fa-pencil"></i> 4
                    </h1>
                    <a href="index.php?page=categories/index" class="btn btn-outline-light btn-sm">View</a href="#">
                </div>
            </div>
            <div class="card text-center bg-warning text-white mb-3">
                <div class="card-body">
                    <h3>Users</h3>
                    <h1 class="display-4">
                        <i class="fa fa-pencil"></i> 2
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
            <button class="btn btn-primary" >Save Changes</button>
        </div>
    </div>
</div>
</div>

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
                    <input type="text" class="form-control">
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

