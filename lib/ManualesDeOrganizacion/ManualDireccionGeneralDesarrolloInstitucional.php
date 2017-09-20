<?php
/**
 * Normatividad Torreón - ManualDireccionGeneralDesarrolloInstitucional
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

namespace ManualesDeOrganizacion;

/**
 * Clase ManualDireccionGeneralDesarrolloInstitucional
 */
class ManualDireccionGeneralDesarrolloInstitucional extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre        = 'Dirección General de Desarrollo Institucional';
        $this->fecha         = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo       = ''; // No hay archivo HTML a crear, porque es un vínculo de descarga
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = '.';
        $this->claves        = 'Manual, Organizacion, Desarrollo, Institucional';
        // Imágenes
        $this->imagen        = 'manual-direccion-general-desarrollo-institucional.jpg';
        $this->imagen_previa = 'manual-direccion-general-desarrollo-institucional.jpg';
        // URL de destino
        $this->url           = 'manual-direccion-general-desarrollo-institucional.pdf';
        $this->url_etiqueta  = 'Descargar PDF';
    } // constructor

} // Clase ManualDireccionGeneralDesarrolloInstitucional

?>
