<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package paulodesa
 */

get_header();
?>

    <section id="intro" class="jumbotron">
        <div class="centered text-center">
            <p class="sub-heading">Seja bem vindo!</p>
            <h2 class="heading">Em que posso te ajudar?</h2>
        </div>
        <img class="call-to-action" src="<?php echo get_template_directory_uri(); ?>/assets/images/justice-crown-logo.svg">
        <div class="scroll-down">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/scroll-down.svg">
        </div>
    </section>

    <main id="main" class="site-main">

        <section id="about" class="scroll-animations pt-75 pb-75">
            <div class="text-center">
                <p class="sub-heading">OAB/DF 64294</p>
                <h2 class="heading mb-30">Dr. Paulo Henrique de Sá</h2>

                <div class="about-card-wrapper mb-75 mt-75">
                    <div class="card clear-fix">
                        <div class="card-image animated invisible" data-class-in="fadeInLeft" data-class-out="">
                            <img src="https://www.stanchierifamilylaw.com//wp-content/themes/sfl2019/img/board-room.jpg"
                                 alt="" class="photo">
                        </div>
                        <div class="card-body animated invisible" data-class-in="fadeInRight" data-class-out="">
                            <h3>Sobre</h3>
                            <p>Eu ajudo consumidores que se sentiram prejudicados a encontrar uma solução jurídica e
                                satisfatória dentro de uma relação comercial.</p>
                            <p><a href="#">Conheça</a></p>
                        </div>
                    </div>
                </div>

                <div class="about-card-wrapper mb-75 mt-75">
                    <div class="card image-align-right clear-fix">
                        <div class="card-image animated invisible" data-class-in="fadeInRight" data-class-out="">
                            <img src="https://www.stanchierifamilylaw.com//wp-content/themes/sfl2019/img/board-room.jpg"
                                 alt="" class="photo">
                        </div>
                        <div class="card-body animated invisible" data-class-in="fadeInLeft" data-class-out="">
                            <h3>Serviços</h3>
                            <p>Eu ajudo consumidores que se sentiram prejudicados a encontrar uma solução jurídica e
                                satisfatória dentro de uma relação comercial.</p>
                            <p><a href="#">Veja todos</a></p>
                        </div>
                    </div>
                </div>

                <div class="about-card-wrapper mb-75 mt-75">
                    <div class="card clear-fix">
                        <div class="card-image animated invisible" data-class-in="fadeInLeft" data-class-out="">
                            <img src="https://www.stanchierifamilylaw.com//wp-content/themes/sfl2019/img/board-room.jpg"
                                 alt="" class="photo">
                        </div>
                        <div class="card-body animated invisible" data-class-in="fadeInRight" data-class-out="">
                            <h3>Orientação jurídica</h3>
                            <p>Eu ajudo consumidores que se sentiram prejudicados a encontrar uma solução jurídica e
                                satisfatória dentro de uma relação comercial.</p>
                            <p><a href="#">Veja todos</a></p>
                        </div>
                    </div>
                </div>

                <!--<p>Nos dias de hoje são inúmeras as transações comerciais ocorridas no dia a dia, técnicas para colocar o consumidor contra a parede e vender um determinado produto de forma a forçar com todos os argumentos possíveis a compra de um item, por vezes utilizando-se de práticas abusivas e desleais, o que acaba por colocar o consumidor em uma situação delicada. Sendo assim, nessa página você irá encontrar dicas, artigos e orientação jurídica especializada sobre seus direitos.</p>-->
            </div>
            <div class="invisible footer-sep" style="width: 100%; height: 1px;"></div>
        </section>

    </main><!-- #main -->

<?php
get_footer();
