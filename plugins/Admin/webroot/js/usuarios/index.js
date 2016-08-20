$(document).ready(function() {

    $("#checarTodos").on("click", function() {
        if (this.checked) {
            $(".secoes").each(function() {
                this.checked = true;

            });

            $(".subSecoes").each(function() {
                $(this).prop("checked", true);
            });
        } else {
            $(".secoes").each(function() {
                this.checked = false;
            });

            $(".subSecoes").each(function() {
                $(this).prop("checked", false);
            });
        }
    });

});