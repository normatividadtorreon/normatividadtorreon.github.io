<?php
/**
 * Normatividad Torreón - Navegacion Config
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
 * Clase NavegacionConfig
 */
class NavegacionConfig {

    protected $sitio_titulo  = 'Normatividad Torreón';
    protected $logotipo; // 'imagenes/logotipo.png'
    protected $opciones      = array(
        'Manuales de Organización' => 'manuales-de-organizacion/index.html',
        'Reglamentos Abrogados'    => 'reglamentos-abrogados/index.html',
        'Reglamentos Vigentes'     => 'reglamentos-vigentes/index.html');
    static public $iconos    = array(
        'Manuales de Organización' => 'fa fa-files-o',
        'Reglamentos Abrogados'    => 'fa fa-files-o',
        'Reglamentos Vigentes'     => 'fa fa-files-o');
    protected $buscador_html = <<<FINAL
          <form method="get" id="" action="http://www.normatividadtorreon.gob.mx/buscador-resultados.html">
            <input type="hidden" value="" name="cx">
            <input type="hidden" value="FORID:11" name="cof">
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Buscar..." value="" name="s" id="s">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
FINAL;
    protected $buscador_js = "";

} // Clase NavegacionConfig

?>
