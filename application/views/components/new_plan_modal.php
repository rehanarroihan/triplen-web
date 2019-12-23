<div class="modal fade" tabindex="-1" role="dialog" id="newPlanModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Rencana Liburan Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input
            type="text"
            class="form-control"
            v-model="newPlanData.task_name"
            v-bind:class="{ 'is-invalid': !$v.newPlanData.task_name.required }"
            placeholder="Jalan-jalan ke malioboro">
          <div class="invalid-feedback">
            Nama rencana harus di isi
          </div>
        </div>
        <div class="form-group">
          <label>Lokasi</label>
          <input type="text" @change="searchPlace" v-model="newPlanData.task_location" class="form-control" placeholder="Ketikkan nama lokasi">
        </div>
        <div class="form-group">
          <label>Tanggal</label>
          <input @keyup.enter="planSubmit" type="email" class="form-control" v-model="newPlanData.task_date" name="email" placeholder="Masukkan rencana traveling mu">
        </div>
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
        <button type="button" @click="planSubmit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>