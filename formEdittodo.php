<!-- Modal -->
<div class="modal fade" id="modalEdittodo<?= $data['id']?>" tabindex="-1" aria-labelledby="modalEdittodoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalEdittodoLabel">Tambah To-do</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control mb-2" value="<?= $data['task']?>" name="task" placeholder="Masukkan To-do" required>
                <input type="text" name="id" value="<?= $data['id']?>" hidden>
                <select class="form-select mb-2" name="status" required>
                    <option selected disabled>Pilih status</option>
                    <option <?php if($data['status'] === 'selesai') { ?> selected <?php }?> value="selesai">Selesai</option>
                    <option <?php if($data['status'] === 'belum selesai') { ?> selected <?php }?> value="belum selesai">Belum selesai</option>
                </select>
                <select class="form-select mb-2" name="priority" required>
                    <option selected disabled>Pilih Priority</option>
                    <option <?php if($data['priority'] === 'high') { ?> selected <?php }?> value="high">High</option>
                    <option <?php if($data['priority'] === 'medium') { ?> selected <?php }?> value="medium">Medium</option>
                    <option <?php if($data['priority'] === 'low') { ?> selected <?php }?> value="low">Low</option>
                </select>
                <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="due_date" class="form-control mb-2" placeholder="Masukkan tanggal" value="<?= $data ['due_date']?>" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="edittodo" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>