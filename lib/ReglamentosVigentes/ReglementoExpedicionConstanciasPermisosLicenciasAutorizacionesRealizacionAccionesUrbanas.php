<?php
/**
 * Normatividad Torreón - ReglementoExpedicionConstanciasPermisosLicenciasAutorizacionesRealizacionAccionesUrbanas
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
 * Clase ReglementoExpedicionConstanciasPermisosLicenciasAutorizacionesRealizacionAccionesUrbanas
 */
class ReglementoExpedicionConstanciasPermisosLicenciasAutorizacionesRealizacionAccionesUrbanas extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento para la expedición de constancias, permisos, licencias, y autorizaciones para la realización de acciones urbanas en el municipio de Torreón, Coahuila';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglemento-expedicion-constancias-permisos-licencias-autorizaciones-realizacion-acciones-urbanas';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'El presente Reglamento tiene por objeto establecer los requisitos, plazos y procedimientos que deberán seguir las personas físicas y morales de derecho público y privado para la obtención y renovación de constancias, permisos, licencias, y autorizaciones para la realización de acciones urbanas dentro del territorio del Municipio.';
        $this->claves                     = 'Reglamento, Vigente, Acciones, Urbanas';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglementoExpedicionConstanciasPermisosLicenciasAutorizacionesRealizacionAccionesUrbanas.md';
    } // constructor

} // Clase ReglementoExpedicionConstanciasPermisosLicenciasAutorizacionesRealizacionAccionesUrbanas

?>
