<div class="card border-1 border-danger shadow-lg">
    <div class="card-body">
        <h4>To-do List Belum selesai</h4>
        <ul class="list-group">
            <?php
                $sql = "SELECT * FROM todolist WHERE status='belum selesai'";
                $result = $koneksi->query($sql);
                while ($data = $result->fetch_array()){ ?>
                <li class="list-group-item border-bottom border-dannger">
                    <?= $data['task']?>
                </li>
            <?php }?>     
        </ul>
    </div>
</div>