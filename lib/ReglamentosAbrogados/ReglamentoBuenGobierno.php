<?php
/**
 * Normatividad Torreón - ReglamentoBuenGobierno
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
 * Clase ReglamentoBuenGobierno
 */
class ReglamentoBuenGobierno extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento para el buen gobierno del Municipio De Torreón';
    //~ $this->autor                      = '';
        $this->fecha                      = '2014-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-buen-gobierno';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente Reglamento tiene por objeto crear las bases y definir los lineamientos para la aplicación y seguimiento de políticas de Buen Gobierno en el R. Ayuntamiento de Torreón, así como crear el Instituto Ciudadano para el Buen Gobierno del Municipio de Torreón, Coahuila y definir las políticas a que se sujetará su conformación y operación.';
        $this->claves                     = 'Reglamento, Abrogado, Buen Gobierno';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosAbrogados/ReglamentoBuenGobierno.md';
    } // constructor

} // Clase ReglamentoBuenGobierno

?>
