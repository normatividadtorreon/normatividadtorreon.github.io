<?php
/**
 * Normatividad Torreón - ReglamentoAcademiaPolicia
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
 * Clase ReglamentoAcademiaPolicia
 */
class ReglamentoAcademiaPolicia extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de la Academia de Policía del Municipio de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '1999-11-30T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-academia-policia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente reglamento tiene por objeto estructurar y organizar el funcionamiento de la Academia, así como lo relativo a determinar las bases y condiciones a que se sujetarán los programas de formación policiaca, su elaboración, evaluación, ejecución y modificación.';
        $this->claves                     = 'Reglamento, Vigente, Academia, Policia';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoAcademiaPolicia.md';
    } // constructor

} // Clase ReglamentoAcademiaPolicia

?>
