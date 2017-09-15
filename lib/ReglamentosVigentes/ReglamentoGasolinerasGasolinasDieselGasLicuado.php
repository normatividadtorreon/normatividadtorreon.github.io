<?php
/**
 * Normatividad Torreón - ReglamentoGasolinerasGasolinasDieselGasLicuado
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
 * Clase ReglamentoGasolinerasGasolinasDieselGasLicuado
 */
class ReglamentoGasolinerasGasolinasDieselGasLicuado extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento para el establecimiento de gasolineras y estaciones de venta, almacenamiento de gasolinas, diesel y plantas de almacenamiento para distribución y venta de gas licuado de petróleo del Municipio de Torreón';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-gasolineras-gasolinas-diesel-gas-licuado';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las disposiciones de este Reglamento son de orden público e interés social y su observancia es general y obligatoria dentro del Municipio de Torreón, Coah, y tienen por objeto regular el establecimiento de gasolineras y estaciones de almacenamiento, distribución y venta de Gas Licuado de Petróleo en su territorio, así como lo concerniente al lugar de su ubicación, licencia de construcción, o remodelación y demás aspectos relacionados de competencia municipal, quedando sujetos al presente reglamento, los proyectos y obras de construcción, remodelaciones y adecuaciones de las estaciones de servicio, gasolineras existentes, así como las que se pretendan localizar en el territorio quedando exceptuadas las ya existentes de la distancia de ubicación entre una y otra.';
        $this->claves                     = 'Reglamento, Vigente, Gasolineras, Gasolina, Diesel, Gas Licuado';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoGasolinerasGasolinasDieselGasLicuado.md';
    } // constructor

} // Clase ReglamentoGasolinerasGasolinasDieselGasLicuado

?>
