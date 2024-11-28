<!-- Modal de confirmação de exclusão -->
<div class="modal fade" id="delete-user-modal" tabindex="-1" aria-labelledby="deleteUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUserLabel">Confirmação de Exclusão</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Tem certeza que deseja excluir este usuário?</p>
            </div>
            <div class="modal-footer">
                <form id="delete-form" action="delete.php" method="GET">
                    <!-- Usando 'usuario-id' como padrão -->
                    <input type="hidden" name="id" id="usuario-id" value="">
                    <button type="submit" class="button-74 me-4">
                        <i class="fa-solid fa-trash"></i> Excluir
                    </button>
                    <button type="button" class="button-74 me-4" data-bs-dismiss="modal">
                        <i class="fa-solid fa-arrow-left"></i> Cancelar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
	// Quando o modal é aberto, pega o ID do usuário e insere no formulário
    document.addEventListener('DOMContentLoaded', function () {
        var deleteModal = document.getElementById('delete-user-modal');
        var usuarioIdInput = document.getElementById('usuario-id');

        deleteModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; // Botão que abriu o modal
            var usuarioId = button.getAttribute('data-usuario-id'); // Extrai o ID do usuário

            // Insere o ID do usuário no campo oculto do formulário
            usuarioIdInput.value = usuarioId;
        });
    });
</script>
