<div class="card border-1 border-success shadow-lg">
    <div class="card-body">
        <h4>To-do List Selesai</h4>
        <ul class="list-group">
            <?php
                $sql = "SELECT * FROM todolist WHERE status='selesai'";
                $result = $koneksi->query($sql);
                while ($data = $result->fetch_array()){ ?>
                <li class="list-group-item border-bottom border-success">
                    <?= $data['task']?>
                </li>
            <?php }?>     
        </ul>
    </div>
</div>