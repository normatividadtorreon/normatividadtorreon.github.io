<?php
/**
 * Normatividad Torreón - ReglamentoPrevencionAtencionAdicciones
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
 * Clase ReglamentoPrevencionAtencionAdicciones
 */
class ReglamentoPrevencionAtencionAdicciones extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento para la Prevención y Atención a las Adicciones en el Municipio de Torreón';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-prevencion-atencion-adicciones';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente reglamento es de orden público y de interés social, su objeto es regular las instituciones para la prestación de servicios de prevención, tratamiento, control y reintegración social de personas con problemas de drogadicción y alcoholismo.';
        $this->claves                     = 'Reglamento, Vigente, Prevencion, Atencion, Adicciones';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoPrevencionAtencionAdicciones.md';
    } // constructor

} // Clase ReglamentoPrevencionAtencionAdicciones

?>
