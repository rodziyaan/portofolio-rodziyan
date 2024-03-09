@extends('layout.header')

@section('navbar')
  <body>
    <!-- Project Section -->
    <section class="project" id="project">
        <div class="container">
          <div class="row">
            <h1>Projects</h1>
            <div class="line"></div>
            {{-- <div class="foodApp">
              <img src="assets/images/food app.jpg" alt="food app">
              <img class="component1" data-jarallax-element="100 250" src="assets/components/mobile_app_design.svg" alt="mobile app design">
            </div>
            <div class="furniture">
              <img src="assets/images/furniture.jpg" alt="furniture">
              <a target="_blank" href="https://gustibagusbayu.github.io/Furniture-order-websites/"><p>See <br>Web Pages</p></a>
              <img class="component2" data-jarallax-element="-100 -250" src="assets/components/mobile_app_design.svg" alt="mobile app design">
            </div> --}}
            {{-- <div class="expertSystem">
              <img src="assets/images/expert system.jpg" alt="expert system">
              <div class="description1"></div>
              <p>Build expert<br>system website<br>with php native<br>and bootstrap.</p>
              <img class="component3" data-jarallax-element="100 150" src="assets/components/web_programming.svg" alt="web programming">
            </div> --}}
            <div class="webporto">
              <img src="assets/images/portoweb.jpg" alt="webporto">
              <div class="description2"></div>
              <p><br><br>Build<br>Portofolio website<br>with laravel.</p>
              <img class="component4" data-jarallax-element="-100 -150" src="assets/components/web_programming.svg" alt="web programming">
            </div>
          </div>
        </div>
      </section>
      <!-- End Project Section -->
 @endsection