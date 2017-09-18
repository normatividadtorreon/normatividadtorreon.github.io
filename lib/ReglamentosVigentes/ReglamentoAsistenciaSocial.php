<?php
/**
 * Normatividad Torreón - ReglamentoAsistenciaSocial
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
 * Clase ReglamentoAsistenciaSocial
 */
class ReglamentoAsistenciaSocial extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de Asistencia Social del Municipio de Torreón, Coahuila de Zaragoza';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-asistencia-social';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Establecer el sistema de Asistencia Social, promover la prestación de los Servicios, estableciendo los mecanismos para la concurrencia y colaboración de los sectores público, social y privado.';
        $this->claves                     = 'Reglamento, Vigente, Asistencia, Social';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoAsistenciaSocial.md';
    } // constructor

} // Clase ReglamentoAsistenciaSocial

?>
