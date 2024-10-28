<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $data['titulo']; ?></h1>

</div>

<!-- Content Row -->
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo-ej8']; ?></h6>
            </div>
            <div class="card-body">
                <div class="mb-3 col-12">
                    <textarea class="form-control" id="texto" name="texto"
                              rows="3"><?php echo $data['input_texto'] ?? ''; ?></textarea>
                    <p class="text-danger small"><?php echo $data['errors']['texto'] ?? ''; ?></p>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Enviar" name="enviar" class="btn btn-primary">
                </div>
            </div>
        </div>
    </div>
</div>