<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
if ('posts' == get_option('show_on_front') && onepage_get_option('re_nm') !== 'on') {
    get_template_part('home');
} elseif ('page' == get_option('show_on_front') && onepage_get_option('re_nm') !== 'on') {
    $template = get_post_meta(get_option('page_on_front'), '_wp_page_template', true);
    $template = ( $template == 'default' ) ? 'index.php' : $template;
    locate_template($template, true);
} else {
    get_header();
    ?>
    <div class="clear" id="home"></div>
    <!-- Header condition2 starts here -->

    <!-- **********************header ends************************* -->
    <!-- **********************slider************************* -->
    <div class="homepage_top_feature" id="products">
        <div class="slider_img_container">
            <div class="slides-wrapper">
                <a class="slider-nav slide-left"></a>
                <a class="slider-nav slide-right"></a>
                <?php
                $history = new WP_Query( array ( 'orderby' => 'date', 'order' => 'desc', 'category_name' => 'tea-slide' ) );
                $pages = array();

                if ( $history->have_posts() ) {
                    $current = ' current';
                    while ( $history->have_posts() ) {
                        $history->the_post();

                        $linkToTeaPage = get_post_meta( get_the_ID(), 'link_to_tea_page' );

                        echo "<div class='slide". $current . "' data-slide-id='" . get_the_ID() ."'>
                                <div class='slide-text-right'>
                                <div class='adonisc font-25 color-red'>" . get_the_title() . "</div>
                                <p>" . get_the_content() . "</p>";
                        if (isset($linkToTeaPage[0])){
                            echo "<a href='" . $linkToTeaPage[0] ."' class='red-button'>Узнать больше о продукте</a>";
                        }

                        echo "</div>";

                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('tea_page_thumbnail');
                                }

                        $current = '';

                        echo '</div>';

                    }

                }

                ?>
                <div class="slider-menu">
                    <h2 class="list-title">НАШИ ЧАИ:</h2>
                    <ul class="tea-list">
                        <?php
                        if ( $history->have_posts() ) {
                            $current = 'current';
                            while ( $history->have_posts() ) {
                                $history->the_post();

                                echo '<li><a class="'.$current.'" data-slide-id="'.get_the_ID().'">'.get_the_title().'</a></li>';
                                $current = ' ';
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- slider 8 ends --------------------------------------------------------------->


    </div>
    <div class="clear"></div>
    <div class="front_block_2">
        <div class="captions-wrap">
        <?php
        if ( $history->have_posts() ) {
            $current = ' current';
            while ( $history->have_posts() ) {
                $history->the_post();
                $bottomDescr = get_post_meta( get_the_ID(), 'bottom-description' );
                echo '<div class="slide-bottom-description '.$current.'" data-slide-id="'.get_the_ID().'">';
                    echo '<div class="adonisc uppercase text-center color-white">'.$bottomDescr[0] . '</div>';
                echo '</div>';
                $current = '';
            }
        }
        ?>
        </div>
        <div class="fb-2-woman"></div>
    </div>
    <div class="front_block_3_right" id="field-to-cup">
        <div class="front_block_3">
            <div class="history-block">
                <div class="hb-1 myriad">
                    <div class="adonisc font-30 uppercase color-red">
                        ЧАЙ /<br />
                    ФРУКТОВЫЙ<br />
                    И ТРАВЯНОЙ ЧАЙ
                    </div>
                    <a href="#" class="active">История происхождения чая</a><br />
                    <a href="#">История происхождения фруктового
                    и травяного чая</a>
                </div>
                <div class="hb-2 myriad">
                    <p>Черный или зеленый чай готовится из листьев чайного куста, ботаническое название
                        которого «камелия китайская» (camellia sinensis). Чайный куст традиционно
                        разделяется на два подвида китайский (camellia sinensis var. sinensis) и ассамский
                        (camellia sinensis var. assamica).</p>

                    <p>
                        Чайный напиток представляет собой смесь из цветов, трав, фруктов и пряностей. Не
                        стоит путать его с традиционным ароматизированным чаем. Травяной или фруктовый
                        чай не содержит чайные листья и кофеин, а потому отлично подходит и взрослым, и
                        детям. </p>
                </div>
                <div class="hb-3 myriad">
                    <div class="adonisc font-45 color-red">Путь от плантации<br />
                    до чашки</div>
                    <p >Несмотря на то, что чай появился в Китае почти 5000 лет назад, прошло несколько
                        тысяч лет прежде чем он добрался до других уголков земли. Основные регионы,
                        где выращивают чай расположены между 43о северной широты и 30о южной
                        широты, ведь чайному дереву требуется обилие солнечного света. Но оно не
                        выносит застоя воды под корнями, а потому чайные плантации в основном
                        расположены на горных склонах высотой до 3000 метров.</p>

                    <p>Мировой лидер по производству чая – Китай (производит до 1,3 миллиона тонн в
                        год). На втором месте Индия, затем Африка, Цейлон (Шри-Ланка с 1977 года) и
                        Индонезия.<br>
                        Самый знаменитый индийский чай произрастает на севере, на высокогорных
                        плантациях Дарджилинга и на северо-востоке, в Ассаме, который является самым
                        крупным в мире регионом по выращиванию чая. Характерные отличия этого чая –
                        его темный цвет и оригинальный вкус. Также основными регионами по
                        выращиванию чая являются Дуары, индийская провинция к западу от Ассама,
                        Нилгири, на юго-западе Индии и Формоза (ныне Тайвань), известная своим
                        непревзойденным чаем улун.</p>

                    <a href="#" class="red-button">Читать полностью</a>
                </div>
                <div class="hb-4">
                    <div class="adonisc font-30 uppercase color-red">
                        ЧАЙ /<br />
                        ФРУКТОВЫЙ<br />
                        И ТРАВЯНОЙ ЧАЙ
                    </div>
                    <ul class="history-list">
                        <li><a class="current" href="#">Истоки</a></li>
                        <li><a href="#">Сбор урожая</a></li>
                        <li><a href="#">Обработка</a></li>
                        <li><a href="#">Упаковка</a></li>
                        <li><a href="#">Контроль качества</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="front_block_4">
        <div class="adonisc font-60 text-center color-white">100%</div>
        <div class="adonisc font-25 uppercase text-center color-white">НАТУРАЛЬНЫХ ИНГРЕДИЕНТОВ — <br/>
            ВАШ ПУТЬ К ГАРМОНИИ С ПРИРОДОЙ </div>
    </div>
    <div class="front_block_5" id="company">
        <div class="fb-5-wrap">
            <div class="fb-5-left myriad">
                <h1 class="font-50 color-red">О компании <img style="margin-left: 10px;" src="<?php echo get_stylesheet_directory_uri();?>/images/about-company-icon.png"></h1>
                <p>С 1882 года компания TEEKANNE развивала традицию
                    ведения чайного бизнеса в Германии и других странах по
                    всему миру.</p>

                <p>
                    За 130 лет успешной работы компания создала широкий
                    ассортимент деликатных чаев от классических черных до
                    новых чайных сенсаций.
                </p>

                <p>
                    Сегодня TEEKANNE является одной из ведущих компаний по
                    производству чая и продолжает работать над созданием
                    новых чайных вариаций, с помощью исключительно
                    натуральных ингредиентов, тщательно отобранных нашими
                    специалистами по всему миру.</p>
            </div>
        </div>
    </div>

    <div class="front_block_6">
        <div class="fb-6-wrap">
            <div class="fb-6-left">
                <h1 class="adonisc font-50 color-white">История</h1>
                <p class="color-white">За свою 130-летнюю историю семейная компания TEEKANNE успела доказать, что именно ясное видение, грамотный расчет и инновационный подход являются причинами ее успеха и  процветания. </p>
            </div>
            <div class="fb-6-right color-white adonisc">
                <p class="color-white adonisc">It all started with the innovative idea of our founders
                    Rudolf Anders and Eugen Nissle to sell the natural
                    product tea in a blended and packaged form. Thus, tea
                    as a branded product with a consistent premium
                    quality was born.</p>

                <p class="color-white adonisc">Мы предлагаем Вам подробнее узнать об истории компании TEEKANNE: </p>
            </div>

            <div class="fb-6-slider">

                <a class="history-slider-nav history-slide-left"></a>
                <a class="history-slider-nav history-slide-right"></a>
                <?php
                    $history = new WP_Query( array ( 'posts_per_page' => 50, 'orderby' => 'title', 'order' => 'asc', 'category_name' => 'history' ) );

                    if ( $history->have_posts() ) {
                        echo '<div class="history-slides">';
                        while ( $history->have_posts() ) {
                            $history->the_post();

                            echo '<div class="fb-6-col-1">';
                                if ( has_post_thumbnail() ) {
                                    echo "<div class='history-image'>";
                                        the_post_thumbnail('history_thumbnail');
                                    echo "</div>";
                                }
                                echo "<div class='history-title'>" . get_the_title() . "</div>";
                                echo "<div class='history-description'>" . get_the_content() . "</div>";
                            echo '</div>';
                        }

                        echo '</div>';
                    }

                ?>

                <div class="red-shadow"></div>
                <div class="history-controls">
                    <a class="hc-icon-1" data-index="0"></a>
                    <a class="hc-icon-2" data-index="3"></a>
                    <a class="hc-icon-3" data-index="6"></a>
                    <a class="hc-icon-4" data-index="9"></a>
                    <a class="hc-icon-5" data-index="12"></a>
                    <a class="hc-icon-6" data-index="15"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="front_block_7" id="our-values">
        <div class="fb-7-wrap">
            <div class="fb-7-left">
                <h1 class="adonisc font-50 color-red" style="line-height: 50px;margin-top: 40px;">Гарантия качества от производителя</h1>
            </div>
            <div class="fb-7-right adonisc">
                <p class="color-grey adonisc" style="margin-top: 50px">В TEEKANNE главное – насладиться ароматной чашкой чая. Для этого
                    наши специалисты объездили весь мир в поисках лучших ингредиентов,
                    а разработчики создали восхитительные купажи в наших современных
                    лабораториях, чтобы бережно упакованный в пакетики чай TEEKANNE
                    радовал Вас своим великолепным вкусом.</p>
            </div>
            <div class="fb-7-slider">
                <a class="quality-slider-nav quality-slide-left"></a>
                <a class="quality-slider-nav quality-slide-right"></a>
                <?php
                $quality = new WP_Query( array ( 'orderby' => 'date', 'order' => 'desc', 'category_name' => 'quality' ) );

                if ( $quality->have_posts() ) {
                    echo '<div class="quality-slides">';

                    while ( $quality->have_posts() ) {
                        $quality->the_post();

                        echo '<div class="quality-col-1">';
                        if ( has_post_thumbnail() ) {
                            echo "<div class='quality-image'>";
                            the_post_thumbnail('history_thumbnail');
                            echo "</div>";
                        }
                        echo "<div class='quality-title'>" . get_the_title() . "</div>";
                        echo "<div class='quality-description'>" . get_the_excerpt() . "</div>";

                        echo "<a class='quality-permalink' href='" . get_the_permalink() . "'>Читать полностью</a>";
                        echo '</div>';
                    }

                    echo '</div>';
                }

            ?>
            </div>
        </div>
    </div>

    <div class="front_block_8">
        <div class="adonisc font-60 text-center color-red">Где купить:</div>
        <div class="adonisc font-25 uppercase text-center color-red">Teekanne представлен во всех магазинах страны.<br />
            Чтобы узнать, где находится ближайший к вам <a href="#contacts" class="scroll-to underline">спросите у нас</a>.  </div>
    </div>
    <div class="front_block_9" id="worldwide">
        <div class="fb-9-wrap">
            <div class="fb-9-left">
                <?php
                    $worldwide = get_page_by_path('teekanne-worldwide');
                ?>
                <h1 class="adonisc font-65 color-red" style="line-height: 50px;width: 272px;"><?php echo $worldwide->post_title; ?></h1>
                <?php echo $worldwide->post_content; ?>
                <a href="<?php echo $worldwide->guid; ?>" class="red-button">Читать полностью</a>

            </div>
        </div>
    </div>
    <!-- ***********************Featured Text Area Block************************* -->

            <div class="clear"></div>


            <!-- ***********************Contact Page Ends************************* -->
            <?php
            get_footer();
        }
        ?> 