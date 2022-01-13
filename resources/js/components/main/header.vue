<template>
    <!-- <div> = Vue's single root element -->
    <div>
        <!-- Holds all header content -->
        <div class="header-container">
            <div class="header-content">
                <!-- Logo container -->
                <div class="logo-container">
                    <span class="logo">stampt</span>
                </div>

                <!-- Menu container -->
                <div class="menu-container">
                    <div class="menu-action">
                        <div class="menu-btn-container">
                            <div class="menu-btn">
                                <!-- Vue FontAwesome Icon call -->
                                <font-awesome-icon icon="fa-solid fa-bars" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- pop-up menu -->
                <div class="pop-menu-container menu-glass-effect">
                    <!-- List Items -->
                    <div class="menu-link-container">
                        <div class="menu-option-container">
                            <div class="menu-option">
                                <!-- Provider by Vue router library -->
                                <router-link :to="{ name: 'home' }">HOME</router-link> <!-- The `to=` holds the path of link that is delcared in `routes.js` -->
                            </div>
                        </div>

                        <div class="menu-option-container">
                            <div class="menu-option">
                                <!-- Provider by Vue router library -->
                                <router-link :to="{ name: 'card-builder' }">CARD BUILDER</router-link> <!-- The `to=` holds the path of link that is delcared in `routes.js` -->
                            </div>
                        </div>

                        <div class="menu-option-container">
                            <div class="menu-option">
                                <router-link :to="{ name: 'home' }">MARKETPLACE</router-link>
                            </div>
                        </div>

                        <div class="menu-option-container">
                            <div class="menu-option">
                                <router-link :to="{ name: 'home' }">HELP</router-link>
                            </div>
                        </div>

                        <div class="menu-option-container">
                            <div class="menu-option">
                                <router-link :to="{ name: 'home' }">CONTACT</router-link>
                            </div>
                        </div>

                        <div class="menu-option-container">
                            <div class="menu-option">
                                <router-link :to="{ name: 'home' }">SIGN UP</router-link>
                            </div>
                        </div>

                        <div class="menu-option-container">
                            <div class="beta-txt-container">
                                <div class="beta-txt">
                                    <p>VERSION: DEV (0.0.1)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Close btn -->
                    <div class="menu-close-container">
                        <div class="close-menu-btn-container">
                            <div class="close-menu-btn">
                                <!-- Vue FontAwesome Icon call -->
                                <font-awesome-icon icon="fa-solid fa-xmark" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearFix"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted () {
        $(document).ready(function () {
            $('.menu-btn').click(function () {
                // fading in menu
                let popUpMenu = $('.pop-menu-container')
                let menuBars = $('.menu-btn')
                popUpMenu.fadeIn(250);
                menuBars.fadeOut();
            });

            $('.close-menu-btn').click(function () {
                // fading in menu
                let popUpMenu = $('.pop-menu-container')
                let menuBars = $('.menu-btn')
                popUpMenu.fadeOut(250);
                menuBars.fadeIn();
            });

            $('.content').click(function () {
                // fading in menu
                let popUpMenu = $('.pop-menu-container')
                let menuBars = $('.menu-btn')
                popUpMenu.fadeOut(250);
                menuBars.fadeIn();
            });

            $('.menu-option').click(function () {
                // fading in menu
                let popUpMenu = $('.pop-menu-container')
                let menuBars = $('.menu-btn')
                popUpMenu.fadeOut(250);
                menuBars.fadeIn();
            });
        });
    }
}
</script>

<style scoped>
.clearFix:after {
    /* Fixes alignment issue if float is used */
    content: "";
    display: table;
    clear: both;
}

.header-container{
    width: 100%;
    height: 85px;
    display: flex;
    align-items: center;
}

.header-content {
    width: 95%;
    height: 70px;
    margin: auto;
    position: relative;
}

.logo-container {
    float: left;
    width: 80%;
    height: 70px;
    text-align: left;
    display: flex;
    align-items: center;
}

.logo {
    font-family: 'Comfortaa', cursive;
    font-size: 30px;
}

.menu-container {
    float: right;
    width: 20%;
    height: 70px;
    text-align: right;
    display: flex;
    align-items: center;
}

.menu-action {
    width: 100%;
    text-align: right;
}

.menu-btn-container {
    width: 25px;
    float: right;
}

.menu-btn {
    font-size: 22.5px;
}

.menu-btn:hover {
    cursor: pointer;
}

.pop-menu-container {
    position: absolute;
    top: 17px;
    right: 0;
    width: 225px;
    z-index: 2000;
    border-radius: 10px;

    display: none;
}

.menu-link-container {
    width: 85%;
    float: left;
}

.menu-close-container {
    width: 15%;
    float: right;
}

.close-menu-btn-container {
    width: 100%;
    height: 42.5px;
    display: flex;
    align-items: center;
}

.close-menu-btn {
    width: 100%;
    text-align: center;
    font-size: 22.5px;
}

.close-menu-btn:hover {
    cursor: pointer;
}

.menu-option-container {
    width: 100%;
    height: 50px;
    display: flex;
    align-items: center;
}

.beta-txt-container {
    width: 100%;
    height: 20px;
    display: flex;
    align-items: center;
}

.menu-option {
    width: 100%;
    text-align: center;
}

.menu-logo {
    width: 40%;
}

.beta-txt {
    width: 100%;
    text-align: center;
    font-weight: 300;
    font-size: 10px;
    color: grey;
}
</style>
