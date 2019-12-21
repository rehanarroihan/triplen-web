<h2 class="section-title">Daftar Rencana Perjalananmu</h2>
<p class="section-lead">
  Kamu bisa mengatur posisi rencana mu sesuai kebutuhan
</p>
<button data-toggle="modal" data-target="#newBoardModal" class="btn btn-primary pull-right">
  <i class="fa fa-plus"></i> Tambah Board Baru
</button>

<draggable class="row" v-model="boardList" draggable=".hellaw">
  <div class="col-12 col-md-6 col-lg-4 hellaw" v-for="(boardItem, boardIndex) in boardList" :key="boardIndex">
    <div class="card card-primary">
      <div class="card-header">
        <h4>{{ boardItem.board }}</h4>
        <div class="card-header-action">
          <a href="#" class="btn btn-primary" :data-collapse="'#'+boardItem.id">
            <i class="fas fa-minus"></i>
          </a>
          <a href="#" @click="deleteBoard(boardItem.id)" class="btn btn-danger">
            <i class="fas fa-trash"></i>
          </a>
        </div>
      </div>
      <div class="collapse show" :id="boardItem.id">
        <div class="card-body">
          <p v-for="(planItem, planIndex) in boardItem.plans" :key="planIndex">{{ planItem.task }}</p>
        </div>
        <div class="card-footer">
          <button @click="openNewPlanModal(boardItem.id)" class="btn btn-block btn-outline-primary">
            <i class="fa fa-plus"></i> Tambah
          </button>
        </div>
      </div>
    </div>
  </div>
</draggable>