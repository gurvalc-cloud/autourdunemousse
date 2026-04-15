
Styling: how to include the new theme and utilities

1. Add the styles to your pages (HTML head):
<link rel="stylesheet" href="./styles/theme.css">
<link rel="stylesheet" href="./styles/utilities.css">

2. Example usage (snippet):
<div class="site-header">
  <div class="container row items-center">
    <div class="brand h2">Autour d'une Mousse</div>
    <nav class="nav hide-sm">
      <a class="badge" href="#">About</a>
      <a class="badge" href="#">Tours</a>
    </nav>
  </div>
</div>

<main class="container mt-md">
  <div class="row">
    <section class="col card fade-in">
      <h1 class="h1">Welcome</h1>
      <p class="p">Short intro line in muted color.</p>
      <a class="btn" href="#">Explore tours</a>
    </section>

    <aside class="col card card-quiet">
      <div class="kv"><span class="badge">Duration</span><strong>3h</strong></div>
      <div class="mt-sm"><button class="btn secondary">Book</button></div>
    </aside>
  </div>
</main>

3. Notes
- The theme uses CSS variables so you can tune colors and spacing from the top of theme.css.
- Keep markup semantic; utilities are minimal on purpose to avoid class bloat.
