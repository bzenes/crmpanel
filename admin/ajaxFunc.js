$(document).ready(function () {
    $("#register-btn").click(function (e) {
        if ($("#register-form")[0].checkValidity()) {
            e.preventDefault();
            $("#register-btn").val("Lütfen Bekleyin...");
            if ($("#rpass").val() != $("#rpassControl").val()) {
                $("#passError").text("* Şifre uyuşmuyor");
                $("#register-btn").val("Kayıt Ol");
            } else {
                $("#passError").text("");
                $.ajax({
                    url: "admin/function.php",
                    method: "post",
                    data: $("#register-form").serialize() + "&action=register",
                    success: function (response) {
                        $("#register-btn").val("Kayıt Ol");
                        if (response === "register") {
                            window.location = "../panel/index.php";
                        } else {
                            $("#alert").html(response);
                        }
                    }
                });
            }
        }
    });

    $("#login-btn").click(function (e) {
        if ($("#login-form")[0].checkValidity()) {
            e.preventDefault();
            $("#login-btn").val("Lütfen Bekleyin...");
            $.ajax({
                url: "admin/function.php",
                method: "post",
                data: $("#login-form").serialize() + "&action=login",
                success: function (response) {
                    $("#login-btn").val("Giriş Yap");
                    if (response === "login") {
                        window.location = "../panel/index.php";
                    } else {
                        $("#alert").html(response);
                    }
                }
            });
        }
    });

    $("#addNoteBtn").click(function (e) {
        if ($("#add-note-form")[0].checkValidity()) {
            e.preventDefault();
            $("#addNoteBtn").val("Lütfen Bekleyin...");
            $.ajax({
                url: "admin/process.php",
                method: "post",
                data: $("#add-note-form").serialize() + "&action=add_note",
                success: function (response) {
                    $("#addNoteBtn").val("Gönder");
                    $("#add-note-form")[0].reset();
                    $("#alert").html(response);
                }
            });
        }
    });


});