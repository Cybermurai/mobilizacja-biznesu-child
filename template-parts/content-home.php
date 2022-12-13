<?php
$start_title = get_field('c-start__title');
$start_description = get_field('c-start__description');
$start_buttons = get_field('c-start__buttons');

$tools_title = get_field('c-tools_title');
$tools_list = get_field('c-tools_list');
$tools_img = get_field('c-img');

$stats_statistics = get_field('c-stats_statistics');
$stats_button = get_field('c-stats_button');

$help_title = get_field('c-help_title');
$help_items = get_field('c-help_items');

$articles_title = get_field('c-articles_title');
$articles_button = get_field('c-articles_button');
?>
<section class="c-start">
    <div class="c-start__wrapper">
            <div class="c-start__content">
                <div class="c-start__inner">
                    <h1 class="c-start__title"><?php if($start_title) { echo $start_title; } ?></h1>
                    <p class="c-start__description"><?php if($start_description) { echo $start_description; } ?></p>
                </div>
                <div class="c-start__buttons">
                    <a href="<?php if($start_buttons['button_primary']['url']) { echo $start_buttons['button_primary']['url']; } ?>" class="btn btn--primary">
                        <?php if($start_buttons['button_primary']['placeholder']) { echo $start_buttons['button_primary']['placeholder'];} ?>
                    </a>
                    <div class="c-start__tel">
                        <a href="tel:+48023492483"><?php if($start_buttons['phone']['url']) { echo $start_buttons['phone']['placeholder'];} ?></a>
                    </div>
                </div>
            </div>
            <div class="c-start__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/phones.webp" alt="">
            </div>
    </div>
</section>

<section class="c-tools">
    <div class="c-tools__wrapper">
        <div class="c-tools__content">
            <div class="c-tools__title">
                <h2><?php if($tools_title) { echo $tools_title; } ?></h2>
            </div>
            <div class="c-tools__list">
                    <?php 
                        foreach($tools_list as $tools_list_item){
                            echo '<div class="c-tools__item">';
                            if($tools_list_item) { echo $tools_list_item; }
                            echo '</div>';
                        }
                    ?>
            </div>
        </div>
        <div class="c-tools__img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/c-tools-img.webp" alt="">
        </div>
    </div>
</section>

<section class="c-stats">
        <div class="c-stats__content">
            <div class="c-stats__list">
            <?php 
                foreach($stats_statistics as $item => $stats_statistics_item){
                    echo '<div class="c-stats__item">';
                    echo '<div class="c-stats__title">';
                    if($stats_statistics[$item]['title']) { echo $stats_statistics[$item]['title']; }
                    echo '</div>';
                    echo '<div class="c-stats__description">';
                    if($stats_statistics[$item]['description']) { echo $stats_statistics[$item]['description']; }
                    echo '</div></div>';
                }
            ?>
            </ul>
        </div>
        <div class="c-stats__line"></div>
        <div class="c-stats__button">
            <a href="<?php if($stats_button['url']) { echo $stats_button['url']; } ?>" class="btn btn--primary">
                <?php if($stats_button['placeholder']) { echo $stats_button['placeholder']; } ?>
            </a>
        </div>
</section>

<section class="c-help">
    <div class="c-help__section-title"><?php if($help_title) { echo $help_title; } ?></div>
    <div class="c-help__content">
    <?php 
                foreach($help_items as $item => $help_item){
                    echo '<div class="c-help__item">';
                        echo '<div class="c-help__icon">';
                        echo '<img src="';
                        if($help_items[$item]['icon']) { echo $help_items[$item]['icon']; }
                        echo '"/>';
                            
                        echo '</div>';
                        
                        echo '<div class="c-help__title">';
                        if($help_items[$item]['title']) { echo $help_items[$item]['title']; }
                        echo '</div>';


                        echo '<div class="c-help__description">';
                        if($help_items[$item]['description']) { echo $help_items[$item]['description'];}
                        echo '</div>';
                    echo '</div>';
                }
    ?>        
    </div>
</section>

<section class="c-articles">
    <div class="c-articles__wrapper">
        <div class="c-articles__section-title">
            <p><?php if($articles_title) { echo $articles_title; } ?></p> 
            <div class="c-articles__button">
                <a href="<?php if($articles_button['url']) { echo $articles_button['url']; } ?>" class="btn btn--primary">
                <?php if($articles_button['placeholder']) { echo $articles_button['placeholder']; } ?>
                </a>
            </div>
        </div>
        <div class="c-articles__content">

        <?php
            $args = array(
                'numberposts' => 3
            );
            $latest_posts = get_posts( $args );
            foreach($latest_posts as $post){
                $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); 
                $post_title = get_the_title($post->ID);
                $post_date = get_the_date( 'F j, Y', $post->ID );
                $post_permalink = get_permalink($post->ID);
                echo '<a href="'.$post_permalink.'" class="c-articles__item">';
                    echo '<div class="c-articles__thumbnail">';
                        echo '<img src="'.$featured_img_url.'" alt="">';
                    echo '</div>';

                    echo '<div class="c-articles__title">';
                        echo $post_title;
                    echo '</div>';

                    echo '<div class="c-articles__meta">';
                        echo '<div class="c-articles__date">';
                            echo $post_date;
                        echo '</div>';

                        echo '<div class="c-articles__read-more">';
                        echo '<p>Czytaj</p>';
                        echo '<i class="fa fa-arrow-right" aria-hidden="true"></i>';
                        echo '</div>';
                    echo '</div>';

                echo '</a>';
            }
        ?>
    </div>
    </div>
</section>