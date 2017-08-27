<?php
/**
 * Normatividad Torreón - ReglamentoAnuncios
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
 * Clase ReglamentoAnuncios
 */
class ReglamentoAnuncios extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de anuncios para el Municipio de Torreon, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2014-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-anuncios';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente Reglamento tiene por objeto  regular la emisión, instalación, fijación, colocación y uso de anuncios, que sean visibles desde la vía pública o en áreas públicas interiores, sea en inmuebles públicos o privados, así como sus condiciones de seguridad, características estéticas y las obras realizadas con motivo de su instalación, conservación, modificación, ampliación, reparación, iluminación, reposición, reubicación y retiro.';
        $this->claves                     = 'Reglamento, Abrogado, Anuncios';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosAbrogados/ReglamentoAnuncios.md';
    } // constructor

} // Clase ReglamentoAnuncios

?>
