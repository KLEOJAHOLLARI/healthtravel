<style>
.counter-section {
    position: relative;
    z-index: 10;
    display: flex;
    justify-content: center;
    margin-top: -7rem;
}

.counter-container {
    width: 120rem;
    max-width: 90%;
    background: linear-gradient(90deg, #041b4d, #49c48a);
    padding: 4rem;
    border-radius: 1.6rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 4rem;
    box-shadow: 0 2rem 5rem rgba(0, 0, 0, .15);
}

.counter-box {
    color: #fff;
    text-align: center;
    flex: 1;
}

.counter-box h2 {
    font-size: 6rem;
    font-weight: 700;
    line-height: 1;
    margin-bottom: 1.2rem;
}

.counter-box p {
    font-size: 1.5rem;
    font-weight: 600;
    letter-spacing: .1rem;
}

.contact-box {
    display: flex;
    align-items: center;
    gap: 2rem;
    text-align: left;
    flex: 1.5;
}

.counter-icon {
    width: 8rem;
    height: 8rem;
    border-radius: 50%;
    background: #5ed39b;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3.6rem;
    color: #fff;
    flex-shrink: 0;
}

.counter-contact-text {
    display: flex;
    flex-direction: column;
    gap: .8rem;
}

.counter-small-text {
    font-size: 1.8rem;
    font-weight: 500;
    margin: 0;
    color: #fff;
}

.counter-phone {
    font-size: 2.5rem;
    font-weight: 700;
    margin: 0;
    color: #fff;
}
</style>
<section class="counter-section">

    <div class="counter-container">
        <div class="counter-box contact-box">
            <div class="counter-icon">
                ☎
            </div>
            <div class="counter-contact-text">

                <p class="counter-small-text">
                    Need expert medical advice?
                </p>

                <h3 class="counter-phone">
                    +355 68 693 7444
                </h3>
            </div>
        </div>

        <div class="counter-box">
            <h2>
                +
                <span class="counter" data-count="10">0</span>
            </h2>
            <p>
                YEARS OF EXPERIENCE
            </p>
        </div>

        <div class="counter-box">
            <h2>
                +
                <span class="counter" data-count="200">0</span>
            </h2>
            <p>
                HAPPY PATIENTS
            </p>
        </div>

        <div class="counter-box">
            <h2>
                +
                <span class="counter" data-count="1000">0</span>
            </h2>
            <p>
                SURGERY HOURS
            </p>
        </div>
    </div>
</section>