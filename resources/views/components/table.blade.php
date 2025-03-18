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
            class="table-responsive overflow-y" style="max-height: 45vh;">
            <table
                class="table table-striped table-hover" style="width: 99%">
                <thead>
                    <tr>
                        <th scope="col">Número</th>
                        <th scope="col">Título</th>
                        <th scope="col">Responsável | Função</th>
                        <th scope="col">IA?</th>
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
                            @if($task->ia_manager)
                            <span
                                class="badge bg-primary"><i class="bi bi-android2"></i> Sim</span>
                            @else
                            <span
                                class="badge bg-info">Não</span>
                            @endif
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-3">
                                    <button
                                        type="button"
                                        class="btn btn-primary btn-sm">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                                <div class="col-3">
                                    <button
                                        type="button"
                                        class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                </div>
                                <div class="col-3">
                                    <form onsubmit="return confirm('Deseja remover esta tarefa?')" action="{{ route('delete', ['taskid' => $task->id]) }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-3">
                                    <button
                                        type="button"
                                        class="btn btn-success btn-sm">
                                        <i class="bi bi-check"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">
                            Não há tarefas cadastradas no sistema.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>