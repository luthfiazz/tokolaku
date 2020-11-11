 @extends('layouts.success')

 @section('title')
     Success
 @endsection

 @section('content')

 <!-- Page Content -->
   <div class="page-content page-success">
      <div class="section-success" data-aos="zoom-in">
        <div class="container">
          <div class="row align-items-center row-login justify-content-center">
            <div class="col-lg-6 text-center">
              <img src="/images/success.svg" alt="" class="mb-4" />
              <h2>
                Yay Transaction Sedang di Proses!
              </h2>
              <p>
                Silahkan Cek E-mail dan <br />
                kami akan menginformasikan resi Order!
              </p>
              <div>
                <a class="btn btn-primary w-50 mt-4" href="/dashboard.html">
                  Kembali ke Dashboard
                </a>
                <a class="btn btn-signup w-50 mt-2" href="/index.html">
                  Belanja Lagi
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
