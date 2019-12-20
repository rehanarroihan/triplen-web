<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register to Triplen</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/back/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/back/assets/css/components.css">

  <!-- Modern JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
  <script src="https://unpkg.com/vuelidate/dist/validators.min.js"></script>
  <script src="https://unpkg.com/vuelidate/dist/vuelidate.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/constant.js"></script>
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <h3>Triplen</h3>
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Hai {{ userData.name }}, <br> hanya satu langkah lagi...</h4></div>

              <div class="card-body">
                <p class="text-muted">Mohon lengkapi form di bawah ini</p>
                <form method="POST">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" disabled v-model="userData.email" class="form-control" name="email" tabindex="1" required>
                  </div>
                  <div class="form-group">
                    <label for="telp">Nomor Telefon</label>
                    <input
                      type="number"
                      class="form-control"
                      tabindex="1"
                      placeholder="Nomor Telepon"
                      v-model.trim="phone"
                      v-bind:class="{ 'is-invalid': !$v.phone.minLength || !$v.phone.required || !$v.phone.maxLength }"
                      autofocus>
                      <div class="invalid-feedback">
                        Mohon mengisi nomor telefon dengan valid
                      </div>
                  </div>

                  <div class="form-group">
                    <button v-if="!isSubmitLoading" type="button" @click="submit" class="btn btn-primary btn-lg btn-block">
                      Aku Siap Berpetualang!
                    </button>
                    <button v-if="isSubmitLoading" type="button" @click="submit" disabled class="btn btn-primary btn-lg btn-block">
                      <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                      &nbsp;Tunggu Sebentar Ya...
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url() ?>assets/back/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?php echo base_url() ?>assets/back/assets/js/scripts.js"></script>
  <script src="<?php echo base_url() ?>assets/back/assets/js/custom.js"></script>

<!-- Page Specific JS File -->
<script>
//use vuelidate
Vue.use(window.vuelidate.default);
const { required, minLength, maxLength } = window.validators;

var app = new Vue({
  el: '#app',
  data: {
    userData: {},
    phone: '',
    isSubmitLoading: false,
  },
  validations: {
    phone: {
      required,
      minLength: minLength(10),
      maxLength: maxLength(15)
    }
  },
  methods: {
    submit() {
      if (this.$v.$invalid) { return; }
      this.isSubmitLoading = true;
      const self = this;

      const regData = {
        id_google: this.userData.id_google,
        email: this.userData.email,
        name: this.userData.name,
        image: this.userData.image,
        notelp: this.phone
      };
      axios.post(apiBaseURL + 'user/register', regData)
      .then((res) => {
        if (res.data.success) {
            localStorage.setItem('token', res.data.data.token);
            window.location.href = appBaseURL + 'app';
        }
      }).catch((err) => {
        self.isSubmitLoading = false;
        alert('Something went wrong, please try again');
      });
    }
  },
  mounted: function() {
    const regDataString = localStorage.getItem('regData');
    if (regDataString !== null) {
      const regData = JSON.parse(regDataString);
      this.userData = regData;
    } else {
      window.location.href = appBaseURL;
    }
  }
});
</script>
</body>
</html>
