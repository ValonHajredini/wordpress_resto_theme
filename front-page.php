<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Resto
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <!-- Start homepage content -->
            <div id="main-banner">
                <img src="<?php echo(get_template_directory_uri())?>/images/banner.jpg" alt="Welcome to Resto">
            </div>
            <div class="wrapper">
                <section id="home-menu">
                    <h2>Menu</h2>
                    <ul>
                        <li>
                            <span class="dish">Voluptate Cillum fugiat</span>
                            <span class="price">$30</span>
                            <span class="description">Cheese, tomato, mushrooms, onions</span>
                        </li>
                        <li>
                            <span class="dish">Voluptate Cillum fugiat</span>
                            <span class="price">$30</span>
                            <span class="description">Cheese, tomato, mushrooms, onions</span>
                        </li>
                        <li>
                            <span class="dish">Voluptate Cillum fugiat</span>
                            <span class="price">$30</span>
                            <span class="description">Cheese, tomato, mushrooms, onions</span>
                        </li>
                        <li>
                            <span class="dish">Voluptate Cillum fugiat</span>
                            <span class="price">$30</span>
                            <span class="description">Cheese, tomato, mushrooms, onions</span>
                        </li>
                        <li>
                            <span class="dish">Voluptate Cillum fugiat</span>
                            <span class="price">$30</span>
                            <span class="description">Cheese, tomato, mushrooms, onions</span>
                        </li>
                        <li>
                            <span class="dish">Voluptate Cillum fugiat</span>
                            <span class="price">$30</span>
                            <span class="description">Cheese, tomato, mushrooms, onions</span>
                        </li>
                        <li>
                            <span class="dish">Voluptate Cillum fugiat</span>
                            <span class="price">$30</span>
                            <span class="description">Cheese, tomato, mushrooms, onions</span>
                        </li>
                        <li>
                            <span class="dish">Voluptate Cillum fugiat</span>
                            <span class="price">$30</span>
                            <span class="description">Cheese, tomato, mushrooms, onions</span>
                        </li>
                    </ul>
                </section>

                <section id="featured">
                    <ul>
                        <li>
                            <img src="images/thumb-1.jpg">
                            <a href="">Fugiat nulla sint</a>
                            <span>$30</span>
                            <span class="rating"></span>
                        </li>
                        <li>
                            <img src="images/thumb-1.jpg">
                            <a href="">Fugiat nulla sint</a>
                            <span>$30</span>
                            <span class="rating"></span>
                        </li>
                        <li>
                            <img src="images/thumb-1.jpg">
                            <a href="">Fugiat nulla sint</a>
                            <span>$30</span>
                            <span class="rating"></span>
                        </li>
                        <li>
                            <img src="images/thumb-1.jpg">
                            <a href="">Fugiat nulla sint</a>
                            <span>$30</span>
                            <span class="rating"></span>
                        </li>
                    </ul>
                </section>
            </div>
            <!-- End homepage content -->
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
