jQuery(function ($) {
    $(".see-edit").on("click", function () {
        let taskid = $(this).data("taskid");

        $("#titleTask").html("Carregando...");

        $(".step-edit").hide();
        $(".edit-footer").hide();
        $(".step-edit2").show();
        $("#editTask").modal("show");
        $("#iaPath").hide();
        $("#iaDescription").val("");

        $.ajax({
            url: "/" + taskid,
            method: "GET",
            success: (data) => {
                console.log(data);
                $(".step-edit:visible").fadeOut("fast", () => {
                    $(".edit-footer").slideDown("fast");

                    $("#taskID").val(data.data.id);
                    $("#editTitle").val(data.data.title);
                    $("#editDescription").val(data.data.description);
                    $("#editIA").val(data.data.ia_manager ? "Sim" : "Não");
                    $("#responsible_id_edit").val(data.data.responsible_id);
                    $("#priorityEdit").val(data.data.priority);
                    $("#deadlineEdit").val(data.data.deadline);
                    $("#iaDescription").val(data.data.ia_path);

                    if (data.data.ia_manager) $("#iaPath").show();
                    $(".step-edit1").fadeIn("fast");
                });
            },
            error: (error) => {
                console.error(error);
            },
        });
    });
    var editStep;
    $(".btn-submit-edit").on("click", () => {
        $(".step-edit:visible").fadeOut("fast", () => {
            $(".edit-footer").hide();
            $(".step-edit2").fadeIn("fast", () => {
                $("#titleTask").html("Carregando...");

                let form = $("#formUpdate")[0];
                let taskid = $("#taskID").val();
                let formData = new FormData(form);

                let token = $('meta[name="csrf-token"]').attr("content");

                $.ajax({
                    url: "/" + taskid,
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": token,
                    },
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: (data) => {
                        console.log(data);
                        $(".step-edit:visible").fadeOut("fast", () => {
                            $(".step-edit3").fadeIn("fast");
                        });
                    },
                    error: (error) => {
                        console.error(error.responseText);
                    },
                });
            });
        });
    });

    let editTask = document.getElementById("formUpdate");

    editTask.addEventListener("hidden.bs.modal", function (event) {
        if ($(".step-edit3").is(":visible")) {
            window.location.reload();
        }
    });
});
