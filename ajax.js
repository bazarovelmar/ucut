$("#sendBtn").on("click", function () {
    var cutUrl = $("#inputUrl").val().trim();

    $.ajax({
        url: 'short.php',
        type: 'POST',
        cache: false,
        dataType: 'json',
        data: {'cutUrl': cutUrl},
        success (data) {
            if (data.status) {
                $(".resultMessage").text('Ваша ссылка ');
                $("#shortUrl").text(data.url);
                $("#shortUrl").attr("href", data.url)
                $("#infoMes").text("");
            }
            else {
                $("#infoMes").text("Некорректная ссылка");
                $(".resultMessage").text('');
                $("#shortUrl").text('');
            }
        }
    });
});

