$(document).ready(function () {
  /**
   * @Comment:Actulizar doctores
   * @Author:
   * @Date: 2021-05-28 10:27:20
   * @Desc:
   */
  $(".update-category").on("click", function (e) {
    var id = $(this).attr("id");
    var name = $("#item-name-" + id).val();

    $.ajax({
      type: "POST",
      url: "/admin/doctor/" + id + "/edit",
      data: $("#userForm").serialize(),
      success: function (response) {
        toastr.success("Message here","Title here");

        window.location.href = "/admin/doctor/getall";




      },
      error: function (e) {
        console.log("something happend");
      }
    });
  });
});
