<template>
    <div>
        <div class="page-heading">
            <div class="heading-container">
                <img src="/images/landing/landing-info-text.png" alt="who we help?" class="heading">
            </div>
        </div>

        <div class="business-side">
            <info-card
                image="/images/landing/landing-info-graphic-business.png"
                title="BUSINESSES"
                content="Making the process of loyalty cards less complicated and more affordable, stampt allows
                businesses to create and customize multiple virtual loyalty cards that uses QR technology to add
                stamps to a customers loyalty card.">
            </info-card>
        </div>

        <div class="customer-side">
            <info-card
                image="/images/landing/landing-info-graphic-customer.png"
                title="CUSTOMERS"
                content="Stampt enables you to take part in and enjoy multiple loyalty programs and schemes at the
                same time and continually progress towards rewards without having to remember your physical card.">
            </info-card>
        </div>

        <div class="clearFix">

        </div>
    </div>
</template>

<style scoped>
/* General Styles */
.content {
    width: 100%;
    /* Element will be the full page height that starts at the bottom of header element */
    height: 100vh;
    position: relative;
}

/* Custom styles */
.page-heading {
    width: 100%;
    height: 150px;
    display: flex;
    align-items: center;
}

.heading-container {
    width: 100%;
    text-align: center;
}

.heading {
    width: 400px;
}

.business-side {
    width: 50%;
    height: calc(100vh - 150px);
    float: left;

    display: flex;
    align-items: center;
}

.customer-side {
    width: 50%;
    height: calc(100vh - 150px);
    float: left;

    display: flex;
    align-items: center;
}
</style>

<script>
import infoCard from "./info-card"

export default {
    components: {
        infoCard
    }
}
</script>
