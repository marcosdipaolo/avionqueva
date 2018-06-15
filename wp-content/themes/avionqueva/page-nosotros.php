<?php
get_header();
?>
<div class="todo-nosotros">
    <div class="uk-container   nosotros">

        <div class="contenedor-nosotros">

            <h3 class="titulo"><?php the_title(); ?></h3>
            <?php 
            $nosotros = ['Karina Micheletto', 'Verónica Parodi', 'Cecilia Mainero', 'Istvansch', 'Uri Gordon', 'Marcos Di Paolo'];
            $cvs = [
                    '<p>Soy periodista y desde este oficio descubro diariamente cuánta riqueza hay en la literatura infantil y juvenil, y qué poco se la refleja. Pensando en eso cree este sitio junto a amigas a las que también les gusta volar.</p><p>Por mi trabajo en el diario <em>Página/12</em> recibí premios como el Pregonero, que otorga la Feria Internacional del Libro de Buenos Aires. Me subo a este avión con vértigo y entusiasmo.</p>', 

                    '<p>Soy pedagoga y desarrollo proyectos que involucran la literatura, la música, el teatro para chicos y chicas. Creé muchos de ellos en mi rol de directora socio educativa del Espacio Cultural Nuestros Hijos, de Madres de Plaza de Mayo. </p><p>Este sitio nace junto a mi primer libro: <em>Bordando nanas</em>, de ediciones Del Naranjo, que suena con música de grandes artistas. Ambos vuelan con talentosos pasajeros. 
                    </p>', 

                    '<p>Como docente y gestora cultural me dedico al diseño y desarrollo de propuestas artísticas y lúdicas no convencionales en los equipos de Suenaquetesuena, Vibra, Proyecto Imán, Quay.  </p><p>Soy consultora sobre desarrollo infantil y lenguajes expresivos de los más pequeños en espacios comunitarios, para organismos públicos y ONGs. También manager y productora de grupos de música que trabajan para la infancia. Y feliz tripulante de este <span style="color:red; font-weight: bold">Avión que va</span>. 
                    </p>',
                    
                    '<p>Soy ilustrador, escritor, diseñador y editor, lo que me ha dado alas para publicar muchos libros (que andan volando tanto por Argentina como por otros países del mundo). Recibí algunos reconocimientos de alto vuelo, como ser candidato al Premio Hans Christian Andersen y al Premio Astrid Lindgren. </p><p>Para mis ilustraciones, trabajo con tijera y papel hasta los detalles más diminutos, tal como los que ven en este sitio volador, que despega sabiendo que “<span style="color:red; font-weight: bold">Avión que va</span>, avión que llega”.
                    </p>', 
                    '<p>Parte de mi trabajo como fotógrafo transcurre en libros y revistas en diversas editoriales. Pueden ver algo de eso en mi página y en el blog <em>El Ojo ajeno</em>, donde junto a Silvia Portorrico descubrimos <em>Casas y viajes de escritores</em>. </p><p>También me dedico a la enseñanza, en mi estudio o en safaris fotográficos. Desde hace un tiempo fotografío todo lo que Istvansch recorta y arma. Para <span style="color:red; font-weight: bold">Avión que va </span>fue… ¡desde todos los ángulos!  </p>',

                    '<p>Soy guitarrista y compositor; entre otros proyectos integro el grupo Sures, junto a Facundo Guevara y Diego Wainer, un dúo con María de los Angeles Ledesma, y como solista grabé recientemente Piedras del agua, con numerosos invitados. </p><p>Pero en el mundo hay mucho y me interesan también la fotografía… y el diseño y desarrollo de páginas web como ésta, que me puso a volar y a leer.</p>'
            ];
            for ($i=0; $i < count($nosotros); $i++) { ?>
               <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin-medium" uk-grid>
                <?php 
                    if ($i % 2 == 0) { ?> 
                    <div class="uk-card-media-left uk-cover-container">
                <?php } 
                    else { ?>
                    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
                <?php } ?>    
                    <img src="<?php bloginfo('template_url') ?>/img/nosotros-<?php echo $i; ?>.jpg" alt="" uk-cover>
                    <canvas width="600" height="400"></canvas>
                </div>
                <div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title"><?php echo $nosotros[$i] ?></h3>
                        <?php echo $cvs[$i] ?>
                        
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php
				get_template_part('socialsingle');
            ?>
        </div>
        <?php
get_footer();
?>