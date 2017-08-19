<?php
/**
 * Normatividad Torreón - ReglamentoParticipacionCiudadana
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
 * Clase ReglamentoParticipacionCiudadana
 */
class ReglamentoParticipacionCiudadana extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de participación ciudadana del Municipio de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2002-10-31T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-participacion-ciudadana';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente reglamento tiene por objeto fomentar, promover, regular y salvaguardar el derecho de los ciudadanos y habitantes torreonenses para participar en la vida pública a través de los instrumentos que permiten la organización y participación ciudadana y su relación con lo órganos del gobierno del Municipio, conforme a las disposiciones de la Ley de Participación Ciudadana para el Estado de Coahuila de Zaragoza y las que resulten aplicables.';
        $this->claves                     = 'Reglamento, Vigente, Participacion, Ciudadana';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoParticipacionCiudadana.md';
    } // constructor

} // Clase ReglamentoParticipacionCiudadana

?>
