<?php
/**
 * Normatividad Torreón - ReglamentoInteriorSIMAS
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
 * Clase ReglamentoInteriorSIMAS
 */
class ReglamentoInteriorSIMAS extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento interior del Sistema Municipal de Aguas y Saneamiento del Municipio de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-interior-simas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente Reglamento establece las bases de organización administrativa del Sistema Municipal de Aguas y Saneamiento de Torreón, Coahuila en los términos de Artículo 28, fracción VII de la Ley para los Servicios de Agua Potable, Drenaje y Alcantarillado en los Municipios del Estado de Coahuila de Zaragoza y del Artículo Noveno del Decreto No. 296 del Congreso del Estado que crea el Organismo Público Descentralizado de la Administración Pública Municipal de Torreón.';
        $this->claves                     = 'Reglamento, Vigente, Interior, SIMAS, Aguas, Saneamiento';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoInteriorSIMAS.md';
    } // constructor

} // Clase ReglamentoInteriorSIMAS

?>
