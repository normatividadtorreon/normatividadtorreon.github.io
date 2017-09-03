<?php
/**
 * Normatividad Torreón - ReglamentoAtencionPersonasCapacidadesDiferentes
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
 * Clase ReglamentoAtencionPersonasCapacidadesDiferentes
 */
class ReglamentoAtencionPersonasCapacidadesDiferentes extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento para la atención de personas con capacidades diferentes en el municipio de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-atencion-personas-capacidades-diferentes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente Reglamento tiene por objeto establecer las medidas y acciones que se llevarán a cabo en el municipio de Torreón, Coahuila para contribuir al desarrollo de las personas con capacidades diferentes, y a lograr que las mismas gocen de igualdad de oportunidades; así como determinar las facilidades que se les proporcionarán a efecto de apoyar su incorporación a la vida social.';
        $this->claves                     = 'Reglamento, Vigente, Personas, Capacidades, Diferentes';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoAtencionPersonasCapacidadesDiferentes.md';
    } // constructor

} // Clase ReglamentoAtencionPersonasCapacidadesDiferentes

?>
