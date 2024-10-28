<?php
declare(strict_types=1);
namespace TestClasses\Daw2\Clases;

class Categoria
{

    const SEPARADOR = ">";

    public function __construct(private string $nombre, private ?Categoria $padre = null){

        if (strlen(trim($this->nombre)) === 0) {

            throw new \InvalidArgumentException("El nombre no puede estar vacio");

        }

    }

    public function getNombre(): string{

        return $this->nombre;
    }

    public function getPadre(): Categoria{

        return $this->padre;

    }

    public function getFullName(){

        $res = $this->nombre;
        $padre = $this->padre;
        while (!is_null($padre)) {


        }

        return $res;

    }

}