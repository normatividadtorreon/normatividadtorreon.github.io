<?php
/**
 * Normatividad Torreón - ReglamentoExpedicionLicenciasPermisosFuncionamientoGirosComercialesIndustrialesPrestacionServicios
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
 * Clase ReglamentoExpedicionLicenciasPermisosFuncionamientoGirosComercialesIndustrialesPrestacionServicios
 */
class ReglamentoExpedicionLicenciasPermisosFuncionamientoGirosComercialesIndustrialesPrestacionServicios extends \Base\PublicacionSchemaArticle {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Reglamento para la expedición de licencias y permisos de funcionamiento de giros comerciales, industriales y de prestación de servicios';
    //~ $this->autor                      = '';
        $this->fecha                      = '2013-01-01T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'reglamento-expedicion-licencias-permisos-funcionamiento-giros-comerciales-industriales-prestacion-servicios';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Las disposiciones de este Reglamento son de orden público y observancia general en el Municipio de Torreón, Coahuila, y tienen por objeto tiene por objeto establecer los requisitos, plazos y procedimientos que deberán cumplir las personas físicas y morales para la obtención y renovación de permisos y licencias  para la realización de cualquier actividad comercial o de prestación de servicios.';
        $this->claves                     = 'Reglamento, Vigente, Expedicion, Licencias, Permisos, Funcionamiento, Giros, Comerciales, Industriales, Prestacion, Servicios';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/ReglamentosVigentes/ReglamentoExpedicionLicenciasPermisosFuncionamientoGirosComercialesIndustrialesPrestacionServicios.md';
    } // constructor

} // Clase ReglamentoExpedicionLicenciasPermisosFuncionamientoGirosComercialesIndustrialesPrestacionServicios

?>
