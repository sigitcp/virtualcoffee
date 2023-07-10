@include('layouts.header')

<div class="item-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2>View Details <em>Figaro Coffee</em> Here.</h2>
                </div>
            </div>
            <div class="col-lg-7 ">
                <div class="left-image">
                    <iframe src="https://my.matterport.com/show/?m=FKzJ7YqfFXP&play=1"  style="border-radius: 20px;" height="500" width="100%" ></iframe>
                </div>
            </div>
            <div class="col-lg-5 align-self-center">
                <span class="author">
                    <img src="assets/images/figaro.png" alt="" style="max-width: 60px; border-radius: 50%;">
                    <h6>Figaro Coffee House<br><a href="https://www.instagram.com/figarocoffeeottawa/" target="blank">@figarocoffeeottawa</a></h6>
                </span>
                
                <p class="mb-3">Figaro Coffee House continuously strives to create the greatest coffee experience for its consumers. Figaro aims to achieve this mission by providing freshly micro-roasted Arabica coffee beans from different origins around the world; by providing a variety of high quality Canadian teas; and providing a delicious assortment of baked goods and delicious cuisine. </p>
                <div class="row">
                    <div class="col-4">
                        <span class="bid">
                            Price per person<br><strong>10k-30k</strong><br>
                        </span>
                    </div>
                    {{-- <div class="col-4">
                        <span class="owner">
                            Owner<br><strong>David Walker</strong><br><em>(@davidwalker)</em>
                        </span>
                    </div> --}}
                    <div class="col-6">
                        <span class="ends">
                            Operational time<br><strong>08:00-23:00</strong><em> (weekday)</em><br><strong> 08:00-24:00</strong><em> (weekend)</em>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="discover-items item-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2>Facilities And Items <em>Offered</em>.</h2>
                </div>
            </div>
            <div class="col-lg-7">
            </div>
            <div class="col-lg-6">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <span class="author">
                            </span>
                            <a href="assets/images/indor1.jpg" data-fancybox="gallery1" data-caption="Indoor">
                                <img src="assets/images/indor1th.jpg" style="border-radius: 20px;" alt=""
                                    class="zoomable-image">
                            </a>
                            <a href="assets/images/indor2.jpg" data-fancybox="gallery1" data-caption="Indoor"></a>
                            <h4>Indoor</h4>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <span class="author">
                            </span>
                            <a href="assets/images/outdor1.jpg" data-fancybox="gallery1" data-caption="Outdoor">
                                <img src="assets/images/outdor1th.jpg" style="border-radius: 20px;" alt=""
                                    class="zoomable-image">
                            </a>
                            <a href="assets/images/outdor2.jpg" data-fancybox="gallery1" data-caption="Outdoor"></a>
                            <h4>Outdoor</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="author">
                            </span>
                            <a href="assets/images/menu1.jpg" data-fancybox="gallery2" data-caption="Menu">
                                <img src="assets/images/menu.jpg" style="border-radius: 20px;" alt=""
                                    class="zoomable-image">
                            </a>
                            <h4>Menu</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="author">
                            </span>
                            <img src="assets/images/signature2.jpg" alt="" style="border-radius: 20px;"
                                data-bs-toggle="modal" data-bs-target="#sliderModal">
                            <h4>Signature menu 1 </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="author">
                            </span>
                            <img src="assets/images/signature3.jpg" alt="" style="border-radius: 20px;">
                            <h4>Signature menu 2</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="author">
                            </span>
                            <img src="assets/images/food.png" alt="" style="border-radius: 20px;">
                            <h4>Food</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="author">
                            </span>
                            <img src="assets/images/been.png" alt="" style="border-radius: 20px;">
                            <h4>Been 1</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <div id="contact" action="" method="post">
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2800.1817263048315!2d-75.683949824587!3d45.425837935998715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce059281e9c005%3A0x827683eb7a69853a!2sFigaro%20Coffee%20House!5e0!3m2!1sen!2sid!4v1688986669830!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal Slider -->
<div class="modal fade" id="sliderModal" tabindex="-1" aria-labelledby="sliderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="slider-container">
                <div class="slider">
                    <div class="slide">
                        <img src="assets/images/1.png" alt="1">
                    </div>
                    <div class="slide">
                        <img src="assets/images/2.png" alt="2">
                    </div>
                    <div class="slide">
                        <img src="assets/images/3.png" alt="3">
                    </div>
                    <div class="slide">
                        <img src="assets/images/4.png" alt="4">
                    </div>
                    <div class="slide">
                        <img src="assets/images/5.png" alt="5">
                    </div>
                    <div class="slide">
                        <img src="assets/images/6.png" alt="5">
                    </div>
                    <div class="slide">
                        <img src="assets/images/1.png" alt="5">
                    </div>
                    <div class="slide">
                        <img src="assets/images/2.png" alt="1">
                    </div>
                    <div class="slide">
                        <img src="assets/images/3.png" alt="2">
                    </div>
                    <div class="slide">
                        <img src="assets/images/4.png" alt="3">
                    </div>
                    <div class="slide">
                        <img src="assets/images/5.png" alt="4">
                    </div>
                    <div class="slide">
                        <img src="assets/images/6.png" alt="5">
                    </div>
                </div>
                <input class="mt-3 mb-3" type="range" id="slider-progress" min="0" max="11"
                    value="0" step="1">
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')
