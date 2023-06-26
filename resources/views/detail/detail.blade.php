@include('layouts.header')

<div class="item-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2>View Details <em>Coffee dummy 1</em> Here.</h2>
                </div>
            </div>
            <div class="col-lg-7 ">
                <div class="left-img item ">
                    {{-- <img src="assets/images/item-details-01.jpg" alt="" style="border-radius: 20px;"> --}}
                    <iframe src="https://my.matterport.com/show/?m=FKzJ7YqfFXP&play=1"  style="border-radius: 20px;" height="500" width="100%" ></iframe>
                </div>
            </div>
            <div class="col-lg-5 align-self-center">
                <h4 class="mb-4">Coffee Dummy 1</h4>
                <span class="author">
                    <img src="assets/images/author-02.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>Coffee Dummy 1<br><a href="#" target="blank">@Coffee_dummy1</a></h6>
                </span>
                <p>Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetu
                    dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="row">
                    {{-- <div class="col-3">
                        <span class="bid">
                            Current Bid<br><strong>10k-30k</strong><br>
                        </span>
                    </div> --}}
                    <div class="col-4">
                        <span class="owner">
                            Owner<br><strong>David Walker</strong><br><em>(@davidwalker)</em>
                        </span>
                    </div>
                    <div class="col-5">
                        <span class="ends">
                            Operational time<br><strong>08:00-23:00</strong>
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
                            <img src="assets/images/discover-03.jpg" alt="" style="border-radius: 20px;"
                                data-bs-toggle="modal" data-bs-target="#sliderModal">
                            <h4>Signature menu 2 </h4>
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
                            <img src="assets/images/discover-03.jpg" alt="" style="border-radius: 20px;">
                            <h4>Signature menu 3</h4>
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
                            <img src="assets/images/discover-03.jpg" alt="" style="border-radius: 20px;">
                            <h4>Signature menu 4</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mt-4">
                <div id="contact" action="" method="post">
                    <div class="row">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4544242622254!2d109.33556941515052!3d-0.03202636398076336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d599c26700f2b%3A0xd48158fd2c9e765!2zRnJhbmNv4oCZcyBDYWZl!5e0!3m2!1sen!2sid!4v1686905135244!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div id="contact" action="" method="post">
                    <div class="row">
                        <h4>popular times google/google review</h4>
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
                    <input class="mt-3" type="range" id="slider-progress" min="0" max="11" value="1" step="1">


        </div>
    </div>
</div>

<script>
    // Ambil elemen input range (progres bar)
    var progressBar = document.getElementById('slider-progress');

    // Ambil elemen slider
    var slider = document.querySelector('.slider');

    // Tambahkan event listener untuk mengatur pergantian foto saat progres bar digeser
    progressBar.addEventListener('input', function() {
        var currentValue = parseInt(progressBar.value);
        slider.style.transform = 'translateX(-' + currentValue * 100 + '%)';
    });
</script>
@include('layouts.footer')
