<main id="main_add d-flex align-items-center justify-content-center">
    <div class="container add">
        <div class="row justify-content-center">
            <div>
                <div class="card bg-dark">
                    <div class="card-header"></div>
                    <div class="card-body">

                        <form class="form-horizontal" method="post" action="/edit?id=<?= $_GET['id'] ?>"
                              enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label text-primary">Title</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <input value="<?= $data['title'] ?>" required type="text" class="form-control"
                                               name="title"
                                               id="name"
                                               placeholder="Enter title"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="priority" class="cols-sm-2 control-label text-primary">Priority</label>
                                <select id="priority" name="priority" class="custom-select custom-select-lg mb-3">
                                    <option <?= $data['priority'] === 'low' ? 'selected' : '' ?> value="low">Low
                                    </option>
                                    <option <?= $data['priority'] === 'medium' ? 'selected' : '' ?> value="medium">
                                        Medium
                                    </option>
                                    <option <?= $data['priority'] === 'high' ? 'selected' : '' ?> value="high">High
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="add_content" class="control-label text-primary">Content</label>
                                <div>
                                    <div class="input-group">
                                    <textarea style="width: 1065px" name="description" id="add_content" cols="" rows="15"
                                              class="form-control" required><?= $data['description'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Edit
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>