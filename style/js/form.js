
  $(document).ready(function () {
    $('#name').on('keyup', function (e) {
      var data = $(this).val();
      if (data) {
        $("#error").text('This field is required.')
      }

    });
  });

// Drop Down //
  $(".dropRemove").hide();
  $(".dropContent").hide();

  $(document).ready(function () {
    $(".dropBox").on('click', function (e) {
        e.preventDefault();
        $(".dropContent").slideUp(300);
        var dropButton = $(this);
        if (dropButton.find(".dropAdd").is(":hidden")) {
            dropButton.find(".dropRemove").hide();
            dropButton.find(".dropAdd").show();
        } else {
            $(".dropAdd").show();
            $(".dropRemove").hide();
            dropButton.closest(".dropList").find(".dropContent").slideDown(300);
            dropButton.find(".dropRemove").show();
            dropButton.find(".dropAdd").hide();
        }
    });
});