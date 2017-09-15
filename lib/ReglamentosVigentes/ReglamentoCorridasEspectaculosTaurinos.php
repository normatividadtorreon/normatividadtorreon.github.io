<?php
/**
 * Normatividad Torreón - ReglamentoCorridasEspectaculosTaurinos
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
 * Clase ReglamentoCorridasEspectaculosTaurinos
 */
class ReglamentoCorridasEspectaculosTaurinos extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de corridas y espectáculos taurinos para el municipio de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-corridas-espectaculos-taurinos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente Reglamento tiene por objeto regular la preparación, organización y desarrollo de los espectáculos taurinos, así como las plazas de toros, los Cortijos y Lienzos Charros que operen efectuando espectáculos taurinos, además de las actividades relacionadas con los mismos.';
        $this->claves                     = 'Reglamento, Vigente, Corridas, Espectaculos, Taurinos';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoCorridasEspectaculosTaurinos.md';
    } // constructor

} // Clase ReglamentoCorridasEspectaculosTaurinos

?>
