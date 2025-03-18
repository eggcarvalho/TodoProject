<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-8 d-flex align-items-center">
                <h6 class="m-0"><i class="bi bi-card-checklist"></i> Tarefas</h6>
            </div>
            <div class="col-4 text-end">
                @stack('addButton')
            </div>
        </div>
    </div>
    <div class="card-body">
        <div
            class="table-responsive overflow-y" style="max-height: 50vh;">
            <table
                class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Número</th>
                        <th scope="col">Título</th>
                        <th scope="col">Responsável | Função</th>
                        <th scope="col">Ações</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->responsible->name }} | {{ $task->responsible->function }}</td>
                        <td>
                            <button
                                type="button"
                                class="btn btn-primary btn-sm">
                                <i class="bi bi-eye"></i>
                            </button>
                            <button
                                type="button"
                                class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button
                                type="button"
                                class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                            <button
                                type="button"
                                class="btn btn-success btn-sm">
                                <i class="bi bi-check"></i>
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">
                            Não há tarefas cadastradas nesse sistema.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>