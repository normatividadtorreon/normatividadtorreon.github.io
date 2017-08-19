<?php
/**
 * Normatividad Torreón - ReglamentoInteriorComiteMunicipalAdicciones
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
 * Clase ReglamentoInteriorComiteMunicipalAdicciones
 */
class ReglamentoInteriorComiteMunicipalAdicciones extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento interior del Comité Municipal de las Adicciones de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '1999-11-30T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-interior-comite-municipal-adicciones';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente Reglamento tiene por objeto articular un sistema interinstitucional que incida de manera integral en la problemática de las adicciones.';
        $this->claves                     = 'Reglamento, Vigente, Interior, Comite, Adicciones';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoInteriorComiteMunicipalAdicciones.md';
    } // constructor

} // Clase ReglamentoInteriorComiteMunicipalAdicciones

?>
