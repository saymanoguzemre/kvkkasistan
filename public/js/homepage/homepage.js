var app = document.getElementById('hero-landing-title-subtext');

var typewriter = new Typewriter(app, {
  loop: true,
  delay: 75,
});
typewriter
  .pauseFor(500)
  .typeString('<span class="text-blue-600" id="hero-landing-title-"> hızlı yolu.</span>')
  .pauseFor(1500)
  .deleteChars(12)
  .typeString('<span class="text-blue-600" id="hero-landing-title-"> kolay yolu.</span>')
  .pauseFor(1500)
  .deleteChars(12)
  .typeString('<span class="text-blue-600" id="hero-landing-title-"> ucuz yolu.</span>')
  .pauseFor(1500)
  .start();

$('#scroll-to-pricing').on('click', function() {
    var pricingElement = document.getElementById("pricing");
    pricingElement.scrollIntoView({behavior: 'smooth'}, true);
});
