
    <div class="footer-wrap" id="contacts">
        <div class="footer-left-text">
            <h1 class="adonisc font-50 color-red" style="margin-bottom: 50px;">Рассылка:</h1>
            <?php
                if (do_shortcode( '[contact-form-7 id="271" title="Контактная форма в футере"]') != '[contact-form-7 404 "Not Found"]') {
                    echo do_shortcode( '[contact-form-7 id="271" title="Контактная форма в футере"]');
                } else {
                    echo do_shortcode( '[contact-form-7 id="2596" title="Подписка в футере"]' );
                }
            ?>
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
    <div class="footer">
        <div class="container_24">
            <div class="grid_24 footer-slogan" style="text-transform: uppercase;">
                <div class="footer-slogan-left">The german attitude towards tea. since 1882</div>
                <div class="footer-slogan-right">Немецкое отношение к чаю с 1882 года</div>
            </div>

            <div class="grid_24">
                <div class="footer-menu">
                    <?php dynamic_sidebar( 'footer-menu' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <div class="popup-wrap">
        <div class="popup">
            <a class="popup-cancel"></a>
            <h1 class="adonisc font-30 color-red text-center" >СПРОСИТЕ У НАС:</h1>

            <?php
            if (do_shortcode( '[contact-form-7 id="306" title="Контактная форма в попапе"]') != '[contact-form-7 404 "Not Found"]') {
                echo do_shortcode( '[contact-form-7 id="306" title="Контактная форма в попапе"]');
            } else {
                echo do_shortcode( '[contact-form-7 id="2596" title="Подписка в футере"]' );
            }
            ?>
        </div>
    </div>
<!-- ***********************Copyright Ends************************* -->
<?php wp_footer(); ?>
</body>
</html>