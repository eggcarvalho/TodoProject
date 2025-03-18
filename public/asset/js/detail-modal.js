jQuery(function ($) {
    $(".see-detail").on("click", function () {
        let taskid = $(this).data("taskid");

        $("#titleTask").html("Carregando...");

        $(".step-detail").hide();
        $(".step-detail2").show();
        $("#detailTask").modal("show");

        $.ajax({
            url: "/" + taskid,
            method: "GET",
            success: (data) => {
                console.log(data);
                $(".step-detail:visible").fadeOut("fast", () => {
                    $("#titleTask").html(data.data.title);
                    $("#detailPriority").html(
                        getPriorityBadge(data.data.priority)
                    );
                    $("#detailResponsible").html(data.data.responsible.name);
                    $("#detailFunctionResponsible").html(
                        data.data.responsible.function
                    );
                    $("#detailDeadline").html(data.data.deadline);
                    $("#detailIAManager").attr("checked", data.data.ia_manager);
                    $("#detailStatus").html(getStatus(data.data.status));
                    $("#detailDescription").html(data.data.description);
                    $("#descIaDetail").html(
                        data.data.ia_path ?? "Sem registro"
                    );
                    $(".step-detail1").fadeIn("fast");
                });
            },
            error: (error) => {
                console.error(error);
            },
        });
    });

    function getPriorityBadge(data) {
        switch (data) {
            case "high":
                return `<span
                            class="badge bg-danger">Alta</span>`;
            case "mid":
                return `<span
                            class="badge bg-warning">Média</span>`;

            case "low":
                return `<span
                            class="badge bg-info">Baixo</span>`;
        }
    }

    function getStatus(data) {
        switch (data) {
            case "in-progress":
                return `<span class="badge bg-warning"><i class="bi bi-hourglass-split"></i> Em Andamento</span> `;
            case "to-do":
                return `<span class="badge bg-danger"><i class="bi bi-question"></i> Para Fazer</span> `;
            default:
                return `<span class="badge bg-success"><i class="bi bi-check2"></i> Concluido</span> `;
        }
    }
});
