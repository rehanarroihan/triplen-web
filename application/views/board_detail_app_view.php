<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>MyTriplen | Triplen</title>
    <link rel="icon" href="<?php echo base_url() ?>assets/front/media/favicon.png">
    <meta name="dicoding:email" content="grinaldifoc@gmail.com">
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
        <?php $this->load->view('components/templates/navbar') ?>
        <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <!-- <div class="section-header">
              <h1>MyTriplen</h1>
              </div> -->
            <div class="section-body">
              
            </div>
          </section>
        </div>
        <footer class="main-footer">
          <div class="footer-left">
            Copyright &copy; 2018 
            <div class="bullet"></div>
            Design By Stisla</a>
          </div>
          <div class="footer-right">
            <!-- 2.3.0 -->
          </div>
        </footer>
      </div>
    </div>
    <!-- app -->
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
      const {
      	required
      } = window.validators;
      
      const draggable = vuedraggable;
      
      var app = new Vue({
      	el: '#app',
      	data: {},
      	validations: {
      		
      	},
      	methods: {

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
      		
      	}
      });
    </script>
  </body>
</html>