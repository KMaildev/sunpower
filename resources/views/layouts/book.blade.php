<style>
    /* Main heading for card's front cover */
    .card-front__heading {
        font-size: 1.5rem;
        /* margin-top: .25rem; */
    }

    /* Main heading for inside page */
    .inside-page__heading {
        padding-bottom: 1rem;
        width: 100%;
    }

    /* Mixed */

    /* For both inside page's main heading and 'view me' text on card front cover */
    .inside-page__heading,
    .card-front__text-view {
        font-size: 1.3rem;
        font-weight: 800;
        margin-top: .2rem;
    }

    .inside-page__heading--city,
    .card-front__text-view--city {
        color: #ff62b2;
    }

    .inside-page__heading--ski,
    .card-front__text-view--ski {
        color: #2aaac1;
    }

    .inside-page__heading--beach,
    .card-front__text-view--beach {
        color: #fa7f67;
    }

    .inside-page__heading--camping,
    .card-front__text-view--camping {
        color: #00b97c;
    }

    /* Front cover */

    .card-front__tp {
        color: #fafbfa;
    }

    /* For pricing text on card front cover */
    .card-front__text-price {
        font-size: 1.2rem;
        margin-top: -.2rem;
    }

    /* Back cover */

    /* For inside page's body text */
    .inside-page__text {
        color: #333;
    }

    /* Icons ===========================================*/

    .card-front__icon {
        fill: #fafbfa;
        font-size: 3vw;
        height: 3.25rem;
        margin-top: -.5rem;
        width: 3.25rem;
    }

    /* Buttons =================================================*/

    .inside-page__btn {
        background-color: transparent;
        border: 3px solid;
        border-radius: .5rem;
        font-size: 1.2rem;
        font-weight: 600;
        margin-top: 2rem;
        overflow: hidden;
        padding: .7rem .75rem;
        position: relative;
        text-decoration: none;
        transition: all .3s ease;
        width: 90%;
        z-index: 10;
    }

    .inside-page__btn::before {
        content: "";
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        transform: scaleY(0);
        transition: all .3s ease;
        width: 100%;
        z-index: -1;
    }

    .inside-page__btn--city {
        border-color: #ff40a1;
        color: #ff40a1;
    }

    .inside-page__btn--city::before {
        background-color: #ff40a1;
    }

    .inside-page__btn--ski {
        border-color: #279eb2;
        color: #279eb2;
    }

    .inside-page__btn--ski::before {
        background-color: #279eb2;
    }

    .inside-page__btn--beach {
        border-color: #fa7f67;
        color: #fa7f67;
    }

    .inside-page__btn--beach::before {
        background-color: #fa7f67;
    }

    .inside-page__btn--camping {
        border-color: #00b97d;
        color: #00b97d;
    }

    .inside-page__btn--camping::before {
        background-color: #00b97d;
    }

    .inside-page__btn:hover {
        color: #fafbfa;
    }

    .inside-page__btn:hover::before {
        transform: scaleY(1);
    }

    /* Layout Structure=========================================*/

    .main {
        background: linear-gradient(to bottom right,
                #eee8dd,
                #e3d9c6);
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 50vh;
        width: 100%;
    }

    /* Container to hold all cards in one place */
    .card-area {
        align-items: center;
        display: flex;
        flex-wrap: nowrap;
        height: 100%;
        justify-content: space-evenly;
        padding: 1rem;
    }

    /* Card ============================================*/

    /* Area to hold an individual card */
    .card-section {
        align-items: center;
        display: flex;
        height: 100%;
        justify-content: center;
        width: 100%;
    }

    /* A container to hold the flip card and the inside page */
    .card {
        background-color: rgba(0, 0, 0, .05);
        box-shadow: -.1rem 1.7rem 6.6rem -3.2rem rgba(0, 0, 0, 0.5);
        height: 15rem;
        position: relative;
        transition: all 1s ease;
        width: 15rem;
    }

    /* Flip card - covering both the front and inside front page */

    /* An outer container to hold the flip card. This excludes the inside page */
    .flip-card {
        height: 15rem;
        perspective: 100rem;
        position: absolute;
        right: 0;
        transition: all 1s ease;
        visibility: hidden;
        width: 15rem;
        z-index: 100;
    }

    /* The outer container's visibility is set to hidden. This is to make everything within the container NOT set to hidden  */
    /* This is done so content in the inside page can be selected */
    .flip-card>* {
        visibility: visible;
    }

    /* An inner container to hold the flip card. This excludes the inside page */
    .flip-card__container {
        height: 100%;
        position: absolute;
        right: 0;
        transform-origin: left;
        transform-style: preserve-3d;
        transition: all 1s ease;
        width: 100%;
    }

    .card-front,
    .card-back {
        backface-visibility: hidden;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }

    /* Styling for the front side of the flip card */

    /* container for the front side */
    .card-front {
        background-color: #fafbfa;
        height: 15rem;
        width: 15rem;
    }

    /* Front side's top section */
    .card-front__tp {
        align-items: center;
        clip-path: polygon(0 0, 100% 0, 100% 90%, 57% 90%, 50% 100%, 43% 90%, 0 90%);
        display: flex;
        flex-direction: column;
        height: 12rem;
        justify-content: center;
        padding: .75rem;
    }

    .card-front__tp--city {
        background: linear-gradient(to bottom,
                #ff73b9,
                #ff40a1);
    }

    .card-front__tp--ski {
        background: linear-gradient(to bottom,
                #47c2d7,
                #279eb2);
    }

    .card-front__tp--beach {
        background: linear-gradient(to bottom,
                #fb9b88,
                #f86647);
    }

    .card-front__tp--camping {
        background: linear-gradient(to bottom,
                #00db93,
                #00b97d);
    }

    /* Front card's bottom section */
    .card-front__bt {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    /* Styling for the back side of the flip card */

    .card-back {
        background-color: #fafbfa;
        transform: rotateY(180deg);
    }

    /* Specifically targeting the <video> element */
    .video__container {
        clip-path: polygon(0% 0%, 100% 0%, 90% 50%, 100% 100%, 0% 100%);
        height: auto;
        min-height: 100%;
        object-fit: cover;
        width: 100%;
    }

    /* Inside page */

    .inside-page {
        background-color: #fafbfa;
        box-shadow: inset 20rem 0px 5rem -2.5rem rgba(0, 0, 0, 0.25);
        height: 100%;
        padding: 1rem;
        position: absolute;
        right: 0;
        transition: all 1s ease;
        width: 15rem;
        z-index: 1;
    }

    .inside-page__container {
        align-items: center;
        display: flex;
        flex-direction: column;
        height: 100%;
        text-align: center;
        width: 100%;
    }

    /* Functionality ====================================*/

    /* This is to keep the card centered (within its container) when opened */
    .card:hover {
        box-shadow:
            -.1rem 1.7rem 6.6rem -3.2rem rgba(0, 0, 0, 0.75);
        width: 30rem;
    }

    /* When the card is hovered, the flip card container will rotate */
    .card:hover .flip-card__container {
        transform: rotateY(-180deg);
    }

    /* When the card is hovered, the shadow on the inside page will shrink to the left */
    .card:hover .inside-page {
        box-shadow: inset 1rem 0px 5rem -2.5rem rgba(0, 0, 0, 0.1);
    }
</style>
<main class="main">
    <section class="card-area">
        <!-- Card: City -->
        <section class="card-section">
            <div class="card">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp card-front__tp--city">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve"
                                    class="card-front__icon">
                                    <g>
                                        <path
                                            d="M49.7,22c-1.1,0-2,0.9-2,2v32.2c0,1.1,0.9,2,2,2s2-0.9,2-2V24C51.7,22.9,50.8,22,49.7,22z" />
                                        <path
                                            d="M13,29.5c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7v-3h20.8c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7v-3h20.8c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7
                                   V7.1h24.8v15.3c0,1.1,0.9,2,2,2s2-0.9,2-2V5.1c0-1.1-0.9-2-2-2H3.7c-1.1,0-2,0.9-2,2v51c0,1.1,0.9,2,2,2s2-0.9,2-2V36.5H13
                                   c1.1,0,2-0.9,2-2s-0.9-2-2-2H5.7v-3H13z" />
                                        <path
                                            d="M58,11.9c0-0.1,0-0.1,0-0.2c0-0.1,0-0.1-0.1-0.2c0-0.1,0-0.1-0.1-0.2c0-0.1-0.1-0.1-0.1-0.2c0,0,0-0.1-0.1-0.1c0,0,0,0,0,0
                                   c0-0.1-0.1-0.1-0.1-0.2c0,0-0.1-0.1-0.1-0.1c0,0-0.1-0.1-0.1-0.1c-0.1,0-0.1-0.1-0.2-0.1c0,0-0.1-0.1-0.2-0.1
                                   c-0.1,0-0.1-0.1-0.2-0.1c-0.1,0-0.1,0-0.2-0.1c-0.1,0-0.1,0-0.2-0.1c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.2,0c0,0,0,0,0,0
                                   c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.2,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1c0,0-0.1,0-0.1,0.1l-12.6,7.8
                                   c0,0,0,0,0,0c-0.1,0-0.1,0.1-0.2,0.1c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0.1-0.1,0.2c0,0.1-0.1,0.1-0.1,0.2
                                   c0,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2c0,0,0,0,0,0v5.4H22.1
                                   c-1.1,0-2,0.9-2,2v28.9c0,1.1,0.9,2,2,2s2-0.9,2-2V29.3h17.3v26.9c0,1.1,0.9,2,2,2s2-0.9,2-2V21l8.6-5.3v40.5c0,1.1,0.9,2,2,2
                                   s2-0.9,2-2V12.1C58,12,58,12,58,11.9z" />
                                        <path d="M28,31L28,31c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S29.1,31,28,31z" />
                                        <path
                                            d="M33.5,31L33.5,31c-1.1,0-2,0.9-2,2s0.9,2,2,2c1.1,0,2-0.9,2-2S34.6,31,33.5,31z" />
                                        <path d="M28,36L28,36c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S29.1,36,28,36z" />
                                        <path
                                            d="M33.5,36L33.5,36c-1.1,0-2,0.9-2,2s0.9,2,2,2c1.1,0,2-0.9,2-2S34.6,36,33.5,36z" />
                                    </g>
                                </svg>

                                <h2 class="card-front__heading">
                                    Our Native Teachers
                                </h2>
                                <p class="card-front__text-price">
                                    From GA
                                </p>
                            </div>

                            <div class="card-front__bt">
                                <p class="card-front__text-view card-front__text-view--city">
                                    View me
                                </p>
                            </div>
                        </div>
                        <div class="card-back">
                            <video class="video__container" autoplay muted loop>
                                <source class="video__media" src="{{ asset('data/v1.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="inside-page">
                    <div class="inside-page__container">
                        <h3 class="inside-page__heading inside-page__heading--city">
                            For All Trainees
                        </h3>
                        <p class="inside-page__text">
                            GA Training Center promises for you to learn Japanese in a fun and friendly environment.
                        </p>
                        <a href="#" class="inside-page__btn inside-page__btn--city">View deals</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Card: Ski -->
        <section class="card-section">
            <div class="card">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp card-front__tp--ski">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve"
                                    class="card-front__icon">
                                    <g>
                                        <path
                                            d="M58.8,54.5L38.5,19.3c-0.4-0.6-1-1-1.7-1s-1.4,0.4-1.7,1L14.8,54.5c-0.4,0.6-0.4,1.4,0,2c0.4,0.6,1,1,1.7,1h40.6
                                   c0.7,0,1.4-0.4,1.7-1C59.2,55.9,59.2,55.1,58.8,54.5z M36.8,24.3l5.8,10c-0.5-0.2-1.1-0.3-1.7-0.3c-2.5,0-3.7,1.5-4.6,2.5
                                   c-0.7,0.9-1,1.1-1.5,1.1s-0.8-0.2-1.5-1.1c-0.6-0.7-1.3-1.5-2.4-2.1L36.8,24.3z M20,53.5l8.9-15.4c0.5,0,0.7,0.3,1.4,1.1
                                   c0.8,1,2.1,2.5,4.6,2.5s3.7-1.5,4.6-2.5c0.7-0.9,1-1.1,1.5-1.1c0.5,0,0.8,0.2,1.5,1.1c0.8,1,2.1,2.5,4.5,2.5l6.8,11.8H20z" />
                                        <path
                                            d="M14.7,51.5c1.1,0,2-0.9,2-2s-0.9-2-2-2H6.4l9.1-15.7c0.6,0.6,1.5,1.3,2.9,1.3c1.8,0,2.8-1.2,3.3-1.8
                                   c0.1-0.1,0.2-0.2,0.3-0.3c0.1,0.1,0.2,0.2,0.3,0.3c0.5,0.6,1.5,1.8,3.3,1.8c1.1,0,2-0.9,2-2c0-1.1-0.9-2-1.9-2
                                   c-0.1-0.1-0.2-0.2-0.3-0.4c-0.5-0.6-1.5-1.8-3.3-1.8c-1.8,0-2.8,1.2-3.3,1.8c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1-0.1-0.2-0.2-0.3-0.3
                                   c-0.1-0.2-0.3-0.4-0.5-0.6l5.7-9.9l3.8,6.6c0.6,1,1.8,1.3,2.7,0.7c1-0.6,1.3-1.8,0.7-2.7L25,13.2c-0.4-0.6-1-1-1.7-1
                                   s-1.4,0.4-1.7,1l-8.4,14.5c-0.1,0.1-0.2,0.3-0.3,0.4L1.2,48.5c0,0,0,0.1,0,0.1c0,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2
                                   c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2C1,50,1,50,1,50.1
                                   c0,0.1,0,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2c0,0,0.1,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1
                                   c0.1,0,0.1,0.1,0.2,0.1c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0c0.1,0.1,0.2,0.1,0.3,0.1c0,0,0.1,0,0.1,0c0.1,0,0.3,0.1,0.5,0.1c0,0,0,0,0,0
                                   c0,0,0,0,0,0c0,0,0,0,0,0H14.7z" />
                                        <path
                                            d="M40.7,12.3h3.1l-2.2,2.2c-0.6,0.6-0.6,1.5,0,2.1c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4l2.2-2.2v3.1
                                   c0,0.8,0.7,1.5,1.5,1.5s1.5-0.7,1.5-1.5v-3.1l2.2,2.2c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4c0.6-0.6,0.6-1.5,0-2.1l-2.2-2.2h3.1
                                   c0.8,0,1.5-0.7,1.5-1.5s-0.7-1.5-1.5-1.5h-3.1l2.2-2.2c0.6-0.6,0.6-1.5,0-2.1c-0.6-0.6-1.5-0.6-2.1,0L49,7.2V4
                                   c0-0.8-0.7-1.5-1.5-1.5S46,3.2,46,4v3.1l-2.2-2.2c-0.6-0.6-1.5-0.6-2.1,0c-0.6,0.6-0.6,1.5,0,2.1l2.2,2.2h-3.1
                                   c-0.8,0-1.5,0.7-1.5,1.5S39.9,12.3,40.7,12.3z" />
                                    </g>
                                </svg>
                                <h2 class="card-front__heading">
                                    Guidance for Trainees
                                </h2>
                                <p class="card-front__text-price">
                                    From GA
                                </p>
                            </div>

                            <div class="card-front__bt">
                                <p class="card-front__text-view card-front__text-view--ski">
                                    View me
                                </p>
                            </div>
                        </div>

                        <div class="card-back">
                            <video class="video__container" autoplay muted loop>
                                <source class="video__media" src="{{ asset('data/v2.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="inside-page">
                    <div class="inside-page__container">
                        <h3 class="inside-page__heading inside-page__heading--ski">
                            For all Trainees
                        </h3>
                        <p class="inside-page__text">
                            GA Training Center regularly sources high-quality and useful language textbooks.
                        </p>
                        <a href="#" class="inside-page__btn inside-page__btn--ski">View deals</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Card: Beach -->
        <section class="card-section">
            <div class="card">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp card-front__tp--beach">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve"
                                    class="card-front__icon">
                                    <path
                                        d="M57.2,28h-7.4c-0.4-4-2-7.7-4.4-10.6l3.2-3.2c0.8-0.8,0.8-2,0-2.8c-0.8-0.8-2-0.8-2.8,0l-3.2,3.2c-3-2.4-6.6-4-10.6-4.4V2.8
                               c0-1.1-0.9-2-2-2s-2,0.9-2,2v7.4c-4,0.4-7.7,2-10.6,4.4l-3.2-3.2c-0.8-0.8-2-0.8-2.8,0c-0.8,0.8-0.8,2,0,2.8l3.2,3.2
                               c-2.4,3-4,6.6-4.4,10.6H2.8c-1.1,0-2,0.9-2,2s0.9,2,2,2h7.4c0.4,4,2,7.7,4.4,10.6l-3.2,3.2c-0.8,0.8-0.8,2,0,2.8
                               c0.4,0.4,0.9,0.6,1.4,0.6s1-0.2,1.4-0.6l3.2-3.2c3,2.4,6.6,4,10.6,4.4v7.4c0,1.1,0.9,2,2,2s2-0.9,2-2v-7.4c4-0.4,7.7-2,10.6-4.4
                               l3.2,3.2c0.4,0.4,0.9,0.6,1.4,0.6s1-0.2,1.4-0.6c0.8-0.8,0.8-2,0-2.8l-3.2-3.2c2.4-3,4-6.6,4.4-10.6h7.4c1.1,0,2-0.9,2-2
                               S58.3,28,57.2,28z M30,45.9c-8.8,0-15.9-7.2-15.9-15.9c0-8.8,7.2-15.9,15.9-15.9c8.8,0,15.9,7.2,15.9,15.9
                               C45.9,38.8,38.8,45.9,30,45.9z" />
                                </svg>

                                <h2 class="card-front__heading">
                                    Special Training Class
                                </h2>
                                <p class="card-front__text-price">
                                    From GA
                                </p>
                            </div>

                            <div class="card-front__bt">
                                <p class="card-front__text-view card-front__text-view--beach">
                                    View me
                                </p>
                            </div>
                        </div>
                        <div class="card-back">
                            <video class="video__container" autoplay muted loop>
                                <source class="video__media" src="{{ asset('data/v3.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="inside-page">
                    <div class="inside-page__container">
                        <h3 class="inside-page__heading inside-page__heading--beach">
                            For all Trainees
                        </h3>
                        <p class="inside-page__text">
                            As you progress up the levels, you can continue to attend lessons in the same timeslot.
                        </p>
                        <a href="#" class="inside-page__btn inside-page__btn--beach">View deals</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Card: Camping -->
        <section class="card-section">
            <div class="card">
                <div class="flip-card">
                    <div class="flip-card__container">
                        <div class="card-front">
                            <div class="card-front__tp card-front__tp--camping">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve"
                                    class="card-front__icon">
                                    <path
                                        d="M57,52.1c0-0.4-0.1-0.7-0.3-1.1l-6.3-10.8L32.4,9l2.3-4c0.6-1,0.2-2.2-0.7-2.7c-1-0.6-2.2-0.2-2.7,0.7L30,5.2L28.7,3
                               c-0.6-1-1.8-1.3-2.7-0.7c-1,0.6-1.3,1.8-0.7,2.7l2.3,4l-18,31.1L3.3,51C3.1,51.3,3,51.7,3,52.1c0,0.4,0.1,0.7,0.3,1
                               c0.4,0.6,1,1,1.7,1h50c0.7,0,1.4-0.4,1.7-1C56.9,52.8,57,52.4,57,52.1z M34.7,49.8C34.2,50,32.1,50,30,50s-4.2,0-4.7-0.2
                               c-0.2-0.5-0.2-2.1-0.2-3.6l0-4.3c0-2.7,2.2-4.9,4.9-4.9s4.9,2.2,4.9,4.9l0,4.3C34.9,47.7,34.9,49.3,34.7,49.8z M13.1,42.1L28,16.5
                               v16.7c-3.9,0.9-6.9,4.4-6.9,8.6l0,4.3c0,1.7,0,2.9,0.2,4H8.5L13.1,42.1z M38.7,50.1c0.2-1,0.2-2.3,0.2-4l0-4.3
                               c0-4.2-2.9-7.7-6.9-8.6V16.5l15,25.7l4.6,7.9H38.7z" />
                                </svg>
                                <h2 class="card-front__heading">
                                    Shadowing Techniques
                                </h2>
                                <p class="card-front__text-price">
                                    From GA
                                </p>
                            </div>

                            <div class="card-front__bt">
                                <p class="card-front__text-view card-front__text-view--camping">
                                    View me
                                </p>
                            </div>
                        </div>
                        <div class="card-back">
                            <video class="video__container" autoplay muted loop>
                                <source class="video__media" src="{{ asset('data/v4.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="inside-page">
                    <div class="inside-page__container">
                        <h3 class="inside-page__heading inside-page__heading--camping">
                            For Trainees
                        </h3>
                        <p class="inside-page__text">
                            Providing a high quality teaching of classes by our native teachers.
                        </p>
                        <a href="#" class="inside-page__btn inside-page__btn--camping">View deals</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>
