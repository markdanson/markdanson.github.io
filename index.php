
  <?php
  include "./header.php";

  //<iframe class="threeSixty" src="https://poly.google.com/view/9wjMc8E0eWE/embed?chrome=min" frameborder="0" style="border:none;" allowvr="yes" allow="vr; xr; accelerometer; magnetometer; gyroscope; autoplay;" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel="" ></iframe>

  ?>

<main>
  <h1 class="title">Campus entrance</h1>

  <div id="pano"></div>

<iframe width="560" height="315" src="https://www.youtube.com/embed/M3wY7kvg8i4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <div class="mainText">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec neque aliquet, gravida metus pellentesque, faucibus mi. Mauris at erat nulla. Mauris tempus tristique facilisis. Phasellus vehicula lectus quis lectus posuere, nec sagittis leo tempor. Aenean sed urna tortor. Donec sodales lorem augue, vel fringilla massa tempor id. Donec lobortis ex arcu, nec varius arcu scelerisque gravida. Praesent scelerisque vel lacus eu posuere. Vestibulum blandit elit sed mauris convallis, vel pharetra erat consequat. Suspendisse sit amet pellentesque enim. Curabitur augue quam, placerat eget tellus eget, consectetur iaculis dolor. In a commodo eros. Vivamus molestie, urna quis tristique vestibulum, augue est mattis lorem, eget molestie turpis lectus euismod sem. Sed vitae finibus felis. Nam risus lorem, maximus nec lectus eget, egestas ultrices felis.
    </p>
    <p>Fusce lacus augue, rhoncus ac nisl sit amet, placerat luctus velit. Pellentesque sit amet sem justo. Sed tempus ligula velit, malesuada dictum tellus mollis iaculis. Vestibulum ut ante at nibh scelerisque fermentum molestie nec massa. Sed aliquam nulla sit amet semper pellentesque. Maecenas hendrerit venenatis nisl, nec commodo diam dictum vel. Aliquam erat volutpat. Maecenas tincidunt et sem in varius. Phasellus congue nunc quis luctus rutrum. Donec pellentesque, dolor quis tempus tincidunt, tortor sem rutrum urna, et tincidunt diam magna quis tellus. Proin pellentesque semper sagittis.
    </p>
  </div>


</main>
  <script>
var thisPage = 'welcome';



var panorama, viewer, container, infospot;


panorama = new PANOLENS.ImagePanorama( 'https://pchen66.github.io/Panolens/examples/asset/textures/equirectangular/tunnel.jpg' );

container = document.querySelector( '#pano' );

infospot = new PANOLENS.Infospot( 350, PANOLENS.DataImage.Info );
infospot.position.set( 0, -2000, -5000 );
infospot.addHoverText( 'Hello Panolens', 30 );

panorama.add( infospot ); 

viewer = new PANOLENS.Viewer( { container: container, autoRotate: true, autoRotateSpeed: 0.2, autoRotateActivationDuration: 5000 } );
viewer.add( panorama );

viewer.addUpdateCallback(function(){
});

  </script>

    <?php
    include "./footer.php";

    ?>
