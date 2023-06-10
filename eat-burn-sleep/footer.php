<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eat_Burn_Sleep
 */

?>

<footer class="pt-22 pb-14 md:py-20 bg-gray-900 relative clear-both text-center">
	<div class="container">
			<div class="grid grid-cols-1 md:grid-cols-12 md:gap-x-12 lg:gap-x-20 md:mb-10">
					<div class="md:col-start-1 md:col-span-4">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<img class="site-logo mb-16 md:mb-0 mx-auto md:mx-0"
											src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/eat-burn-sleep/assets/img/EBS-Logo_TM_White.png" width="263">
							</a>
					</div>
					<div class="md:col-end-13 md:col-span-8">
							<div class="flex flex-col justify-between md:justify-start mb-14 md:mb-0">
									<ul class="flex flex-col md:flex-row justify-center md:justify-end mb-16">
											<li class="mb-6 md:mb-0 md:mr-4 lg:mr-10">
													<a class="text-white md:text-opacity-80 hover:text-white md:hover:text-opacity-100 font-bold no-underline link-animated-underline"
															href="<?php echo esc_url( home_url( '/' ) ); ?>faq/">FAQs</a>
											</li>
											<li class="mb-6 md:mb-0 md:mr-4 lg:mr-10">
													<a class="text-white md:text-opacity-80 hover:text-white md:hover:text-opacity-100 font-bold no-underline link-animated-underline"
															href="<?php echo esc_url( home_url( '/' ) ); ?>medical-disclaimer/">Medical Disclaimer</a>
											</li>
											<li class="mb-6 md:mb-0 md:mr-4 lg:mr-10">
													<a class="text-white md:text-opacity-80 hover:text-white md:hover:text-opacity-100 font-bold no-underline link-animated-underline"
															href="<?php echo esc_url( home_url( '/' ) ); ?>dedication/">Dedication</a>
											</li>
											<li class="mb-6 md:mb-0 md:mr-4 lg:mr-10">
													<a class="text-white md:text-opacity-80 hover:text-white md:hover:text-opacity-100 font-bold no-underline link-animated-underline"
															data-modal-open="contact-modal">Contact</a>
											</li>
											<!-- 									<li>
					<a class="text-white text-opacity-80 hover:text-white hover:text-opacity-100 font-bold no-underline link-animated-underline inline-flex items-center" href="#"> <img class="mr-2" src="/wp-content/uploads/2020/11/message-square.svg" /> Live Chat</a>
				</li>	 -->
									</ul>
									<div class="flex justify-center md:justify-end md:mb-6">
											<a class="text-white text-opacity-80 hover:text-white hover:text-opacity-100"
													href="https://www.instagram.com/eatburnsleep/" target="_blank"
													rel="noopener noreferrer">
													<i class="fab fa-instagram text-2xl mr-8"></i>
											</a>
											<a class="text-white text-opacity-80 hover:text-white hover:text-opacity-100"
													href="https://www.facebook.com/eatburnsleep/" target="_blank"
													rel="noopener noreferrer">
													<i class="fab fa-facebook-f text-2xl mr-8"></i>
											</a>
											<a class="text-white text-opacity-80 hover:text-white hover:text-opacity-100"
													href="https://www.youtube.com/channel/UCVX6XS2iu-jsWW9XIChQRqg" target="_blank"
													rel="noopener noreferrer">
													<i class="fab fa-youtube text-2xl"></i>
											</a>
									</div>
							</div>
					</div>
			</div>
			<div class="grid md:grid-cols-12 justify-center md:justify-between items-center">
					<div class="md:col-start-1 md:col-span-6 lg:col-span-7 mb-3 md:mb-0">
							<ul class="flex flex-col md:flex-row">
									<li class="text-xsmall text-white text-opacity-50 mb-3 md:mr-8">© 2021 Eat Burn Sleep All
											Rights Reserved</li>
									<li class="text-xsmall">
											<div class="footer-dropdown">
													<span>Legal</span>
													<ul>
															<li><a class="no-underline"
																			href="<?php echo esc_url( home_url( '/' ) ); ?>website-terms-and-conditions-eat-burn-sleep/">Terms
																			and Conditions</a></li>
															<li><a class="no-underline"
																			href="<?php echo esc_url( home_url( '/' ) ); ?>website-privacy-policy-gdpr-and-dpa-2018-uk/">Privacy
																			Policy</a></li>
															<li><a class="no-underline"
																			href="<?php echo esc_url( home_url( '/' ) ); ?>website-acceptable-use-policy/">Acceptable
																			Use Policy</a></li>
															<li><a class="no-underline"
																			href="<?php echo esc_url( home_url( '/' ) ); ?>online-consumer-goods-services-and-digital-content-terms-and-conditions/">Digital
																			Content Terms</a></li>
													</ul>
											</div>
									</li>
							</ul>
					</div>
			</div>
	</div>
