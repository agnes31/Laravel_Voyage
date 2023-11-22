@extends('master')
@section('content')
@section('title', 'Projects')
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/chute.jpg" width="600" hight="600" alt="..." /></div>
                <div class="col-xl-4 col-lg-5"> 
                    <div class="featured-text text-center text-lg-left">
                        <h4>Kuang Si Waterfall à Luang Prabang</h4>
                        <p class="text-black-50 mb-0">Eaux turquoise tombant en cascades au cœur d'une forêt luxuriante. Un tableau naturel ensorcelant</p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/parc.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Bouddha Park à Vientiane</h4>
                                <p class="mb-0 text-white-50">sanctuaire serein, sculptures imposantes au cœur d'une paisible nature.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/temple.jpg" alt="..." /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Vat Xieng Thong</h4>
                                <p class="mb-0 text-white-50">Temple gracieux en bord du Mékong, mélange d'élégance architecturale et d'art religieux.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
       