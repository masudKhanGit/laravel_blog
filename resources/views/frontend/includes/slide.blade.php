<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" data-interval="1500" data-pause="hover">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/') }}frontend/assets/images/slider/2-nature.jpg" alt=""
                    class="slider_image" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>
                        Some representative placeholder content for the first slide.
                    </p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/') }}frontend/assets/images/slider/9d9dd9e4-e84a-402e-ba8f-daa659e6e6c5-PhotoWord_003.webp"
                    alt="" class="slider_image" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>
                        Some representative placeholder content for the first slide.
                    </p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/') }}frontend/assets/images/slider/9d9dd9e4-e84a-402e-ba8f-daa659e6e6c5-PhotoWord_003.webp"
                    alt="" class="slider_image" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>
                        Some representative placeholder content for the first slide.
                    </p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
