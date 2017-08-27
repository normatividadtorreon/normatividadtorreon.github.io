<?php
/**
 * Normatividad Torreón - ReglamentoInteriorTransitoVialidad
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
 * Clase ReglamentoInteriorTransitoVialidad
 */
class ReglamentoInteriorTransitoVialidad extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento Interior de Tránsito y Vialidad';
    //~ $this->autor                      = '';
        $this->fecha                      = '2014-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-interior-transito-vialidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Este Reglamento es de orden público, de aplicación interna y obligatoria para todo el personal administrativo y operativo de la Dirección de Tránsito y Vialidad del Municipio de Torreón, y tiene por objeto establecer la estructura orgánica de la dependencia, así como las bases, reglas y facultades a las que deberán sujetarse los servidores públicos adscritos a esta Dirección.';
        $this->claves                     = 'Reglamento, Abrogado, Interior, Transito, Vialidad';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosAbrogados/ReglamentoInteriorTransitoVialidad.md';
    } // constructor

} // Clase ReglamentoInteriorTransitoVialidad

?>
