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
                    <iframe src="https://my.matterport.com/show/?m=FKzJ7YqfFXP&play=1" style="border-radius: 20px;" width="650" height="500"></iframe>
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
                            <img src="assets/images/discover-01.jpg" alt="" style="border-radius: 20px;"
                                onclick="openModal('assets/images/current-01.jpg')">
                            <h4>Indoor</h4>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <span class="author">
                            </span>
                            <img src="assets/images/discover-02.jpg" alt="" style="border-radius: 20px;">
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
                            <img src="assets/images/discover-03.jpg" alt="" style="border-radius: 20px;">
                            <h4>Signature menu 1</h4>
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

<div id="myModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImage" src="assets/images/current-01.jpg" alt="">
</div>
<script src="script.js"></script>

@include('layouts.footer')
