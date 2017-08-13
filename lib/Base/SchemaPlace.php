<?php
/**
 * Plataforma de Conocimiento - Schema Place
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
 * Clase SchemaPlace
 *
 * Entities that have a somewhat fixed, physical extension.
 * http://schema.org/Place
 */
class SchemaPlace extends SchemaThing {

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
    // En SchemaPlace
    public $address;            // PostalAddress. Physical address of the item.
    public $geo;                // GeoCoordinates. The geo coordinates of the place.
    public $hasMap;             // Map. A URL to a map of the place.
    public $logo;               // URL. An associated logo.
    public $telephone;          // Text. The telephone number.

    /**
     * Logo HTML
     *
     * @return string Código HTML
     */
    protected function logo_html() {
        if ($this->image != '') {
            return "  <img class=\"contenido-imagen-previa\" itemprop=\"logo\" alt=\"{$this->name}\" src=\"{$this->logo}\">";
        } else {
            return '';
        }
    } // logo_html

    /**
     * Telephone HTML
     *
     * @return string Código HTML
     */
    protected function telephone_html() {
        if ($this->telephone != '') {
            return "  <div class=\"telefono\">Teléfono: <span itemprop=\"telephone\">{$this->telephone}</span></div>";
        } else {
            return '';
        }
    } // telephone_html

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Iniciar acumulador
        $a = array();
        // Acumular
        $a[] = $this->itemscope_start('itemscope itemtype="http://schema.org/Place"');
        if ($this->big_heading) {
            $a[] = $this->big_heading_html();
        } else {
            $a[] = $this->title_html();
            $a[] = $this->description_html();
        }
        $a[] = $this->logo_html();
        if (is_object($this->hasMap) && ($this->hasMap instanceof SchemaMap)) {
            $this->hasMap->onTypeProperty = 'hasMap';
            $this->hasMap->identation     = $this->identation + 1;
            $this->hasMap->is_article     = FALSE;
            $a[]                          = $this->hasMap->html();
        }
        if (is_object($this->address) && ($this->address instanceof SchemaPostalAddress)) {
            $this->address->onTypeProperty = 'address';
            $this->address->identation     = $this->identation + 1;
            $this->address->is_article     = FALSE;
            $a[]                           = $this->address->html();
        }
        if (is_object($this->geo) && ($this->geo instanceof SchemaGeoCoordinates)) {
            $this->geo->onTypeProperty = 'geo';
            $this->geo->identation     = $this->identation + 1;
            $this->geo->is_article     = FALSE;
            $a[]                       = $this->geo->html();
        }
        $a[] = $this->telephone_html();
        $a[] = $this->url_html();
        $a[] = $this->content_html();
        $a[] = $this->itemscope_end();
        $a[] = $this->extra_html();
        // Entregar
        return $this->clean_html($a);
    } // html

} // Clase SchemaPlace

?>
