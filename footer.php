<?php
// Защита от прямого доступа
if (!defined('ABSPATH')) {
    exit; // Выход, если файл вызывается напрямую
}
?>

<footer class="site-footer"> <!-- Начало подвала сайта -->
    <div class="container"> <!-- Контейнер для содержимого подвала -->

        <nav class="footer-navigation"> <!-- Блок навигации в подвале -->
            <?php
            // Отображаем меню в подвале, если оно зарегистрировано
            wp_nav_menu(array(
                'theme_location' => 'footer', // Меню, назначенное на позиции "footer"
                'container' => false, // Не оборачиваем меню в дополнительный контейнер
                'menu_class' => 'footer-menu', // Класс для <ul>, чтобы стилизовать его через CSS
            ));
            ?>
        </nav> <!-- Закрытие блока навигации -->

        <p style="text-align: left;"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?>.</p>
        <!-- Отображение названия сайта и текущего года -->
    </div> <!-- Закрытие контейнера -->
</footer> <!-- Закрытие подвала сайта -->

<?php wp_footer(); // Вставляем вызов функции wp_footer перед закрывающим тегом </body> ?>
</body>
</html> <!-- Закрывающий тег HTML -->