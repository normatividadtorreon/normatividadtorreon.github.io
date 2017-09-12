<?php
/**
 * Normatividad Torreón - ReglamentoRegimenPropiedadCondominioConcernientePlazaComercialEstacionamientoAlianza
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
 * Clase ReglamentoRegimenPropiedadCondominioConcernientePlazaComercialEstacionamientoAlianza
 */
class ReglamentoRegimenPropiedadCondominioConcernientePlazaComercialEstacionamientoAlianza extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento del régimen de propiedad en condominio concerniente a la plaza comercial y de estacionamiento alianza del Municipio de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-regimen-propiedad-condominio-concerniente-plaza-comercial-estacionamiento-alianza';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'En el presente reglamento se expresa que los condóminos podrán usar, gozar y disponer libremente de sus locales de propiedad exclusiva sin más limitaciones que las establecidas en la Ley sobre el Régimen de propiedad en Condominio de inmuebles para el estado de Coahuila.';
        $this->claves                     = 'Reglamento, Vigente, Condominio, Plaza Comercial, Estacionamiento';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoRegimenPropiedadCondominioConcernientePlazaComercialEstacionamientoAlianza.md';
    } // constructor

} // Clase ReglamentoRegimenPropiedadCondominioConcernientePlazaComercialEstacionamientoAlianza

?>
