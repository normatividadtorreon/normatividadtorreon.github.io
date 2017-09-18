<?php
/**
 * Normatividad Torreón - ReglamentoCorredorTuristicoComercialCulturalPaseoMorelos
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
 * Clase ReglamentoCorredorTuristicoComercialCulturalPaseoMorelos
 */
class ReglamentoCorredorTuristicoComercialCulturalPaseoMorelos extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento del Corredor Turístico, Comercial y Cultural Paseo Morelos del Municipio de Torreón';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-corredor-turistico-comercial-cultural-paseo-morelos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente Reglamento es de orden público, interés social y observancia obligatoria en la jurisdicción territorial del Municipio de Torreón, Coahuila de Zaragoza. Su objeto es establecer las normas jurídicas y técnicas que regulan el uso, tránsito, actividad comercial, turística y cultural, conservación, mantenimiento y remodelación, servicios públicos e imagen urbana del paseo público denominado Corredor Turístico, Comercial y Cultural Paseo Morelos.';
        $this->claves                     = 'Reglamento, Vigente, Corredor, Turistico, Comercial, Cultural, Paseo Morelos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoCorredorTuristicoComercialCulturalPaseoMorelos.md';
    } // constructor

} // Clase ReglamentoCorredorTuristicoComercialCulturalPaseoMorelos

?>
