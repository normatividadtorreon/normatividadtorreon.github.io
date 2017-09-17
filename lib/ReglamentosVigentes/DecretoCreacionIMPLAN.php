<?php
/**
 * Normatividad Torreón - DecretoCreacionIMPLAN
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
 * Clase DecretoCreacionIMPLAN
 */
class DecretoCreacionIMPLAN extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Decreto del Instituto Municipal de Planeación y Competitividad de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'decreto-creacion-implan';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente Decreto tiene por objeto regular la constitución, organización, funcionamiento y control del Instituto Municipal de Planeación y Competitividad de Torreón, como un organismo municipal descentralizado con personalidad jurídica y patrimonio propio para el cumplimiento de las atribuciones que le otorgan el presente ordenamiento, las demás leyes y los demás reglamentos.';
        $this->claves                     = 'Decreto, Vigente, IMPLAN';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/DecretoCreacionIMPLAN.md';
    } // constructor

} // Clase DecretoCreacionIMPLAN

?>
