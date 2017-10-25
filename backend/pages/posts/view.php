<header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Post One</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Action -->
    <section id="acttion" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mr-auto">
                    <a href="index.php?page=posts/index" class="btn btn-light btn-block">
                        <i class="fa fa-arrow-left"></i> Back To Dashboard
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-success btn-block">
                        <i class="fa fa-check"></i> Save Changes
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-danger btn-block">
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
                            <form>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" value="Post One">
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
                                    <textarea name="editor1" class="form-control">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet eos in praesentium quasi, optio dolorem nesciunt ipsum deleniti cumque, aperiam perspiciatis soluta perferendis nostrum sit quis eligendi aliquid accusamus nihil.</textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>