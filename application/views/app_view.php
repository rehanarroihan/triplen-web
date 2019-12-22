<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>MyTriplen | Triplen</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/back/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/back/assets/css/components.css">

  <!-- Modern JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
  <script src="https://unpkg.com/vuelidate/dist/validators.min.js"></script>
  <script src="https://unpkg.com/vuelidate/dist/vuelidate.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/constants.js"></script>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <!-- CDNJS :: Sortable (https://cdnjs.com/) -->
  <script src="//cdn.jsdelivr.net/npm/sortablejs@1.8.4/Sortable.min.js"></script>
  <!-- CDNJS :: Vue.Draggable (https://cdnjs.com/) -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.20.0/vuedraggable.umd.min.js"></script>
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="index.html" class="navbar-brand sidebar-gone-hide">Triplen</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
            <li class="nav-item active"><a href="#" class="nav-link">My Triplen</a></li>
          </ul>
        </div>
        <form class="form-inline ml-auto">
          <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <!-- <a href="#">Mark All As Read</a> -->
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Triplen, mulai tambah rencana liburanmu
                    <div class="time">Sekarang</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">1 Notifikasi <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" :src="userData.img_url" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Halo, {{ userData.name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <!-- <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div> -->
              <a href="#" @click="logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a href="#" class="nav-link"><i class="far fa-list-alt"></i><span>My Triplen</span></a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <!-- <div class="section-header">
            <h1>MyTriplen</h1>
          </div> -->

          <div class="section-body">
            <div v-if="boardList.length === 0" class="empty-state">
              <img src="<?php echo base_url() ?>assets/back/assets/img/clip-travel.png" alt="">
              <div class="message">
                <h3>Kamu belum punya rencana liburan apapun!</h3>
                <p>ayo mulai ciptakan rencana menakjubkanmu!</p>
                <button @click="openNewPlanModal(null)" class="btn btn-primary btn-lg btn-icon icon-left button-create">
                  <i class="fa fa-plus"></i>&emsp;Tambah Rencana Baru
                </button>
              </div>
            </div>
            <div v-if="boardList.length !== 0" class="board-list">
              <?php $this->load->view($board_view); ?>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By Stisla</a>
        </div>
        <div class="footer-right">
          <!-- 2.3.0 -->
        </div>
      </footer>
    </div>
    <?php $this->load->view($new_plan_modal_view); ?>
    <?php $this->load->view($new_board_modal_view); ?>
  </div> <!-- app -->

  <!-- General JS Scripts -->
  <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url() ?>assets/back/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="<?php echo base_url() ?>assets/back/assets/js/scripts.js"></script>
  <script src="<?php echo base_url() ?>assets/back/assets/js/custom.js"></script>

  <script>
//use vuelidate
Vue.use(window.vuelidate.default);
const { required } = window.validators;

const draggable = vuedraggable;

var app = new Vue({
  el: '#app',
  data: {
    authToken: '',
    userData: {},
    boardList: [],
    locationResult: [],
    isLocationLoading: false,
    newPlanData: {
      id_board: null,
      task_name: '',
      task_date: '',
      task_location: ''
    },
    newBoardData: {
      board_name: '',
    },
    iniData: [
      { title: 'Halo' },
      { title: 'Iya' },
      { title: 'Shalom' },
      { title: 'Sip' },
    ],
    isSubmitPlanLoading: false,
  },
  validations: {
    newPlanData: {
      task_name: required
    },
    newBoardData: {
      board_name: required,
    },
  },
  methods: {
    getBoardsDataAndPlans() {
      const self = this;
      const token = self.authToken;
      axios({
        url: apiBaseURL + 'boards',
        method: 'get',
        headers: { Authorization: `Bearer ${token}` }
      }).then((res) => {
        if (res.data.success) {
          self.boardList = [...res.data.data];
          res.data.data.map((item, index) => {
            const self = this;
            axios({
              url: apiBaseURL + 'boards/' + item.id,
              method: 'get',
              data: self.newBoardData,
              headers: { Authorization: `Bearer ${self.authToken}` }
            }).then((res) => {
              if (res.data.success) {
                self.boardList[index].plans = [...res.data.data];
              }
            });
          });
        }
      }).catch((err) => {
        if (err.response.status === 400) {
          window.location.href = appBaseURL;
        }
      });
    },

    getBoardsData() {
      const self = this;
      const token = self.authToken;
      axios({
        url: apiBaseURL + 'boards',
        method: 'get',
        headers: { Authorization: `Bearer ${token}` }
      }).then((res) => {
        if (res.data.success) {
          self.boardList = [...res.data.data];
          self.getBoardsDataAndPlans();
        }
      }).catch((err) => {
        if (err.response.status === 400) {
          window.location.href = appBaseURL;
        }
      });
    },

    searchPlace(e) {
      const self = this;
      axios.get(`https://multazamgsd.com/maps/?q=${encodeURI(e.target.value)}`)
      .then((result) => {
        self.locationResult = result.data.candidates;
        self.isLocationLoading = false;
      }).catch(err => console.log(err));
    },

    openNewPlanModal(board_id) {
      this.newPlanData.id_board = board_id;
      $("#newPlanModal").modal();
    },

    createInitializeBoard() {
      const self = this;
      return new Promise((resolve, reject) => {
        const initialBoardForNewUser = [
          {
            board_name: 'Rencana Perjalanan',
          },
          {
            board_name: 'Telah Dikunjungi',
          },
        ];
        let boardIdWillReturn;
        for (let i=0;i < initialBoardForNewUser.length; i++) {
          axios({
            url: apiBaseURL + 'boards',
            method: 'post',
            data: initialBoardForNewUser[i],
            headers: { Authorization: `Bearer ${self.authToken}` }
          }).then((res) => {
            if (res.data.success) {
              if (i === 0) {
                boardIdWillReturn = res.data.data.id;
              }
              if (i === 1) {
                resolve(boardIdWillReturn);
              }
            }
          })
        }
      });
    },

    newPlanSubmit() {
      const self = this;
      if (this.newPlanData.id_board === null) {
        // orang ini pertama kali bikin plan, jadi gapunya board, bikinin lahhh
        self.createInitializeBoard().then((output) => {
          self.newPlanData.id_board = output;
          self.planSubmit();
        });
      } else {
        self.planSubmit();
      }
    },

    planSubmit() {
      const self = this;
      axios({
        url: apiBaseURL + 'task',
        method: 'post',
        data: self.newPlanData,
        headers: { Authorization: `Bearer ${self.authToken}` }
      }).then((res) => {
        if (res.data.success) {
          self.newPlanData = {
            id_board: null,
            task_name: '',
            task_date: '',
            task_location: ''
          };
          self.getBoardsData();
          $("[data-dismiss=modal]").trigger({ type: "click" });
        }
      }).catch((err) => {
        console.log(err);
        if (err.response.status === 400) {
          //window.location.href = appBaseURL;
        }
      });
    },

    newBoardSubmit() {
      const self = this;
      axios({
        url: apiBaseURL + 'boards',
        method: 'post',
        data: self.newBoardData,
        headers: { Authorization: `Bearer ${self.authToken}` }
      }).then((res) => {
        if (res.data.success) {
          $("[data-dismiss=modal]").trigger({ type: "click" });
          self.newBoardData.board_name = '';
          self.getBoardsData();
        }
      }).catch((err) => {
        console.log(err);
        if (err.response.status === 400) {
          //window.location.href = appBaseURL;
        }
      });
    },

    deleteBoard(id) {
      const self = this;
      axios({
        url: apiBaseURL + 'boards',
        method: 'delete',
        data: { id_board: id },
        headers: { Authorization: `Bearer ${self.authToken}` }
      }).then((res) => {
        if (res.data.success) {
          self.getBoardsData();
        }
      }).catch((err) => {
        console.log(err);
        if (err.response.status === 400) {
          //window.location.href = appBaseURL;
        }
      });
    },

    logout() {
      localStorage.removeItem('regData');
      localStorage.removeItem('token');
      window.location.href = appBaseURL;
    }
  },
  created() {
    const regDataString = localStorage.getItem('regData');
      const token = localStorage.getItem('token');
      if (regDataString !== null && token !== null) {
        const regData = JSON.parse(regDataString);
        this.authToken = token;
        this.userData = regData;
      } else {
        window.location.href = appBaseURL;
      }
  },
  mounted: function() {
    this.getBoardsData();
  }
});
</script>
</body>
</html>
