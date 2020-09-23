<main id="main_add d-flex align-items-center justify-content-center">
    <div class="container add">
        <div class="row justify-content-center">
            <div>
                <div class="card bg-dark">
                    <div class="card-header"></div>
                    <div class="card-body">

                        <form class="form-horizontal" method="post" action="/add" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label text-primary">Title</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <input required type="text" class="form-control" name="title"
                                               id="name"
                                               placeholder="Enter title"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="priority" class="cols-sm-2 control-label text-primary">Priority</label>
                                <select id="priority" name="priority" class="custom-select custom-select-lg mb-3">
                                    <option selected value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="add_content" class="control-label text-primary">Content</label>
                                <div>
                                    <div class="input-group">
                                    <textarea style="width: 1065px" name="description" id="add_content" cols="" rows="15"
                                              class="form-control" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Add</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>