<?php
/*
 * Template Name: Шаблон чайной страницы
 */
    get_header();
    ?>
    <div class="clear"></div>
    <!-- Header condition2 starts here -->

    <!-- **********************header ends************************* -->
    <!-- **********************slider************************* -->
<div class="product-sidebar-wrap">
    <div class="product-sidebar">
        <?php dynamic_sidebar( 'product-page-menu' ); ?>
    </div>
</div>
<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php $bgColor = get_post_meta( get_the_ID(), 'bg_color' ); ?>
    <?php $bgImage = get_post_meta( get_the_ID(), 'bg_image' ); ?>
    <div class="tea-wooden-bg">
        <div class="tea-wrap" style="background: <?php echo $bgColor[0].' url(\''.$bgImage[0].'\') no-repeat top right'; ?>">
            <div class="tea-inner">
                <div class="tea-title"><?php echo the_title(); ?></div>
                <div class="tea-description"><?php echo the_content(); ?></div>
                <div class="tea-thumbnail">
                    <?php the_post_thumbnail('tea_page_thumbnail'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>
<!--End Loop-->
<div class="front_block_2" style="height: 250px;">
    <div class="slide-bottom-description current" data-slide-id="1">
        <div class="adonisc font-60 text-center color-white">7 МЛРД</div>
        <div class="adonisc font-20 uppercase text-center color-white">ПАКЕТИКОВ ИДЕАЛЬНОГО ЧАЯ В ГОД.</div>
        <div class="adonisc font-35 uppercase text-center color-white">ВЫБЕРИ СВОЙ</div>
    </div>
</div>
    <div class="front_block_9" style="height: 650px;background-image: none;">
        <div class="fb-9-wrap" style="height: 650px;background-image: none;">
            <div class="fb-9-left-2">
                <h1 class="adonisc font-65 color-red" style="margin-bottom: 50px;">РАССЫЛКА:</h1>

                <input type="text" placeholder="Имя">
                <input type="text" placeholder="E-mail">
                <input type="submit" class="myriad" value="Подписаться">
                <div class="always-on-touch">
                    <div class="color-red font-25">Мы всегда на связи!</div>
                    <p>Мы стараемся работать так, чтобы Вы были довольны.
                        Если Вы хотите задать вопрос или написать нам, просто
                        заполните следующую форму и мы свяжемся с Вами в ближайшее
                        время.</p>
                    <p>
                        Благодарим Вас за интерес к нашей компании!</p>
                </div>
            </div>
            <div class="fb-9-fullwidth">
                <p>TEEKANNE Group – это группа компаний, в состав которой входят: Teekanne GmbH & Co. KG, Дюссельдорф, Германия; Teehaus GmbH, Радебойль, Германия; Teekanne Ges. mbH, Зальцбург,
                Австрия; Teekanne Polska sp.z.o.o., Краков, Польша; Teekanne s.r.o., Братислава, Словакия; Teekanne Ceska spol.s.r.o., Прага, Чехия, Pompadour Té S.r.l./GmbH, Больцано, Италия; Pompadour Ibérica
                S.A., Аликанте, Испания и Redco Foods Inc., Виндзор, Коннектикут, США. В дальнейшем для обозначения этих компаний будет использоваться «TEEKANNE» или «TEEKANNE Group».
                </p>
                <p>Все материалы на сайте TEEKANNE защищены авторским правом и предназначены исключительно для частного просмотра и некоммерческого использования. Воспроизведение содержимого
                сайта возможно только при условии сохранения информации об авторском праве и других сведений о праве собственности TEEKANNE. Не разрешается изменять материалы этого сайта, а также
                воспроизводить, выставлять на всеобщее обозрение, демонстрировать, распространять или использовать любым другим образом для общественных или коммерческих целей без
                предварительного письменного разрешения TEEKANNE. При нарушении этих правил Вы должны немедленно уничтожить распечатанные или загруженные материалы. Мы оставляем за собой
                право требовать возмещения убытков.</p>
            </div>
        </div>
    </div>
    <div class="front_block_10">
    </div>
    <!-- ***********************Featured Text Area Block************************* -->

            <div class="clear"></div>


            <!-- ***********************Contact Page Ends************************* -->
            <?php
            get_footer();
        ?> 