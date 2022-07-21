<?php
//clase principal, con los datos comunes de los productos
class Productos {
    public $nombre;
    public $descripcion;
    public $precio;
    public $imagen;

    public function descuento($porc){
        return $this->precio = $this->precio - ($this->precio * ($porc / 100));
    }
    
    public function cambiaNombre($newNom) {
        $this->nombre = $newNom;
        return "Nombre actualizado";
    }

    public function cambiaDescripcion($newDes) {
        $this->descripcion = $newDes;
        return "Descripción actualizada";
    }

    public function cambiaPrecio($newPre) {
        $this->nombre = $newPre;
        return "Precio actualizado";
    }
}


?>