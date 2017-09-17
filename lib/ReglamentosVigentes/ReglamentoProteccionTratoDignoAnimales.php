<?php
/**
 * Normatividad Torreón - ReglamentoProteccionTratoDignoAnimales
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package NormatividadTorreon
 */

namespace ReglamentosVigentes;

/**
 * Clase ReglamentoProteccionTratoDignoAnimales
 */
class ReglamentoProteccionTratoDignoAnimales extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de Protección y Trato Digno a los Animales para el Municipio de Torreón';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-proteccion-trato-digno-animales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente Reglamento es de orden público, interés social y observancia obligatoria en el Municipio de Torreón. Su objeto es regular, en el ámbito de su competencia, las disposiciones contenidas en la Ley de Protección y Trato Digno a los Animales para el Estado de Coahuila de Zaragoza y su Reglamento, a fin de garantizar la protección, bienestar y trato digno de los animales que se encuentren dentro de su jurisdicción territorial.';
        $this->claves                     = 'Reglamento, Vigente, Proteccion, Trato Digno, Animales';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoProteccionTratoDignoAnimales.md';
    } // constructor

} // Clase ReglamentoProteccionTratoDignoAnimales

?>
