<style>
.partners-section {
    padding: 8rem 0;
    background: #fff;
    overflow: hidden;
}

.partners-container {
    max-width: 150rem;
    margin: 0 auto;
    padding: 0 2rem;
}

.partners-header {
    text-align: center;
    margin-bottom: 6rem;
}

.partners-subtitle {
    font-size: 1.8rem;
    font-weight: 700;
    letter-spacing: .4rem;
    color: #49cc87;
    margin-bottom: 2rem;
}

.partners-title {
    font-size: 4rem;
    font-weight: 700;
    color: #0d1b1e;
    margin-bottom: 2rem;
}

.partners-description {
    max-width: 75rem;
    margin: 0 auto;
    font-size: 2rem;
    line-height: 1.8;
    color: #555;
}

.slider-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 2rem;
    position: relative;
}

.slider-btn {
    width: 5.5rem;
    height: 5.5rem;
    border: none;
    border-radius: 50%;
    background: #52d38f;
    color: #fff;
    font-size: 2.6rem;
    cursor: pointer;
    transition: .3s;
    flex-shrink: 0;
    z-index: 10;
}

.slider-btn:hover {
    transform: scale(1.1);
    background: #35b873;
}

.slider-container {
    width: 1200px;
    overflow: hidden;
}

.gallery-slider {
    display: flex;
    align-items: center;
    gap: 2rem;
    transition: transform .5s ease;
}

.gallery-card {
    min-width: 22rem;
    height: 32rem;
    border-radius: 2.5rem;
    overflow: hidden;
    background: #fff;
    flex-shrink: 0;
    opacity: .55;
    transform: scale(.9);
    transition: .5s ease;
    box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
}

.gallery-card.active {
    opacity: 1;
    transform: scale(1);
}

.gallery-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.slider-dots {
    display: flex;
    justify-content: center;
    gap: 1.4rem;
    margin-top: 5rem;
}

.dot {
    width: 1.1rem;
    height: 1.1rem;
    border-radius: 50%;
    background: #d3d3d3;
    transition: .3s;
}

.dot.active-dot {
    background: #52d38f;
    transform: scale(1.2);
}
</style>

<section class="partners-section">

    <div class="partners-container">

        <div class="partners-header">

            <p class="partners-subtitle">
                PARTNERS
            </p>

            <h2 class="partners-title">
                Professional Clinics
            </h2>

            <p class="partners-description">
                Find some of our professional clinic partners that you think can help you with the service you are
                looking for.
            </p>

        </div>

        <div class="slider-wrapper">

            <button class="slider-btn prev-btn">
                &#10094;
            </button>

            <div class="slider-container">

                <div class="gallery-slider">

                    <div class="gallery-card">
                        <img src="./img/image.png" alt="">
                    </div>

                    <div class="gallery-card">
                        <img src="./img/image.png" alt="">
                    </div>

                    <div class="gallery-card active">
                        <img src="./img/image.png" alt="">
                    </div>

                    <div class="gallery-card">
                        <img src="./img/image.png" alt="">
                    </div>

                    <div class="gallery-card">
                        <img src="./img/iamge.png" alt="">
                    </div>

                </div>

            </div>

            <button class="slider-btn next-btn">
                &#10095;
            </button>

        </div>

        <div class="slider-dots">

            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot active-dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>

        </div>

    </div>

</section>