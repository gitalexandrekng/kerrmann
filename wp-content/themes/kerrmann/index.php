<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div role="main">

	<div class="focus">
        <div class="row">
            <?php $loop = new WP_Query( array( 'post_type' => 'occasions', 'posts_per_page' => 3 ) ); ?>
        	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        		<div class="medium-4 columns">
        		    <div class="the_focus">
                        <div class="the_car" style="background-image:url(<?php the_post_thumbnail_url() ?>)">
                            <span class="price"><?php the_field('prix'); ?> €</span>
                        </div>
        		        <div class="cnt">
        		            <h3><?php the_title() ?><div class="date"><?php the_field('annee'); ?></div></h3>
                            <ul>
                                <li>Motorisation : <?php the_field('energie'); ?></li>
                                <li>Puissance (ch) : <?php the_field('chevaux'); ?> chevaux</li>
                                <li>Kilométrage : <?php the_field('kilometrage'); ?> km</li>
                                <a href="<?php the_permalink()?>" class="lirelasuite"><i class="fa fa-angle-double-right"></i></a>
                            </ul>
        		        </div>
        		    </div>
        		</div>
        	<?php endwhile; wp_reset_query(); ?>
        </div>
        <div class="more">
            <a href="" class="custombutton">Voir toutes nos occasions</a>
        </div>
	</div>

    <div class="describe_kerrmann">
        <div class="row">
            <div class="small-12 columns">
                <h2>Le garage Kerrmann</h2>
            </div>
            <div class="small-6 columns">
                <div class="txt">
                    <p>Le garage Kerrmann à Geispolsheim, c'est un stock permanent de plus de 100 véhicules occasions toutes catégories.</p>
                    <p>Notre site www.kerrmann.com est mis à jour quotidiennement pour vous informer rapidement des nouveaux véhicules disponibles sur notre parc occasions. Si un véhicule vous intéresse, appelez Christian Kerrmann ou Philippe Kerrmann ils sauront répondre à vos questions.</p>
                    <p>Concessionnaire Citroën de longue date, le garage Kerrmann vous propose toute la gamme Citroën en neuf aux meilleurs prix du marché, alors venez comparer...</p>
                    <p>Ici la garantie des véhicules varie de 3 mois à 2 ans. Cette garantie porte sur la totalité du véhicule excepté les pièces d'usure telles que les pneumatiques, plaquettes de freins...Donc un véhicule d'occasion garanti au meilleur prix, c'est possible au garage Kerrmann à Geispolsheim.</p>
                    <p>Nous prenons en charge immédiatement et sans rendez-vous votre véhicule pour toute opération d'entretien ou réparation de courte durée. Si vous le souhaitez, nous pouvons vous délivrer immédiatement un devis préalable à l'intervention vous éviterez ainsi les mauvaises surprises...</p>
                    <p>Pour les travaux nécessitant l'immobilisation du véhicule plus longtemps qu'un entretien périodique, nous pouvons mettre à votre disposition un véhicule de courtoisie, sous réserve de disponibilité, n'hésitez pas à réserver l'un d'eux lors de votre prise de rendez vous.</p>
                    <p>Nous sommes spécialistes Peinture Véhicules Tourisme-Utilitaires et petits Poids Lourds</p>
                    <p>C'est çà le garage Kerrmann, alors, à bientôt !</p>
                </div>
            </div>
            <div class="small-6 columns">
                <div class="right_txt">
                    <div class="bandeau"></div>
                    <div class="prestation">
                        <div class="titre">Nos prestations</div>
                        <ul>
                            <li>
                                <div class="icon" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/icon_1.jpg)"></div>
                                <div class="cont">
                                    <div class="tilz">Dépannage</div>
                                    <div class="txt">Le garage Kerrmann propose un service de dépannage rapide et clair. Votre véhicule est ensuite pris en charge par nos soins et stocké dans notre entrepôt afin d'effectuer les réparations nécessaires.</div>
                                </div>
                            </li>
                            <li>
                                <div class="icon" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/icon_2.svg)"></div>
                                <div class="cont">
                                    <div class="tilz">Service réparation / diagnostic de qualité</div>
                                    <div class="txt">Notre expertise est mise à votre disposition depuis des dizaines d'années. En nous faisant confiance vous avez la garantie d'avoir un service de qualité en toute transparence.</div>
                                </div>
                            </li>
                            <li>
                                <div class="icon" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/icon_3.svg)"></div>
                                <div class="cont">
                                    <div class="tilz">Véhicule de courtoisie</div>
                                    <div class="txt">Un véhicule de courtoisie peut vous être prêté en cas d'immobilisation de votre véhicule durant une certaine durée. Nos véhicules de courtoisie sont récents et bien entretenus.</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10571.441102342334!2d7.664572068501449!3d48.51674313265483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796b59190b80e0f%3A0xfa5b46c7b3545dc9!2sGarage+Kerrmann+Citro%C3%ABn!5e0!3m2!1sfr!2sfr!4v1488751345683" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="row">
            <div class="medium-6 columns">
                <div class="formulaire"></div>
            </div>
            <div class="medium-6 columns"></div>
        </div>
    </div>

    <div class="contact">
        <div class="row" style="margin-top:-50px">
            <div class="small-6 columns">
                <div class="content_contact">
                    <div class="titre">Contactez-nous</div>
                    <div class="infos">
                        <ul>
                            <li><strong>Garage KERRMANN</strong></li>
                            <li><i class="fa fa-home"></i>37 rue de la gare 67118 Geispolsheim</li>
                            <li><i class="fa fa-phone"></i>Tél : 03 88 66 34 84</li>
                            <li><i class="fa fa-fax"></i>Fax : 03 88 66 98 66</li>
                            <li><i class="fa fa-clock-o"></i>lundi au samedi de 8h00/12h00 et 13h00/19h00</li>
                        </ul>
                    </div>
                    <?php echo do_shortcode( '[contact-form-7 id="56" title="Contact form 1"]' ); ?>
                </div>
            </div>
            <div class="small-6 columns">
                <div class="avis">
                    <div class="titre">Ils sont satisfaits et nous le font savoir (avis google)</div>
                    <ul>
                        <li>
                            <div class="txt">
                                <div class="name">Romain Griezmann</div>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i><br>
                                J'ai connu ce garage suite à un dépannage.<br>Prix correct (révision relativement moins chère que chez Citroën même)<br>Très beau parc de véhicules, plusieurs amis ont achetés chez eux et sont satisfait de leurs achats et du service.<br>Dépannage rapide et efficace.<br>Je recommande fortement !
                            </div>
                        </li>
                        <li>
                            <div class="txt">
                                <div class="name">Sylvie Gies</div>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i><br>
                                Entreprise familiale avec un excellent accueil ! Une équipe très agréable. Dépannage et réparation rapide et efficace. Ce garage est vraiment conforme à mes attentes. JE RECOMMANDE !!
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="custombutton">Voir tous les avis sur Google</a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer();
