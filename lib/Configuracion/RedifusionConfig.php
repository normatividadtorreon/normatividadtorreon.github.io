<?php
/**
 * Normatividad Torreón - Redifusion Config
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
 * @package MovimientoLibre
 */

namespace Configuracion;

/**
 * Clase RedifusionConfig
 */
class RedifusionConfig {

    public $xml_encoding      = 'UTF-8';
    public $sitio_titulo      = 'Normatividad Torreón';
    public $sitio_url         = 'http://www.normatividadtorreon.gob.mx'; // Sin diagonal al final
    public $sitio_descripcion = 'Últimas publicaciones de Normatividad Torreón.';
    public $lenguaje          = 'es-MX';
    public $generator         = 'Plataforma de Conocimiento v3.0';
    public $webmaster_email   = 'guivaloz@movimientolibre.com (Guillermo Valdes Lozano)';
    public $elementos_max     = 8;
    public $archivo           = 'rss.xml';
    public $usar_descripcion  = FALSE; // Si es falso, usará el contenido

} // Clase RedifusionConfig

?>
