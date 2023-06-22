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
              <div class="container">
                <div class="game">
                </div>
                <div class="game_controls">
                    <div class="score_container"><span>
                        Score:</span><span class="score">0</span>
                    </div>
                    <button id="restart_game" type="button">RESTART</button>
                </div>
                <script src="game2.js"></script>
            </div>
            
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
 


 @include('layouts.footer')