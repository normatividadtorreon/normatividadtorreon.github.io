<?php
/**
 * Normatividad Torreón - ReglamentoEspecificacionesConstruccionServiciosPublicosPavimentos
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
 * Clase ReglamentoEspecificacionesConstruccionServiciosPublicosPavimentos
 */
class ReglamentoEspecificacionesConstruccionServiciosPublicosPavimentos extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de especificaciones para la construcción de servicios públicos y pavimentos del Municipio de Ciudad de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-especificaciones-construccion-servicios-publicos-pavimentos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente reglamento tienen como fundamento principal el establecer los lineamientos, normas, procedimientos y/o requisitos básicos, para la ejecución correcta de las diferentes etapas en la construcción de los servicios públicos y pavimentos de la ciudad. Comprenden también procedimientos y criterios generales que deben seguirse en los trabajos de mejoramiento de pavimentos existentes, así como de obras complementarias.';
        $this->claves                     = 'Reglamento, Vigente, Constrccion, Servicios, Publicos, Pavimentos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoEspecificacionesConstruccionServiciosPublicosPavimentos.md';
    } // constructor

} // Clase ReglamentoEspecificacionesConstruccionServiciosPublicosPavimentos

?>
