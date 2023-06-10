jQuery(function($) {
   $(document).ready(function() {
      var url_string = window.location.href;
      var url = new URL(url_string);
      var radio_meal_type_value = url.searchParams.get("radio-movement-type");
      var select_meal_type_value = url.searchParams.get("select-movement-type");
      var order_value = url.searchParams.get("order");
      $("input[name=radio-movement-type][value=" + radio_meal_type_value + "]").prop("checked", true);
      $(".movement-filter-select[name='select-movement-type'] option[value='" + select_meal_type_value + "']").prop("selected", true);
      $(".movement-filter-select[name='order'] option[value='" + order_value + "']").prop("selected", true);
   });

   $(document).on("change", ".movement-filter-select, .movement-filter-radio", function() {
      $.ajax({
         url: movement_params.ajax_url,
         data: $("#movement-filters").serialize(),
         dataType: "json",
         type: "POST",
         success: function(data) {
            $("#ajax-target-wrapper")
               .hide()
               .html(data.content)
               .fadeIn("slow");

            $selectedOrder = $(".movement-filter-select[name='order']").val();
            $checkedMovementType = $("[name='radio-movement-type']:checked").val();
            $selectedMovementType = $("[name='select-movement-type']").val();

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
                  "&radio-movement-type=" +
                  $checkedMovementType +
                  "&select-movement-type=" +
                  $selectedMovementType +
                  "&order=" +
                  $selectedOrder
            );

            $(".pagination").pagination({
               items: data.found_posts,
               itemsOnPage: 6,
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
                        "&radio-movement-type=" +
                        $checkedMovementType +
                        "&select-movement-type=" +
                        $selectedMovementType +
                        "&order=" +
                        $selectedOrder
                  );
                  $("#ajax-target-wrapper").load(
                     "/movement-pagination?pagination=" +
                        pageNumber +
                        "&order=" +
                        $selectedOrder +
                        "&radio-movement-type=" +
                        $checkedMovementType +
                        "&select-movement-type=" +
                        $selectedMovementType
                  );
                  $("html, body").animate(
                     {
                        scrollTop: $("#ajax-target-wrapper").offset().top - 150,
                     },
                     500
                  );
               },
            });
         },
      });
      // do not submit the form
      return false;
   });

   $("#movement-filters-trigger").click(function() {
      $("#movement-filters").slideToggle();
   });
});
