<?php
/**
 * Plataforma de Conocimiento - SchemaGeoCoordinates
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * @package PlataformaDeConocimiento
 */

namespace Base;

/**
 * Clase SchemaGeoCoordinates
 *
 * The geographic coordinates of a place or event.
 * http://schema.org/GeoCoordinates
 */
class SchemaGeoCoordinates extends SchemaThing {

    // En Schema
    // public $onTypeProperty;  // Text. Use when this item is part of another one.
    // public $identation;      // Integer. Level of identation (beautiful code).
    // public $id_property;     // Text. id property for article/div tag. Use to aply a unique CSS style.
    // public $class_property;  // Text. class property for div tag. Use to aply a general CSS style.
    // public $is_article;      // Boolean. Use true for enclose with <article>
    // public $is_visible;      // Boolean. Use true for use invisible meta tags.
    // En SchemaThing
    // public $big_heading;     // Boolean. Use true to use a big heading for the web page.
    // public $headline;        // Text. Headline of the article.
    // public $headline_style;  // Text. CSS style or Hex color.
    // public $headline_icon;   // Text. Font Awsome icon.
    // public $content;         // Text. HTML content to put INSIDE.
    // public $extra;           // Text. Additional HTML to put ASIDE.
    // public $description;     // Text. A short description of the item.
    // public $image;           // URL or ImageObject. An image of the item.
    // public $image_show;      // Boolean. Use true to put an img tag. Use false to put a meta tag.
    // public $name;            // Text. The name of the item.
    // public $url;             // URL of the item.
    // public $url_label;       // Label for the URL of the item.
    // En SchemaGeoCoordinates
    public $latitude;           // Number or Text. The latitude of a location. For example 37.42242
    public $longitude;          // Number or Text. The longitude of a location. For example -122.08585

    /**
     * Latitude HTML
     */
    protected function latitude_html() {
        if ($this->latitude != '') {
            return sprintf('  Latitud: <meta itemprop="latitude" content="%s">%s', $this->latitude, $this->latitude);
        } else {
            return '';
        }
    } // latitude_html

    /**
     * Longitude HTML
     */
    protected function longitude_html() {
        if ($this->latitude != '') {
            return sprintf('  Longitud: <meta itemprop="longitude" content="%s">%s', $this->longitude, $this->longitude);
        } else {
            return '';
        }
    } // longitude_html

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Iniciar acumulador
        $a = array();
        // Acumular
        $a[] = $this->itemscope_start('itemscope itemtype="http://schema.org/GeoCoordinates"');
        if ($this->big_heading) {
            $a[] = $this->big_heading_html();
        } else {
            $a[] = $this->title_html();
            $a[] = $this->description_html();
        }
        $a[] = $this->image_html();
        $a[] = $this->latitude_html();
        $a[] = $this->longitude_html();
        $a[] = $this->url_html();
        $a[] = $this->content_html();
        $a[] = $this->itemscope_end();
        $a[] = $this->extra_html();
        // Entregar
        return $this->clean_html($a);
    } // html

} // Clase SchemaGeoCoordinates

?>
