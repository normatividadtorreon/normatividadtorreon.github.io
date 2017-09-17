<?php
/**
 * Normatividad Torreón - ReglamentoMejoraRegulatoria
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
 * Clase ReglamentoMejoraRegulatoria
 */
class ReglamentoMejoraRegulatoria extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento de Mejora Regulatoria del Municipio de Torreón.';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-mejora-regulatoria';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente reglamento tiene por objeto impulsar la mejora regulatoria, desregular las acciones del gobierno municipal y simplificar los trámites administrativos, a través de la coordinación de acciones, así como procurar el uso de los medios electrónicos, magnéticos o de cualquier tecnología y el uso de la firma electrónica, archivos electrónicos y base de datos, a fin de hacer más eficientes los servicios, trámites y actos administrativos, en beneficio de la ciudadanía.';
        $this->claves                     = 'Reglamento, Vigente, Mejora, Regulatoria';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoMejoraRegulatoria.md';
    } // constructor

} // Clase ReglamentoMejoraRegulatoria

?>
