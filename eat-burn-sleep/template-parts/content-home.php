<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eat_Burn_Sleep
 */

?>
<style type="text/css">
    #hero-home {
        background-image: url(<?php the_field('desktop_hero'); ?>);
    }

    @media(max-width: 767px) {
        #hero-home {
            background-image: url(<?php the_field('mobile_hero'); ?>);
        }
    }

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
            <section id="hero-home"
                class="bg-cover bg-right-top md:bg-top relative pt-36 md:pt-44 lg:pt-64 pb-16 md:pb-28 flex align-end">
                <div class="container">
                    <div class="relative">
                        <header>
                            <p class="text-mobile9xl lg:text-9xl leading-tight font-bold text-white mb-2">Reduce your
                                inflammation.</p>
                            <p class="text-mobile5xl md:text-5xl font-light text-white">Eat. Burn. Sleep. Enjoy.</p>
                            <button data-modal-open="sign-up-modal" class="gtm-sign-up button-solid">
                                <span class="text">Sign Up</span>
                                <span class="text-hover">Sign Up</span>
                            </button>
                        </header>
                    </div>
                </div>
            </section>

            <section class="pt-16 md:pt-26 pb-20 md:pb-32">
                <div class="container">
                    <div class="grid md:grid-cols-2 md:gap-x-16 lg:gap-x-16 gap-y-12 items-center mb-20 md:mb-32">
                        <div class="order-2 md:order-1">
                            <img class="mb-6 md:mb-0" src="/wp-content/uploads/2021/06/2.0-Intro-2.jpg" width="560">
                        </div>
                        <div class="order-1 md:order-2">
                            <h1>Your Anti-Inflammatory &amp; Gut Health Program</h1>
                            <p>Ready to reduce inflammation, lose weight, and restart your gut health at the same time?
                                Eat Burn Sleep is an online platform that helps you do just that. Starting with Yalda
                                Alaoui’s acclaimed Six Week Reset, we help men and women eat well, address cravings,
                                move mindfully, gain mental clarity and strengthen immunity. Try our gut health program
                                today and be the best version of yourself from the inside out.</p>
                            <button data-modal-open="sign-up-modal" class="gtm-sign-up button-solid">
                                <span class="text">Sign Up</span>
                                <span class="text-hover">Sign Up</span>
                            </button>
                        </div>
                    </div>

                    <div
                        class="flex flex-wrap justify-around md:justify-between partners-logo-grid mb-14 md:mb-20 -mx-2 md:-mx-4">
                        <div class="w-1/4 md:w-auto mx-2 md:mx-4 mb-8 md:mb-12 flex justify-center items-center">
                            <img src="/wp-content/uploads/2021/06/Daily_mail.png" width="185">
                        </div>
                        <div class="w-1/4 md:w-auto mx-2 md:mx-4 mb-8 md:mb-12 flex justify-center items-center">
                            <img src="/wp-content/uploads/2021/06/forbes.png" width="115">
                        </div>
                        <div class="w-1/4 md:w-auto mx-2 md:mx-4 mb-8 md:mb-12 flex justify-center items-center">
                            <img src="/wp-content/uploads/2021/06/Comopolitan_Magazine_Logo.png" width="168">
                        </div>
                        <div class="w-1/3 md:w-auto mx-2 md:mx-4 mb-8 md:mb-12 flex justify-center items-center">
                            <img src="/wp-content/uploads/2021/06//woman_home.png" width="164">
                        </div>
                        <div class="w-1/3 md:w-auto mx-2 md:mx-4 mb-8 md:mb-12 flex justify-center items-center">
                            <img src="/wp-content/uploads/2021/06/Bazaar.png" width="122">
                        </div>
                        <div class="w-1/4 md:w-auto mx-2 md:mx-4 mb-8 md:mb-12 flex justify-center items-center">
                            <img src="/wp-content/uploads/2021/06/Glamour.png" width="145">
                        </div>
                        <div class="w-1/4 md:w-auto mx-2 md:mx-4 mb-8 md:mb-12 flex justify-center items-center">
                            <img src="/wp-content/uploads/2021/06/metro.png" width="120">
                        </div>
                        <div class="w-1/4 md:w-auto mx-2 md:mx-4 mb-8 md:mb-12 flex justify-center items-center">
                            <img src="/wp-content/uploads/2021/06/Sheerluxe.png" width="298">
                        </div>
                        <div class="w-1/3 md:w-auto mx-2 md:mx-4 mb-8 md:mb-12 flex justify-center items-center">
                            <img src="/wp-content/uploads/2021/06/Hello.png" width="90">
                        </div>
                        <div class="w-1/3 md:w-auto mx-2 md:mx-4 mb-8 md:mb-12 flex justify-center items-center">
                            <img src="/wp-content/uploads/2021/06/The-Sybarite.png" width="293">
                        </div>
                    </div>

                    <header class="text-center mb-10 md:mb-14">
                        <h2>Glowing Reviews From Doctors</h2>
                    </header>
                    <div class="testimonial-slider slick-slider text-center slick-initialized slick-dotted"><a
                            class="slick-prev slick-arrow" style=""><i class="far fa-chevron-left"></i></a>
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 6000px;">
                                <div class="slick-slide" data-slick-index="0" aria-hidden="true"
                                    style="width: 1200px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                    tabindex="-1" role="tabpanel" id="slick-slide00"
                                    aria-describedby="slick-slide-control00">
                                    <blockquote class="max-w-3xl mx-auto">
                                        <q>I am an anesthesiologist and Ph.D. molecular biologist and I find Yalda’s
                                            research evidence-based and there is a lot of science behind her methods… It
                                            is easy to follow and I have changed the way I approach what I put into my
                                            body and how I treat myself! I have shared her ideas with my patients who
                                            have lost weight, increased energy and have fewer aches and pains! I can’t
                                            recommend her approach more!</q>
                                        <footer class="mt-10 md:mt-16">
                                            <img class="mx-auto mb-2 rounded-full"
                                                src="/wp-content/uploads/2021/06/Dr-Natasha-Singh.png" width="64">
                                            <cite class="not-italic">
                                                <span class="block mb-2">Dr. Natasha Singh</span>
                                                <span>Anesthesiologist &amp; Ph.D. Molecular Biologist</span>
                                            </cite>
                                        </footer>
                                    </blockquote>
                                </div>
                                <div class="slick-slide" data-slick-index="1" aria-hidden="true"
                                    style="width: 1200px; position: relative; left: -1200px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                    tabindex="-1" role="tabpanel" id="slick-slide01"
                                    aria-describedby="slick-slide-control01">
                                    <blockquote class="max-w-3xl mx-auto">
                                        <q>I am a GP and Functional Medicine Physician based in London with a special
                                            interest in Reproductive Endocrinology and Mental Health. I have followed
                                            Yalda’s work for many years and applied her methods as they pertain to
                                            clinical practice with several patients and myself included – this has shown
                                            excellent results. From my own experience, my energy levels improved,
                                            alongside my migraines and several gut issues.</q>
                                        <footer class="mt-10 md:mt-16">
                                            <img class="mx-auto mb-2 rounded-full"
                                                src="/wp-content/uploads/2021/06/Dr-Zara-Jawad.png" width="64">
                                            <cite class="not-italic">
                                                <span class="block mb-2">Dr. Zara Jawad</span>
                                                <span>GP and Functional Medicine Physician</span>
                                            </cite>
                                        </footer>
                                    </blockquote>
                                </div>
                                <div class="slick-slide" data-slick-index="2" aria-hidden="true"
                                    style="width: 1200px; position: relative; left: -2400px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                    tabindex="-1" role="tabpanel" id="slick-slide02"
                                    aria-describedby="slick-slide-control02">
                                    <blockquote class="max-w-3xl mx-auto">
                                        <q>Personally the plan has helped me so much. I have PCOS and IBS/reflux. […] An
                                            added benefit for me is my cystic acne from PCOS just vanished. My 13 yr old
                                            [..] acne is clearing up. Same for my grown man brother and his migraines
                                            also lessened. […] The bloat is gone, no more popping TUMS and Gas-X and
                                            Omeprazole all the time. My tummy is flat for the first time since babies! I
                                            feel better at 40 (my birthday is tomorrow) than I did at 30. My hair is
                                            shinier, my nails are breaking less. I would also add that I am adapting
                                            many of my Pakistani recipes (inspired by yours) and the ingredient list to
                                            be EBS compliant. […] I’ve never been a big eater and didn’t join for weight
                                            loss. My weight has dropped maybe 2-3 pounds but it seems to have just
                                            redistributed to the right place.</q>
                                        <footer class="mt-10 md:mt-16">
                                            <img class="mx-auto mb-2 rounded-full"
                                                src="/wp-content/uploads/2021/06/Dr-Mehreen-Khan-1.png" width="64">
                                            <cite class="not-italic">
                                                <span class="block mb-2">Dr. Mehreen Khan</span>
                                                <span>Endocrinologist</span>
                                            </cite>
                                        </footer>
                                    </blockquote>
                                </div>
                                <div class="slick-slide slick-current slick-active" data-slick-index="3"
                                    aria-hidden="false"
                                    style="width: 1200px; position: relative; left: -3600px; top: 0px; z-index: 999; opacity: 1;"
                                    tabindex="0" role="tabpanel" id="slick-slide03"
                                    aria-describedby="slick-slide-control03">
                                    <blockquote class="max-w-3xl mx-auto">
                                        <q>I am a physician, I live in New York. I had been suffering since the age of
                                            30 with recurrent bouts of colonic diverticulitis. Every time requiring a
                                            course of harsh antibiotics for 10 days. I downloaded your two week plan and
                                            started following it. I basically changed my diet 180 degrees. I am truly
                                            grateful for your guidance. I am a believer now that many of our problems
                                            are related to what we put in our bodies. The gut is the most important
                                            organ in the body. It is the window to our health. We are not made to eat
                                            refined and processed foods. Thank you again for what you do. Keep up the
                                            good work. You are helping out many people I am sure.</q>
                                        <footer class="mt-10 md:mt-16">
                                            <img class="mx-auto mb-2 rounded-full"
                                                src="/wp-content/uploads/2021/06/Dr-Peter-Hobeika.png" width="64">
                                            <cite class="not-italic">
                                                <span class="block mb-2">Dr. Peter Hobeika</span>
                                                <span>Physician</span>
                                            </cite>
                                        </footer>
                                    </blockquote>
                                </div>
                                <div class="slick-slide" data-slick-index="4" aria-hidden="true"
                                    style="width: 1200px; position: relative; left: -4800px; top: 0px; z-index: 998; opacity: 0;"
                                    tabindex="-1" role="tabpanel" id="slick-slide04"
                                    aria-describedby="slick-slide-control04">
                                    <blockquote class="max-w-3xl mx-auto">
                                        <q>Having treated pain all of my careers, I firmly believe that diet, exercise,
                                            stress reduction through means such as meditation are crucial components of
                                            treating both acute and chronic pain. Maintaining a healthy lifestyle,
                                            decreasing inflammation, and stress reduction are important components that
                                            affect a disease. It is why I became an adept of Yalda‘s program.</q>
                                        <footer class="mt-10 md:mt-16">
                                            <img class="mx-auto mb-2 rounded-full"
                                                src="/wp-content/uploads/2021/06/user-1.svg" width="64">
                                            <cite class="not-italic">
                                                <span class="block mb-2">Dr. Silvia Nicolae</span>
                                                <span>MD, Anesthesiology specialist, interest in Pain Management</span>
                                            </cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>




                        <a class="slick-next slick-arrow" style=""><i class="far fa-chevron-right"></i></a>
                        <ul class="slick-dots" style="" role="tablist">
                            <li class="" role="presentation"><button type="button" role="tab" id="slick-slide-control00"
                                    aria-controls="slick-slide00" aria-label="1 of 5" tabindex="-1">1</button></li>
                            <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control01"
                                    aria-controls="slick-slide01" aria-label="2 of 5" tabindex="-1">2</button></li>
                            <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control02"
                                    aria-controls="slick-slide02" aria-label="3 of 5" tabindex="-1">3</button></li>
                            <li role="presentation" class="slick-active"><button type="button" role="tab"
                                    id="slick-slide-control03" aria-controls="slick-slide03" aria-label="4 of 5"
                                    tabindex="0" aria-selected="true">4</button></li>
                            <li role="presentation"><button type="button" role="tab" id="slick-slide-control04"
                                    aria-controls="slick-slide04" aria-label="5 of 5" tabindex="-1">5</button></li>
                        </ul>
                    </div>
                </div>
            </section>

            <div class="bg-cover bg-center h-100vw md:h-75vw md:bg-fixed"
                style="background-image: url(/wp-content/uploads/2021/06/3.0-Parallax-V1-1-scaled-1.jpg); max-height: 440px;">
            </div>

            <section class="py-18 md:py-36">
                <div class="container">
                    <header class="text-center mb-16 md:mb-36">
                        <p class="text-4xl text-gray-800 font-light">Eat Burn Sleep is acclaimed by members and medical
                            professionals.<br class="hidden md:block"> See what makes it unique and effective! </p>
                    </header>
                    <div class="grid md:grid-cols-2 gap-y-12 items-center mb-16 md:mb-0">
                        <div class="order-2 md:order-1 md:pr-12 lg:pr-28">
                            <h3>We Make Total Health Easy &amp; Fun</h3>
                            <p class="mb-0">The biggest issue with dieting is that it’s based on restrictions and
                                hard-to-follow food plans. Sure, it’s clear that having a bucket of ice cream every day
                                won't improve your health. Still, we believe you should be able to go out for dinner
                                with your friends, have dessert and enjoy a variety of foods that you can easily prepare
                                while exercising in moderation. Eat Burn Sleep platform members get exclusive access to
                                new and easy gut-friendly recipes every week. With our gut health program, meal planning
                                just got easier.</p>
                        </div>
                        <div
                            class="relative container-offset-mobile order-1 md:order-2 bg-gray-100 py-12 md:py-28 md:pl-14 lg:pl-28 h-full">
                            <div
                                class="hidden md:block bg-gray-100 absolute right-0 top-0 w-full h-full transform translate-x-full">
                            </div>
                            <div class="relative">
                                <p class="md:hidden text-xs font-bold text-gray-800 tracking-wider text-center"><span
                                        class="mr-1">01</span> Enjoy Flexibility</p>
                                <img class="mx-auto md:mx-0 px-16 md:px-0"
                                    src="/wp-content/uploads/2021/06/4.0-Why-EBS-1.jpg">
                                <span
                                    class="hidden xl:inline absolute bottom-0 top-0 right-0 text-sm tracking-wider text-gray-800 transform -rotate-90 -translate-y-1/2 translate-x-1/2 top-1/2 xl:-mr-12 h-5 z-10">Enjoy
                                    Flexibility</span>
                                <span
                                    class="hidden md:block absolute bottom-0 -mb-12 left-0 md:ml-14 text-9xl leading-none text-gray-800 font-black z-10">01</span>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-y-12 items-center mb-16 md:mb-0">
                        <div
                            class="relative container-offset-mobile bg-gray-100 py-12 md:py-28 md:pr-14 lg:pr-28 h-full">
                            <div
                                class="hidden md:block bg-gray-100 absolute left-0 top-0 w-full h-full transform -translate-x-full">
                            </div>
                            <div class="relative">
                                <p class="md:hidden text-xs font-bold text-gray-800 tracking-wider text-center"><span
                                        class="mr-1">02</span> Strengthen Fundamentals</p>
                                <img class="mx-auto md:mx-0 px-16 md:px-0"
                                    src="/wp-content/uploads/2021/06/4.1-Why-EBS-2-1.jpg">
                                <span
                                    class="hidden xl:inline absolute bottom-0 top-0 left-0 text-sm tracking-wider text-gray-800 transform rotate-90 -translate-y-1/2 -translate-x-1/2 top-1/2 xl:-ml-14 h-5 z-10">Strengthen
                                    Fundamentals</span>
                                <span
                                    class="hidden md:block absolute bottom-0 -mb-12 left-0 md:ml-14 text-9xl leading-none text-gray-800 font-black z-10">02</span>
                            </div>
                        </div>
                        <div class="md:pl-12 lg:pl-28">
                            <h3>Get Back to Basics With Expert Help</h3>
                            <p class="mb-0">We know there are a lot of easy options out there, including supplements,
                                fad diets and other "magic pills" that promise to solve all your health issues. They can
                                support a healthy diet and lifestyle, but they cannot replace it. Just like the name
                                says, Eat Burn Sleep is focused on the very basics of life; once you get them right,
                                everything else will fall into place. Members get support from Yalda and the EBS
                                community to help you practice the basics for a truly healthy lifestyle.</p>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-y-12 items-center">
                        <div class="order-2 md:order-1 md:pr-12 lg:pr-28 md:py-16">
                            <h3>Anti-Inflammatory Food &amp; Exercise</h3>
                            <p>Research shows that 15% of people suffer from IBS (irritable bowel syndrome) and other
                                gut health and inflammation-related issues. Little attention is being paid to this
                                problem and the majority of non-medical solutions available do not seem to help. Eat
                                Burn Sleep is a unique online educational health platform focused on resetting gut
                                health through healthy and anti-inflammatory food, movement, and meditation techniques.
                                The Eat Burn Sleep lifestyle is simple and easy to follow, yet focuses on biohacking and
                                neuroplasticity for optimal results. Premium Members receive extra support within a
                                specialized advice section for...</p>
                            <ul class="checkmark-list">
                                <li>IBS, Bloating, Coeliac, Crohn's, Colitis, Diverticulitis</li>
                                <li>PCOS, Insulin Resistance and Diabetes</li>
                                <li>Hormonal Balance, Acne, Menopause, Endometriosis</li>
                                <li>Bowel Regularity, Diarrhoea, and Constipation</li>
                                <li>Underactive and Overactive Thyroid, Hashimoto's, and Graves</li>
                                <li>Cold Sores and Mouth Ulcers</li>
                                <li>Candida and H-Pylori</li>
                                <li>Psoriasis</li>
                                <li>Fertility support (with or without IVF)</li>
                                <li>Water Retention and Moderate Alcohol Consumption</li>
                                <li>Weight Loss</li>
                                <li>Skincare</li>
                                <li>Reintroducing Animal Products for Vegans and Vegetarians</li>
                                <li>Sports Performance and Recovery</li>
                                <li>Unusual Eating Times</li>
                                <li>Travel</li>
                            </ul>
                        </div>
                        <div
                            class="relative container-offset-mobile order-1 md:order-2 bg-gray-100 py-12 md:py-28 md:pl-14 lg:pl-28 h-full">
                            <div
                                class="hidden md:block bg-gray-100 absolute right-0 top-0 w-full h-full transform translate-x-full">
                            </div>
                            <div class="relative">
                                <p class="md:hidden text-xs font-bold text-gray-800 tracking-wider text-center"><span
                                        class="mr-1">03</span> Reduce Inflammation</p>
                                <img class="mx-auto md:mx-0 px-16 md:px-0"
                                    src="/wp-content/uploads/2021/06/4.2-Why-EBS-3.jpg">
                                <span
                                    class="hidden xl:inline absolute bottom-0 top-0 right-0 text-sm tracking-wider text-gray-800 transform -rotate-90 -translate-y-1/2 translate-x-1/2 top-1/2 xl:-mr-12 h-5 z-10">Reduce
                                    Inflammation</span>
                                <span
                                    class="hidden md:block absolute bottom-0 -mb-12 left-0 md:ml-14 text-9xl leading-none text-gray-800 font-black z-10">03</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="hidden md:block bg-cover bg-center md:bg-fixed h-75vw md:h-75vw mb-16"
                style="background-image: url(/wp-content/uploads/2021/06/5.0-Parallax-2-scaled-1.jpg); height: 440px;">
            </div>

            <section class="pb-20 md:py-36">
                <div class="container">
                    <div class="grid md:grid-cols-12 mb-20 md:mb-32 container-offset-mobile">
                        <div class="md:col-start-1 md:col-span-8 md:row-start-1">
                            <img src="/wp-content/uploads/2021/06/6.0-Quote-1.jpg">
                        </div>
                        <div class="md:col-end-13 md:col-span-5 md:row-start-1">
                            <div class="bg-gray-100 pt-12 md:pt-16 pb-14 md:pb-10 px-12 md:mt-48">
                                <img class="mx-auto md:mx-0 mb-10 md:mb-12"
                                    src="/wp-content/uploads/2021/06/6.1-quote.svg">
                                <blockquote class="text-center md:text-left">
                                    <p
                                        class="text-mobile4xl md:text-4xl font-light leading-tight text-gray-800 mb-8 md:mb-22">
                                        The ultimate goal is to be the best version of yourself while still having fun
                                        and enjoying life!</p>
                                    <footer class="md:text-right">
                                        <cite class="font-display text-mobile4xl md:text-4xl text-gray-800">-Yalda
                                            Alaoui</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <header class="max-w-2xl mb-16">
                        <h2>Membership Exclusives</h2>
                        <p class="text-xlarge mb-0">The EBS platform is regularly updated with new recipes, movement
                            videos, and guided meditation. Here’s a sneak peek at what’s in store:</p>
                    </header>

                    <div class="grid md:grid-cols-3 md:gap-x-10 gap-y-10 mb-20 md:mb-32">


                        <article class="group relative">
                            <span class="absolute top-0 right-0 mr-2 md:mr-4 mt-2 md:mt-4 w-5 h-5 rounded-full border border-solid border-white z-10
                                                                    bg-recipe_green
                                                            "></span>

                            <div class="overflow-hidden mb-3">
                                <div class="bg-cover bg-center h-60vw md:h-35vw transform scale-100 group-hover:scale-110 transition-500-ease"
                                    itemprop="thumbnailUrl"
                                    style="background-image: url(<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/06/roasted-chicken-legs1-scaled-1.jpg); max-height: 250px;">
                                </div>
                            </div>
                            <p class="text-md text-black text-opacity-30 mb-1">Recipes</p>
                            <p class="text-lg md:text-xl font-bold text-gray-800 mb-0">Roasted Chicken Legs</p>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>recipes/roasted-chicken-legs/"><span
                                    class="link-overlay"></span></a>

                        </article>


                        <article class="group relative">
                            <div class="overflow-hidden mb-3">
                                <div class="bg-cover bg-center h-60vw md:h-35vw transform scale-100 group-hover:scale-110 transition-500-ease"
                                    itemprop="thumbnailUrl"
                                    style="background-image: url(<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/06/full-body.png); max-height: 250px;">
                                </div>
                            </div>
                            <p class="text-md text-black text-opacity-30 mb-1">Movement</p>
                            <p class="text-lg md:text-xl font-bold text-gray-800 mb-0">Full Body</p>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>member/movement-guide/full-body-14/"><span
                                    class="link-overlay"></span></a>

                        </article>


                        <article class="group relative">

                            <div class="overflow-hidden mb-3">
                                <div class="bg-cover bg-center h-60vw md:h-35vw transform scale-100 group-hover:scale-110 transition-500-ease"
                                    itemprop="thumbnailUrl"
                                    style="background-image: url(<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/06/values-Copy-1-e1618158710948.png); max-height: 250px;">
                                </div>
                            </div>
                            <p class="text-md text-black text-opacity-30 mb-1">Meditation</p>
                            <p class="text-lg md:text-xl font-bold text-gray-800 mb-0">Forgive and stay true to yourself
                            </p>
                            <a
                                href="<?php echo esc_url( home_url( '/' ) ); ?>member/meditation-guide/forgive-and-stay-true-to-yourself/"><span
                                    class="link-overlay"></span></a>

                        </article>

                    </div>
                    <div class="grid md:grid-cols-2 md:gap-x-16 lg:gap-x-24 gap-y-10 items-center">
                        <div class="text-center md:text-left order-2 md:order-1">
                            <h2>Better gut health starts here.</h2>
                            <p>Ready for a proven lifestyle to reduce inflammation and improve gut health? Sign up for
                                one of our membership options to begin your journey!</p>
                            <div class="flex justify-center md:justify-start">
                                <button data-modal-open="sign-up-modal" class="gtm-sign-up button-solid mr-4">
                                    <span class="text-hover">Sign Up</span>
                                    <span class="text">Sign Up</span>
                                </button>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>improve-gut-health/" class="button-ghost">
                                    <span class="text">Learn More</span>
                                    <span class="text-hover">Learn More</span>
                                </a>
                            </div>
                        </div>
                        <div class="order-1 md:order-2">
                            <img class="mx-auto mx-0" src="/wp-content/uploads/2021/06/CTA.jpg">
                        </div>
                    </div>
                </div>
            </section>

            <section class="relative md:py-56 md:flex md:align-center">
                <div class="hidden md:block absolute top-0 left-0 w-full h-full bg-cover bg-center"
                    style="background-image: url(/wp-content/uploads/2021/06/7.0-Subscribe_Desktop-scaled-1.jpg)"></div>
                <img class="md:hidden" src="/wp-content/uploads/2021/06/7.0-Subscribe_Mobile-1.jpg">
                <div class="container">
                    <div class="relative bg-white pt-12 pb-20 md:py-14 md:px-12 mx-auto max-w-xl">
                        <header class="text-center mb-8">
                            <h3>Subscribe to Our Newsletter</h3>
                            <p>Join the Eat Burn Sleep email newsletter and be the first to hear about new tips, and
                                recipes!</p>
                        </header>

                        <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_1">
                            <form method="post" enctype="multipart/form-data" target="gform_ajax_frame_1" id="gform_1"
                                action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <div class="gform_body">
                                    <ul id="gform_fields_1"
                                        class="gform_fields top_label form_sublabel_below description_below">
                                        <li id="field_1_1"
                                            class="gfield no-label gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                            <label class="gfield_label" for="input_1_1">Email Address<span
                                                    class="gfield_required">*</span></label>
                                            <div class="ginput_container ginput_container_email">
                                                <input name="input_1" id="input_1_1" type="text" value="" class="medium"
                                                    tabindex="1000" placeholder="Enter your email address"
                                                    aria-required="true" aria-invalid="false">
                                            </div>
                                        </li>
                                        <li id="field_1_2"
                                            class="gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible">
                                            <label class="gfield_label" for="input_1_2">Name</label>
                                            <div class="ginput_container"><input name="input_2" id="input_1_2"
                                                    type="text" value=""></div>
                                            <div class="gfield_description" id="gfield_description_1_2">This field is
                                                for validation purposes and should be left unchanged.</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="gform_footer top_label"> <button type="submit"
                                        id="gform_submit_button_1"><img
                                            src="/wp-content/uploads/2021/06/Submit.svg"></button> <input type="hidden"
                                        name="gform_ajax" value="form_id=1&amp;title=&amp;description=&amp;tabindex=0">
                                    <input type="hidden" class="gform_hidden" name="is_submit_1" value="1">
                                    <input type="hidden" class="gform_hidden" name="gform_submit" value="1">

                                    <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                                    <input type="hidden" class="gform_hidden" name="state_1"
                                        value="WyJbXSIsIjRmMmU5N2JjMjgxMWIyMTM5NjNhNDRmMjNkNWVlNzhhIl0=">
                                    <input type="hidden" class="gform_hidden" name="gform_target_page_number_1"
                                        id="gform_target_page_number_1" value="0">
                                    <input type="hidden" class="gform_hidden" name="gform_source_page_number_1"
                                        id="gform_source_page_number_1" value="1">
                                    <input type="hidden" name="gform_field_values" value="">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </main>
