<?php
/**
 * Normatividad Torreón - Imprenta
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

namespace ManualesDeOrganizacion;

/**
 * Clase Imprenta
 */
class Imprenta extends \Base\ImprentaPublicaciones {

    /**
     * Constructor
     */
    public function __construct() {
        // Nombre del directorio dentro de /lib que contiene los archivos con las publicaciones
        $this->publicaciones_directorio  = 'ManualesDeOrganizacion';
        // Los siguientes parámetros dan datos para el concentrador y las páginas que no los tienen
        $this->titulo                    = 'Manuales de Organización';
        $this->descripcion               = 'Descripción.';
        $this->claves                    = 'Clave1, Clave2, Clave3';
    //~ $this->encabezado_color          = '#FFFFFF';
        // Parámetros que el Recolector definirá en las Publicaciones si éstas no los tienen
        $this->autor                     = 'Dirección de Desarrollo Institucional';
    //~ $this->aparece_en_pagina_inicial = TRUE;
    //~ $this->para_compartir            = TRUE;
    //~ $this->imagen                    = '../imagenes/imagen.jpg';
    //~ $this->imagen_previa             = '../imagenes/imagen-previa.jpg';
    //~ $this->poner_imagen_en_contenido = TRUE;
        $this->nombre_menu               = 'Manuales de Organización';
        // Ruta a la clase para hacer la página con el índice
        $this->indices_paginas           = '\\Base\\PaginasTarjetas'; // Puede ser \Base\PaginasDetallados, \Base\PaginasGalerias, \Base\PaginasListado o \Base\PaginasTarjetas
        // Directorio en la raíz que será creado para alojar el concentrador y las páginas
        $this->directorio                = 'manuales-de-organizacion';
        // Nivel es el orden de la rama para los índices por autores y categorías, debe ser un entero grande
        $this->nivel                     = 10000;
        // Ejecutar constructor en el padre
        parent::__construct();
    } // constructor

} // Clase Imprenta

?>
