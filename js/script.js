
jQuery(document).ready(function () {
    jQuery("#formID").validationEngine();
});

function checkHELLO(field, rules, i, options) {
    if (field.val() != "HELLO") {
        return options.allrules.validate2fields.alertText;
    }
}

$(document).ready(function () {
    $(".btnEliminarItem").click(function () {
        var id = $(this).attr("id").split("-")[1];
        $("#btnEliminar").attr("href", urlDelete + id);
    });
});
