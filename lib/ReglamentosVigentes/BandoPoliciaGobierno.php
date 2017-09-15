<?php
/**
 * Normatividad Torreón - BandoPoliciaGobierno
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
 * Clase BandoPoliciaGobierno
 */
class BandoPoliciaGobierno extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Bando de policía y gobierno para el Municipio de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'bando-policia-gobierno';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente reglamento tiene por objeto el establecer las disposiciones que describen y comprenden el territorio, la población y el escudo de armas del Municipio, así como establecer las disposiciones de salvaguarda a la seguridad pública dentro del Municipio y los principios generales a los que se sujeta el ejercicio del Gobierno Municipal.';
        $this->claves                     = 'Reglamento, Vigente, Bando, Policia, Gobierno';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/BandoPoliciaGobierno.md';
    } // constructor

} // Clase BandoPoliciaGobierno

?>
