jQuery(function($) {
   $(document).ready(function() {
      var url_string = window.location.href;
      var url = new URL(url_string);
      var member_doctor_value = url.searchParams.get("member-doctor");
      var category_value = url.searchParams.get("category");
      $("input[name=member-doctor][value=" + member_doctor_value + "]").prop("checked", true);
      $(".reviews-filter-select option[value='" + category_value + "']").prop("selected", true);
   });

   $("#review-filters select, #review-filters input[type=radio]").change(function() {
      $.ajax({
         url: reviews_params.ajax_url,
         data: $("#review-filters").serialize(), // form data
         dataType: "json", //expect html to be returned
         type: "POST",
         success: function(data) {
            // insert the posts to the container
            $("#ajax-target-wrapper")
               .hide()
               .html(data.content)
               .fadeIn("slow");

            $checkedReview = encodeURIComponent($("input[type=radio][name='member-doctor']:checked").val());
            $selectedCategory = encodeURIComponent($(".reviews-filter-select[name='category']").val());

            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            let pagination = urlParams.get("pagination");
            let pageNumber;
            if (pagination == null) {
               pageNumber = 1;
            } else {
               pageNumber = pagination;
            }

            window.history.replaceState(
               null,
               null,
               "?pagination=" + pageNumber + "&member-doctor=" + $checkedReview + "&category=" + $selectedCategory
            );

            $(".pagination").pagination({
               items: data.total_records,
               itemsOnPage: 10,
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
                     "?pagination=" + pageNumber + "&member-doctor=" + $checkedReview + "&category=" + $selectedCategory
                  );
                  $("#ajax-target-wrapper").load(
                     "/reviews-pagination?pagination=" + pageNumber + "&member-doctor=" + $checkedReview + "&category=" + $selectedCategory
                  );
                  $("html, body").animate(
                     {
                        scrollTop: $("#ajax-target-wrapper").offset().top - 150,
                     },
                     500
                  );
               },
            });

            $(".masonry-grid").masonry("reloadItems");
            $(".masonry-grid").masonry("layout");
         },
      });

      // do not submit the form
      return false;
   });
});
