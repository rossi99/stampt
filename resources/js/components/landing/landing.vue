<template>
    <div>
        <div class="content" id="content">
            <div class="txt-side">
                <div class="txt-content">
                    <div class="top-tagline">
                        <p class="tagline-txt">IT'S EASY PEASY LEMON SQUEEZY</p>
                    </div>

                    <div class="middle-tagline-container">
                        <p>less stressing</p>
                        <p>more rewarding</p>
                    </div>

                    <div class="bottom-tagline">
                        <p class="tagline-txt">YOUR NEW VIRTUAL LOYALTY CARD WALLET</p>
                    </div>

                    <div class="action-btn-container">
                        <div class="action-button">
                            <div class="action-btn-txt">
                                JOIN TODAY
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="graphics-side">
                <div class="graphics-content">
                    <div class="character-container">
                        <img src="/images/landing/landing-graphic.png" alt="Girl using Stampt on her mobile phone" class="character">
                    </div>
                </div>
            </div>

            <div class="clearFix"></div>
        </div>

        <landing-info></landing-info>
    </div>
</template>

<style scoped>
/* General Styles */
.content {
    width: 100%;
    /* Element will be the full page height that starts at the bottom of header element */
    height: calc(100vh - 85px);
    position: relative;
}

.clearFix:after {
    /* Fixes alignment issue if float is used */
    content: "";
    display: table;
    clear: both;
}

/* Custom styles */
/* Text Side ---> */
.txt-side {
    width: 55%;
    height: calc(100vh - 85px);
    float: left;
    margin-block-start: 70px;
}

.txt-content {
    margin-inline-start: 110px;
}

.top-tagline {
    margin-block-end: 15px;
}

.tagline-txt {
    letter-spacing: 3px !important;
    color: rgb(146, 146, 146);
}

.middle-tagline-container {
    font-size: 70px;
    font-family: 'Comfortaa', cursive;
}

.bottom-tagline {
    margin-block-start: 15px;
}

.action-btn-container {
    margin-block-start: 40px;
}

.action-button {
    width: 30%;
    border-radius: 50px;
    border: 1px solid black;
    background: black;
    color: white;
}

.action-button:hover {
    cursor: pointer;
}

.action-btn-txt {
    margin-block-start: 10px;
    margin-block-end: 10px;
    text-align: center;
    font-weight: 800;
}

/* Graphics Side ---> */
.graphics-side {
    width: 45%;
    height: calc(100vh - 85px);
    float: right;
    display: flex;
    align-items: center;
}

.graphics-content {
    width: 100%;
    text-align: center;
}

.character {
    width: 500px;
}
</style>
