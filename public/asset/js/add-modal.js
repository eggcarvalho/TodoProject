jQuery(function ($) {
    var actualStep = 1;
    var totalSteps = 3;

    $(".nextButton").on("click", function () {
        if (actualStep < totalSteps) {
            actualStep++;
            if (!validateStep(actualStep)) {
                actualStep--;
                return;
            }
            chooseStep(actualStep);
            $(".backButton").show();
        }
    });

    $(".backButton").on("click", function () {
        actualStep--;
        $(".nextButton").show();

        chooseStep(actualStep);
    });

    $("input[type='radio']").on("change", function () {
        let value = $(this).val();

        $(".submitButton").show();
        if (value == "true") {
            $(".nextButton").hide();
            return;
        }

        chooseStep(3);
    });

    $(".submitButton").on("click", function () {
        if (actualStep === 3 && !validateStep(actualStep)) return false;

        $(".step:visible").fadeOut("fast", function () {
            $(".step4").fadeIn("fast", function () {
                $(".add-footer").slideUp("fast", function () {
                    submitForm();
                });
            });
        });
    });

    let addTask = document.getElementById("addTask");

    // Adiciona o evento de fechamento
    addTask.addEventListener("hidden.bs.modal", function (event) {
        if (actualStep === 5) {
            window.location.reload();
        }
    });

    function chooseStep(step) {
        actualStep = step;

        $(".step:visible").fadeOut("fast", function () {
            $(".step" + step).fadeIn("fast");
        });

        if (step == 1) $(".backButton").hide();
        if (step === 2) $(".nextButton").hide();
        if (step == 3) $(".submitButton").show();
    }

    function validateStep(step) {
        if (
            (step === 2 && $("#title").val() == "") ||
            (step === 2 && $("#description").val() == "")
        ) {
            alert("Você precisa informar titulo e descrição");
            return false;
        }

        if (step === 3) {
            if (
                $("#responsible_id").val() === "" ||
                $("#priority").val() === "" ||
                $("#deadline").val() === ""
            ) {
                alert(
                    "Você precisa informar todos os campos: \n Responsável, Prioridade e Deadline"
                );
                return false;
            }
        }

        return true;
    }

    function submitForm() {
        let form = $("#saveTask")[0];

        let formData = new FormData(form);

        $.ajax({
            url: "/",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: (data) => {
                chooseStep(5);
            },
            error: (error) => {
                console.error(error);
            },
        });
    }
});
