<div class="modal fade" tabindex="-1" role="dialog" id="newBoardModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Board Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Nama Board Ku</label>
          <input
            type="text"
            class="form-control"
            v-model="newBoardData.board_name"
            v-on:keyup.enter="newBoardSubmit"
            v-bind:class="{ 'is-invalid': !$v.newBoardData.board_name.required }"
            placeholder="Kunjungan ke Bali"
            autofocus>
          <div class="invalid-feedback">
            Nama board harus di isi
          </div>
        </div>
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Batalkan</button>
        <button type="button" @click="newBoardSubmit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>