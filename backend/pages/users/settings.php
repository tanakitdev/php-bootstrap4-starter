<header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fa fa-gear"></i> Settings</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- ACTION -->
    <section id="action" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mr-auto">
                    <a href="index.php" class="btn btn-light btn-block">
                        <i class="fa fa-arrow-left"></i> Back To Dashboard
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-success btn-block">
                        <i class="fa fa-check"></i> Save Changes
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SETTINGS -->
    <section id="settings">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Settings</h4>
                        </div>
                        <div class="card-body">
                            <form>
                               <fieldset class="form-group">
                                   <legend>Allow User Registrations</legend>
                                   <div class="form-check">
                                       <label class="form-check-label">
                                           <input type="radio" class="form-check-input" value="yes" checked> Yes
                                       </label>
                                   </div>
                                   <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="no"> No
                                        </label>
                                    </div>
                               </fieldset>

                               <fieldset class="form-group">
                               <legend>Homepage Format</legend>
                               <div class="form-check">
                                   <label class="form-check-label">
                                       <input type="radio" class="form-check-input" value="post index" checked> Post Index
                                   </label>
                               </div>
                               <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" value="single page"> Single Page
                                    </label>
                                </div>
                           </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>