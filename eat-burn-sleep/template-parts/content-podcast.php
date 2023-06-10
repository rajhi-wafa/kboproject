<?php
/**
 * Template part for displaying page content in page-gut-health-recipes.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eat_Burn_Sleep
 */

?>
<style type="text/css">
    .is-ajax-search-result .is-show-more-results:hover {
        background-color: #000 !important;
    }

    @media (min-width: 768px){
        .md\:mb-5 {
            margin-bottom: 1.25rem;
        } 	
    }

    .w-24 {
        width: 6rem;
    }

    .h-24 {
        height: 6rem;
    }

    .w-56 {
        width: 14rem;
    } 

    .p-8 {
        padding: 2rem;
    } 

    .pb-7 {
        padding-bottom: 1.75rem;
    }		

    body._fixed_body {
        position: fixed;
        overflow: hidden;
    }

    .iframe-left {
        left: 0;
        bottom: 0;
        right: auto;
    }

    .iframe-right {
        left: auto;
        bottom: 0;
        right: 0;
    }
</style>
<div id="body-content" style="margin-top: 80px;">
    <main role="main">

        <section class="relative md:bg-gray-100 md:py-20">
            <div class="container">
                <div class="grid md:grid-cols-2 md:gap-x-12 lg:gap-x-24 gap-y-10 items-center">
                    <div class="container-offset-mobile">
                        <img class="w-full" src="/wp-content/uploads/2021/06/1.0-Hero.jpg" width="548">
                    </div>
                    <div>
                        <h1 class="mb-3">Gut Health Podcast</h1>
                        <p>On the Eat Burn Sleep podcast, Yalda invites inspiring people who have reached a level of
                            excellence in their sector. Hear from entrepreneurs, health and wellness experts, and
                            more as they share their experience and knowledge with you in each episode. Listen now
                            on Spotify and Apple Podcasts.</p>
                        <div class="flex items-center">
                            <a class="border border-solid border-black border-opacity-20 hover:border-opacity-100 rounded-sm w-full md:w-auto px-8 py-3 mr-6 transition-300-ease"
                                href="https://open.spotify.com/show/4ncfzpssZJCsQWCRr38DuX?si=0r7ZRmkmQKmpvKFi9bmdFg"
                                target="_blank">
                                <img src="/wp-content/uploads/2021/06/Spotify-Logo.png" width="92" class="mx-auto">
                            </a>
                            <a class="border border-solid border-black border-opacity-20 hover:border-opacity-100 rounded-sm w-full md:w-auto px-8 py-3 transition-300-ease"
                                href="https://podcasts.apple.com/nl/podcast/eat-burn-sleep/id1527450266?l=en"
                                target="_blank">
                                <img src="/wp-content/uploads/2021/06/Apple-Podcast-Logo.png" width="87"
                                    class="mx-auto">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper">
            <div class="container">
                <div class="max-w-2xl mx-auto">
                    <header class="mb-16">
                        <h2>Episodes</h2>
                    </header>

                    <div id="misha_podcats_wrap" class="border-t border-solid border-gray-400 border-opacity-40">

                        <?php
                            $args = array(  
                                'post_type' => 'cpt-podcasts',
                                'post_status' => 'publish',
                                'posts_per_page' => -1, 
                                'orderby' => 'date', 
                                'order' => 'DESC'
                            );
                        
                            $loop = new WP_Query( $args ); 
                                
                            while ( $loop->have_posts() ) : $loop->the_post(); 
                                ?>
                                <article class="py-6 border-b border-solid border-gray-400 border-opacity-40" itemscope="" itemtype="https://schema.org/PodcastEpisode">
                                    <p class="text-xs text-gray-400 text-opacity-75 uppercase tracking-widest mb-1"><span
                                            itemprop="datePublished"><?php the_date("d M Y"); ?></span> | <span itemprop="timeRequired"><?php the_field('duration'); ?> Min.</span></p>
                                    <p class="text-lg font-medium text-gray-800 mb-2"><?php the_title(); ?></p>
                                    <p class="mb-4" itemprop="description"><?php the_field('excerpt'); ?></p>
                                    <div class="flex items-center">
                                        <span class="text-gray-800 mr-4">Listen to Episode:</span>
                                        <div class="flex">
                                            <a href="<?php the_field('spotify_link'); ?>"
                                                target="_blank" itemprop="url"><img class="mr-4"
                                                    src="/wp-content/uploads/2021/06/Spotify-Icon.png" width="24"></a>
                                            <a href="<?php the_field('apple_podcasts_link'); ?>"
                                                target="_blank" itemprop="url"><img
                                                    src="/wp-content/uploads/2021/06/Apple-Podcast-Icon.png" width="24"></a>
                                        </div>
                                    </div>
                                </article>
                                <?php
                            endwhile;
                        
                            wp_reset_postdata();
                        ?>
                        
                    </div>



                </div>
            </div>
        </section>

    </main>