</footer>


<!-- Contact modal -->
<div class="modal relative hidden z-50" id="contact-modal" aria-hidden="false">
    <div class="overlay fixed flex items-center justify-center top-0 right-0 left-0 bottom-0 bg-black bg-opacity-75 outline-none"
        tabindex="-1" data-modal-close="">
        <div class="content-wrapper bg-white w-full h-screen overflow-auto max-w-3xl ml-auto py-20 px-6 md:px-20"
            role="dialog" aria-modal="true">
            <header class="mb-12">
                <p class="heading-three">Contact</p>
                <p>Our live chat is available to support you! For more questions, comments, or collaborations please
                    feel free to send a message using the form below.</p>
            </header>

            <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_2">
                <form method="post" enctype="multipart/form-data" target="gform_ajax_frame_2" id="gform_2"
                    action="<?php echo esc_url( home_url( '/' ) ); ?>improve-gut-health/">
                    <div class="gform_body">
                        <ul id="gform_fields_2"
                            class="gform_fields top_label form_sublabel_below description_below">
                            <li id="field_2_1"
                                class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                <label class="gfield_label" for="input_2_1">Name<span
                                        class="gfield_required">*</span></label>
                                <div class="ginput_container ginput_container_text"><input name="input_1"
                                        id="input_2_1" type="text" value="" class="medium" tabindex="1000"
                                        aria-required="true" aria-invalid="false"></div>
                            </li>
                            <li id="field_2_2"
                                class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                <label class="gfield_label" for="input_2_2">Email Address<span
                                        class="gfield_required">*</span></label>
                                <div class="ginput_container ginput_container_email">
                                    <input name="input_2" id="input_2_2" type="text" value="" class="medium"
                                        tabindex="1001" aria-required="true" aria-invalid="false">
                                </div>
                            </li>
                            <li id="field_2_3"
                                class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                <label class="gfield_label" for="input_2_3">Message<span
                                        class="gfield_required">*</span></label>
                                <div class="ginput_container ginput_container_textarea"><textarea name="input_3"
                                        id="input_2_3" class="textarea medium" tabindex="1002" aria-required="true"
                                        aria-invalid="false" rows="10" cols="50"></textarea></div>
                            </li>
                            <li id="field_2_4"
                                class="gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible">
                                <label class="gfield_label" for="input_2_4">Comments</label>
                                <div class="ginput_container"><input name="input_4" id="input_2_4" type="text"
                                        value=""></div>
                                <div class="gfield_description" id="gfield_description_2_4">This field is for
                                    validation purposes and should be left unchanged.</div>
                            </li>
                        </ul>
                    </div>
                    <div class="gform_footer top_label"> <button type="submit" class="button-solid"
                            id="gform_submit_button_2">
                            <span class="text">Submit</span>
                            <span class="text-hover">Submit</span>
                        </button> <input type="hidden" name="gform_ajax"
                            value="form_id=2&amp;title=&amp;description=&amp;tabindex=0">
                        <input type="hidden" class="gform_hidden" name="is_submit_2" value="1">
                        <input type="hidden" class="gform_hidden" name="gform_submit" value="2">

                        <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                        <input type="hidden" class="gform_hidden" name="state_2"
                            value="WyJbXSIsIjRmMmU5N2JjMjgxMWIyMTM5NjNhNDRmMjNkNWVlNzhhIl0=">
                        <input type="hidden" class="gform_hidden" name="gform_target_page_number_2"
                            id="gform_target_page_number_2" value="0">
                        <input type="hidden" class="gform_hidden" name="gform_source_page_number_2"
                            id="gform_source_page_number_2" value="1">
                        <input type="hidden" name="gform_field_values" value="">

                    </div>
                </form>
            </div>
            
            <script
                type="text/javascript">jQuery(document).ready(function ($) { gformInitSpinner(2, 'https://eatburnsleep.com/wp-content/plugins/gravityforms/images/spinner.gif'); jQuery('#gform_ajax_frame_2').on('load', function () { var contents = jQuery(this).contents().find('*').html(); var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0; if (!is_postback) { return; } var form_content = jQuery(this).contents().find('#gform_wrapper_2'); var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_2').length > 0; var is_redirect = contents.indexOf('gformRedirect(){') >= 0; var is_form = form_content.length > 0 && !is_redirect && !is_confirmation; var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100; if (is_form) { jQuery('#gform_wrapper_2').html(form_content.html()); if (form_content.hasClass('gform_validation_error')) { jQuery('#gform_wrapper_2').addClass('gform_validation_error'); } else { jQuery('#gform_wrapper_2').removeClass('gform_validation_error'); } setTimeout(function () { /* delay the scroll by 50 milliseconds to fix a bug in chrome */ }, 50); if (window['gformInitDatepicker']) { gformInitDatepicker(); } if (window['gformInitPriceFields']) { gformInitPriceFields(); } var current_page = jQuery('#gform_source_page_number_2').val(); gformInitSpinner(2, 'https://eatburnsleep.com/wp-content/plugins/gravityforms/images/spinner.gif'); jQuery(document).trigger('gform_page_loaded', [2, current_page]); window['gf_submitting_2'] = false; } else if (!is_redirect) { var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html(); if (!confirmation_content) { confirmation_content = contents; } setTimeout(function () { jQuery('#gform_wrapper_2').replaceWith(confirmation_content); jQuery(document).trigger('gform_confirmation_loaded', [2]); window['gf_submitting_2'] = false; }, 50); } else { jQuery('#gform_2').append(contents); if (window['gformRedirect']) { gformRedirect(); } } jQuery(document).trigger('gform_post_render', [2, current_page]); }); });</script>
            <script
                type="text/javascript"> jQuery(document).bind('gform_post_render', function (event, formId, currentPage) { if (formId == 2) { } }); jQuery(document).bind('gform_post_conditional_logic', function (event, formId, fields, isInit) { });</script>
            <script
                type="text/javascript"> jQuery(document).ready(function () { jQuery(document).trigger('gform_post_render', [2, 1]) });</script>
            <i class="close fal fa-times absolute top-0 right-0 mr-8 mt-6 text-2xl text-black hover:text-primary focus:text-primary cursor-pointer transition-300-ease"
                data-modal-close=""></i>
        </div>
    </div>
</div>

<!-- Sign Up modal -->
<div class="modal pop-up relative hidden z-50" id="sign-up-modal" aria-hidden="false">
	<div class="overlay fixed flex items-center justify-center top-0 right-0 left-0 bottom-0 bg-black bg-opacity-75 outline-none"
			tabindex="-1" data-modal-close="">
			<div class="content-wrapper bg-gray-100 w-full h-screen overflow-auto py-16 " role="dialog"
					aria-modal="true">
					<div class="container px-6">
							<header class="max-w-3xl mb-12 md:mb-24 text-center md:text-left">
									<p class="heading-two">Reset your gut health today.</p>
									<p>Ready to improve your gut health and build healthy habits for life? Get one of our Eat Burn
											Sleep membership packages. Your low-inflammation lifestyle starts here.</p>
							</header>

							<div class="grid md:grid-cols-12 md:gap-x-10 lg:gap-x-16 mb-20 md:mb-32">
									<div class="md:col-start-1 md:col-span-4 flex flex-col justify-between mb-10 md:mb-0 md:mr-4">
											<div>
													<ul class="tab-group md:flex-wrap mb-6 md:mt-18">
															<li class="tab active md:w-full md:mb-6 mr-6 md:mr-0"><a
																			href="<?php echo esc_url( home_url( '/' ) ); ?>#modal-annual">Annual Payment</a></li>
													</ul>
													<p class="text-sm italic text-center md:text-left mb-0">Annual commitment required
															for<br class="hidden md:block"> all membership options.</p>
											</div>

											<div class="hidden md:block border-t border-solid border-gray-300 border-opacity-30 pt-4">
													<p class="text-sm mb-0">Need more guidance? Learn more about the benefits and
															effectiveness of an Eat Burn Sleep membership on our <a
																	href="<?php echo esc_url( home_url( '/' ) ); ?>improve-gut-health/">Membership page!</a></p>
											</div>
									</div>
									<div class="md:col-end-13 md:col-span-8">
											<div class="tab-content">
													<div id="modal-annual">
															<div class="grid md:grid-cols-2 gap-y-12 md:gap-x-6">
																	<div class="bg-white pt-6 pb-8 px-4 md:px-6 lg:px-8 shadow-custom">
																			<div
																					class="text-center border-b border-solid border-gray-300 border-opacity-30 pb-6 mb-6">
																					<span class="block text-xl font-thin text-black mb-1">Standard</span>
																					<span
																							class="block text-5xl font-black text-gray-800 mb-2 md:mb-1">£199</span>
																					<span class="text-sm italic">Annual Billing Only</span>
																			</div>
																			<ul class="checkmark-list is-primary mb-6">
																					<li class="text-sm text-gray-800 mb-3">Six Week Reset</li>
																					<li class="text-sm text-gray-800 mb-3">Lifestyle Guide</li>
																					<li class="text-sm text-gray-800 mb-3">Food Lists</li>
																					<li class="text-sm text-gray-800 mb-3">150+ Recipes</li>
																					<li class="text-sm text-gray-800 mb-3">Weekly new movement videos</li>
																					<li class="text-sm text-gray-800 mb-3">Regular new meditation videos
																					</li>
																					<li class="text-sm text-gray-800 mb-3">Example Weeks</li>
																					<li class="text-sm text-gray-800 mb-3">Health Education and Resources
																					</li>
																					<li class="text-sm text-gray-800 mb-3">Regular updates and new exclusive
																							content</li>
																					<li class="text-sm text-gray-800 mb-3">Personal support via the Private
																							Facebook Group</li>
																					<li class="no-check text-sm text-opacity-40 mb-3"><s>Masterclass series
																									by Yalda</s></li>
																					<li class="no-check text-sm text-opacity-40 mb-3"><s>Reboot and Revive
																									Week</s></li>
																					<li class="no-check text-sm text-opacity-40"><s>Specialized advice (IBS,
																									Bloating, Coeliac, Crohn's, Colitis, Diverticulitis, PCOS,
																									Insulin Resistance and Diabetes ,Hormonal Balance, Acne,
																									Menopause, Endometriosis, Bowel Regularity, Diarrhoea, and
																									Constipation, Underactive and Overactive Thyroid, Hashimoto's,
																									and Graves, Cold Sores and Mouth Ulcers, Candida and H-Pylori,
																									Psoriasis, Fertility support (with or without IVF), Water
																									Retention and Moderate Alcohol Consumption, Weight Loss,
																									Skincare, Reintroducing Animal Products for Vegans and
																									Vegetarians, Sports Performance and Recovery, Unusual Eating
																									Times and Travel)</s></li>
																			</ul>
																			<a class="button-ghost w-full"
																					href="<?php echo esc_url( home_url( '/' ) ); ?>cart/?add-to-cart=7787&quantity[7788]=1">
																					<span class="text">Select Standard</span>
																					<span class="text-hover">Select Standard</span>
																			</a>
																	</div>

																	<div class="md:-mt-12">
																			<div
																					class="border-l border-r border-t border-solid border-primary bg-primary bg-opacity-10  px-4 py-3 text-center">
																					<span
																							class="text-primary text-xs font-bold tracking-wider uppercase">Most
																							Popular</span>
																			</div>
																			<div
																					class="bg-white pt-6 pb-8 px-4 md:px-6 lg:px-8 shadow-custom border border-solid border-primary">
																					<div class="relative h-full">
																							<div
																									class="text-center border-b border-solid border-gray-300 border-opacity-30 pb-6 mb-6">
																									<span
																											class="block text-xl font-thin text-black mb-1">Premium</span>
																									<span
																											class="block text-5xl font-black text-gray-800 mb-2 md:mb-1">£299</span>
																									<span class="block text-primary text-sm"><s>£348</s> Save £49 /
																											Year</span>
																							</div>
																							<ul class="checkmark-list is-primary mb-6">
																									<li class="text-sm text-gray-800 mb-3">Six Week Reset</li>
																									<li class="text-sm text-gray-800 mb-3">Lifestyle Guide</li>
																									<li class="text-sm text-gray-800 mb-3">Food Lists</li>
																									<li class="text-sm text-gray-800 mb-3">150+ Recipes</li>
																									<li class="text-sm text-gray-800 mb-3">Weekly new movement
																											videos</li>
																									<li class="text-sm text-gray-800 mb-3">Regular new meditation
																											videos</li>
																									<li class="text-sm text-gray-800 mb-3">Example Weeks</li>
																									<li class="text-sm text-gray-800 mb-3">Health Education and
																											Resources</li>
																									<li class="text-sm text-gray-800 mb-3">Regular updates and new
																											exclusive content</li>
																									<li class="text-sm text-gray-800 mb-3">Personal support via the
																											Private Facebook Group</li>
																									<li class="text-sm text-gray-800 mb-3">Masterclass series by
																											Yalda</li>
																									<li class="text-sm text-gray-800 mb-3">Reboot and Revive Week
																									</li>
																									<li class="text-sm text-gray-800">Specialized advice (IBS,
																											Bloating, Coeliac, Crohn's, Colitis, Diverticulitis, PCOS,
																											Insulin Resistance and Diabetes ,Hormonal Balance, Acne,
																											Menopause, Endometriosis, Bowel Regularity, Diarrhoea, and
																											Constipation, Underactive and Overactive Thyroid,
																											Hashimoto's, and Graves, Cold Sores and Mouth Ulcers,
																											Candida and H-Pylori, Psoriasis, Fertility support (with or
																											without IVF), Water Retention and Moderate Alcohol
																											Consumption, Weight Loss, Skincare, Reintroducing Animal
																											Products for Vegans and Vegetarians, Sports Performance and
																											Recovery, Unusual Eating Times and Travel)</li>
																							</ul>
																							<a class="button-solid w-full"
																									href="<?php echo esc_url( home_url( '/' ) ); ?>cart/?add-to-cart=7789&quantity=1">
																									<span class="text">Select Premium</span>
																									<span class="text-hover">Select Premium</span>
																							</a>
																					</div>
																			</div>
																	</div>
															</div>
													</div>
											</div>

											<div class="md:hidden border-t border-solid border-gray-300 border-opacity-30 pt-4 mt-12">
													<p class="text-sm mb-0">Need more guidance? Learn more about the benefits and
															effectiveness of an Eat Burn Sleep membership on our <a
																	href="<?php echo esc_url( home_url( '/' ) ); ?>improve-gut-health/">Membership page!</a></p>
											</div>
									</div>
							</div>

							<div class="grid md:grid-cols-2 md:gap-x-8 lg:gap-x-16 gap-y-6 items-center">
									<div class="order-2 md:order-1">
											<p class="heading-three">Give the gift of health.</p>
											<p>Gift an EBS membership today and share your low-inflammation lifestyle journey with
													friends and family.</p>
											<div class="flex flex-col sm:flex-row">
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>cart/?add-to-cart=7791&amp;quantity=1"
															class="button-ghost sm:mr-4 mb-6 sm:mb-0">
															<span class="text">Gift Standard — £199</span>
															<span class="text-hover">Gift Standard — £199</span>
													</a>
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>cart/?add-to-cart=7026&amp;quantity=1"
															class="button-solid">
															<span class="text">Gift Premium — £299</span>
															<span class="text-hover">Gift Premium — £299</span>
													</a>
											</div>
									</div>
									<div class="order-1 md:order-2">
											<img class="-ml-3 md:ml-0"
													src="/wp-content/uploads/2021/06/12.0-Gift-Membership-e1606270351669.png" width="624">
									</div>
							</div>
					</div>

					<i class="close fal fa-times absolute top-0 right-0 mr-8 mt-6 text-2xl text-black hover:text-primary focus:text-primary cursor-pointer transition-300-ease"
							data-modal-close=""></i>
			</div>
	</div>
</div>

<!-- Membership Required modal -->
<div class="modal pop-up relative hidden z-50" id="membership-required-modal" aria-hidden="false">
	<div class="overlay fixed flex items-center justify-center top-0 right-0 left-0 bottom-0 bg-black bg-opacity-75 outline-none"
			tabindex="-1" data-modal-close="">
			<div class="content-wrapper bg-white max-w-3xl w-full overflow-auto py-12 md:py-20 px-6 md:px-20 lg:px-32 mx-4 text-center"
					role="dialog" aria-modal="true">
					<img class="mx-auto mb-6" src="/wp-content/uploads/2021/06/Lock-1.svg" width="56">
					<p class="heading-three">Membership Required</p>
					<p>The content you are trying to view is only accessible to EBS members. Sign up for a membership today
							to access this content, along with and tons of other resources for living a low inflammation
							lifestyle.</p>
					<div class="flex justify-center flex-col sm:flex-row flex-wrap md:flex-no-wrap"
							onclick="MicroModal.close('membership-required-modal');">
							<a data-modal-open="sign-up-modal" class="gtm-sign-up button-solid sm:mr-4 mb-4 sm:mb-0">
									<span class="text-hover">Sign Up</span>
									<span class="text">Sign Up</span>
							</a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>improve-gut-health/" class="button-ghost">
									<span class="text-hover">Learn More</span>
									<span class="text">Learn More</span>
							</a>
					</div>

					<i class="close fal fa-times absolute top-0 right-0 mr-5 mt-4 text-2xl text-black hover:text-primary focus:text-primary cursor-pointer transition-300-ease"
							data-modal-close=""></i>
			</div>
	</div>
</div>

<!-- Upgrade Membership modal -->
<div class="modal pop-up relative hidden z-50" id="upgrade-membership-modal" aria-hidden="false">
	<div class="overlay fixed flex items-center justify-center top-0 right-0 left-0 bottom-0 bg-black bg-opacity-75 outline-none"
			tabindex="-1" data-modal-close="">
			<div class="content-wrapper bg-white max-w-3xl w-full overflow-auto py-12 md:py-20 px-6 md:px-20 lg:px-32 mx-4 text-center"
					role="dialog" aria-modal="true">
					<div class="border border-solid border-primary rounded inline-flex justify-center px-3 py-2 mb-6">
							<img class="mr-2" src="/wp-content/uploads/2021/06/Premium-Content.svg" width="20">
							<span class="text-primary uppercase text-xs font-medium tracking-wider">Premium Content</span>
					</div>
					<p class="heading-three">Upgrade Your Membership</p>
					<p>The content you are trying to view is only accessible on the Premium membership. Please upgrade your
							membership to enjoy unlimited access to the EBS Platform.</p>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>product/eat-burn-sleep-membership/" class="button-solid">Upgrade My
							Membership</a>

					<i class="close fal fa-times absolute top-0 right-0 mr-5 mt-4 text-2xl text-black hover:text-primary focus:text-primary cursor-pointer transition-300-ease"
							data-modal-close=""></i>
			</div>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
