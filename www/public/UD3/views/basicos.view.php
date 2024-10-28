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
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo-ej1']; ?></h6>
            </div>
            <div class="card-body">
                El cuadrado del numero <?php echo $data['ej1_a'] ?> es <?php echo $data['ej1_b'] ?>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo-ej2']; ?></h6>
            </div>
            <div class="card-body">
                El precio hora es <?php echo $data['ej2_a'] ?>,
                las horas son <?php echo $data['ej2_b'] ?>
                y el pago es <?php echo $data['ej2_c'] ?>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo-ej3']; ?></h6>
            </div>
            <div class="card-body">
                La base del rectangulo es <?php echo $data['ej3_a'] ?>,
                la altura es <?php echo $data['ej3_b'] ?>,
                el area es <?php echo $data['ej3_c'] ?>
                y el diametro es <?php echo $data['ej3_d'] ?>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo-ej4']; ?></h6>
            </div>
            <div class="card-body">
                El alumno <?php echo $data['ej4_a'] ?> de edad <?php echo $data['ej4_b'] ?> tiene una nota
                media de <?php echo $data['ej4_c'] ?>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo-ej5']; ?></h6>
            </div>
            <div class="card-body">
                El precio por noche en temporada baja es <?php echo $data['ej5_a'] ?>,
                y estuvo <?php echo $data['ej5_b'] ?> noches.
                El precio por noche en temporada alta es <?php echo $data['ej5_c'] ?>,
                y estuvo <?php echo $data['ej5_d'] ?> noches.
                El precio total es <?php echo $data['ej5_e'] ?>€ en temporada baja mas <?php echo $data['ej5_f'] ?>€ en
                temporada alta. El total sería: <?php echo $data['ej5_g']?>
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo-ej6']; ?></h6>
            </div>
            <div class="card-body">
                El area de un circulo de radio <?php echo $data['ej6_a'] ?> es
                <?php echo number_format($data['ej6_c'], decimals: 2 ,decimal_separator: ",") ?>,
                y el perimetro es <?php echo number_format($data['ej6_d'], decimals: 2 ,decimal_separator: ",") ?>.
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo-ej7']; ?></h6>
            </div>
            <div class="card-body">
                La velocidad en <?php echo $data['ej7_a'] ?>km/hora equivale a
                <?php echo number_format($data['ej7_b'],decimals: 2,decimal_separator: ",") ?>m/segundo.
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo-ej8']; ?></h6>
            </div>
            <div class="card-body">
                El numero <?php echo $data['ej8_a'] ?> esta compuesto por <?php echo $data['ej8_b'] ?>,
                <?php echo $data['ej8_c'] ?> y por <?php echo $data['ej8_d'] ?>.
            </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo-ej9']; ?></h6>
            </div>
            <div class="card-body">
                La frase "<?php echo $data['ej9_a'] ?>" tiene <?php echo $data['ej9_b'] ?> caracteres
                y <?php echo $data['ej9_c'] ?> palabras.
            </div>
        </div>
    </div>
</div>

