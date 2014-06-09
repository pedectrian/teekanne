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
            <div class="slides">

                <div class="slide">
                    <div class="slide-1-text-left">
                        <h2 class="list-title">НАШИ ЧАИ:</h2>
                        <ul class="tea-list">
                            <li><a class="current" href="#">Черный</a></li>
                            <li><a href="#">Зеленый</a></li>
                            <li><a href="#">Фруктовый и травяной</a></li>
                            <li><a href="#">Десертный</a></li>
                            <li><a href="#">Сезонный</a></li>
                        </ul>
                    </div>
                    <div class="slide-1-text-right">
                        <div class="adonisc font-25 color-red">Черный чай</div>
                        <p>Коллекция черных чаев TEEKANNE -
                            содержит самые популярные в мире
                            чайные вкусы, как чистые, так и с
                            натуральными ароматическими
                            добавками, придающими чаю новые
                            неожиданные оттенки. Всё это делает
                            чаи TEEKANNE по-настоящему
                            уникальными.<p>
                        <a href="#" class="red-button">Узнать больше о продукте</a>
                    </div>
                    <?php if (onepage_get_option('onepage_slideimage1') != '') { ?>
                        <img  src="<?php echo onepage_get_option('onepage_slideimage1'); ?>" alt="Slide Image 1"/>
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slide-1.png" alt="slides img1">
                    <?php } ?>
                </div>
            </div>
        </div>

        <!-- slider 8 ends --------------------------------------------------------------->


    </div>
    <div class="clear"></div>
    <div class="front_block_2">
        <div class="number-one">
            <div class="adonisc font-60 text-center color-white">7 МЛРД</div>
            <div class="adonisc font-20 uppercase text-center color-white">ПАКЕТИКОВ ИДЕАЛЬНОГО ЧАЯ В ГОД.</div>
            <div class="adonisc font-35 uppercase text-center color-white">ВЫБЕРИ СВОЙ</div>
        </div>
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
                <p class="color-white">More than 130 years of success prove that members of our
                    family-owned group of companies consistently displayed
                    the right vision, foresight and innovative courage to ensure
                    the thriving of Teekanne. </p>
            </div>
            <div class="fb-6-right color-white adonisc">
                <p class="color-white adonisc">It all started with the innovative idea of our founders
                    Rudolf Anders and Eugen Nissle to sell the natural
                    product tea in a blended and packaged form. Thus, tea
                    as a branded product with a consistent premium
                    quality was born.</p>

                <p class="color-white adonisc">Join us on a journey through Teekanne’s history and
                    find out about the milestones of our corporate history.</p>
            </div>

            <div class="fb-6-slider">
                <div class="fb-6-col-1"></div>
                <div class="fb-6-col-1"></div>
                <div class="fb-6-col-1"></div>

                <div class="red-shadow"></div>
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
        }
        ?> 