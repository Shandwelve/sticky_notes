<h1>
    Main Page
</h1>

<ul>
    <?php for ($i = 0; $i < count($notes); $i++): ?>
        <li>
            <div>
                <?= $notes[$i]['title'] ?>
            </div>
            <div>
                <?= $notes[$i]['description'] ?>
            </div>
            <div>
                <?= $notes[$i]['priority'] ?>
            </div>
            <div>
                <?= $notes[$i]['created_at'] ?>
            </div>
            <div>
                <?= $notes[$i]['updated_at'] ?>
            </div>
        </li>
    <?php endfor; ?>
</ul>