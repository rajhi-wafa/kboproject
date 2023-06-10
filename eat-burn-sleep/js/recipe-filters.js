jQuery(function($) {
   $(document).ready(function() {
      var url_string = window.location.href;
      var url = new URL(url_string);
      var radio_meal_type_value = url.searchParams.get("radio-meal-type");
      var select_meal_type_value = url.searchParams.get("select-meal-type");
      var select_list_type_value = url.searchParams.get("select-list-type");
      var select_food_type_value = url.searchParams.get("select-food-type");
      var order_value = url.searchParams.get("order");
      $("input[name=radio-meal-type][value=" + radio_meal_type_value + "]").prop("checked", true);
      $(".recipe-filter-select[name='select-meal-type'] option[value='" + select_meal_type_value + "']").prop("selected", true);
      $(".recipe-filter-select[name='select-list-type'] option[value='" + select_list_type_value + "']").prop("selected", true);
      $(".recipe-filter-select[name='select-food-type'] option[value='" + select_food_type_value + "']").prop("selected", true);
      $(".recipe-filter-select[name='order'] option[value='" + order_value + "']").prop("selected", true);
   });

   $(document).on("change", ".recipe-filter-select, .recipe-filter-radio", function() {
      $.ajax({
         url: recipe_params.ajax_url,
         data: $("#recipe-filters").serialize(),
         dataType: "json",
         type: "POST",
         success: function(data) {
            // insert the posts to the container
            $("#ajax-target-wrapper")
               .hide()
               .html(data.content)
               .fadeIn("slow");

            $checkedMealType = $("[name='radio-meal-type']:checked").val();
            $selectedOrder = $(".recipe-filter-select[name='order']").val();
            $selectedMealType = $("[name='select-meal-type']").val();
            $selectedListType = $("[name='select-list-type']").val();
            $selectedFoodType = $("[name='select-food-type']").val();

            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            let pagination = urlParams.get("pagination");
            let pageNumber;
            if (pagination == null || pagination == "undefined") {
               pageNumber = 1;
            } else {
               pageNumber = pagination;
            }

            window.history.replaceState(
               null,
               null,
               "?pagination=" +
                  pageNumber +
                  "&radio-meal-type=" +
                  $checkedMealType +
                  "&select-meal-type=" +
                  $selectedMealType +
                  "&select-list-type=" +
                  $selectedListType +
                  "&select-food-type=" +
                  $selectedFoodType +
                  "&order=" +
                  $selectedOrder
            );

            $(".pagination").pagination({
               items: data.found_posts,
               itemsOnPage: 15,
               displayedPages: 3,
               currentPage: 1,
               prevText: '<i class="fas fa-chevron-left"></i>',
               nextText: '<i class="fas fa-chevron-right"></i>',
               hrefTextPrefix: "#pagination-",
               onPageClick: function(pageNumber, e) {
                  e.preventDefault();
                  window.history.replaceState(
                     null,
                     null,
                     "?pagination=" +
                        pageNumber +
                        "&radio-meal-type=" +
                        $checkedMealType +
                        "&select-meal-type=" +
                        $selectedMealType +
                        "&select-list-type=" +
                        $selectedListType +
                        "&select-food-type=" +
                        $selectedFoodType +
                        "&order=" +
                        $selectedOrder
                  );
                  $("#ajax-target-wrapper").load(
                     "/recipe-pagination?pagination=" +
                        pageNumber +
                        "&radio-meal-type=" +
                        $checkedMealType +
                        "&select-meal-type=" +
                        $selectedMealType +
                        "&select-list-type=" +
                        $selectedListType +
                        "&select-food-type=" +
                        $selectedFoodType +
                        "&order=" +
                        $selectedOrder
                  );
                  $("html, body").animate(
                     {
                        scrollTop: $("#ajax-target-wrapper").offset().top - 150,
                     },
                     500
                  );
               },
            });

            MicroModal.init({
               openTrigger: "data-modal-open",
               closeTrigger: "data-modal-close",
               disableScroll: true,
               disableFocus: true,
               awaitOpenAnimation: true,
               awaitCloseAnimation: true,
            });
         },
      });

      // do not submit the form
      return false;
   });

   $("#recipe-filters-trigger").click(function(e) {
      e.preventDefault();
      $("#recipe-filters-reveal").slideToggle();
   });

   $(window).on("resize load", function() {
      if ($(window).width() <= 960) {
         $("[name='radio-meal-type']:eq(0)").prop("checked", true);
         // alert($("input[name='radio-meal-type']:checked").index("input[name='radio-meal-type']"));
         $("[name='select-meal-type']").prop("selectedIndex", 0);
      } else {
         // $("[name='select-meal-type']").prop('selectedIndex',0);
         // $("[name='radio-meal-type']:eq(0)").prop('checked',true);
      }
   });
});
