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
        <h1>La conférence</h1>
        <p>Les Rencontre de la Fondation s'intitulent vetteannée "Chaine alimentaire<br> végétales et durabilité une question d'équilinre"!         Elles se tiendront le 3 décembre prochain à Bruxelles<br> et auront pour objectif de décrypter la transition nutritionnelle des système alimentaires à traver le monde<br> qui appelle à favoriser une alimentation plus végétale.</p>
        
    </div>
</section>


<section class="section3"></section>


<section class="section4">
    <div>
        <h1>Au programme</h1>
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
        <h1>Les orateurs</h1>
        <p>Lorem ipsum calidae por portittor et sit amet dolor callis</p>
    </div>
</section>
    
    
<section class="">
    
</section>
<section class="">
    
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