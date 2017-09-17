<?php
/**
 * Normatividad Torreón - ReglamentoDesarrolloUrbanoZonificacionUsoSueloConstruccion
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
 * Clase ReglamentoDesarrolloUrbanoZonificacionUsoSueloConstruccion
 */
class ReglamentoDesarrolloUrbanoZonificacionUsoSueloConstruccion extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de Desarrollo Urbano, Zonificación, uso de suelo y Construcción del Municipio de Torreón';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-desarrollo-urbano-zonificacion-uso-suelo-construccion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente reglamento tiene por objeto aplicar el ordenamiento urbano previsto por el Plan Director de Desarrollo Urbano de la Ciudad de Torreón, Coahuila de Zaragoza, estableciendo las atribuciones, procedimientos, sanciones y normas técnicas para regular el desarrollo urbano, zonificación, uso de suelo y la construcción de edificaciones en todo el territorio del Municipio.';
        $this->claves                     = 'Reglamento, Vigente, Desarrollo, Urbano, Zonificacion, Uso de Suelo, Construccion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoDesarrolloUrbanoZonificacionUsoSueloConstruccion.md';
    } // constructor

} // Clase ReglamentoDesarrolloUrbanoZonificacionUsoSueloConstruccion

?>
