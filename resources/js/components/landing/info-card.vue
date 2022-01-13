<template>
    <div class="card-container glass-effect">
        <div class="illustration-container">
            <img :src="image" alt="Businesses" class="illustration">
        </div>

        <div class="title-container">{{ title }}</div>

        <div class="paragraph-container">{{ content }}</div>

        <div class="action-btn-container">
            <div class="action-button">
                <div class="action-btn-txt">
                    SIGN UP
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.card-container {
    width: 500px;
    height: 315px;
    margin: auto;
    border-radius: 10px;
    position: relative;
}

.illustration-container {
    top: -75px;
    left: 50%;
    transform: translate(-50%, 0);
    position: absolute;
    width: 150px;
    height: 150px;
}

.illustration {
    width: 100%;
}

.title-container {
    width: 90%;
    margin: auto;
    text-align: center;
    margin-block-start: 85px;
    margin-block-end: 20px;
}

.paragraph-container {
    width: 90%;
    margin: auto;
    margin-block-end: 30px;
    text-align: center;
}

.action-btn-container {
    width: 90%;
    margin: auto;
    margin-block-end: 20px;
    text-align: center;
}

.action-btn-container {
    margin-block-end: 20px;
}

.action-button {
    width: 40%;
    margin: auto;
    border-radius: 40px;
    border: 1px solid black;
    background: black;
    color: white;
}

.action-button:hover {
    cursor: pointer;
}

.action-btn-txt {
    margin-block-start: 5px;
    margin-block-end: 5px;
    text-align: center;
}
</style>

<script>
export default {
    props: ['image','title', 'content']
}
</script>
