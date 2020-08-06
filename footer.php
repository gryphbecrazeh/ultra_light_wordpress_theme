<footer>
    <div class="contaienr">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer'
            )
        );
        ?>
        <div class='footer-center'>Custom Theme Developed by Christopher Cordine</div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>