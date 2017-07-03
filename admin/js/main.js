$(document).ready(function () {

    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 2000);

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

    $(function() {
        $('textarea').froalaEditor({
            toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '|', 'fontFamily', 'fontSize', 'color', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', 'quote', '-', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', '|', 'emoticons', 'specialCharacters', 'insertHR', 'selectAll', 'clearFormatting', '|', 'print', 'help', 'html', '|', 'undo', 'redo'],
            pluginsEnabled: null
        })
    });

});