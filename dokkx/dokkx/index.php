<?php
  $class = 'is-page';
  $is_active       = 2;
  $is_group_active = 2;

  include '../_header.php';
  include '../_menus.php';
?>

<? include '../includes/_image.php'; ?>
<main role="main" class="content">
  <h1 class="content--header">Om DokkX</h1>
  <div class="content--lead">
    <p>DokkX – centrum for velfærds- og frihedsteknologi</p>
    <p>
      DokkX er Aarhus Kommunes nytænkende udviklingscenter for velfærdsteknologi og andre digitale løsninger.
      Det er her, du kan du se nye teknologiske løsninger og prøve dem af. Vores beskedne ønske er, at du går fra DokkX
      med ny inspiration til, hvordan teknologi kan gøre din hverdag lettere, sundere og sjovere. Intet mindre.
    </p>
  </div>
  <div class="content--text">
    <p>
      Vi ved, at teknologi i forvejen er en del af mange menneskers hverdag – uanset og vi tænker over det eller ej.
      Ved at skabe et rum på Dokk1, hvor alle kan føle, røre og lege med forskellige teknologiske løsninger, skal DokkX
      give inspiration til og viden om, hvordan teknologi gennem hele tilværelsen kan være et redskab til et lidt bedre,
      lidt sundere og lidt mere socialt liv. Det kan være teknologi til både krop og sind, og det kan være til at skabe
      et mere tilgængeligt, bæredygtigt og trygt byliv for os alle sammen.
    </p>
  </div>
  <div class="itk-boxlist">
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header"><a href="netvaerk.php">Netværk</a></h2>
        <p>Til dig der gerne vil dele din erfaring og inspireres af andre kollegaer og eksperter tilbyder Center for
        Innovation i Aarhus deltagelse i vores innovationsnetværk. Her møder du kollegaer i Aarhus Kommune, der
        arbejder med innovation ligesom dig.</p>
        <a href="netvaerk.php">Læs om netværk</a>
      </header>
      <figure><a href="netvaerk.php"><img src="images/networking.png"></a></figure>
    </article>
    <article class="itk-boxlist--item">
      <header>
        <h2 id="network" class="itk-boxlist--header"><a href="prototyper.php">Prototyper</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Hi omnes lingua, institutis, legibus inter se differunt. Cum ceteris in veneratione tui montes, nascetur mus.</p>
        <a href="prototyper.php">Læs om prototyper</a>
      </header>
      <figure><a href="prototyper.php"><img src="images/prototypes.png"></a></figure>
    </article>
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header"><a href="sparring.php">Sparring</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Hi omnes lingua, institutis, legibus inter se differunt. Cum ceteris in veneratione tui montes, nascetur mus.</p>
        <a href="sparring.php">Læs om sparring</a>
      </header>
      <figure><a href="sparring.php"><img src="images/sparring.png"></a></figure>
    </article>
  </div>
</main>
<?php
  include '_footer.php';
?>
