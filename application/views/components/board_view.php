<h2 class="section-title">Daftar Rencana Perjalananmu</h2>
<p class="section-lead">
  Kamu bisa mengatur posisi rencana mu sesuai kebutuhan
</p>
<button data-toggle="modal" data-target="#newBoardModal" class="btn btn-primary pull-right">
  <i class="fa fa-plus"></i> Tambah Board Baru
</button>

<div class="row">
  <div class="col-12 col-md-6 col-lg-4" v-for="(item, index) in boardList" key="item.id">
    <div class="card card-primary">
      <div class="card-header">
        <h4>{{ item.board }}</h4>
        <div class="card-header-action">
          <a href="#" class="btn btn-primary" :data-collapse="'#'+item.id">
            <i class="fas fa-minus"></i>
          </a>
        </div>
      </div>
      <div class="collapse show" :id="item.id">
        <div class="card-body">
          <p>Write something here</p>
        </div>
        <div class="card-footer">
          <button class="btn btn-outline-primary">
            <i class="fa fa-plus"></i> Tambah
          </button>
        </div>
      </div>
    </div>
  </div>
</div>