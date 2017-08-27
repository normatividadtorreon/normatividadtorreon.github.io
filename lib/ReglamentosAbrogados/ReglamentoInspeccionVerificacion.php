<?php
/**
 * Normatividad Torreón - ReglamentoInspeccionVerificacion
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
 * Clase ReglamentoInspeccionVerificacion
 */
class ReglamentoInspeccionVerificacion extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de Inspección y Verificación del Municipio de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2014-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-inspeccion-verificacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente Reglamento es de orden público, interés social y observancia obligatoria en el Municipio de Torreón. La Inspección y Verificación tienen como finalidad vigilar y proveer lo necesario para que los habitantes y las personas morales en el ejercicio de actividades normadas por el Ayuntamiento o por leyes que otorgan facultades de control y vigilancia a cargo de las autoridades municipales, cumplan con dichas leyes, con el Bando de Policía y Buen Gobierno, Reglamentos, Circulares y Disposiciones de carácter general o particular municipales.';
        $this->claves                     = 'Reglamento, Abrogado, Inspeccion, Verificacion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosAbrogados/ReglamentoInspeccionVerificacion.md';
    } // constructor

} // Clase ReglamentoInspeccionVerificacion

?>
