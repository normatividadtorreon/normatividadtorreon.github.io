<?php
/**
 * Normatividad Torreón - ReglamentoServicioProfesionalCarrera
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
 * Clase ReglamentoServicioProfesionalCarrera
 */
class ReglamentoServicioProfesionalCarrera extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento del Servicio Profesional de Carrera del Municipio de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2002-01-31T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-servicio-profesional-carrera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente reglamento tiene por objeto regular las funciones y los procedimientos de Selección, Ingreso, Formación, Actualización, Capacitación, Permanencia y Evaluación, Reconocimiento, Certificación, y Registro de los servidores públicos de la Dirección General, así como la regulación de los sistemas disciplinarios, y lineamientos para el otorgamiento de reconocimientos, estímulos, promoción, recompensas y terminación del servicio de los integrantes del servicio policial de carrera. Con la única finalidad de profesionalizar el servicio de los policías, a través de la Carrera Policial, para lograr un óptimo cumplimiento de la función de la Seguridad Pública.';
        $this->claves                     = 'Reglamento, Vigente, Servicio, Profesional, Carrera';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoServicioProfesionalCarrera.md';
    } // constructor

} // Clase ReglamentoServicioProfesionalCarrera

?>
