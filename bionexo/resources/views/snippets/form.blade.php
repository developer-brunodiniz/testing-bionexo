<form action="/html/processar/form" class="formulario" method="POST" enctype='multipart/form-data'>
    @csrf
    <div class="row">
        <div class="col-6 alignForm">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="email" class="form-control" id="username" name="username">
            </div>
        </div>
        <div class="col-6 alignForm">
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 alignForm">
            <div class="mb-3">
                <label for="comentario" class="form-label">Comentário</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 alignForm">
            <div class="mb-3">
                <label for="file" class="form-label">Upload file:</label>
                <input class="form-control" type="file" name="file" id="file">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="cb1" name="checkbox[]" value="cb1">
                    <label class="form-check-label" for="cb1">Checkbox 1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="cb2" name="checkbox[]" value="cb2">
                    <label class="form-check-label" for="cb2">Checkbox 2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="cb3" name="checkbox[]" value="cb3">
                    <label class="form-check-label" for="cb3">Checkbox 3</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="radioval" id="rd1" value="rd1">
                    <label class="form-check-label" for="rd1">Radio 1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="radioval" id="rd2" value="rd2">
                    <label class="form-check-label" for="rd2">Radio 2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="radioval" id="rd3" value="rd3">
                    <label class="form-check-label" for="rd3">Radio 3</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 alignForm">
            <div class="mb-3">
                <label for="file" class="form-label">Multiple select:</label>
                <select class="form-select" name="multipleselect[]" multiple aria-label="multiple select example">
                    <option value="ms1">Selection Item 1</option>
                    <option value="ms2">Selection Item 2</option>
                    <option value="ms3">Selection Item 3</option>
                    <option value="ms3">Selection Item 4</option>
                </select>
            </div>
        </div>
        <div class="col-6 alignForm">
            <div class="mb-3">
                <label for="file" class="form-label">Dropdown:</label>
                <select class="form-select" name="dropdown" aria-label="Default select example">
                    <option value="dd1">Drop Down Item 1</option>
                    <option value="dd2">Drop Down Item 2</option>
                    <option value="dd3">Drop Down Item 3</option>
                    <option value="dd4">Drop Down Item 4</option>
                    <option value="dd5">Drop Down Item 5</option>
                    <option value="dd6">Drop Down Item 6</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <button type="submit" class="btn btn-success buttonForm">Enviar</button>
            </div>
        </div>
</form>
