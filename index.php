<?php require 'template/header.php'; ?>


<div class="container">

    <!-- HERO -->

    <div class="row column-gap-2 bottom-100">
        <div class="col align-self-center">
            <h1 class="tight-line-height mb-4">
                <span class="ylw-txt">YellowTable</span> Creative<span class="ylw-txt">.</span>
            </h1>

            <p class="loose-line-height">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pellentesque ipsum at mi luctus venenatis. Curabitur molestie magna sed turpis rutrum, in pharetra ipsum vehicula. Duis ultrices dolor lectus, id varius massa mattis ut. Nunc mauris lectus, aliquam in convallis at, semper nec nulla. Integer ante felis, pellentesque id aliquam vitae, eleifend id ex.
            </p>

            <a href="#">
                <button class="btn" style="margin-left: -10px;">
                    <span class="btn__inner">
                        <span class="btn__slide"></span>
                        <span class="btn__content">
                            <span class="btn-txt">Discover More</span>
                        </span>
                    </span>
                </button>
            </a>
        </div>
        <div class="col ps-3" style="max-width: 900px;">
            <img id="pic" src="svg/hero-dummy.svg" style="height: 100%; width: auto;" ondrag="return false">
        </div>
    </div>

    <!-- OUR SERVICES -->

    <div class="row bottom-100">
        <div class="col">
            <h1>Our <span class="ylw-txt">Services.</span></h1>
        </div>
        <div class="col align-self-end justify-content-end">
            <hr class="hr-custom">
        </div>
    </div>

    <div class="row mx-auto bottom-50">
        <div class="col ps-3 service-bg" style="background-image: url('svg/service-1.svg');">
            <h2 style="margin-top: -30px;">Social<br>Media<br>Management</h2>
            <p class="bottom-50" style="max-width: 260px; margin-left: 40px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pellentesque ipsum at mi luctus venenatis.
            </p>
        </div>
        <div class="col ps-3 service-bg" style="background-image: url('svg/service-2.svg'); background-size: 85%;">
            <h2 style="margin-top: -30px;">Photography<br>Videography</h2>
            <p class="bottom-50" style="max-width: 260px; margin-left: 40px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pellentesque ipsum at mi luctus venenatis.
            </p>
        </div>
        <div class="col ps-3 service-bg" style="background-image: url('svg/service-3.svg');">
            <h2 style="margin-top: -30px;">Visual<br>Design</h2>
            <p class="bottom-50" style="max-width: 260px; margin-left: 40px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pellentesque ipsum at mi luctus venenatis.
            </p>
        </div>
    </div>

    <div class="bottom-100">
        <a href="#">
            <button class="btn" style="margin-left: -10px;">
                <span class="btn__inner">
                    <span class="btn__slide"></span>
                    <span class="btn__content">
                        <span class="btn-txt">Discover More</span>
                    </span>
                </span>
            </button>
        </a>
    </div>

    <!-- OUR WORKS -->

    <div class="row bottom-100">
        <div class="col">
            <h1>Our <span class="ylw-txt">Works.</span></h1>
        </div>
        <div class="col align-self-end justify-content-end">
            <hr class="hr-custom">
        </div>
    </div>

    <!-- OUR CLIENTS -->

    <div class="row bottom-100">
        <div class="col">
            <h1>Our <span class="ylw-txt">Clients.</span></h1>
        </div>
        <div class="col align-self-end justify-content-end">
            <hr class="hr-custom">
        </div>
    </div>


</div>


<?php require 'template/footer.php'; ?>