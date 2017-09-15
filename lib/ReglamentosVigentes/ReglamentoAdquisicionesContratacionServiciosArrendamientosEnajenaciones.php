<?php
/**
 * Normatividad Torreón - ReglamentoAdquisicionesContratacionServiciosArrendamientosEnajenaciones
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
 * Clase ReglamentoAdquisicionesContratacionServiciosArrendamientosEnajenaciones
 */
class ReglamentoAdquisicionesContratacionServiciosArrendamientosEnajenaciones extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de adquisiciones, contratación de servicios, arrendamientos y enajenaciones para el Municipio de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-adquisiciones-contratacion-servicios-arrendamientos-enajenaciones';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente reglamento tiene por objeto normar las adquisiciones de bienes y todo tipo de servicios que contrate la Administración Pública del Municipio de Torreón, Coahuila, así como las enajenaciones de bienes, arrendamientos, y regular el funcionamiento interno del Comité de Compras, buscando la racionalización y transparencia en el ejercicio del presupuesto con el fin de optimizar los recursos públicos.';
        $this->claves                     = 'Reglamento, Vigente, Adquisiciones, Contratacion, Servicios, Arrendamientos, Enajenaciones';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoAdquisicionesContratacionServiciosArrendamientosEnajenaciones.md';
    } // constructor

} // Clase ReglamentoAdquisicionesContratacionServiciosArrendamientosEnajenaciones

?>
