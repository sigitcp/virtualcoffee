@extends('layouts.master')
@section('container')
    <div class="page-heading normal-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Virtual Coffee</h6>
                    <h2>Explore Yours Games</h2>
                    <span>Home > <a href="#">Game</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="discover-items currently-market">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h2><em>Game</em> Shop</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="filters">
                        <ul>
                            <li data-filter="*" class="active">All Game</li>
                            <li data-filter=".blc">Smartphone</li>
                            <li data-filter=".vtr">Desktop</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row grid">

                        <div class="col-lg-3 all vtr">
                            <div class="item mb-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="author">
                                        </span>
                                        <img src="assets/images/bounce.jpg" alt=""
                                            style="border-radius: 20px;">
                                        <h4>Bounce</h4>
                                    </div>
                                    <div class="col-lg-12">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="main-button">
                                            <a href="/game1">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 all vtr">
                            <div class="item mb-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="author">
                                        </span>
                                        <img src="assets/images/snake.jpg" alt=""
                                            style="border-radius: 20px;">
                                        <h4>Snake</h4>
                                    </div>
                                    <div class="col-lg-12">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="main-button">
                                            <a href="/game2">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 all vtr">
                            <div class="item mb-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="author">
                                        </span>
                                        <img src="assets/images/maze.png" alt=""
                                            style="border-radius: 20px;">
                                        <h4>Maze</h4>
                                    </div>
                                    <div class="col-lg-12">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="main-button">
                                            <a href="/game3">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
