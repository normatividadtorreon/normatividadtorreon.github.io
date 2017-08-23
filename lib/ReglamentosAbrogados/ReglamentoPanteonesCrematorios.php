<?php
/**
 * Normatividad Torreón - ReglamentoPanteonesCrematorios
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

namespace ReglamentosAbrogados;

/**
 * Clase ReglamentoPanteonesCrematorios
 */
class ReglamentoPanteonesCrematorios extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de panteones y crematorios de la ciudad de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2002-12-24T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-panteones-crematorios';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente Reglamento tiene por objeto regular el establecimiento, la operación, conservación y vigilancia de los cementerios o panteones en la Ciudad.';
        $this->claves                     = 'Reglamento, Abrogado, Panteones, Crematorios';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosAbrogados/ReglamentoPanteonesCrematorios.md';
    } // constructor

} // Clase ReglamentoPanteonesCrematorios

?>
