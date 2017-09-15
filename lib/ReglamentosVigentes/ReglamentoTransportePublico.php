<?php
/**
 * Normatividad Torreón - ReglamentoTransportePublico
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
 * Clase ReglamentoTransportePublico
 */
class ReglamentoTransportePublico extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de transporte público para el municipio de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-transporte-publico';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Este Reglamento que crea la Dirección de Transporte, y contiene las normas necesarias para organizar la prestación del servicio, el régimen para el otorgamiento, transmisión, enajenación y extinción de las concesiones, la participación ciudadana y la organización de los concesionarios; estableciendo así el orden y la seguridad jurídica que los transportistas y los usuarios requieren. Buscando que el progreso del Transporte Municipal, sea un proceso ordenado, sostenido y permanente.';
        $this->claves                     = 'Reglamento, Vigente, Transporte, Publico';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoTransportePublico.md';
    } // constructor

} // Clase ReglamentoTransportePublico

?>
