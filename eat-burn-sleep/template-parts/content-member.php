<?php
/**
 * Template part for displaying page content in page-gut-health-recipes.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eat_Burn_Sleep
 */

$current_user = wp_get_current_user();

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
    <section class="relative">
        <div class="container max-w-9xl">
            <div class="grid lg:grid-cols-12">
                <div class="lg:col-start-1 lg:col-span-3 bg-gray-100 relative pt-6 lg:pt-8 pb-8 lg:pb-0 px-4 container-offset-mobile">
                    <div class="bg-gray-100 h-full w-100vw absolute left-0 top-0 transform -translate-x-full"></div>
                    <div class="flex flex-row lg:flex-col items-center">
                        <div class="relative mb-6 mr-3 lg:mx-auto w-20 lg:w-32 h-20 lg:h-32">
                            <img src="https://eatburnsleep.com/wp-content/uploads/2020/11/Yalda-Headshot.jpg" class="rounded-full mx-auto hidden lg:block" width="128">
                            <img src="https://eatburnsleep.com/wp-content/uploads/2020/11/Yalda-Headshot.jpg" class="rounded-full mx-auto lg:hidden" width="80">
                            <a href="/my-account/edit-account/"><span class="flex justify-center items-center bg-gray-800 hover:bg-primary text-white w-5 lg:w-6 h-5 lg:h-6 rounded-full absolute right-0 top-0 lg:mt-2 lg:mr-0 transition-300-ease"><i class="fas fa-plus text-xs lg:text-sm"></i></span></a>
                        </div>
                        <p class="heading-four font-bold text-center mb-5 lg:mb-0">Hi, <?php echo esc_html( $current_user->user_firstname ); ?></p>
                    </div>

                    <!-- <div class="text-center">
                        <a href="/my-account/edit-account/" class="button-solid mt-6">
                            <span class="text">Update Photo</span>
                            <span class="text-hover">Update Photo</span>
                        </a>
                    </div> -->

                    <div class="hidden lg:block border-t border-solid border-white mt-8 mb-4 lg:mb-8 -mx-4"></div>

                    <div class="grid grid-cols-1 gap-y-5 lg:gap-y-12">
                        <div class="order-2 lg:order-1">
                            <p class="text-left uppercase text-gray-800 text-opacity-40 text-xs lg:text-sm font-bold tracking-wider lg:px-4 xl:px-10 mb-2 lg:mb-4 flex items-center">Reboot &amp; Revive Week <span class="bg-primary text-white text-xs font-medium rounded uppercase h-5 w-10 lg:px-2 hidden lg:flex items-center justify-center ml-4">New</span></p>

                                                            
                                                                                <a class="no-underline group" href="https://eatburnsleep.com/member/reboot-revive-week/june-2021/">
                                                                                        <div class="grid grid-cols-12 lg:grid-cols-1 gap-x-3 lg:gap-x-0 items-center justify-center lg:justify-start p-2 lg:px-4 xl:px-10 lg:py-2 bg-white lg:bg-transparent bg-opacity-90 lg:bg-opacity-100 group-hover:bg-white rounded lg:rounded-3xl shadow-custom lg:shadow-none transition-300-ease">
                                                <div class="col-start-1 col-span-5 lg:hidden">
                                                    <img src="https://eatburnsleep.com/wp-content/uploads/2021/03/March-1-scaled.jpg">
                                                </div>

                                                <div class="col-end-13 col-span-7 lg:col-span-full flex items-center flex-wrap">
                                                    <svg class="lg:mr-4 hidden lg:block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15.8333 3.33325H4.16667C3.24619 3.33325 2.5 4.07944 2.5 4.99992V16.6666C2.5 17.5871 3.24619 18.3333 4.16667 18.3333H15.8333C16.7538 18.3333 17.5 17.5871 17.5 16.6666V4.99992C17.5 4.07944 16.7538 3.33325 15.8333 3.33325Z" stroke="#3022F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M13.3333 1.66663V4.99996" stroke="#3022F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M6.66669 1.66663V4.99996" stroke="#3022F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M2.5 8.33325H17.5" stroke="#3022F5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <div class="flex items-center">
                                                        <span class="font-medium text-base text-gray-800">June 2021</span>
                                                        <span class="bg-primary text-white text-2xs font-medium rounded uppercase h-5 w-10 flex lg:hidden items-center justify-center ml-2">New</span>
                                                    </div>
                                                    <p class="text-black text-xs w-full mb-0 mt-2 md:hidden">Reboot &amp; Revive Week</p>
                                                </div>
                                            </div>
                                            </a>
                                                                            
                                                            </div>

                        <div class="order-1 lg:order-2">
                            <p class="text-left uppercase text-gray-800 text-opacity-40 text-xs lg:text-sm font-bold tracking-wider lg:px-4 xl:px-10 mb-2 lg:mb-4">Daily Goals</p>

                            <ul class="grid grid-cols-4 lg:grid-cols-1 gap-x-2 lg:gap-y-2">
                                <a class="no-underline group" data-modal-open="morning-meditation-modal">
                                    <li class="flex flex-col lg:flex-row items-center justify-center lg:justify-start text-center lg:text-left font-medium text-xs lg:text-base text-gray-800 px-3 lg:px-4 xl:px-10 py-2 lg:py-3 bg-white lg:bg-transparent bg-opacity-90 lg:bg-opacity-100 group-hover:bg-white rounded lg:rounded-3xl shadow-custom lg:shadow-none transition-300-ease">
                                        <div class="bg-primary lg:bg-transparent bg-opacity-5 rounded-full flex items-center justify-center w-6 lg:w-auto h-6 lg:h-auto mb-2 lg:mb-0">
                                            <svg class="lg:mr-4 w-3 lg:w-5" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.16667 0.833333V2.5C9.16667 2.96024 9.53976 3.33333 10 3.33333C10.4602 3.33333 10.8333 2.96024 10.8333 2.5V0.833333C10.8333 0.373096 10.4602 0 10 0C9.53976 0 9.16667 0.373096 9.16667 0.833333ZM5 10C5 12.7614 7.23858 15 10 15C12.7614 15 15 12.7614 15 10C15 7.23858 12.7614 5 10 5C7.23858 5 5 7.23858 5 10ZM13.3333 10C13.3333 11.841 11.841 13.3333 10 13.3333C8.15905 13.3333 6.66667 11.841 6.66667 10C6.66667 8.15905 8.15905 6.66667 10 6.66667C11.841 6.66667 13.3333 8.15905 13.3333 10ZM9.16667 19.1667V17.5C9.16667 17.0398 9.53976 16.6667 10 16.6667C10.4602 16.6667 10.8333 17.0398 10.8333 17.5V19.1667C10.8333 19.6269 10.4602 20 10 20C9.53976 20 9.16667 19.6269 9.16667 19.1667ZM2.92729 4.10592L4.11063 5.28926C4.43606 5.61469 4.9637 5.61469 5.28914 5.28926C5.61458 4.96382 5.61458 4.43618 5.28914 4.11074L4.10581 2.92741C3.78037 2.60197 3.25273 2.60197 2.92729 2.92741C2.60186 3.25285 2.60186 3.78049 2.92729 4.10592ZM15.8942 17.0726L14.7108 15.8893C14.3854 15.5638 14.3854 15.0362 14.7108 14.7107C15.0363 14.3853 15.5639 14.3853 15.8894 14.7107L17.0727 15.8941C17.3981 16.2195 17.3981 16.7472 17.0727 17.0726C16.7473 17.398 16.2196 17.398 15.8942 17.0726ZM0.833333 10.8333H2.5C2.96024 10.8333 3.33333 10.4602 3.33333 10C3.33333 9.53976 2.96024 9.16667 2.5 9.16667H0.833333C0.373096 9.16667 0 9.53976 0 10C0 10.4602 0.373096 10.8333 0.833333 10.8333ZM19.1667 10.8333H17.5C17.0398 10.8333 16.6667 10.4602 16.6667 10C16.6667 9.53976 17.0398 9.16667 17.5 9.16667H19.1667C19.6269 9.16667 20 9.53976 20 10C20 10.4602 19.6269 10.8333 19.1667 10.8333ZM4.10581 17.0726L5.28914 15.8893C5.61458 15.5638 5.61458 15.0362 5.28914 14.7107C4.9637 14.3853 4.43606 14.3853 4.11063 14.7107L2.92729 15.8941C2.60186 16.2195 2.60186 16.7472 2.92729 17.0726C3.25273 17.398 3.78037 17.398 4.10581 17.0726ZM17.0727 4.10592L15.8894 5.28926C15.5639 5.61469 15.0363 5.61469 14.7108 5.28926C14.3854 4.96382 14.3854 4.43618 14.7108 4.11074L15.8942 2.92741C16.2196 2.60197 16.7473 2.60197 17.0727 2.92741C17.3981 3.25285 17.3981 3.78049 17.0727 4.10592Z" fill="#3022F5"></path>
                                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.16667 0.833333V2.5C9.16667 2.96024 9.53976 3.33333 10 3.33333C10.4602 3.33333 10.8333 2.96024 10.8333 2.5V0.833333C10.8333 0.373096 10.4602 0 10 0C9.53976 0 9.16667 0.373096 9.16667 0.833333ZM5 10C5 12.7614 7.23858 15 10 15C12.7614 15 15 12.7614 15 10C15 7.23858 12.7614 5 10 5C7.23858 5 5 7.23858 5 10ZM13.3333 10C13.3333 11.841 11.841 13.3333 10 13.3333C8.15905 13.3333 6.66667 11.841 6.66667 10C6.66667 8.15905 8.15905 6.66667 10 6.66667C11.841 6.66667 13.3333 8.15905 13.3333 10ZM9.16667 19.1667V17.5C9.16667 17.0398 9.53976 16.6667 10 16.6667C10.4602 16.6667 10.8333 17.0398 10.8333 17.5V19.1667C10.8333 19.6269 10.4602 20 10 20C9.53976 20 9.16667 19.6269 9.16667 19.1667ZM2.92729 4.10592L4.11063 5.28926C4.43606 5.61469 4.9637 5.61469 5.28914 5.28926C5.61458 4.96382 5.61458 4.43618 5.28914 4.11074L4.10581 2.92741C3.78037 2.60197 3.25273 2.60197 2.92729 2.92741C2.60186 3.25285 2.60186 3.78049 2.92729 4.10592ZM15.8942 17.0726L14.7108 15.8893C14.3854 15.5638 14.3854 15.0362 14.7108 14.7107C15.0363 14.3853 15.5639 14.3853 15.8894 14.7107L17.0727 15.8941C17.3981 16.2195 17.3981 16.7472 17.0727 17.0726C16.7473 17.398 16.2196 17.398 15.8942 17.0726ZM0.833333 10.8333H2.5C2.96024 10.8333 3.33333 10.4602 3.33333 10C3.33333 9.53976 2.96024 9.16667 2.5 9.16667H0.833333C0.373096 9.16667 0 9.53976 0 10C0 10.4602 0.373096 10.8333 0.833333 10.8333ZM19.1667 10.8333H17.5C17.0398 10.8333 16.6667 10.4602 16.6667 10C16.6667 9.53976 17.0398 9.16667 17.5 9.16667H19.1667C19.6269 9.16667 20 9.53976 20 10C20 10.4602 19.6269 10.8333 19.1667 10.8333ZM4.10581 17.0726L5.28914 15.8893C5.61458 15.5638 5.61458 15.0362 5.28914 14.7107C4.9637 14.3853 4.43606 14.3853 4.11063 14.7107L2.92729 15.8941C2.60186 16.2195 2.60186 16.7472 2.92729 17.0726C3.25273 17.398 3.78037 17.398 4.10581 17.0726ZM17.0727 4.10592L15.8894 5.28926C15.5639 5.61469 15.0363 5.61469 14.7108 5.28926C14.3854 4.96382 14.3854 4.43618 14.7108 4.11074L15.8942 2.92741C16.2196 2.60197 16.7473 2.60197 17.0727 2.92741C17.3981 3.25285 17.3981 3.78049 17.0727 4.10592Z" fill="white"></path>
                                                </mask>
                                            </svg>
                                        </div>
                                        AM<br class="lg:hidden"> Meditation
                                    </li>
                                </a>
                                <a class="no-underline group" href="/member/lifestyle-guide/hydrate/">
                                    <li class="flex flex-col lg:flex-row items-center justify-center lg:justify-start text-center lg:text-left font-medium text-xs lg:text-base text-gray-800 px-3 lg:px-4 xl:px-10 py-2 lg:py-3 bg-white lg:bg-transparent bg-opacity-90 lg:bg-opacity-100 group-hover:bg-white rounded lg:rounded-3xl shadow-custom lg:shadow-none transition-300-ease">
                                        <div class="bg-primary lg:bg-transparent bg-opacity-5 rounded-full flex items-center justify-center w-6 lg:w-auto h-6 lg:h-auto mb-2 lg:mb-0">
                                            <svg class="lg:mr-4 w-3 lg:w-5" width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Water">
                                                    <g id="sun copy">
                                                        <path id="Shape" fill-rule="evenodd" clip-rule="evenodd" d="M30.6114 12.7378L21.1785 3.30481C20.5272 2.65352 19.4711 2.65399 18.8204 3.30585L9.40375 12.7392C5.11317 17.0269 3.82803 23.4795 6.14917 29.0858C8.47031 34.6921 13.9405 38.3478 20.0083 38.3478C26.0761 38.3478 31.5463 34.6921 33.8674 29.0858C36.1886 23.4795 34.9034 17.0269 30.6114 12.7378ZM9.22901 27.8107C7.42368 23.4502 8.42323 18.4316 11.7615 15.0955L20.001 6.84138L28.2548 15.0952C31.5934 18.4316 32.593 23.4502 30.7877 27.8107C28.9823 32.1712 24.7278 35.0145 20.0083 35.0145C15.2889 35.0145 11.0343 32.1712 9.22901 27.8107Z" fill="#3022F5"></path>
                                                        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="5" y="2" width="31" height="37">
                                                            <path id="Shape_2" fill-rule="evenodd" clip-rule="evenodd" d="M30.6114 12.7378L21.1785 3.30481C20.5272 2.65352 19.4711 2.65399 18.8204 3.30585L9.40375 12.7392C5.11317 17.0269 3.82803 23.4795 6.14917 29.0858C8.47031 34.6921 13.9405 38.3478 20.0083 38.3478C26.0761 38.3478 31.5463 34.6921 33.8674 29.0858C36.1886 23.4795 34.9034 17.0269 30.6114 12.7378ZM9.22901 27.8107C7.42368 23.4502 8.42323 18.4316 11.7615 15.0955L20.001 6.84138L28.2548 15.0952C31.5934 18.4316 32.593 23.4502 30.7877 27.8107C28.9823 32.1712 24.7278 35.0145 20.0083 35.0145C15.2889 35.0145 11.0343 32.1712 9.22901 27.8107Z" fill="white"></path>
                                                        </mask>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        2 Liters<br class="lg:hidden"> Water
                                    </li>
                                </a>
                                <a class="no-underline group" href="/member/lifestyle-guide/walk/">
                                    <li class="flex flex-col lg:flex-row items-center justify-center lg:justify-start text-center lg:text-left font-medium text-xs lg:text-base text-gray-800 px-3 lg:px-4 xl:px-10 py-2 lg:py-3 bg-white lg:bg-transparent bg-opacity-90 lg:bg-opacity-100 group-hover:bg-white rounded lg:rounded-3xl shadow-custom lg:shadow-none transition-300-ease">
                                        <div class="bg-primary lg:bg-transparent bg-opacity-5 rounded-full flex items-center justify-center w-6 lg:w-auto h-6 lg:h-auto mb-2 lg:mb-0">
                                            <svg class="lg:mr-4 w-3 lg:w-5" width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="Steps">
                                                    <g id="sun copy 2">
                                                        <path id="Shape" d="M25 29.7295L16.5811 4.47287C16.0746 2.95338 13.9253 2.95338 13.4188 4.47287L8.79869 18.3333H3.33329C2.41282 18.3333 1.66663 19.0794 1.66663 19.9999C1.66663 20.9204 2.41282 21.6666 3.33329 21.6666H9.99996C10.7173 21.6666 11.3542 21.2075 11.5811 20.527L15 10.2704L23.4188 35.527C23.9253 37.0465 26.0746 37.0465 26.5811 35.527L31.2012 21.6666H36.6666C37.5871 21.6666 38.3333 20.9204 38.3333 19.9999C38.3333 19.0794 37.5871 18.3333 36.6666 18.3333H30C29.2826 18.3333 28.6457 18.7923 28.4188 19.4729L25 29.7295Z" fill="#3022F5"></path>
                                                        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="1" y="3" width="38" height="34">
                                                            <path id="Shape_2" d="M25 29.7295L16.5811 4.47287C16.0746 2.95338 13.9253 2.95338 13.4188 4.47287L8.79869 18.3333H3.33329C2.41282 18.3333 1.66663 19.0794 1.66663 19.9999C1.66663 20.9204 2.41282 21.6666 3.33329 21.6666H9.99996C10.7173 21.6666 11.3542 21.2075 11.5811 20.527L15 10.2704L23.4188 35.527C23.9253 37.0465 26.0746 37.0465 26.5811 35.527L31.2012 21.6666H36.6666C37.5871 21.6666 38.3333 20.9204 38.3333 19.9999C38.3333 19.0794 37.5871 18.3333 36.6666 18.3333H30C29.2826 18.3333 28.6457 18.7923 28.4188 19.4729L25 29.7295Z" fill="white"></path>
                                                        </mask>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        10K<br class="lg:hidden"> Steps
                                    </li>
                                </a>
                                <a class="no-underline group" data-modal-open="evening-meditation-modal">
                                    <li class="flex flex-col lg:flex-row items-center justify-center lg:justify-start text-center lg:text-left font-medium text-xs lg:text-base text-gray-800 px-3 lg:px-4 xl:px-10 py-2 lg:py-3 bg-white lg:bg-transparent bg-opacity-90 lg:bg-opacity-100 group-hover:bg-white rounded lg:rounded-3xl shadow-custom lg:shadow-none transition-300-ease">
                                        <div class="bg-primary lg:bg-transparent bg-opacity-5 rounded-full flex items-center justify-center w-6 lg:w-auto h-6 lg:h-auto mb-2 lg:mb-0">
                                            <svg class="lg:mr-4 w-3 lg:w-5" width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="PM Meditation">
                                                    <g id="sun copy 3">
                                                        <path id="Shape" fill-rule="evenodd" clip-rule="evenodd" d="M19.4883 36.5956C28.2915 36.8661 35.7857 30.2405 36.5961 21.4705C36.7286 20.0369 35.1036 19.1211 33.9459 19.9769C29.9652 22.9192 24.4309 22.5065 20.9307 19.0063C17.4305 15.5061 17.0178 9.97179 19.9601 5.99114C20.8159 4.83339 19.9001 3.20838 18.4665 3.34087C9.69648 4.15133 3.07087 11.6455 3.34137 20.4487C3.61186 29.2519 10.6851 36.3251 19.4883 36.5956ZM15.4626 7.39655C13.74 12.1543 14.838 17.6276 18.5737 21.3633C22.3094 25.099 27.7827 26.197 32.5404 24.4744C30.6249 29.7764 25.4731 33.4446 19.5907 33.2639C12.5481 33.0475 6.88953 27.3889 6.67313 20.3463C6.49239 14.4639 10.1606 9.31209 15.4626 7.39655Z" fill="#3022F5"></path>
                                                        <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="3" width="34" height="34">
                                                            <path id="Shape_2" fill-rule="evenodd" clip-rule="evenodd" d="M19.4883 36.5956C28.2915 36.8661 35.7857 30.2405 36.5961 21.4705C36.7286 20.0369 35.1036 19.1211 33.9459 19.9769C29.9652 22.9192 24.4309 22.5065 20.9307 19.0063C17.4305 15.5061 17.0178 9.97179 19.9601 5.99114C20.8159 4.83339 19.9001 3.20838 18.4665 3.34087C9.69648 4.15133 3.07087 11.6455 3.34137 20.4487C3.61186 29.2519 10.6851 36.3251 19.4883 36.5956ZM15.4626 7.39655C13.74 12.1543 14.838 17.6276 18.5737 21.3633C22.3094 25.099 27.7827 26.197 32.5404 24.4744C30.6249 29.7764 25.4731 33.4446 19.5907 33.2639C12.5481 33.0475 6.88953 27.3889 6.67313 20.3463C6.49239 14.4639 10.1606 9.31209 15.4626 7.39655Z" fill="white"></path>
                                                        </mask>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        PM<br class="lg:hidden"> Meditation
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="lg:col-end-13 lg:col-span-9 pt-10 lg:pt-8 lg:pl-10 xl:pl-20">
                    <header class="mb-8 lg:mb-10 flex justify-between items-center">
                        <h2 class="mb-0">Discover</h2>
                    </header>

                    <div class="border border-solid border-black grid lg:grid-cols-12 gap-y-8 lg:gap-x-6 xl:gap-x-8 items-center p-6 lg:p-8 mb-12">
                        <div class="lg:col-start-1 lg:col-span-3 relative">
                            <img src="/wp-content/uploads/2021/06/IMG_084-1.jpg" class="w-full">
                            <i class="fas fa-play play-button text-white text-sm bg-gray-800 rounded-full w-12 h-12 flex items-center justify-center absolute top-0 bottom-0 right-0 left-0 m-auto cursor-pointer transition-300-ease" data-modal-open="getting-started-video-modal"></i>
                        </div>
                        <div class="lg:col-end-13 lg:col-span-9">
                            <p class="heading-four">Start Here</p>
                            <p class="mb-0">Check out our Welcome Video where we explain how to get started and how to get the most out of your Eat Burn Sleep membership.</p>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-2">
                        <p class="text-gray-800 font-medium text-lg lg:text-3xl mb-4">Recipes</p>
                        <a href="/member/recipes" class="button-underline">View All</a>
                    </div>
                    <div class="grid grid-cols-3 gap-y-6 lg:gap-y-10 gap-x-3 lg:gap-x-4 mb-10 lg:mb-14">
                    <?php
                        $args = array(  
                            'post_type' => 'cpt-recipes',
                            'post_status' => 'publish',
                            'posts_per_page' => 3, 
                            'orderby' => 'date', 
                            'order' => 'DESC'
                        );
                    
                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                            ?>
                            <article class="group relative">
                                <span class="absolute top-0 right-0 mr-2 md:mr-4 mt-2 md:mt-4 w-5 h-5 rounded-full border border-solid border-white z-10 bg-recipe_green"></span>
                                <div class="overflow-hidden mb-4">
                                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                                </div>
                                <p class="font-medium text-gray-800 mb-2"><?php the_title(); ?></p>
                                <span class="text-sm"><i class="fal fa-clock mr-1 text-base"></i> <?php the_field('total_time'); ?></span>
                                <a href="<?php echo get_permalink(); ?>"><span class="link-overlay"></span></a>
                                    
                            </article>
                            <?php
                        endwhile;
                    
                        wp_reset_postdata();
                    ?>                                        
                    </div>
                                        
                    <div class="flex justify-between items-center mb-2">
                        <p class="text-gray-800 font-medium text-lg lg:text-3xl mb-4">Movement Videos</p>
                        <a href="/member/movement-guide/" class="button-underline">View All</a>
                    </div>
                    <div class="grid grid-cols-3 gap-y-6 lg:gap-y-10 gap-x-4 mb-10 lg:mb-14">
                    <?php
                        $args = array(  
                            'post_type' => 'cpt-movement',
                            'post_status' => 'publish',
                            'posts_per_page' => 3, 
                            'orderby' => 'date', 
                            'order' => 'DESC'
                        );
                    
                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                            ?>
                            <div class="group relative">
                                <div class="overflow-hidden mb-5">
                                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                                    <!-- <div class="bg-cover bg-center h-60vw md:h-35vw transform scale-100 group-hover:scale-110 transition-500-ease" itemprop="thumbnailUrl" style="background-image: url('https://eatburnsleep.com/wp-content/uploads/2021/06/Abs-Glutes-Legs.png'); max-height: 216px;"></div> -->
                                </div>                  
                                <p class="font-medium text-gray-800 mb-3"><?php the_title(); ?></p>
                                <p class="hidden md:block text-sm mb-3"><?php the_field('excerpt'); ?></p>
                                <p class="text-sm text-black text-opacity-40 flex items-center mb-0"><i class="fal fa-clock mr-1 text-base"></i> <?php the_field('duration'); ?> min</p>
                                <a href="<?php echo get_permalink(); ?>"><span class="link-overlay"></span></a>
                            </div>
                            <?php
                        endwhile;
                    
                        wp_reset_postdata();
                    ?>
                    </div>
                    
                    <div class="flex justify-between items-center mb-2">
                        <p class="text-gray-800 font-medium text-lg lg:text-3xl mb-4">Guided Meditation</p>
                        <a href="/member/meditation-guide/" class="button-underline">View All</a>
                    </div>
                    <div class="grid grid-cols-3 gap-y-6 lg:gap-y-10 gap-x-4 mb-20">
                    <?php
                        $args = array(  
                            'post_type' => 'cpt-guided-meditate',
                            'post_status' => 'publish',
                            'posts_per_page' => 3, 
                            'orderby' => 'date', 
                            'order' => 'DESC'
                        );
                    
                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                            ?>
                            <div class="group relative">
                                <div class="overflow-hidden mb-5">
                                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0]; ?>" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                                    <!-- <div class="bg-cover bg-center h-60vw md:h-35vw transform scale-100 group-hover:scale-110 transition-500-ease" itemprop="thumbnailUrl" style="background-image: url('https://eatburnsleep.com/wp-content/uploads/2021/06/Screenshot-2021-06-06-105008-e1622966012678.png'); max-height: 216px;"></div> -->
                                </div>                  
                                <p class="font-medium text-gray-800 mb-3"><?php the_title(); ?></p>
                                <p class="hidden md:block text-sm mb-3"><?php the_field('excerpt'); ?></p>
                                <p class="text-sm text-black text-opacity-40 flex items-center mb-0"><i class="fal fa-clock mr-1 text-base"></i> <?php the_field('duration'); ?> min</p>
                                <a href="<?php echo get_permalink(); ?>"><span class="link-overlay"></span></a>
                            </div>
                            <?php
                        endwhile;
                    
                        wp_reset_postdata();
                    ?>
                    </div>
                                        
                    <header class="mb-8 lg:mb-12">
                        <h2>Learn</h2>
                    </header>

                    <div class="grid md:grid-cols-2 gap-y-8 md:gap-y-10 md:gap-x-9 mb-20">
                        <div class="group relative">
                            <div class="overflow-hidden mb-4 lg:mb-7">
                                <img src="/wp-content/uploads/2020/11/Six-Week-Reset.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                            </div>
                            <p class="heading-four mb-2 lg:mb-5">Six Week Reset</p>
                            <p class="mb-0">Reset your gut health anytime. Lower inflammation and build healthy habits.</p>
                            <a href="/member/6wr/"><span class="link-overlay"></span></a>
                        </div>
                        <div class="group relative">
                            <div class="overflow-hidden mb-4 lg:mb-7">
                                <img src="/wp-content/uploads/2020/11/EBS-Lifestyle-Guide.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                            </div>
                            <p class="heading-four mb-2 lg:mb-5">EBS Lifestyle Guide</p>
                            <p class="mb-0">Your guide to the fun, life-changing lifestyle of Eat Burn Sleep.</p>
                            <a href="/member/lifestyle-guide/"><span class="link-overlay"></span></a>
                        </div>
                        <div class="group relative">
                                                        <div class="overflow-hidden mb-4 lg:mb-7">
                                <img src="/wp-content/uploads/2020/11/Specialized-Advice-1-1.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                            </div>
                            <p class="heading-four mb-2 lg:mb-5">Specialized Advice</p>
                            <p class="mb-0">Tips on specific medical conditions, weight, hormones, skincare, &amp; travel.</p>
                                                            <a href="/member/advice/"><span class="link-overlay"></span></a>
                                                    </div>
                        <div class="group relative">
                                                        <div class="overflow-hidden mb-4 lg:mb-7">
                                <img src="/wp-content/uploads/2020/11/Masterclasses-1-1.jpg" class="transform scale-100 group-hover:scale-110 transition-500-ease">
                            </div>
                            <p class="heading-four mb-2 lg:mb-5">Masterclasses</p>
                            <p class="mb-0">Take your low-inflammation lifestyle education further with our Masterclass series led by Yalda.</p>
                                                            <a href="/member/masterclass-series/"><span class="link-overlay"></span></a>
                                                    </div>
                    </div>

                    <header class="mb-8 lg:mb-12">
                        <h2>Eat. Burn. Sleep.</h2>
                    </header>

                    <div class="grid grid-cols-12 gap-y-4 gap-x-4 md:gap-x-8 mb-20 md:mb-26">
                        <div class="group relative col-span-6 md:col-span-4">
                            <div class="overflow-hidden">
                                <img src="/wp-content/uploads/2020/11/Recipes.jpg" class="hidden md:block transform scale-100 group-hover:scale-110 transition-500-ease">
                                <img src="/wp-content/uploads/2020/11/Recipes-Mobile.jpg" class="md:hidden transform scale-100 group-hover:scale-110 transition-500-ease">
                            </div>
                            <span class="heading-four text-white absolute bottom-0 left-0 ml-6 mb-6">Recipes</span>
                            <a href="/member/recipes"><span class="link-overlay"></span></a>
                        </div>
                        <div class="group relative col-span-6 md:col-span-4">
                            <div class="overflow-hidden">
                                <img src="/wp-content/uploads/2020/11/Movement.jpg" class="hidden md:block transform scale-100 group-hover:scale-110 transition-500-ease">
                                <img src="/wp-content/uploads/2020/11/Movement-Mobile.jpg" class="md:hidden transform scale-100 group-hover:scale-110 transition-500-ease">
                            </div>
                            <span class="heading-four text-white absolute bottom-0 left-0 ml-6 mb-6">Movement</span>
                            <a href="/member/movement-guide/"><span class="link-overlay"></span></a>
                        </div>
                        <div class="group relative col-span-12 md:col-span-4">
                            <div class="overflow-hidden">
                                <img src="/wp-content/uploads/2020/11/Meditation.jpg" class="hidden md:block transform scale-100 group-hover:scale-110 transition-500-ease">
                                <img src="/wp-content/uploads/2020/11/Meditation-Mobile.jpg" class="md:hidden transform scale-100 group-hover:scale-110 transition-500-ease">
                            </div>
                            <span class="heading-four text-white absolute bottom-0 left-0 ml-6 mb-6">Meditation</span>
                            <a href="/member/meditation-guide/"><span class="link-overlay"></span></a>
                        </div>
                    </div>

                    <header class="max-w-xl mx-auto text-center mb-20 lg:mb-24">
                        <p class="heading-two">Leave Us A Review</p>
                        <p>You help make the EBS community better! Tell us about your EBS platform experience so we can serve you better.</p>
                        <a href="/review-us?member=true" class="button-solid">Review Us</a>
                    </header>

                </div>
            </div>
        </div>
    </section>

    </main>

    <!-- Getting Started video modal -->
    <div class="modal pop-up relative hidden z-50" id="getting-started-video-modal" aria-hidden="false">
	<div class="overlay fixed flex items-center justify-center top-0 right-0 left-0 bottom-0 bg-black bg-opacity-70 outline-none" tabindex="-1" data-modal-close="">
		<div class="content-wrapper w-full max-w-6xl h-screen overflow-auto pt-36 pb-20 px-6 lg:px-20" role="dialog" aria-modal="true">
			<video src="https://player.vimeo.com/external/485384793.hd.mp4?s=c81454488f8d71bd8a6f04b579e2af05150ea7a9&amp;profile_id=175" controls="" controlslist="nodownload" width="100%"></video>
			<i class="close fal fa-times absolute top-0 right-0 mr-8 mt-12 text-5xl text-white hover:text-primary focus:text-primary active:text-primary cursor-pointer transition-300-ease" data-modal-close=""></i>
		</div>
	</div>
</div>