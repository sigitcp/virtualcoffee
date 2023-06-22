@include('layouts.header')


  <div class="item-details-page">
    <div class="container">
      <div class="row">
        {{-- <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Apply For <em>Your Item</em> Here.</h2>
          </div>
        </div> --}}
        <div class="col-lg-12">
          <form id="contact" action="" method="post">
            <div class="row">
                <canvas id="mycanvas" width="650" height="400">
                    I'm sorry your browser version does not support canvas
                    <!--Fallback Content--> <script src="game1.js"></script>
                </canvas>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
 


 @include('layouts.footer')