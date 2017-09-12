<?php
/**
 * Normatividad Torreón - ReglamentoOcupacionTemporalViaPublica
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
 * Clase ReglamentoOcupacionTemporalViaPublica
 */
class ReglamentoOcupacionTemporalViaPublica extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de ocupación temporal de la vía pública del Municipio de Torreón, Coahuila.';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-ocupacion-temporal-via-publica';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente reglamento expresa la ocupación temporal de la Vía Pública, la que se norma exclusivamente para el establecimiento de vehículos en las superficies bajo el control del municipio.';
        $this->claves                     = 'Reglamento, Vigente, Ocupacion Temporal, Via Publica';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoOcupacionTemporalViaPublica.md';
    } // constructor

} // Clase ReglamentoOcupacionTemporalViaPublica

?>
