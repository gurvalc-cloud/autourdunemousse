<?php
/**
 * Page d'accueil — le parchemin.
 * Si une page statique "Accueil" est définie dans Réglages > Lecture, WordPress utilisera son contenu.
 * Sinon, ce fichier affiche le manifeste par défaut, codé en dur, pour garantir le rendu dès l'activation du thème.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<main id="main" class="site-main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class(); ?>>
        <?php the_content(); ?>
    </article>
<?php endwhile; else : ?>

    <div class="header-image">
        <img src="https://assets.zyrosite.com/sPyReSixwgGH10vr/img_6322-FjQJpdExmbISLWVU.JPG" alt="La loge, espace de création">
    </div>

    <h1>Autour d'une Mousse</h1>
    <p class="subtitle">Pour celles et ceux qui pensent encore quand les réponses deviennent floues.</p>

    <hr>

    <p>Cela fait un moment que je réfléchis à un lieu.</p>
    <p>Un espace.</p>
    <p>Un espace de brassage favorable à l'émulation, où l'on peut aisément co-créer ensemble. C'est là qu'est venue l'idée d'<em>Autour d'une mousse</em>.</p>
    <p>Autour d'une mousse, c'est tout un symbole.</p>
    <p>Il y a l'espace. Il y a le temps.</p>
    <p><em>Autour</em>, de manière conviviale. Et <em>une mousse</em> qui symbolise le temps. Rien de bien compliqué. La mousse n'est même pas l'élément central. C'est un prétexte. C'est un rituel qui existe depuis un certain nombre d'années. De millénaires, je dirais même.</p>
    <p>Depuis longtemps, d'un point de vue social, il libère la parole et ouvre l'esprit. Du moment qu'il est consommé avec modération.</p>

    <hr>

    <p>J'ai toujours rêvé à cet espace.</p>
    <p>Un bar. Une brasserie. Le contact humain et les savoir-faire processisés.</p>
    <p>Et récemment, j'ai décidé de le matérialiser.</p>
    <p>Matérialiser la pensée de cet espace dans ma loge. Mon espace créatif. Là où je peins habituellement. Décore les murs. Et écris.</p>
    <p>Écrire, c'est ce que je fais depuis déjà un bon moment.</p>

    <div class="image-break portrait">
        <img src="https://assets.zyrosite.com/sPyReSixwgGH10vr/img_6188-FGyosXFb5scxBKTv.JPG" alt="Portrait">
    </div>

    <p>Après des aventures aux quatre coins du monde.</p>
    <p>Né à Briey. Grandi en Afrique. Habité à Jarny, au son du clocher. Évolué à Lyon, dans un environnement professionnel, à la quête du business. Travaillé au Canada. Voyagé aux États-Unis. Étudié en Irlande, puis en Angleterre. Deux masters dans la diversification et le comportement humain.</p>
    <p>Il me fallait un espace.</p>
    <p>J'ai longtemps navigué en Inde, au gré de mille aventures. Et je me souviens de ces moments.</p>

    <hr>

    <p>Master à l'IDRAC. Pendant cinq ans. C'était long. Le temps était long.</p>
    <p>Il nous fallait, avec nos amis, pour pouvoir émuler par les business, l'entrepreneuriat et nos projets créatifs, qu'on se réunisse souvent autour d'une mousse.</p>
    <p>Pas n'importe où.</p>
    <p>Au Hopstore, à Lyon.</p>
    <p>C'est là que cette quête de la mousse a commencé. Ils avaient un bon produit. Je voulais comprendre d'où il venait. J'ai enquêté.</p>
    <p>Et puis j'ai rencontré Vivien de Sainte-Cru.</p>
    <p>Une découverte magnifique. Je n'aurais jamais imaginé que, une fois en Inde, je rencontrerais un professionnel du matériel de brassage. Parti de rien. Un entrepreneur de renom.</p>
    <p>Il m'a tout appris. Il m'a tout montré. De la microbrasserie à la brasserie de taille industrielle. Les composantes d'entrée. Les déchets produits, tel que le CO2.</p>
    <p>Toutes ces idées-là en tête.</p>

    <hr>

    <h2>Les quatre éléments</h2>
    <p>Une bière, c'est simple.</p>
    <p>Quatre éléments. Pas plus.</p>
    <p class="element"><em>L'Eau.</em> La base. Ce qui reçoit, ce qui transporte, ce qui purifie. Sans elle, rien ne circule. Elle est mémoire du territoire, porteuse des minéraux et de l'histoire du sol qu'elle a traversé.</p>
    <p class="element"><em>Le Malt.</em> La substance. Le grain transformé, porteur d'énergie latente. Ce qui nourrit le processus. Il est l'héritage, la semence cultivée par des générations, le savoir accumulé dans la terre.</p>
    <p class="element"><em>Le Houblon.</em> L'amertume. Ce qui équilibre, ce qui conserve, ce qui donne du caractère. Sans lui, la douceur devient fadeur. Il est la friction nécessaire, ce qui empêche la complaisance.</p>
    <p class="element"><em>La Levure.</em> L'invisible. Ce qui transforme. L'agent de fermentation, celui qui convertit le sucre en alcool, le potentiel en réalité. Elle est le passage, la transmission vivante, ce qui fait que la matière devient autre chose.</p>
    <p>Quatre éléments. Le quaternaire.</p>
    <p>Comme les quatre directions. Comme les quatre saisons. Comme les quatre piliers d'un temple.</p>

    <hr>

    <h2>Le quaternaire rencontre le trinitaire</h2>
    <p>Mais le brassage ne s'arrête pas à la matière.</p>
    <p>Il y a un mouvement plus profond. Un flux. Une circulation d'énergie qui traverse le processus comme elle traverse l'être.</p>
    <p>Trois temps. Le trinitaire.</p>
    <p><em>Recevoir.</em> Accueillir ce qui vient. L'eau reçoit le malt. L'esprit reçoit l'expérience de l'autre. Le premier chakra, Muladhara, la racine. L'ancrage dans ce qui est donné avant nous.</p>
    <p><em>Transformer.</em> Laisser fermenter. Ne pas précipiter. Accepter que le temps fasse son œuvre. Le feu intérieur qui digère, qui transmute. Manipura, le plexus solaire. L'énergie qui convertit la matière en conscience.</p>
    <p><em>Transmettre.</em> Offrir ce qui a été transformé. La mousse qui se verse. La parole qui circule. Le cœur, Anahata. Ce qui s'ouvre pour donner sans retenir.</p>
    <p>Recevoir. Transformer. Transmettre.</p>
    <p>C'est le cycle de la mémoire vivante.</p>
    <p>Ce que nous avons reçu de ceux qui nous ont précédés. Ce que nous en faisons, dans le creuset de notre expérience. Ce que nous transmettons à ceux qui viennent après.</p>
    <p>Le quaternaire de la matière rencontre le trinitaire du souffle.</p>
    <p>Quatre éléments pour le corps de la bière. Trois temps pour son âme.</p>
    <p>Et au centre, là où les deux se croisent, il y a l'espace de la rencontre.</p>
    <p><em>Autour d'une mousse.</em></p>

    <div class="image-break circular">
        <img src="https://assets.zyrosite.com/sPyReSixwgGH10vr/chatgpt-image-21-janv.-2026-23_26_29-IIGwAXGUWK0sZLMx.png" alt="Autour d'une mousse, le rituel">
    </div>

    <hr>

    <h2>Ce que cet espace cherche à émuler</h2>
    <p>Pas tout le monde.</p>
    <p>Ce lieu s'adresse à celles et ceux qui refusent de penser en surface.</p>
    <p>Des praticiens. Pas des commentateurs. Des gens engagés dans le réel, mais insatisfaits des réponses toutes faites. Des esprits qui doutent encore de leurs propres certitudes.</p>
    <p>Ce ne sont pas des leaders d'opinion. Ce ne sont pas des entrepreneurs en quête de hacks. Ce ne sont pas des profils en recherche d'inspiration rapide.</p>
    <p>Ce sont des dirigeants fatigués des récits simplistes. Des chercheurs, enseignants, stratèges, artisans de la pensée. Des professionnels en transition, là où les cadres ne tiennent plus. Des individus cultivés, mais pas installés intellectuellement.</p>
    <p>Des gens qui acceptent de ne pas conclure.</p>
    <p>Des gens pour qui penser est un effort. Pas une posture.</p>

    <hr>

    <h2>Les Inconfortables lucides</h2>
    <p>C'est le nom que j'ai donné à cet archétype.</p>
    <p><em>Inconfortables</em>, parce qu'ils ne sont pas installés, ni satisfaits.</p>
    <p><em>Lucides</em>, parce qu'ils voient la complexité, même quand elle dérange.</p>
    <p>Ce ne sont pas des rebelles. Ce ne sont pas des cyniques. Ce sont des personnes qui ont compris que simplifier trop tôt est une faute intellectuelle.</p>
    <p>Des personnes compétentes qui ont dépassé le stade de l'enthousiasme naïf sans tomber dans le désengagement.</p>
    <p>Ils ont de l'expérience. Des responsabilités. Des contradictions internes non résolues.</p>
    <p>Ils refusent les narratifs propres. Les recettes universelles. Les débats où tout le monde est d'accord trop vite.</p>
    <p>Ils cherchent des espaces où penser est risqué. Des conversations qui ne produisent pas de livrables. Des échanges où l'ego peut être bousculé sans être humilié.</p>

    <hr>

    <h2>Le rituel</h2>
    <p>Une bière. Une question centrale. Une heure sans raccourci.</p>
    <p>Ici, on ne donne pas de conseils. On ne résume pas en trois points. On ne conclut pas pour rassurer.</p>
    <p>Tu peux parler d'expérience. Tu peux douter. Tu peux te contredire.</p>
    <p>Mais tu ne peux pas simplifier par confort. Tu ne peux pas parler sans avoir pensé. Tu ne peux pas conclure pour fermer la discussion.</p>
    <p>L'hôte n'est pas là pour faciliter. Il est là pour ralentir.</p>

    <hr>

    <h2>L'émulation visée</h2>
    <p>Elle n'est pas motivationnelle.</p>
    <p>Elle est frictionnelle.</p>
    <p>Si je devais le dire en une phrase :</p>
    <p><em>Émuler celles et ceux qui préfèrent une bonne question inconfortable à une réponse brillante mais vide.</em></p>
    <p>À partir de là, tout devient cohérent.</p>
    <p>Le rythme lent. L'absence de conseils. Le désaccord assumé. La bière comme prétexte, pas comme promesse.</p>

    <hr>

    <h2>La règle d'or</h2>
    <p>Interdiction de donner des conseils.</p>
    <p>Seulement des expériences. Des raisonnements. Des angles morts. Des contradictions.</p>
    <p>C'est ça qui émule.</p>

    <hr>

    <h2>Le rôle de l'hôte</h2>
    <p>Je ne suis pas animateur. Je ne suis pas expert. Je ne suis pas facilitateur bienveillant.</p>
    <p>Je suis le gardien de l'exigence intellectuelle.</p>
    <p>Je relance quand c'est flou. Quand c'est trop rapide. Quand c'est trop confortable.</p>

    <hr>

    <h2>Ce que cet espace n'est pas</h2>
    <p>Ceci n'est pas un podcast pour apprendre.</p>
    <p>Ni pour convaincre.</p>
    <p>Ni pour briller.</p>
    <p>C'est un rituel pour celles et ceux qui pensent encore quand les réponses deviennent floues.</p>

    <hr>

    <h2>L'invitation qui n'en est pas une</h2>
    <p>Si tu cherches de l'inspiration, des outils, des certitudes, tu peux partir maintenant.</p>
    <p>Si tu acceptes l'inconfort, la complexité, l'absence de réponse, alors prends une mousse.</p>
    <p>Et pensons.</p>

    <div class="image-break engraving">
        <img src="https://assets.zyrosite.com/sPyReSixwgGH10vr/autour-d-une-mousse-v6bJ3FaXsDTsRdii.png" alt="Autour d'une mousse, le lieu imaginaire">
    </div>

    <p class="center-italic">Un espace où la bière est légère, mais les idées ne le sont pas.</p>

    <div class="signature">
        <p class="name">Guru Bhai</p>
        <p class="title">La philosophie d'Autour d'une mousse</p>
        <p class="title">Architecte de sens</p>
        <p style="margin-top: 1rem;"><em>De Briey à Pune, en passant par Lyon et mille aventures.</em></p>
        <p><em>Deux masters. Quatre ans en Inde. Une quête ininterrompue.</em></p>
        <p><em>La mousse n'est qu'un prétexte. L'émulation est le but.</em></p>
    </div>

<?php endif; ?>
</main>
<?php
get_footer();
