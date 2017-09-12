<?php
/**
 * Normatividad Torreón - ReglamentoConcederUsoGoceDisfrutePropiedadBienesInmueblesPertenecientes
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
 * Clase ReglamentoConcederUsoGoceDisfrutePropiedadBienesInmueblesPertenecientes
 */
class ReglamentoConcederUsoGoceDisfrutePropiedadBienesInmueblesPertenecientes extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento para conceder el uso, goce, disfrute o la propiedad de bienes inmuebles pertenecientes al Municipio de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-conceder-uso-goce-disfrute-propiedad-bienes-inmuebles-pertenecientes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente Reglamento tiene por objeto regular el procedimiento que debe observarse por los miembros del Republicano Ayuntamiento y los funcionarios municipales competentes en los actos que impliquen otorgar el uso, goce, disfrute o la propiedad de bienes inmuebles de propiedad de bienes inmuebles de propiedad municipal, tanto de dominio público como privado.';
        $this->claves                     = 'Reglamento, Vigente, Bienes Inmuebles';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoConcederUsoGoceDisfrutePropiedadBienesInmueblesPertenecientes.md';
    } // constructor

} // Clase ReglamentoConcederUsoGoceDisfrutePropiedadBienesInmueblesPertenecientes

?>
