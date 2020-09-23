<div class="content m-3">
<?php for ($i = 0; $i < count($notes); $i++): ?>
    <div class="sticky shadow">
        <div class="sticky-body p-4 text-center">
            <h4><?= $notes[$i]['title'] ?></h4>
            <p><?= $notes[$i]['description'] ?></p>
            <div class="edit_notes">
                <a href="/edit?id=<?= $notes[$i]['id'] ?>" ><i class="fas fa-edit"></i></a>
                <a href="#" data-toggle="modal" data-target="#ModalCenter<?= $notes[$i]['id'] ?>"><i class="fas fa-times"></i></a>
            </div>
            <div class="d-flex justify-content-end">
                <div>
                    <span class="date">Date: <?= date('g:i a \o\n l jS F Y', strtotime($notes[$i]['created_at'])) ?></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="ModalCenter<?= $notes[$i]['id'] ?>" tabindex="-1" role="dialog"
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
                    <a style="text-decoration: none; color: white" href="/delete?id=<?= $notes[$i]['id'] ?>"><button type="button" class="btn btn-primary">Delete</button></a>
                </div>
            </div>
        </div>
    </div>
<?php endfor; ?>
</div>

