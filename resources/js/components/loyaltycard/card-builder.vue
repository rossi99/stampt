<template>
    <div class="content" id="content">
        <div class="card-element panel">
            <div class="item-container element glass-effect">
                <div class="heading-container">
                    <div class="header-content">
                        <div class="header-title">
                            <span class="heading">Card Elements</span>
                        </div>

                        <div class="heading-icon">
                            <font-awesome-icon icon="fas fa-info-circle" />
                        </div>

                        <div class="clearFix"></div>
                    </div>
                </div>

                <!-- Take all elements objects list -->
                <draggable :list="cardElements" :group="{ name: 'cardItem', pull: 'clone', put: false }" @change="log">
                    <div class="card-drag-element" v-for="element in cardElements" :key="element.name" style="cursor: move">
                        <div v-if="element.name === 'Logo'" class="item-holder">
                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                        </div>

                        <div v-if="element.name === 'Stamp'" class="item-holder">
                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                        </div>
                    </div>
                </draggable>

            </div>
        </div>

        <div class="card-preview panel">
            <div class="item-container preview glass-effect">
                <div class="heading-container">
                    <div class="header-content">
                        <p class="heading">Preview Card</p>
                        <p class="sub-heading">Here is what your card will look like to a customer</p>
                    </div>
                </div>

                <div class="card-holder">
                    <div class="blank-card">
                        <!-- Level 1 buckets -->
                        <div class="lvl1-1 bucket empty" id="bucketA">
                            <draggable class="drop-area" :list="arrA" group="cardItem" @change="log">
                                <div style="width: 100%; text-align: center">
                                    <div v-for="element in arrA" :key="element.name">
                                        <div v-if="element.name === 'Logo'">
                                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                                        </div>

                                        <div v-if="element.name === 'Stamp'">
                                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                        </div>

                        <div class="lvl1-2 bucket empty" id="bucketB">
                            <draggable class="drop-area" :list="arrB" group="cardItem" @change="log">
                                <div style="width: 100%; text-align: center">
                                    <div v-for="element in arrB" :key="element.name">
                                        <div v-if="element.name === 'Logo'">
                                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                                        </div>

                                        <div v-if="element.name === 'Stamp'">
                                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                        </div>

                        <div class="lvl1-3 bucket empty" id="bucketC">
                            <draggable class="drop-area" :list="arrC" group="cardItem" @change="log">
                                <div style="width: 100%; text-align: center">
                                    <div v-for="element in arrC" :key="element.name">
                                        <div v-if="element.name === 'Logo'">
                                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                                        </div>

                                        <div v-if="element.name === 'Stamp'">
                                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                        </div>

                        <div class="lvl1-4 bucket empty" id="bucketD">
                            <draggable class="drop-area" :list="arrD" group="cardItem" @change="log">
                                <div style="width: 100%; text-align: center">
                                    <div v-for="element in arrD" :key="element.name">
                                        <div v-if="element.name === 'Logo'">
                                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                                        </div>

                                        <div v-if="element.name === 'Stamp'">
                                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                        </div>

                        <div class="lvl1-5 bucket empty" id="bucketE">
                            <draggable class="drop-area" :list="arrE" group="cardItem" @change="log">
                                <div style="width: 100%; text-align: center">
                                    <div v-for="element in arrE" :key="element.name">
                                        <div v-if="element.name === 'Logo'">
                                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                                        </div>

                                        <div v-if="element.name === 'Stamp'">
                                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                        </div>

                        <div class="lvl2-1 bucket empty" id="bucketF">
                            <draggable class="drop-area" :list="arrF" group="cardItem" @change="log">
                                <div style="width: 100%; text-align: center">
                                    <div v-for="element in arrF" :key="element.name">
                                        <div v-if="element.name === 'Logo'">
                                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                                        </div>

                                        <div v-if="element.name === 'Stamp'">
                                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                        </div>

                        <div class="lvl2-2 bucket empty" id="bucketG">
                            <draggable class="drop-area" :list="arrG" group="cardItem" @change="log">
                                <div style="width: 100%; text-align: center">
                                    <div v-for="element in arrG" :key="element.name">
                                        <div v-if="element.name === 'Logo'">
                                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                                        </div>

                                        <div v-if="element.name === 'Stamp'">
                                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                        </div>

                        <div class="lvl2-3 bucket empty" id="bucketH">
                            <draggable class="drop-area" :list="arrH" group="cardItem" @change="log">
                                <div style="width: 100%; text-align: center">
                                    <div v-for="element in arrH" :key="element.name">
                                        <div v-if="element.name === 'Logo'">
                                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                                        </div>

                                        <div v-if="element.name === 'Stamp'">
                                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                        </div>

                        <div class="lvl2-4 bucket empty" id="bucketI">
                            <draggable class="drop-area" :list="arrI" group="cardItem" @change="log">
                                <div style="width: 100%; text-align: center">
                                    <div v-for="element in arrI" :key="element.name">
                                        <div v-if="element.name === 'Logo'">
                                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                                        </div>

                                        <div v-if="element.name === 'Stamp'">
                                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                        </div>

                        <div class="lvl2-5 bucket empty" id="bucketJ">
                            <draggable class="drop-area" :list="arrJ" group="cardItem" @change="log">
                                <div style="width: 100%; text-align: center">
                                    <div v-for="element in arrJ" :key="element.name">
                                        <div v-if="element.name === 'Logo'">
                                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                                        </div>

                                        <div v-if="element.name === 'Stamp'">
                                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                        </div>

                        <div class="lvl3-1 bucket empty" id="bucketK">
                            <draggable class="drop-area" :list="arrK" group="cardItem" @change="log">
                                <div style="width: 100%; text-align: center">
                                    <div v-for="element in arrK" :key="element.name">
                                        <div v-if="element.name === 'Logo'">
                                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                                        </div>

                                        <div v-if="element.name === 'Stamp'">
                                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                        </div>

                        <div class="lvl3-2 bucket empty" id="bucketL">
                            <draggable class="drop-area" :list="arrL" group="cardItem" @change="log">
                                <div style="width: 100%; text-align: center">
                                    <div v-for="element in arrL" :key="element.name">
                                        <div v-if="element.name === 'Logo'">
                                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                                        </div>

                                        <div v-if="element.name === 'Stamp'">
                                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                        </div>

                        <div class="lvl3-3 bucket empty" id="bucketM">
                            <draggable class="drop-area" :list="arrM" group="cardItem" @change="log">
                                <div style="width: 100%; text-align: center">
                                    <div v-for="element in arrM" :key="element.name">
                                        <div v-if="element.name === 'Logo'">
                                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                                        </div>

                                        <div v-if="element.name === 'Stamp'">
                                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                        </div>

                        <div class="lvl3-4 bucket empty" id="bucketN">
                            <draggable class="drop-area" :list="arrN" group="cardItem" @change="log">
                                <div style="width: 100%; text-align: center">
                                    <div v-for="element in arrN" :key="element.name">
                                        <div v-if="element.name === 'Logo'">
                                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                                        </div>

                                        <div v-if="element.name === 'Stamp'">
                                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                        </div>

                        <div class="lvl3-5 bucket empty" id="bucketO">
                            <draggable class="drop-area" :list="arrO" group="cardItem" @change="log">
                                <div style="width: 100%; text-align: center">
                                    <div v-for="element in arrO" :key="element.name">
                                        <div v-if="element.name === 'Logo'">
                                            <img src="/images/card-builder/logo.png" class="logo" alt="logo">
                                        </div>

                                        <div v-if="element.name === 'Stamp'">
                                            <img src="/images/card-builder/stamp.png" class="stamp" alt="stamp">
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearFix"></div>
    </div>
