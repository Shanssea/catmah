<header class="masthead text-center text-white d-flex" id="page-top">
        <div class="container my-auto">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h1 class="text-uppercase">
                <strong>{{config('app.name','Noted.')}}</strong>
              </h1>
              <hr>
            </div>
            <div class="col-lg-8 mx-auto">
              <p class="text-faded mb-5">Aplikasi catatan online untuk memudahkan teman-teman menyimpan catatan!</p>
                <a id="login" class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('login') }}">{{ __('Masuk') }}</a>
            </div>
          </div>
        </div>
</header>