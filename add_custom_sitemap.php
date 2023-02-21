/* si vous utilisez webflow cms, et voulez ajouter le sitemap a votre wordpress
créez un fichier sitemap des pages cms, hostez le a la racine
et ajoutez ceci aux functions.php de votre wordpress */

add_filter( 'wpseo_sitemap_index', 'add_sitemap_custom_items' );

function add_sitemap_custom_items( $sitemap_custom_items ) {
   $sitemap_custom_items .= '
<sitemap>
<loc>https://deux.io/webflow-cms-sitemap.xml</loc>
<lastmod>2023-02-21</lastmod>
</sitemap>';
   
return $sitemap_custom_items;
}
