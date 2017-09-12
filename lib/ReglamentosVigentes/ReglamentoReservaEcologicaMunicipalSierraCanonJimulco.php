<?php
/**
 * Normatividad Torreón - ReglamentoReservaEcologicaMunicipalSierraCanonJimulco
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
 * Clase ReglamentoReservaEcologicaMunicipalSierraCanonJimulco
 */
class ReglamentoReservaEcologicaMunicipalSierraCanonJimulco extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de la Reserva Ecológica Municipal Sierra y Cañón de Jimulco';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-reserva-ecologica-municipal-sierra-canon-jimulco';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El siguiente reglamento tienen por objeto establecer las bases para la administración y manejo de la Reserva Ecológica Municipal “Sierra y Cañón de Jimulco”, creada mediante Acuerdo de Cabildo en la sesión del 27 de junio de 2003 y publicado en la Gaceta Municipal número 10 Año XII del mes de junio de 2003.';
        $this->claves                     = 'Reglamento, Vigente, Reserva, Ecologica, Municipal, Sierra, Cañon, Jimulco';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoReservaEcologicaMunicipalSierraCanonJimulco.md';
    } // constructor

} // Clase ReglamentoReservaEcologicaMunicipalSierraCanonJimulco

?>
