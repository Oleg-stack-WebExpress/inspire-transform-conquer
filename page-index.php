<?php
get_header();
?>

<!--Типовая секция на две колонки. Inspire-->
<section class="inspire padding-top-100">
    <div class="container">
        <div class="row">
            <!--Текстовая часть-->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="inspire__left-blok">
                    <h1>Inspire, Transform and Conquer: Journey to Personal Excellence
                    </h1>
                    <p>In this captivating blog, embark on a transformative journey to unravel the mysteries of
                        self-inspiration and empowerment.

                    </p>
                    <button type="button" class="btn btn-dark">Subscribe</button>
                </div>
            </div>
            <!--Изобразительная часть-->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img src="<?= assets('images/minman.png'); ?>" alt="man">
            </div>
        </div>
    </div>
</section>

<section class="self-discovery padding-top-100">2</section>
<section class="mindset padding-top-100">3</section>
<section class="emotional padding-top-100">4</section>
<section class="work-life padding-top-100">5</section>
<section class="latest padding-top-100 padding-bottom-100">
    <h2 class="col-12">Latest</h2>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        Pursue Passion Projects: Nurture Creativity
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        Unplug and Recharge: Importance of Downtime
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        Create Supportive Work Culture: Encourage Balance
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        Time Management Strategies: Optimize Productivity
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        Thrive in Remote Work: Tips for Balance
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        Myth of Work-Life Balance: Redefining Success
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        Find Flow: Balance Productivity and Relaxation
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
        Prioritize Self-Care: Demanding World
    </div>
    <button type="button" class="btn btn-dark">
        Load More
    </button>
</section>
<section class="subscribe padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="row">
            <!--Текстовая часть-->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="subscribe__left-blok">
                    <h2>Subscribe for More
                    </h2>
                    <p>Subscribe to our newsletter and be the first to access exclusive content and expert insights.
                    </p>
                    <button type="button" class="btn btn-dark">Subscribe</button>
                </div>
            </div>
            <!--Изобразительная часть-->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img src="<?= assets('images/minfruit.jpg'); ?>" alt="man">
            </div>
        </div>
    </div>
</section>


<?php
get_footer();