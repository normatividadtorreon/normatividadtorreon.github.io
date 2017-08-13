<?php
/**
 * Normatividad Torreón - Mapa Inferior Config
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
 * Clase MapaInferiorConfig
 */
class MapaInferiorConfig {

    public $sitio_titulo = 'Normatividad Torreón';
    public $logotipo     = 'imagenes/torreon.png';
    public $en_raiz      = FALSE; // Si es verdadero los vínculos serán para un archivo en la raíz del sitio

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // En este arreglo acumularemos la entrega
        $a = array();
        // Acumular
        $a[] = '    <div class="mapa-inferior">';
        $a[] = '      <div class="row">';
        $a[] = '        <div class="col-md-8">';
        if ($this->en_raiz) {
            $a[] = '            <a href="index.html">Inicio</a> |';
            $a[] = '            <a href="decretos/index.html">Decretos</a> | ';
            $a[] = '            <a href="reglamentos/index.html">Reglamentos</a>';
        } else {
            $a[] = '            <a href="../index.html">Inicio</a> |';
            $a[] = '            <a href="../decretos/index.html">Decretos</a> | ';
            $a[] = '            <a href="../reglamentos/index.html">Reglamentos</a>';
        }
        $a[] = '        </div>'; // col-md-8
        $a[] = '        <div class="col-md-4">';
        $a[] = '          <div class="pull-right redes-sociales">';
        $a[] = '            <a class="fa fa-twitter-square" href="#" target="_blank"></a>';
        $a[] = '            <a class="fa fa-github-square" href="https://github.com/normatividadtorreon" target="_blank"></a>';
        if ($this->en_raiz) {
            $a[] = '            <a class="fa fa-rss-square" href="rss.xml"></a>';
        } else {
            $a[] = '            <a class="fa fa-rss-square" href="../rss.xml"></a>';
        }
        $a[] = '          </div>';
        $a[] = '        </div>';
        $a[] = '      </div>';
        $a[] = '    </div>';
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código javascript
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase MapaInferiorConfig

?>
