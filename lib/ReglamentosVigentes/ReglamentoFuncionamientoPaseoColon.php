<?php
/**
 * Normatividad Torreón - ReglamentoFuncionamientoPaseoColon
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
 * Clase ReglamentoFuncionamientoPaseoColon
 */
class ReglamentoFuncionamientoPaseoColon extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento del Funcionamiento del Paseo Colón de La Ciudad de Torreón Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-funcionamiento-paseo-colon';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente Reglamento es de interés público y de observancia general en todo lo concerniente al espacio comprendido del Paseo Colón de Torreón, Coahuila y tiene como objetivo promover el desarrollo del “Paseo Colón” dentro del Municipio de Torreón, Coahuila, como medio de cohesión social y desarrollo humano integral.';
        $this->claves                     = 'Reglamento, Vigente, Funcionamiento, Paseo Colon';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoFuncionamientoPaseoColon.md';
    } // constructor

} // Clase ReglamentoFuncionamientoPaseoColon

?>
