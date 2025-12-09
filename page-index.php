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
<section class="latest padding-top-100">6</section>
<section class="subscribe padding-top-100">Subscribe for More</section>


<?php
get_footer();