<?php
    class Roupas {
        public $marca;
        public $cor;

        function __construct($marca, $cor) {
            $this->marca = $marca;
            $this->cor = $cor;
        }

        function get_marca() {
            return $this->marca;
        }

        function get_cor() {
            return $this->cor;
        }
    }

    $lacoste = new Roupas("Lacoste","Verde"); 

    echo "O nome da marca é: " . $lacoste->get_marca();

    echo "<br/>";

    echo "A cor da roupa é: " . $lacoste->get_cor();

?>