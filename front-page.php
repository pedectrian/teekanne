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
    <div class="clear"></div>
    <!-- Header condition2 starts here -->

    <!-- **********************header ends************************* -->
    <!-- **********************slider************************* -->
    <div class="homepage_top_feature">
        <div class="slider_img_container">
            <div class="slides-wrapper">
                <a class="slide-left"></a>
                <a class="slide-right"></a>
                <?php
                $history = new WP_Query( array ( 'orderby' => 'title', 'order' => 'asc', 'category_name' => 'tea-slide' ) );


                if ( $history->have_posts() ) {
                    $current = ' current';
                    $pages = array();

                    while ( $history->have_posts() ) {
                        $history->the_post();
                        if(!(int)get_the_ID()) {continue;}
                        $bottomDescr = get_post_meta( get_the_ID(), 'bottom-description' );
                        $pages[] = array (
                            'id'     => get_the_ID(),
                            'title'  => get_the_title(),
                            'bottom' => isset($bottomDescr[0]) ? $bottomDescr[0] : ''
                        );
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
                            if($pages) {
                                $current = 'current';
                                foreach($pages as $page) {
                                    if(!isset($page['id'])) {continue;}
                                    echo '<li><a class="'.$current.'" data-slide-id="'.$page['id'].'">'.$page['title'].'</a></li>';
                                    $current = '';
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
        <?php
        if($pages) {
            $current = 'current';
            foreach($pages as $page) {
                if(!isset($page['id'])) {continue;}
                echo '<div class="slide-bottom-description '.$current.'" data-slide-id="'.$page['id'].'">';
                    echo '<div class="adonisc font-20 uppercase text-center color-white">'.$page['bottom'] . '</div>';
                echo '</div>';
                $current = '';
            }
        }
        ?>
        <div class="fb-2-woman"></div>
    </div>
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
    <div class="front_block_4">
        <div class="adonisc font-60 text-center color-white">100%</div>
        <div class="adonisc font-25 uppercase text-center color-white">НАТУРАЛЬНЫХ ИНГРЕДИЕНТОВ — <br/>
            ВАШ ПУТЬ К ГАРМОНИИ С ПРИРОДОЙ </div>
    </div>
    <div class="front_block_5">
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
                <?php
                    $history = new WP_Query( array ( 'orderby' => 'title', 'order' => 'asc', 'category_name' => 'history' ) );

                    if ( $history->have_posts() ) {
                        $num = 0;
                        $current = ' current';


                        while ( $history->have_posts() ) {
                            $history->the_post();

                            if ($num%3 == 0) {
                                echo '<div class="history-slides' . $current . '">';
                                $current = '';
                            }

                            echo '<div class="fb-6-col-1">';
                                if ( has_post_thumbnail() ) {
                                    echo "<div class='history-image'>";
                                        the_post_thumbnail('history_thumbnail');
                                    echo "</div>";
                                }
                                echo "<div class='history-title'>" . get_the_title() . "</div>";
                                echo "<div class='history-description'>" . get_the_content() . "</div>";

                            echo '</div>';
                            $num++;
                            if ($num == 3 || $num > 3) {
                                echo '</div>';
                                $num = 0;
                            }

                        }

                        if ($num < 3) {
                            echo '</div>';
                        }
                    }

                ?>

                <div class="red-shadow"></div>
                <div class="history-controls">
                    <a class="hc-icon-1 current"></a>
                    <a class="hc-icon-2"></a>
                    <a class="hc-icon-3"></a>
                    <a class="hc-icon-4"></a>
                    <a class="hc-icon-5"></a>
                    <a class="hc-icon-6"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="front_block_7">
        <div class="fb-7-wrap">
            <div class="fb-7-left">
                <h1 class="adonisc font-50 color-red" style="line-height: 50px;">Гарантия качества от производителя</h1>
            </div>
            <div class="fb-7-right adonisc">
                <p class="color-grey adonisc" style="margin-top: 50px">В TEEKANNE главное – насладиться ароматной чашкой чая. Для этого
                    наши специалисты объездили весь мир в поисках лучших ингредиентов,
                    а разработчики создали восхитительные купажи в наших современных
                    лабораториях, чтобы бережно упакованный в пакетики чай TEEKANNE
                    радовал Вас своим великолепным вкусом.</p>
            </div>
        </div>
    </div>

    <div class="front_block_8">
        <div class="adonisc font-60 text-center color-red">Где купить:</div>
        <div class="adonisc font-25 uppercase text-center color-red">Teekanne представлен во всех магазинах страны.<br />
            Чтобы узнать, где находится ближайший к вам спросите у нас.  </div>
    </div>
    <div class="front_block_9">
        <div class="fb-9-wrap">
            <div class="fb-9-left">
                <h1 class="adonisc font-65 color-red" style="line-height: 50px;">Teekanne<br />
                    в мире</h1>
                <a href="#" class="color-red" style="display: inline-block; margin-bottom: 10px;">http://www.teekanne.com/</a>
                <p class="myriad">TEEKANNE GmbH & Co. KG (Дюссельдорф, Германия) опирается на 130-летний опыт
                    производства чая и постоянно развивает эту отрасль, разрабатывая новые продукты.
                    TEEKANNE является лидером на немецком рынке, самом крупном в мире по производству
                    фруктовых и травяных чаев.<br/>
                    Сегодня TEEKANNE Group насчитывает 1500 сотрудников и имеет фабрики по производству
                    чая и управления по его продаже в семи странах по всему миру.  Наши дистрибьюторы
                    продают чай в более чем 50 странах.<br/>
                    Головной офис TEEKANNE Group находится в Дюссельдорфе, Германия. Именно отсюда мы
                    отправляем нашу продукцию по всему миру. В Дюссельдорфе так же расположен крупнейший
                    завод. Здесь мы создаем наши знаменитые купажи, обрабатывая в год до 12 000 тонн
                    сырьевых материалов для Германии и на экспорт. Ежегодно только в Дюссельдорфе фасуют
                    до 2 миллионов чайных пакетиков, а всего TEEKANNE Group производит до 7 миллионов
                    пакетиков в год. Если сложить все эти пакетики вместе они обернут планету больше 39 раз,
                    образовав линию в 1,575,000 км.</p>
                <p class="myriad">
                    DQS (Немецкое общество по сертификации систем менеджмента) регулярно проводит
                    проверки нашей компании и большинства наших заводов. Мы получили сертификат DIN EN
                    ISO 9001, который говорит о том, что наша система менеджмента соответствует требованиям
                    европейских стандартов. И это неудивительно, потому что все наши фабрики пользуются
                    современными технологиями по системе ХАССП.</p>

                <a href="#" class="red-button">Читать полностью</a>
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