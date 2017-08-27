<?php
/**
 * Normatividad Torreón - ReglamentoInstitutoMunicipalDocumentacion
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

namespace ReglamentosAbrogados;

/**
 * Clase ReglamentoInstitutoMunicipalDocumentacion
 */
class ReglamentoInstitutoMunicipalDocumentacion extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento del Instituto Municipal de Documentación de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2014-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-instituto-municipal-documentacion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente Reglamento es de orden público y tiene por objeto normar, regular y coordinar la administración, concentración y conservación de los documentos de la Administración Municipal y de interés público en el Municipio de Torreón, Coahuila. Garantizando así los mecanismos o instrumentos de consulta para el acceso a la información pública documental.';
        $this->claves                     = 'Reglamento, Abrogado, ';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosAbrogados/ReglamentoInstitutoMunicipalDocumentacion.md';
    } // constructor

} // Clase ReglamentoInstitutoMunicipalDocumentacion

?>
