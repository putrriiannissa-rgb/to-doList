<!-- Modal -->
<div class="modal fade" id="modalAddtodo" tabindex="-1" aria-labelledby="modalAddtodoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalAddtodoLabel">Tambah To-do</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" class="form-control mb-2" name="task" placeholder="Masukkan To-do" required>
                <select class="form-select mb-2" name="status" required>
                    <option selected disabled>Pilih status</option>
                    <option value="selesai">Selesai</option>
                    <option value="belum selesai">Belum selesai</option>
                </select>
                <select class="form-select mb-2" name="priority" required>
                    <option selected disabled>Pilih Priority</option>
                    <option value="1">High</option>
                    <option value="2">Medium</option>                    
                    <option value="3">Low</option>
                </select>
                <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="due_date" class="form-control mb-2" placeholder="Masukkan tanggal" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="tambahtodo" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>