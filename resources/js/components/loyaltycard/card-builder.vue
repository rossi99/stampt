<!--<template>-->
<!--    <div class="row">-->
<!--        <div class="col-3">-->
<!--            <h3>Draggable 1</h3>-->
<!--            <draggable-->
<!--                class="dragArea list-group"-->
<!--                :list="list1"-->
<!--                :group="{ name: 'people', pull: 'clone', put: false }"-->
<!--                @change="log"-->
<!--            >-->
<!--                <div-->
<!--                    class="list-group-item"-->
<!--                    v-for="element in list1"-->
<!--                    :key="element.name"-->
<!--                >-->
<!--                    {{ element.name }}-->
<!--                </div>-->
<!--            </draggable>-->
<!--        </div>-->

<!--        <div class="col-3">-->
<!--            <h3>Draggable 2</h3>-->
<!--            <draggable-->
<!--                class="dragArea list-group"-->
<!--                :list="list2"-->
<!--                group="people"-->
<!--                @change="log"-->
<!--            >-->
<!--                <div-->
<!--                    class="list-group-item"-->
<!--                    v-for="element in list2"-->
<!--                    :key="element.name"-->
<!--                >-->
<!--                    {{ element.name }}-->
<!--                </div>-->
<!--            </draggable>-->
<!--        </div>-->

<!--        <rawDisplayer class="col-3" :value="list1" title="List 1" />-->

<!--        <rawDisplayer class="col-3" :value="list2" title="List 2" />-->
<!--    </div>-->
<!--</template>-->

<!--<script>-->
<!--import draggable from 'vuedraggable'-->
<!--export default {-->
<!--    name: "clone",-->
<!--    display: "Clone",-->
<!--    order: 2,-->
<!--    components: {-->
<!--        draggable-->
<!--    },-->
<!--    data() {-->
<!--        return {-->
<!--            list1: [-->
<!--                { name: "John", id: 1 },-->
<!--                { name: "Joao", id: 2 },-->
<!--                { name: "Jean", id: 3 },-->
<!--                { name: "Gerard", id: 4 }-->
<!--            ],-->
<!--            list2: [-->
<!--                { name: "Juan", id: 5 },-->
<!--                { name: "Edgard", id: 6 },-->
<!--                { name: "Johnson", id: 7 }-->
<!--            ]-->
<!--        };-->
<!--    },-->
<!--    methods: {-->
<!--        log: function(evt) {-->
<!--            window.console.log(evt);-->
<!--        }-->
<!--    }-->
<!--};-->
<!--</script>-->
<!--<style scoped></style>-->

<template>
    <div class="content" id="content">
        <div class="card-element panel">
            <div class="item-container element glass-effect">
                <div class="heading-container">
                    <div class="header-content">
                        <p class="heading">Card Elements</p>
                        <p class="sub-heading">Drag and drop to add to your loyalty card</p>
                    </div>
                </div>

                <!-- Take all elements objects list -->
                <draggable class="dragArea list-group" :list="cardElements" :group="{ name: 'people', pull: 'clone', put: false }" @change="log">
                    <div class="list-group-item" v-for="element in cardElements" :key="element.name">
                        {{ element.name }}
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
                            <div class="lvl1-1 bucket empty" v-for="element in arrA" :key="element.name">
                                {{ element.name }}
                            </div>
                        </draggable>

                        <div class="lvl1-2 bucket empty"></div> <!-- :list="arrB" group="buckets" -->
                        <div class="lvl1-3 bucket empty"></div> <!-- :list="arrC" group="buckets" -->
                        <div class="lvl1-4 bucket empty"></div> <!-- :list="arrD" group="buckets" -->
                        <div class="lvl1-5 bucket empty"></div> <!-- :list="arrE" group="buckets" -->

                        <!-- Level 2 buckets -->
                        <div class="lvl2-1 bucket empty"></div> <!-- :list="arrF" group="buckets" -->
                        <div class="lvl2-2 bucket empty"></div> <!-- :list="arrG" group="buckets" -->
                        <div class="lvl2-3 bucket empty"></div> <!-- :list="arrH" group="buckets" -->
                        <div class="lvl2-4 bucket empty"></div> <!-- :list="arrI" group="buckets" -->
                        <div class="lvl2-5 bucket empty"></div> <!-- :list="arrJ" group="buckets" -->

                        <!-- Level 3 buckets -->
                        <div class="lvl3-1 bucket empty"></div> <!-- :list="arrK" group="buckets" -->
                        <div class="lvl3-2 bucket empty"></div> <!-- :list="arrL" group="buckets" -->
                        <div class="lvl3-3 bucket empty"></div> <!-- :list="arrM" group="buckets" -->
                        <div class="lvl3-4 bucket empty"></div> <!-- :list="arrN" group="buckets" -->
                        <div class="lvl3-5 bucket empty"></div> <!-- :list="arrO" group="buckets" -->
                    </div>
                </div>
            </div>
        </div>

        <div class="clearFix"></div>

        <rawDisplayer class="col-3" :value="arrA" title="ArrA" />

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
            arrA: []
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
    width: 30%;
}

.card-preview {
    width: 70%;
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
    width: calc(100% - 15px);
    height: 80px;
    margin-inline-start: 15px;
    display: flex;
    align-items: center;
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
