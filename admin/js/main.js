$(document).ready(function () {

    $(".delete_post").on('click', function () {

        var id = $(this).attr('rel');
        var delete_url = "posts.php?delete="+ id +"";
        $(".modal_delete_link").attr("href", delete_url);
    });

    $(".delete_user").on('click', function () {

        var user_id = $(this).attr('rel');
        var delete_user_url = "users.php?delete="+ user_id +"";
        $(".modal_delete_link").attr("href", delete_user_url);
    });
});