</template>

<script>
// Draggable Script
import draggable from 'vuedraggable'

export default {
    name: "clone",
    display: "Clone",
    order: 2,
    components: {
        draggable
    },

    data() {
        return {
            cardElements: [
                { name: "Logo", id: 1 },
                { name: "Stamp", id: 2 }
            ],
            arrA: [],
            arrB: [],
            arrC: [],
            arrD: [],
            arrE: [],
            arrF: [],
            arrG: [],
            arrH: [],
            arrI: [],
            arrJ: [],
            arrK: [],
            arrL: [],
            arrM: [],
            arrN: [],
            arrO: []
        };
    },
    methods: {
        log: function(evt) {
            window.console.log(evt);
        }
    },
    watch: {
        arrA: function (val) {
            let bucketA = document.getElementById("bucketA");

            // remove empty class
            if (val.length > 0) {
                bucketA.classList.remove("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrA.pop();
            }
        },
        arrB: function (val) {
            let bucketB = document.getElementById("bucketB");

            // remove empty class
            if (val.length > 0) {
                bucketB.classList.remove("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrB.pop();
            }
        },
        arrC: function (val) {
            let bucketC = document.getElementById("bucketC");

            // remove empty class
            if (val.length > 0) {
                bucketC.classList.remove("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrC.pop();
            }
        },
        arrD: function (val) {
            let bucketD = document.getElementById("bucketD");

            // remove empty class
            if (val.length > 0) {
                bucketD.classList.remove("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrD.pop();
            }
        },
        arrE: function (val) {
            let bucketE = document.getElementById("bucketE");

            // remove empty class
            if (val.length > 0) {
                bucketE.classList.remove("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrE.pop();
            }
        },
        arrF: function (val) {
            let bucketF = document.getElementById("bucketF");

            // remove empty class
            if (val.length > 0) {
                bucketF.classList.remove("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrF.pop();
            }
        },
        arrG: function (val) {
            let bucketG = document.getElementById("bucketG");

            // remove empty class
            if (val.length > 0) {
                bucketG.classList.remove("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrG.pop();
            }
        },
        arrH: function (val) {
            let bucketH = document.getElementById("bucketH");

            // remove empty class
            if (val.length > 0) {
                bucketH.classList.remove("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrH.pop();
            }
        },
        arrI: function (val) {
            let bucketI = document.getElementById("bucketI");

            // remove empty class
            if (val.length > 0) {
                bucketI.classList.remove("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrI.pop();
            }
        },
        arrJ: function (val) {
            let bucketJ = document.getElementById("bucketJ");

            // remove empty class
            if (val.length > 0) {
                bucketJ.classList.remove("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrJ.pop();
            }
        },
        arrK: function (val) {
            let bucketK = document.getElementById("bucketK");

            // remove empty class
            if (val.length > 0) {
                bucketK.classList.remove("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrK.pop();
            }
        },
        arrL: function (val) {
            let bucketL = document.getElementById("bucketL");

            // remove empty class
            if (val.length > 0) {
                bucketL.classList.remove("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrL.pop();
            }
        },
        arrM: function (val) {
            let bucketM = document.getElementById("bucketM");

            // remove empty class
            if (val.length > 0) {
                bucketM.classList.remove("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrM.pop();
            }
        },
        arrN: function (val) {
            let bucketN = document.getElementById("bucketN");

            // remove empty class
            if (val.length > 0) {
                bucketN.classList.remove("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrN.pop();
            }
        },
        arrO: function (val) {
            let bucketO = document.getElementById("bucketO");

            // remove empty class
            if (val.length > 0) {
                bucketO.classList.remove("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrO.pop();

            }
        }
    }
};
</script>

<style scoped>
.content {
    width: 100%;
    height: calc(100vh - 85px); /* Element will be the full page height that starts at the bottom of header element */
    position: relative;
}

.card-element {
    width: 15%;
}

.card-preview {
    width: 85%;
}

.panel {
    height: calc(100vh - 85px);
    float: left;
    display: flex;
    align-items: center;
}

.element {
    width: 90%;
}

.preview {
    width: 95%;
}

.heading-container {
    width: calc(100% - 30px);
    height: 80px;
    margin-inline-start: 15px;
    margin-inline-end: 15px;
    display: flex;
    align-items: center;
}

.header-content {
    width: 100%;
}

.header-title {
    width: 80%;
    float: left;
}

.heading-icon {
    width: 20%;
    float: right;
    text-align: right;
}

.heading {
    font-weight: 800;
}

.sub-heading {
    color: darkgrey;
}

.item-container {
    height: calc(90vh - 85px);
    margin: auto;
    border-radius: 15px;
    overflow: scroll;
}

.card-drag-element {
    width: 90%;
    height: 120px;
    margin: auto;
    display: flex;
    align-items: center;
    border-bottom: 1px solid rgba(210, 210, 210, 0.4);
}

.card-drag-element:last-child {
    border-bottom: none;
}

.item-holder {
    width: 100%;
    text-align: center;
}

.stamp {
    width: 75px;
    height: 75px;
    margin: auto;
}

.logo {
    width: 80px;
    height: 80px;
    margin: auto;
    border-radius: 50%;
}

.card-holder {
    width: 100%;
    height: calc(100% - 80px);
    display: flex;
    align-items: center;
}

.blank-card {
    width: 600px;
    height: 360px;
    border-radius: 10px;
    background: white;
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.4);
    margin: auto;
    position: relative;
}

.bucket {
    /* Size of bucket */
    width: 120px;
    height: 120px;

    /* movable */
    position: absolute;

    /* Smooth fade */
    transition: all 0.2s;
}

.drop-area {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
}

.empty {
    /* Outline */
    border: 1px dashed rgba(160, 160, 160, 0.5);
}

.empty:hover {
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.2);
}

/* Top layer buckets */
.lvl1-1{
    top: 0;
    left: 0;

    /* fit with card */
    border-top-left-radius: 10px;
}

.lvl1-2{
    top: 0;
    left: 20%;
}

.lvl1-3{
    top: 0;
    left: 40%;
}

.lvl1-4{
    top: 0;
    left: 60%;
}

.lvl1-5{
    top: 0;
    left: 80%;

    /* fit with card */
    border-top-right-radius: 10px;
}

/* Middle layer buckets */
.lvl2-1{
    top: 33.3%;
    left: 0;
}

.lvl2-2{
    top: 33.3%;
    left: 20%;
}

.lvl2-3{
    top: 33.3%;
    left: 40%;
}

.lvl2-4{
    top: 33.3%;
    left: 60%;
}

.lvl2-5{
    top: 33.3%;
    left: 80%;
}

/* Bottom layer buckets */
.lvl3-1{
    top: 66.6%;
    left: 0;

    /* fit with card */
    border-bottom-left-radius: 10px;
}

.lvl3-2{
    top: 66.6%;
    left: 20%;
}

.lvl3-3{
    top: 66.6%;
    left: 40%;
}

.lvl3-4{
    top: 66.6%;
    left: 60%;
}

.lvl3-5{
    top: 66.6%;
    left: 80%;

    /* fit with card */
    border-bottom-right-radius: 10px;
}
</style>
