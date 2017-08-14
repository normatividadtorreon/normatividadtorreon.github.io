<?php
/**
 * Normatividad Torreón - Creador Config
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
 * Clase CreadorConfig
 *
 * Define las rutas a las imprentas que tomará \Base\Creador
 */
class CreadorConfig {

    public $imprentas;                // Arreglo con las rutas a Imprentas para todas las Publicaciones
    public $imprentas_autores;        // Arreglo con las rutas a Imprentas que estarán en Autores
    public $imprentas_categorias;     // Arreglo con las rutas a Imprentas que estarán en Categorías
    public $imprentas_pagina_inicial; // Arreglo con las rutas a Imprentas que serán insumo para la página inicial
    public $imprentas_mapa_sitio;     // Arreglo con las rutas a Imprentas que se usarán para el mapa del sitio sitemap.xml
    public $imprentas_redifusion;     // Arreglo con las rutas a Imprentas que se usarán para la redifusión rss.xml
    public $imprentas_json;           // Arreglo con las rutas a Imprentas para crear archivos JSON
    public $imprentas_csv;            // Arreglo con las rutas a Imprentas para crear archivos CSV

    /**
     * Constructor
     */
    public function __construct() {
        $this->imprentas                = array(
            '\\ManualesDeOrganizacion\\Imprenta',
            '\\ReglamentosAbrogados\\Imprenta',
            '\\ReglamentosVigentes\\Imprenta');
        $this->imprentas_mapa_sitio     = $this->imprentas;
        $this->imprentas_redifusion     = $this->imprentas;
        $this->imprentas_autores        = array(); // $this->imprentas
        $this->imprentas_categorias     = array(); // $this->imprentas
        $this->imprentas_pagina_inicial = $this->imprentas;
    } // constructor

} // Clase CreadorConfig

?>
