
$(document).ready(function () {
    $('#id_fakuldade').change(function () {
        var id = $(this).val();
        $.ajax({
            url: "getdepart",
            method: "POST",
            data: {
                id: id
            },
            async: false,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<option value="' + data[i].id_departamentu + '">' + data[i].departamentu +
                        '</option>';
                }
                $('.id_departamentu').html(html);

            }
        });
    });
});