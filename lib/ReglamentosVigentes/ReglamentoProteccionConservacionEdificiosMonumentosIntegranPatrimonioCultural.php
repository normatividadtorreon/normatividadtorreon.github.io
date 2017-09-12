<?php
/**
 * Normatividad Torreón - ReglamentoProteccionConservacionEdificiosMonumentosIntegranPatrimonioCultural
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
 * Clase ReglamentoProteccionConservacionEdificiosMonumentosIntegranPatrimonioCultural
 */
class ReglamentoProteccionConservacionEdificiosMonumentosIntegranPatrimonioCultural extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de protección y conservación de los edificios y monumentos que integran el patrimonio cultural del Municipio de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-proteccion-conservacion-edificios-monumentos-integran-patrimonio-cultural';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente reglamento constituye el patrimonio cultural de la ciudad de Torreón. Coah.., el conjunto de bienes inmuebles y monumentos dignos de ser conservados por razones de arte e historia.';
        $this->claves                     = 'Reglamento, Vigente, Proteccion, Conservacion, Edificios, Monumentos, Patrimonio, Cultural';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoProteccionConservacionEdificiosMonumentosIntegranPatrimonioCultural.md';
    } // constructor

} // Clase ReglamentoProteccionConservacionEdificiosMonumentosIntegranPatrimonioCultural

?>
