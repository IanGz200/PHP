<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $data['titulo']?></h1>

</div>

<!-- Content Row -->
<?php if (isset($data['max'])) { ?>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-success">
                <p>A</p>
            </div>
        </div>
    </div>
    <?php
}
?>
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Primos</h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3 col-12">
                        <label for="textarea">Inserte el numero maximo</label>
                        <label>
                            <input type="number" id="numero" name="numero">
                        </label>
                        <textarea class="form-control" id="numeros" name="numeros"
                                  rows="3"><?php echo $data['numeros'] ?? ''; ?></textarea>
                        <p class="text-danger small"><?php echo $data['errors']['numeros'] ?? ''; ?></p>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Enviar" name="enviar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

