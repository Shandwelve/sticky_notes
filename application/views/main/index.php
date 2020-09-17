<?php for ($i = 0; $i < count($notes); $i++): ?>
    <div class="sticky shadow">
        <div class="sticky-body p-4 text-center">
            <h4><?= $notes[$i]['title'] ?></h4>
            <p><?= $notes[$i]['description'] ?></p>
            <div class="d-flex justify-content-between">
                <div>
                    <span class="date">Date: <?= $notes[$i]['created_at'] ?></span>
                </div>
                <div>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalCenter">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="ModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLongTitle"><?= $notes[$i]['title'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this note?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary"
                            onclick="DELETE FROM sticky_notes WHERE  id = <?= $notes[$i] ?>">Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php endfor; ?>