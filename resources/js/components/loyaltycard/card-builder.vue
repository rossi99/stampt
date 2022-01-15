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
                <draggable class="dragArea list-group" style="max-width: 120px" :list="cardElements" :group="{ name: 'cardItem', pull: 'clone', put: false }" @change="log">
                    <div class="list-group-item" v-for="element in cardElements" :key="element.name">
                        <div v-if="element.name === 'Logo'">
                            <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                        </div>

                        <div v-if="element.name === 'Stamp'">
                            <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
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
                        <draggable class="dragArea list-group" :list="arrA" group="cardItem" @change="log">
                            <div class="lvl1-1 bucket empty">
                                <div v-for="element in arrA" :key="element.name">
                                    <div v-if="element.name === 'Logo'">
                                        <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                                    </div>

                                    <div v-if="element.name === 'Stamp'">
                                        <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
                                    </div>
                                </div>
                            </div>
                        </draggable>

                        <draggable class="dragArea list-group" :list="arrB" group="cardItem" @change="log">
                            <div class="lvl1-2 bucket empty">
                                <div v-for="element in arrB" :key="element.name">
                                    <div v-if="element.name === 'Logo'">
                                        <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                                    </div>

                                    <div v-if="element.name === 'Stamp'">
                                        <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
                                    </div>
                                </div>
                            </div>
                        </draggable>

                        <draggable class="dragArea list-group" :list="arrC" group="cardItem" @change="log">
                            <div class="lvl1-3 bucket empty">
                                <div v-for="element in arrC" :key="element.name">
                                    <div v-if="element.name === 'Logo'">
                                        <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                                    </div>

                                    <div v-if="element.name === 'Stamp'">
                                        <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
                                    </div>
                                </div>
                            </div>
                        </draggable>

                        <draggable class="dragArea list-group" :list="arrD" group="cardItem" @change="log">
                            <div class="lvl1-4 bucket empty">
                                <div v-for="element in arrD" :key="element.name">
                                    <div v-if="element.name === 'Logo'">
                                        <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                                    </div>

                                    <div v-if="element.name === 'Stamp'">
                                        <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
                                    </div>
                                </div>
                            </div>
                        </draggable>

                        <draggable class="dragArea list-group" :list="arrE" group="cardItem" @change="log">
                            <div class="lvl1-5 bucket empty">
                                <div v-for="element in arrE" :key="element.name">
                                    <div v-if="element.name === 'Logo'">
                                        <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                                    </div>

                                    <div v-if="element.name === 'Stamp'">
                                        <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
                                    </div>
                                </div>
                            </div>
                        </draggable>

                        <!-- Level 2 buckets -->
                        <draggable class="dragArea list-group" :list="arrF" group="cardItem" @change="log">
                            <div class="lvl2-1 bucket empty">
                                <div v-for="element in arrF" :key="element.name">
                                    <div v-if="element.name === 'Logo'">
                                        <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                                    </div>

                                    <div v-if="element.name === 'Stamp'">
                                        <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
                                    </div>
                                </div>
                            </div>
                        </draggable>

                        <draggable class="dragArea list-group" :list="arrG" group="cardItem" @change="log">
                            <div class="lvl2-2 bucket empty">
                                <div v-for="element in arrG" :key="element.name">
                                    <div v-if="element.name === 'Logo'">
                                        <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                                    </div>

                                    <div v-if="element.name === 'Stamp'">
                                        <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
                                    </div>
                                </div>
                            </div>
                        </draggable>

                        <draggable class="dragArea list-group" :list="arrH" group="cardItem" @change="log">
                            <div class="lvl2-3 bucket empty">
                                <div v-for="element in arrH" :key="element.name">
                                    <div v-if="element.name === 'Logo'">
                                        <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                                    </div>

                                    <div v-if="element.name === 'Stamp'">
                                        <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
                                    </div>
                                </div>
                            </div>
                        </draggable>

                        <draggable class="dragArea list-group" :list="arrI" group="cardItem" @change="log">
                            <div class="lvl2-4 bucket empty">
                                <div v-for="element in arrI" :key="element.name">
                                    <div v-if="element.name === 'Logo'">
                                        <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                                    </div>

                                    <div v-if="element.name === 'Stamp'">
                                        <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
                                    </div>
                                </div>
                            </div>
                        </draggable>

                        <draggable class="dragArea list-group" :list="arrJ" group="cardItem" @change="log">
                            <div class="lvl2-5 bucket empty">
                                <div v-for="element in arrJ" :key="element.name">
                                    <div v-if="element.name === 'Logo'">
                                        <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                                    </div>

                                    <div v-if="element.name === 'Stamp'">
                                        <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
                                    </div>
                                </div>
                            </div>
                        </draggable>

                        <!-- Level 3 buckets -->
                        <draggable class="dragArea list-group" :list="arrK" group="cardItem" @change="log">
                            <div class="lvl3-1 bucket empty">
                                <div v-for="element in arrK" :key="element.name">
                                    <div v-if="element.name === 'Logo'">
                                        <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                                    </div>

                                    <div v-if="element.name === 'Stamp'">
                                        <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
                                    </div>
                                </div>
                            </div>
                        </draggable>

                        <draggable class="dragArea list-group" :list="arrL" group="cardItem" @change="log">
                            <div class="lvl3-2 bucket empty">
                                <div v-for="element in arrL" :key="element.name">
                                    <div v-if="element.name === 'Logo'">
                                        <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                                    </div>

                                    <div v-if="element.name === 'Stamp'">
                                        <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
                                    </div>
                                </div>
                            </div>
                        </draggable>

                        <draggable class="dragArea list-group" :list="arrM" group="cardItem" @change="log">
                            <div class="lvl3-3 bucket empty">
                                <div v-for="element in arrM" :key="element.name">
                                    <div v-if="element.name === 'Logo'">
                                        <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                                    </div>

                                    <div v-if="element.name === 'Stamp'">
                                        <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
                                    </div>
                                </div>
                            </div>
                        </draggable>

                        <draggable class="dragArea list-group" :list="arrN" group="cardItem" @change="log">
                            <div class="lvl3-4 bucket empty">
                                <div v-for="element in arrN" :key="element.name">
                                    <div v-if="element.name === 'Logo'">
                                        <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                                    </div>

                                    <div v-if="element.name === 'Stamp'">
                                        <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
                                    </div>
                                </div>
                            </div>
                        </draggable>

                        <draggable class="dragArea list-group" :list="arrO" group="cardItem" @change="log">
                            <div class="lvl3-5 bucket empty">
                                <div v-for="element in arrO" :key="element.name">
                                    <div v-if="element.name === 'Logo'">
                                        <img src="/images/card-builder/logo.png" class="logo" alt="div logo">
                                    </div>

                                    <div v-if="element.name === 'Stamp'">
                                        <img src="/images/card-builder/stamp.png" class="stamp" alt="div stamp">
                                    </div>
                                </div>
                            </div>
                        </draggable>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearFix"></div>
    </div>
</template>

<script>
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
    width: 20%;
}

.card-preview {
    width: 80%;
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

.item-row {
    width: 90%;
    height: 120px;
    margin: auto;
    display: flex;
    align-items: center;
    border-bottom: 1px solid rgba(210, 210, 210, 0.4);
}

.item-row:last-child {
    border-bottom: none;
}

.item-info {
    width: 95%;
    margin: auto;
}

.label {
    width: 70%;
    height: 70px;
    float: left;
    display: flex;
    align-items: center;
}

.element-container {
    width: 30%;
    height: 70px;
    float: left;
    display: flex;
    align-items: center;
}

.element-holder {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
}

.stamp-holder {
    border-radius: 50%;
}

.element-holder:hover {
    cursor: pointer;
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.4);
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

.bucket:hover {
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.4);
    cursor: pointer;
}

.empty {
    /* Show area for user to drop item into */
    background: rgba(210, 210, 210, 0.1);
    border: 1px dashed rgba(210, 210, 210, 0.4);
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
