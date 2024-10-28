<?php

namespace TestClasses\Daw2\Clases;

class Producto
{

    public function __construct(private String $codProducto,private String $nombre,private String $descripcion,
                                private String $proveedor,private String $categoria,private int $coste,
                                private int $margen,private int $stock,private int $iva){




    }

}