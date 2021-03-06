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
          <label>Tanggal</label>
          <input class="form-control datetimepicker" v-model="newPlanData.task_date" placeholder="Masukkan waktu rencana traveling mu">
        </div>
        <div class="form-group">
          <label>Lokasi</label>
          <input v-if="newPlanData.task_location === ''" type="text" @keyup.enter="searchPlace" class="form-control" placeholder="Ketikkan nama lokasi, tekan enter, lalu pilih salah satu">
          <small v-if="isLocationLoading">Tunggu sebentar, sedang memuat</small>
          <!-- showing location result -->
          <div v-if="!isLocationLoading && locationResult.length !== 0">
            <div class="list-group" v-for="(locItem, locIndex) in locationResult" :key="locIndex">
              <a @click="selectLocation(locItem)" class="list-group-item list-group-item-action flex-column align-items-start">
                <p style="margin:0"><i class="fa fa-location-arrow" style="color:#6777ef"></i> <b>&nbsp;{{ locItem.name }}</b></p>
                <small>{{ locItem.formatted_address }}</small>
              </a>
            </div>
          </div>
          <!-- when user already click the location -->
          <div v-if="newPlanData.task_location !== ''" class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" v-model="newPlanData.task_location" disabled aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-danger" @click="removeLocation" type="button"><i class="fa fa-times"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
        <button type="button" @click="planSubmit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>