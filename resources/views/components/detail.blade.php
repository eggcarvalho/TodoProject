<!-- Modal Body -->
<div class="modal fade" id="detailTask" tabindex="-1" role="dialog" aria-labelledby="detailTask" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailTask">
                    <span id="titleTask">Carregando...</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="step-detail step-detail1">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link active"
                                id="tasks-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#tasks-content"
                                type="button"
                                role="tab"
                                aria-controls="tasks-content"
                                aria-selected="true">
                                Tarefas
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link"
                                id="infoia-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#infoia-content"
                                type="button"
                                role="tab"
                                aria-controls="infoia-content"
                                aria-selected="false">
                                Descrição da IA
                            </button>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div
                            class="tab-pane fade show active pt-2"
                            id="tasks-content"
                            role="tabpanel"
                            aria-labelledby="tasks-tab">
                            <div class="row mt-2">
                                <div class="col-6">
                                    <p class="text-muted m-0">Prioridade</p>
                                </div>
                                <div class="col-6">
                                    <p class="fw-bold m-0" id="detailPriority">

                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="text-muted m-0">Gerenciamento IA</p>
                                </div>
                                <div class="col-6">
                                    <div class="fw-bold m-0">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" id="detailIAManager" type="checkbox" role="switch" checked style="pointer-events: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="text-muted m-0">Status</p>
                                </div>
                                <div class="col-6">
                                    <p class="fw-bold m-0" id="detailStatus"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="text-muted m-0">Responsável</p>
                                </div>
                                <div class="col-6">
                                    <p class="fw-bold m-0" id="detailResponsible"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="text-muted m-0">Função do Responsável</p>
                                </div>
                                <div class="col-6">
                                    <p class="fw-bold m-0" id="detailFunctionResponsible"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p class="text-muted m-0">Deadline (Prazo)</p>
                                </div>
                                <div class="col-6">
                                    <p class="fw-bold m-0" id="detailDeadline"></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <p class="text-muted m-0">Descrição Usuário</p>
                                </div>
                                <div class="col-12">
                                    <p class="m-0" id="detailDescription">

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="tab-pane fade pt-2"
                            id="infoia-content"
                            role="tabpanel"
                            aria-labelledby="infoia-tab">
                            <div class="row mt-2">
                                <div class="col-12">
                                    <p class="text-muted m-0">Descrição IA</p>
                                    <hr>
                                </div>
                                <div class="col-12">
                                    <p class="m-0" id="descIaDetail">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel mauris id neque convallis congue. Sed consectetur, purus ac vulputate congue, justo eros lobortis velit, vel lobortis sem velit a enim. Sed tincidunt, nunc vel pharetra mattis, ex nunc consectetur arcu, vel volutpat felis enim vel turpis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-detail step-detail2" style="display: none;">
                    <div class="d-flex flex-column gap-5 align-items-center justify-content-center" style="min-height: 300px;">
                        <div
                            class="spinner-border text-primary spinner-border-sm"
                            role="status" style="width: 5rem; height: 5rem;">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <h6 class="text-primary">Carregando...</h6>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>