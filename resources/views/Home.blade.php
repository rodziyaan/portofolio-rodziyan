@extends('layout.header')

@section('navbar')
  <body>
    <!-- Home Page Section -->
    <section class="home" id="home">
      <div class="container">
        @include('partials.foto')
        <div class="col-md-7 offset-6">
          <div class="home_intro">
              <h2>Hi, i'm Mohamad Rodziyan Algifari</h2>
              <div class="home_social">
                  <a href="https://www.instagram.com/rodziyaan/"><img src="assets/icon/instagram.svg" alt="instagram"></a>
                  <a href="https://www.linkedin.com/in/mohamad-rodziyan-algifari"><img src="assets/icon/linkedin.svg" alt="linkedin"></a>
                  <a href="https://github.com/rodziyaan"><img src="assets/icon/github.svg" alt="github"></a>
                  <a href="mailto:rodziyanalgifari@gmail.com"><img src="assets/icon/gmail.svg" alt="mail"></a>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- End Home Page Section -->
@endsection
