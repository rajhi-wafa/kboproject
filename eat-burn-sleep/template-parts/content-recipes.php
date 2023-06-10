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

    <section class="relative pt-32 md:pt-40 pb-32 md:pb-44 flex align-center">
        <div class="hidden md:block absolute top-0 left-0 w-full h-full bg-cover bg-center" style="background-image: url(/wp-content/uploads/2021/06/1.0-Recipes-Hero-Desktop-1-scaled-1.jpg)"></div>
        <div class="md:hidden absolute top-0 left-0 w-full h-full bg-cover bg-center" style="background-image: url(/wp-content/uploads/2021/06/1.0-Recipes-Hero-Mobile-2.jpg)"></div>
        <div class="container">
            <div class="relative max-w-lg mx-auto text-center">
                <h1 class="text-white font-bold">Gut Health Recipes</h1>
                <style type="text/css" media="screen">
                    #is-ajax-search-result-2307 .is-highlight {
                        background-color: #ffff3f !important;
                    }
                    #is-ajax-search-result-2307 .meta .is-highlight {
                        background-color: transparent !important;
                    }
                </style>
                <?php echo do_shortcode('[ivory-search id="2307" title="Recipes"]'); ?>
            </div>
        </div>
    </section>

    <section class="pt-10 md:pt-22 pb-20 md:pb-32">
        <div class="container max-w-5xl">
            <!-- <div class="md:hidden mb-6">
                <button id="recipe-filters-trigger" class="bg-gray-100 px-4 py-3 text-gray-800 flex items-center ml-auto focus:outline-none"> <img class="mr-2 icon" src="/wp-content/uploads/2020/11/Filter-1.svg" /> <span class="count"></span> Filters</button>
            </div> -->
            <form id="recipe-filters" class="filters" action="https://eatburnsleep.com/wp-admin/admin-ajax.php" method="POST">
                <div class="flex justify-between items-center flex-wrap md:flex-no-wrap mb-10 md:mb-16">
                    <div class="hidden md:block">
                                                    <fieldset>
                                <label>
                                    <input class="hidden recipe-filter-radio" type="radio" name="radio-meal-type" value="all-meal-types" checked />
                                    <span class="relative text-black text-opacity-30 text-center pb-2 cursor-pointer transition-300-ease">All Recipes</span>
                                </label>
                                                                    <label>
                                        <input class="hidden recipe-filter-radio" type="radio" name="radio-meal-type" value="breakfast" />
                                        <span class="relative text-black text-opacity-30 text-center pb-2 cursor-pointer transition-300-ease">Breakfast</span>
                                    </label>
                                                                    <label>
                                        <input class="hidden recipe-filter-radio" type="radio" name="radio-meal-type" value="drinks" />
                                        <span class="relative text-black text-opacity-30 text-center pb-2 cursor-pointer transition-300-ease">Drinks</span>
                                    </label>
                                                                    <label>
                                        <input class="hidden recipe-filter-radio" type="radio" name="radio-meal-type" value="lunch-dinner" />
                                        <span class="relative text-black text-opacity-30 text-center pb-2 cursor-pointer transition-300-ease">Lunch + Dinner</span>
                                    </label>
                                                                    <label>
                                        <input class="hidden recipe-filter-radio" type="radio" name="radio-meal-type" value="snacks" />
                                        <span class="relative text-black text-opacity-30 text-center pb-2 cursor-pointer transition-300-ease">Snacks</span>
                                    </label>
                                                            </fieldset>
                                            </div>

                    <div class="w-full md:w-auto mb-6 md:mb-0">
                        <span class="block md:hidden text-sm text-gray-800 font-medium mb-2">Sort By</span>
                        <div class="select-wrapper">
                            <select name="order" class="recipe-filter-select filter-select w-full md:w-auto">
                                <option value="newest">Newest</option>
                                <option value="alphabetical">Alphabetical</option>
                            </select>
                        </div>
                    </div>

                    <div class="md:hidden w-full md:w-auto">
                                                    <span class="block md:hidden text-sm text-gray-800 font-medium mb-2">Meal Type</span>
                            <div class="select-wrapper">
                                <select name="select-meal-type" class="recipe-filter-select filter-select w-full md:w-auto">
                                    <option value="all-meal-types">All Meal Types</option><option value="breakfast">Breakfast</option><option value="drinks">Drinks</option><option value="lunch-dinner">Lunch + Dinner</option><option value="snacks">Snacks</option>                                </select>
                            </div>
                                            </div>
                </div>
                <input type="hidden" name="action" value="misha_recipes_filter" />
            </form>

            <div id="ajax-target-wrapper" class="grid grid-cols-2 md:grid-cols-3 gap-y-6 md:gap-y-10 gap-x-4 md:gap-x-10 mb-12 md:mb-16">
                                            
                <article class="group relative">
                        <div class="overflow-hidden mb-4">
                        <img src="https://eatburnsleep.com/wp-content/uploads/2021/06/Image-from-iOS-22-scaled.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                    </div>
                    <p class="font-medium text-gray-800 mb-2">Vietnamese chopped salad</p>
                    <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> 5</span>
                                <a href="https://eatburnsleep.com/recipes/vietnamese-chopped-salad/"><span class="link-overlay"></span></a>
                            
                </article>                                            
                <article class="group relative">
                        <div class="overflow-hidden mb-4">
                        <img src="https://eatburnsleep.com/wp-content/uploads/2021/04/Red-Thai-Chicken-Curry-scaled.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                    </div>
                    <p class="font-medium text-gray-800 mb-2">Red Thai Chicken Curry</p>
                    <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> 25</span>
                                <a href="https://eatburnsleep.com/recipes/red-thai-chicken-curry/"><span class="link-overlay"></span></a>
                            
                </article>                                            
                <article class="group relative">
                    <span class="absolute top-0 right-0 mr-2 md:mr-4 mt-2 md:mt-4 w-5 h-5 rounded-full border border-solid border-white z-10 bg-recipe_green"></span>
                    <div class="overflow-hidden mb-4">
                        <img src="https://eatburnsleep.com/wp-content/uploads/2021/05/Apple-cider-vinegar-and-olive-oil-salad-dressing.png" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                    </div>
                    <p class="font-medium text-gray-800 mb-2">Apple cider vinegar and olive oil salad dressing</p>
                    <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> 10</span>
                                <a data-modal-open="membership-required-modal"><span class="link-overlay"></span></a>
                            
                </article>                                            
                <article class="group relative">
                                <img class="absolute top-0 right-0 mr-3 md:mr-4 mt-3 md:mt-4 z-10 w-8 md:w-12" src="/wp-content/uploads/2020/11/Lock-1.svg" width="48" />
                            <div class="overflow-hidden mb-4">
                        <img src="https://eatburnsleep.com/wp-content/uploads/2021/05/Nuts-and-seeds-bread-scaled.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                    </div>
                    <p class="font-medium text-gray-800 mb-2">Seed bread</p>
                    <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> 1 hr</span>
                                <a data-modal-open="membership-required-modal"><span class="link-overlay"></span></a>
                            
                </article>                                            
                <article class="group relative">
                                <img class="absolute top-0 right-0 mr-3 md:mr-4 mt-3 md:mt-4 z-10 w-8 md:w-12" src="/wp-content/uploads/2020/11/Lock-1.svg" width="48" />
                            <div class="overflow-hidden mb-4">
                        <img src="https://eatburnsleep.com/wp-content/uploads/2021/05/turkey-chili.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                    </div>
                    <p class="font-medium text-gray-800 mb-2">Turkey Chili</p>
                    <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> 30</span>
                                <a data-modal-open="membership-required-modal"><span class="link-overlay"></span></a>
                            
                </article>                                            
                <article class="group relative">
                                <img class="absolute top-0 right-0 mr-3 md:mr-4 mt-3 md:mt-4 z-10 w-8 md:w-12" src="/wp-content/uploads/2020/11/Lock-1.svg" width="48" />
                            <div class="overflow-hidden mb-4">
                        <img src="https://eatburnsleep.com/wp-content/uploads/2021/04/img_5825_720.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                    </div>
                    <p class="font-medium text-gray-800 mb-2">Asian Beef stir fry</p>
                    <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> 15</span>
                                <a data-modal-open="membership-required-modal"><span class="link-overlay"></span></a>
                            
                </article>                                            
                <article class="group relative">
                                <img class="absolute top-0 right-0 mr-3 md:mr-4 mt-3 md:mt-4 z-10 w-8 md:w-12" src="/wp-content/uploads/2020/11/Lock-1.svg" width="48" />
                            <div class="overflow-hidden mb-4">
                        <img src="https://eatburnsleep.com/wp-content/uploads/2021/05/roasted-chicken-legs1-scaled.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                    </div>
                    <p class="font-medium text-gray-800 mb-2">Roasted Chicken Legs</p>
                    <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> 30</span>
                                <a data-modal-open="membership-required-modal"><span class="link-overlay"></span></a>
                            
                </article>                                            
                <article class="group relative">
                                <img class="absolute top-0 right-0 mr-3 md:mr-4 mt-3 md:mt-4 z-10 w-8 md:w-12" src="/wp-content/uploads/2020/11/Lock-1.svg" width="48" />
                            <div class="overflow-hidden mb-4">
                        <img src="https://eatburnsleep.com/wp-content/uploads/2021/04/IMG_5906-scaled.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                    </div>
                    <p class="font-medium text-gray-800 mb-2">Sautéed spinach and zucchini</p>
                    <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> 10</span>
                                <a data-modal-open="membership-required-modal"><span class="link-overlay"></span></a>
                            
                </article>                                            
                <article class="group relative">
                        <div class="overflow-hidden mb-4">
                        <img src="https://eatburnsleep.com/wp-content/uploads/2021/04/Image_from_iOS1-scaled.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                    </div>
                    <p class="font-medium text-gray-800 mb-2">Omelette: mushrooms, basil, chives</p>
                    <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> 10</span>
                                <a href="https://eatburnsleep.com/recipes/omelette-mushrooms-basil-chives/"><span class="link-overlay"></span></a>
                            
                </article>                                            
                <article class="group relative">
                                <img class="absolute top-0 right-0 mr-3 md:mr-4 mt-3 md:mt-4 z-10 w-8 md:w-12" src="/wp-content/uploads/2020/11/Lock-1.svg" width="48" />
                            <div class="overflow-hidden mb-4">
                        <img src="https://eatburnsleep.com/wp-content/uploads/2021/04/IMG_5509-scaled.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                    </div>
                    <p class="font-medium text-gray-800 mb-2">Baked Salmon</p>
                    <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> 15</span>
                                <a data-modal-open="membership-required-modal"><span class="link-overlay"></span></a>
                            
                </article>                                            
                <article class="group relative">
                                <img class="absolute top-0 right-0 mr-3 md:mr-4 mt-3 md:mt-4 z-10 w-8 md:w-12" src="/wp-content/uploads/2020/11/Lock-1.svg" width="48" />
                            <div class="overflow-hidden mb-4">
                        <img src="https://eatburnsleep.com/wp-content/uploads/2021/04/IMG_5519-scaled.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                    </div>
                    <p class="font-medium text-gray-800 mb-2">Salmon and Quinoa Poke Bowl</p>
                    <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> 5</span>
                                <a data-modal-open="membership-required-modal"><span class="link-overlay"></span></a>
                            
                </article>                                            
                <article class="group relative">
                                <img class="absolute top-0 right-0 mr-3 md:mr-4 mt-3 md:mt-4 z-10 w-8 md:w-12" src="/wp-content/uploads/2020/11/Lock-1.svg" width="48" />
                            <div class="overflow-hidden mb-4">
                        <img src="https://eatburnsleep.com/wp-content/uploads/2021/04/IMG_5766-scaled.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                    </div>
                    <p class="font-medium text-gray-800 mb-2">Turmeric chicken</p>
                    <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> 25</span>
                                <a data-modal-open="membership-required-modal"><span class="link-overlay"></span></a>
                            
                </article>                                            
                <article class="group relative">
                        <div class="overflow-hidden mb-4">
                        <img src="https://eatburnsleep.com/wp-content/uploads/2021/04/IMG_5587-scaled.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                    </div>
                    <p class="font-medium text-gray-800 mb-2">Chocolate strawberries</p>
                    <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> 1 hr 10 min</span>
                                <a href="https://eatburnsleep.com/recipes/chocolate-strawberries/"><span class="link-overlay"></span></a>
                            
                </article>                                            
                <article class="group relative">
                        <div class="overflow-hidden mb-4">
                        <img src="https://eatburnsleep.com/wp-content/uploads/2021/03/IMG_5345-scaled.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                    </div>
                    <p class="font-medium text-gray-800 mb-2">Cashew butter cups</p>
                    <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> 1 hr 10 min</span>
                                <a href="https://eatburnsleep.com/recipes/cashew-butter-cups/"><span class="link-overlay"></span></a>
                            
                </article>                                            
                <article class="group relative">
                                <img class="absolute top-0 right-0 mr-3 md:mr-4 mt-3 md:mt-4 z-10 w-8 md:w-12" src="/wp-content/uploads/2020/11/Lock-1.svg" width="48" />
                            <div class="overflow-hidden mb-4">
                        <img src="https://eatburnsleep.com/wp-content/uploads/2021/03/IMG_4968-scaled-e1616523133536.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                    </div>
                    <p class="font-medium text-gray-800 mb-2">Lamb’s lettuce with radishes and avocado</p>
                    <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> 10</span>
                                <a data-modal-open="membership-required-modal"><span class="link-overlay"></span></a>
                            
                </article>
            </div>
            
            
            <!-- Pagination -->
            <nav class="mb-20 md:mb-32">
                <ul class="pagination"></ul>
            </nav>

            <div class="mb-20 md:mb-32">
                <header class="max-w-xl mx-auto text-center mb-8">
                    <h3>Eat. Burn. Subscribe.</h3>
                    <p>Join the Eat Burn Sleep email newsletter and be the first to hear about new tips, and recipes!</p>
                </header>
                
                <div class='gf_browser_safari gform_wrapper' id='gform_wrapper_1' >
                    <form method='post' enctype='multipart/form-data' target='gform_ajax_frame_1' id='gform_1'  action='/gut-health-recipes/'>
                        <div class='gform_body'><ul id='gform_fields_1' class='gform_fields top_label form_sublabel_below description_below'><li id='field_1_1'  class='gfield no-label gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_1' >Email Address<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_email'>
                            <input name='input_1' id='input_1_1' type='text' value='' class='medium' tabindex='1000'  placeholder='Enter your email address' aria-required="true" aria-invalid="false" />
                        </div></li><li id='field_1_2'  class='gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_2' >Phone</label><div class='ginput_container'><input name='input_2' id='input_1_2' type='text' value='' /></div><div class='gfield_description' id='gfield_description_1_2'>This field is for validation purposes and should be left unchanged.</div></li>
                            </ul></div>
                        <div class='gform_footer top_label'> <button type='submit' id='gform_submit_button_1'><img src='/wp-content/uploads/2021/06/Submit.svg' /></button> <input type='hidden' name='gform_ajax' value='form_id=1&amp;title=&amp;description=&amp;tabindex=0' />
                            <input type='hidden' class='gform_hidden' name='is_submit_1' value='1' />
                            <input type='hidden' class='gform_hidden' name='gform_submit' value='1' />
                            
                            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                            <input type='hidden' class='gform_hidden' name='state_1' value='WyJbXSIsIjRmMmU5N2JjMjgxMWIyMTM5NjNhNDRmMjNkNWVlNzhhIl0=' />
                            <input type='hidden' class='gform_hidden' name='gform_target_page_number_1' id='gform_target_page_number_1' value='0' />
                            <input type='hidden' class='gform_hidden' name='gform_source_page_number_1' id='gform_source_page_number_1' value='1' />
                            <input type='hidden' name='gform_field_values' value='' />
                            
                        </div>
                    </form>
                </div>
            </div>

            <div class="grid md:grid-cols-2 md:gap-x-16 lg:gap-x-24 gap-y-10 items-center">
            <div class="text-center md:text-left order-2 md:order-1">
                <h2>Better gut health starts here.</h2>
                <p>Ready for a proven lifestyle to reduce inflammation and improve gut health? Sign up for one of our membership options to begin your journey!</p>
                <div class="flex justify-center md:justify-start">
                    <button data-modal-open="sign-up-modal" class="gtm-sign-up button-solid mr-4">
                        <span class="text-hover">Sign Up</span>
                        <span class="text">Sign Up</span>
                    </button>
                    <a href="/improve-gut-health/" class="button-ghost">
                        <span class="text">Learn More</span>
                        <span class="text-hover">Learn More</span>
                    </a>
                </div>
            </div>                
            <div class="order-1 md:order-2">
                <img class="mx-auto mx-0" src="/wp-content/uploads/2021/06/CTA.jpg" />
            </div>
            </div>
        </div>
    </section>

