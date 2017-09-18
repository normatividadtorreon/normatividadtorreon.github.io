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

namespace ReglamentosVigentes;

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
        $this->nombre                     = 'Reglamento de Panteones y Crematorios de la ciudad de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-panteones-crematorios';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las disposiciones de este Reglamento son de orden público y observancia general en el Municipio de Torreón, Coahuila, y tienen por objeto regular el establecimiento, funcionamiento, conservación y vigilancia de los panteones. Servicio público que comprende la inhumación, exhumación, reinhumación y cremación de cadáveres, restos humanos y restos humanos áridos o cremados.';
        $this->claves                     = 'Reglamento, Vigente, Panteones, Crematorios';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoPanteonesCrematorios.md';
    } // constructor

} // Clase ReglamentoPanteonesCrematorios

?>
