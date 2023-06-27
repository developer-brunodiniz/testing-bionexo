<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
    <div class="px-2">
        <form action="/html/store" method="POST" class="justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg">Cadastrar Informações</button>
        </form>
    </div>
</div>

<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
    <div class="px-2">
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalFormulario">
            Abrir Formulário
        </button>
        @include('snippets.modal')
    </div>
</div>
