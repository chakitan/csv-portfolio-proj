@extends('layout')
@section('container')
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">Chakitan S Vyas</h1>
                <h3 class="mb-5"><em>techie &middot; dreamer &middot; doer</em></h3>
                <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
            </div>
        </header>
       
<!-- Portfolio-->
<section class="content-section" id="about">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Portfolio</h3>
                    <h2 class="mb-5">Here I'm</h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Tech</div>
                                    <p class="mb-0">Surf my projects, get consultation around tech or even tech-chat over a coffee would do!</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="https://picsum.photos/id/201/700/467" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Dream</div>
                                    <p class="mb-0">Ideaprenuer, that's what I call myself. Want to join? Let's create something!.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="https://picsum.photos/id/55/700/467" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Doing</div>
                                    <p class="mb-0">Current Enagagements and stuff!</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="https://picsum.photos/id/1033/700/467" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Misc</div>
                                    <p class="mb-0">Details if you want any....</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="https://picsum.photos/id/27/700/467" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </section>
@endsection