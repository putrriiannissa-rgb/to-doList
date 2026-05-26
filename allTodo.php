<div class="card border-1 border-warning shadow-lg">
    <div class="card-body">
        <h4>To-do List</h4>
        <ul class="list-group">
            <?php
                $sql = "SELECT * FROM todolist";
                $result = $koneksi->query($sql);
                while ($data = $result->fetch_array()){ ?>
                <li class="list-group-item border-bottom border-warning">
                    <div class="row justify-content-between">
                        <div class="col-md-9 text-start">
                            <?php if($data['status'] ==='selesai') {?>
                                <span class="fw-bold position-relative"><?= $data['task'] ?>
                                    <i class="position-absolute top-0 start-100 badge bg-success fa-solid fa-check" style="margin-left: 10px;"> </i><br>
                                </span>
                            <?php } else { ?>
                                <span class="fw-bold position-relative"><?= $data['task'] ?>
                                <i class="position-absolute top-0 start-100 badge bg-danger fa-solid fa-xmark" style="margin-left: 10px;"> </i><br>
                            </span>
                           <?php } ?>
                           <span class="fw-normal span-date badge bg-primary">Date: <?= $data['due_date']?></span> | 
                           <?php if($data['priority'] === 'high') {?>
                            <span class="text-capitalize fw-normal span-date badge bg-danger"><?= $data['priority']?></span>
                            <?php } else if($data['priority'] === 'medium') {?>
                                <span class="text-capitalize fw-normal span-date badge bg-warning"><?= $data['priority']?></span>
                            <?php } else if($data['priority'] === 'low') {?>
                                <span class="text-capitalize fw-normal span-date badge bg-success"><?= $data['priority']?></span>
                            <?php } ?>
                        </div>
                        <div class="col-md-10 align-items-center text-end">
                            <a class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdittodo<?= $data['id'];?>"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="fungsiCRUD.php?hapus=<?=$data['id'];?>" onclick="return confirm('cius?')" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                    <?php include "formEdittodo.php"?>
                </li>
            <?php }?>     
        </ul>
    </div>
</div>