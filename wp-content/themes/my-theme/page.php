<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
?>
      
<section class="section1">
    <div>
        <p><?php the_field('banner_baseline'); ?></p>
        <h1 class="titre"><?php the_field('banner_title_brown'); ?></h1>
        <h1 class="titre2"><?php the_field('banner_title_green'); ?></h1>
        <button><?php the_field('banner_register_link'); ?></button>
    </div>
</section>
    
    
<section class="section2">
    <div>
        <h1><?php the_field('titre_section_2'); ?></h1>
        <p>Les Rencontre de la Fondation s'intitulent vetteannée "Chaine alimentaire<br> végétales et durabilité une question d'équilinre"!         Elles se tiendront le 3 décembre prochain à Bruxelles<br> et auront pour objectif de décrypter la transition nutritionnelle des système alimentaires à traver le monde<br> qui appelle à favoriser une alimentation plus végétale.</p>
        
    </div>
</section>


<section class="section3"></section>


<section class="section4">
    <div>
        <h1><?php the_field('titre_section_4'); ?></h1>
        <div id="grid">
            <div id="menue1">
                <h2>Les végétaux dans la chaîne alimentaire</h1>
                <p><b>8:30</b> Introduction par Christophe Fondation</p>
                <p><b>9:00</b> Wim de Vries Wageningen University</p>
                <p><b>9:45</b> Benjamin Alles Paris XIII University</p>
                <p><b>10:15</b> Armando Perez Cueto Copenhagen University</p>
                <p><b>10:15</b> Cofee Break</p>
            </div>
            <div id="menue2">
                <h2>Les activités de la fondation</h1>
                <p><b>11:15</b> Jacynthe Lafrenière, Lauréate du Prix de Recherche</p>
                <p><b>11:35</b> Le projet EPICALIM de la Fondation</p>
                <p><b>12:00</b> Cérémonie du Prix de Recherche</p>
                <p><b>12:30</b> Lunch</p>
            </div>
        </div>
        <button>s'incrire aux rencontres</button>
    </div>
</section>


<section class="section5">
    <div>
        <h1><?php the_field('titre_section_5'); ?></h1>
        <p>Lorem ipsum calidae por portittor et sit amet dolor callis</p>
        
    </div>   
    <div class="personnes">
        <div>
            <img class="portrait"/>
            <h2><?php the_field('nom_personne_1'); ?></h2>
            <p><?php the_field('desc_pers_1'); ?></p>
            <button><?php the_field('bouton_tribune'); ?></button>
        </div>
        
        <div>
            <img class="portrait"/>
            <h2><?php the_field('nom_personne_2'); ?></h2>
            <p><?php the_field('desc_pers_2'); ?></p>
            <button><?php the_field('bouton_video'); ?></button>
        </div>
        
        <div>
            <img class="portrait"/>
            <h2><?php the_field('nom_personne_3'); ?></h2>
            <p><?php the_field('desc_pers_3'); ?></p>
            <button><?php the_field('bouton_tribune'); ?></button>
        </div>
        
        <div>
            <img class="portrait"/>
            <h2><?php the_field('nom_personne_4'); ?></h2>
            <p><?php the_field('desc_pers_4'); ?></p>
            <button><?php the_field('bouton_video'); ?></button>
        </div>
        
        <div></div>
        
        <div>
            <img class="portrait"/>
            <h2><?php the_field('nom_personne_5'); ?></h2>
            <p><?php the_field('desc_pers_5'); ?></p>
            <button><?php the_field('bouton_video'); ?></button>
        </div>
        
        <div>
            <img class="portrait"/>
            <h2><?php the_field('nom_personne_6'); ?></h2>
            <p><?php the_field('desc_pers_6'); ?></p>
            <button><?php the_field('bouton_tribune'); ?></button>
        </div>
        
        <div></div>
    </div>
</section>
    
    
<section class="section6">
    <div>
        <h1><?php the_field('titre_section_6'); ?></h1>
    </div>
    
    <div class="map">
        <div class="greenFond">
            <div>
                <img class="pictoA"/>
                <p>
                    <a href="#">Square Brussels<br>Mont des Arts<br>1000 Bruxelles<br>Belgique</a>
                </p>
            </div>
            <div>
                <img class="pictoB"/>
                <p>
                    Le 03.12.2019<br>
                    de 8h30 à 12h30
                </p>
            </div>
            <div>
                <img class="pictoC"/>
                <p>
                    Healthy<br>
                    Walking Dinner
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section7">
    <div>
        <h1><?php the_field('titre_section_7'); ?></h1>
    </div>
    
    <div class="mainVideo">
        <p><?php the_field('head_video_a'); ?></p>
        <p><?php the_field('head_video_b'); ?></p>
    </div>
    
    <div class="subVideo">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    
</section>
<section class="">
    
</section>
<section class="">
    
</section>
    

<?php
  }
}
?>

</div>

<?php get_footer(); ?>