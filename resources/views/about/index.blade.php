
@extends('layouts.master')
@section('container')

  <div class="page-heading normal-space">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Virtual Coffee</h6>
          <h2>View Details About Us</h2>
          <span>Home > <a href="/about">About Us</a></span>
        </div>
      </div>
    </div>
  </div>

  <div class="item-details-page" style="padding-bottom:50px">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>This Is <em>Virtual Coffee</em> Preview.</h2>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="left-image">
            <img src="assets/images/about.gif" alt="" style="border-radius: 20px;">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h4 class="mb-3 mt-3">About Virtual Coffee</h4>
          <p>We bring the charm of coffee shops in Pontianak right to your fingertips through captivating virtual tours. Discover a variety of coffee shops with unique ambiance, menus, and offerings. Immerse yourself in inviting interiors, savor the aroma of fresh coffee, and uncover hidden corners that make each coffee shop special. Get essential information like opening hours, locations, and specialty coffees. Be part of this virtual journey and indulge in unforgettable coffee experiences.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="create-nft">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>About Us</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="main-button">
            <a href="https://api.whatsapp.com/send/?phone=089686033608" target="blank">Join With Us</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item first-item">
            <div class="number">
              <h6>1</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-02.png" alt="">
            </div>
            <h4>Virtual Coffee Shop Experience</h4>
            <p>We are a platform that brings a unique and innovative virtual coffee shop experience to you. Through virtual tour technology, we allow you to explore your favorite coffee shops in Pontianak without leaving the comfort of your home. Enjoy the beautiful interior designs, savor the aroma of fresh coffee, and discover intriguing corners of coffee shops, all in an immersive virtual environment.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item second-item">
            <div class="number">
              <h6>2</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-01.png" alt="">
            </div>
            <h4>Supporting the Local Coffee Industry</h4>
            <p>We take pride in supporting the local coffee industry in Pontianak. We collaborate with the finest cafes in the city to provide an authentic virtual experience. Through our platform, you can explore popular coffee shops, indulge in diverse coffee menus, and gather comprehensive information about each cafe. We are committed to promoting local cafes and connecting coffee enthusiasts with the best places</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-04.png" alt="">
            </div>
            <h4>Exploring the Coffee World</h4>
            <p>Virtual Tour Coffee Shop invites you to experience the authentic sensation of coffee and discover new places that will make you fall in love with coffee over and over again. Through interactive features, you can interact with other visitors and share your virtual coffee shop experiences. We bring you an engaging coffee shop experience and enable you to explore the world of coffee in Pontianak in a fresh and thrilling way.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="author-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="author">
            <img src="assets/images/saweria.png" alt="" style="border-radius: 50%; max-width: 240px;" data-toggle="modal" data-target="#myModal">
            <h4>Give us a cup of coffee, <br> and we'll espresso our gratitude!<br> <a href="#">@virtual_coffee</a></h4>
          </div>
          
        </div>
        <div class="col-lg-6">
          <div class="right-info">
            <div class="row">
              <div class="col-6">
                <div class="info-item">
                  <i class="fa fa-heart"></i>
                  <h6><em>Your support fuels our operations and development. Much appreciated!</em></h6>
                </div>
              </div>
              <div class="col-6">
                <div class="info-item">
                  <i class="fa fa-dollar"></i>
                  <h6><em>Your donation fuels our development journey. Thank for your flavorful support!</em></h6>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="main-button">
                  <a href="https://www.saweria.co/widgets/leaderboard?streamKey=4b6c8ea09207ad6225ac35f452a0e432" target="blank">Leaderboard</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Header Modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Konten Modal -->
        <div class="modal-body">
          <img src="assets/images/saweria.png" class="img-fluid" alt="Gambar Pop-up">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Tautan Skrip Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  @endsection