</main>
<script type="text/javascript" id="misha_recipes_scripts-js-extra">
    var recipe_params = {"ajax_url":"https://eatburnsleep.kbodev.ovh/wp-admin/admin-ajax.php"};
</script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $checkedMealType = $("[name='radio-meal-type']:checked").val();
        $selectedMealType = $("[name='select-meal-type']").val();
        $selectedListType = $("[name='select-list-type']").val();
        $selectedFoodType = $("[name='select-food-type']").val();
        $selectedOrder = $(".recipe-filter-select[name='order']").val();

        
        $('.pagination').pagination({
            items: 196,
            itemsOnPage: 15,
            displayedPages: 3,
            currentPage: 1,
            hrefTextPrefix: '#pagination-',
            prevText: '<i class="far fa-chevron-left"></i>',
            nextText: '<i class="far fa-chevron-right"></i>',
            onPageClick: function(pageNumber, e) {
                e.preventDefault();
                window.history.replaceState(null, null,
                    "?pagination=" + pageNumber +
                    "&radio-meal-type=" + $checkedMealType +
                    "&select-meal-type=" + $selectedMealType +
                    "&select-list-type=" + $selectedListType +
                    "&select-food-type=" + $selectedFoodType +
                    "&order=" + $selectedOrder
                );
                $("#ajax-target-wrapper").load("/recipe-pagination?pagination=" + pageNumber +
                    "&radio-meal-type=" + $checkedMealType +
                    "&select-meal-type=" + $selectedMealType +
                    "&select-list-type=" + $selectedListType +
                    "&select-food-type=" + $selectedFoodType +
                    "&order=" + $selectedOrder
                );
                $('html, body').animate({
                    scrollTop: $("#ajax-target-wrapper").offset().top - 150
                }, 500);
            }
        });
    });
</script>