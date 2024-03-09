@extends('layout.header')

@section('navbar')
    <!-- Home Page Section -->
    <section class="home" id="home">
      <div class="container">
          @include('partials.foto')
            <div class="col-md-7 offset-md-5">
              <div class="home_intro1">
                <h2>Hi, i'm Mohamad Rodziyan Algifari</h2>
                <h1>Web Developer & Back End Developer</h1>
                <p>I'm from Tangerang and I have been focus learning programming since 2022 when I'm studying in College, just contact me on my social media bellow.</p>
                <div class="home_social">
                  <a href="https://www.instagram.com/rodziyaan/"><img src="assets/icon/instagram.svg" alt="instagram"></a>
                  <a href="https://www.linkedin.com/in/mohamad-rodziyan-algifari"><img src="assets/icon/linkedin.svg" alt="linkedin"></a>
                  <a href="https://github.com/rodziyaan"><img src="assets/icon/github.svg" alt="github"></a>
                  <a href="mailto:rodziyanalgifari@gmail.com"><img src="assets/icon/gmail.svg" alt="mail"></a>
              </div>
              <br>
              <div class="center mt-3">
              <h3 class="center offset-md-4">Tools & Skills</h3>
                  <div class="line offset-md-4"></div>
                  <div class="programming text-center">
                  <img src="assets/icon/javascript.svg" alt="javascript">
                  <img src="assets/icon/php.svg" alt="php">
                  <img src="assets/icon/bootstrap.svg" alt="bootstrap">
                  <img class="mysql" src="assets/icon/mysql.svg" alt="mysql">
                  <img class="laravel" src="assets/icon/laravel.svg" alt="laravel">
                  <div class="mt-4"></div>
                  <img src="assets/icon/nodejs.svg" alt="node.js">
                  <img src="assets/icon/java.svg" alt="java">
                  </div>
                  </div>
                  </div>
                  </br>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Home Page Section -->
  
    @endsection
 