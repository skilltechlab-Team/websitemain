
<!-- navigation -->
<section  class="fixed-top navigation" >
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- navbar -->
      <div class="collapse navbar-collapse text-center" id="navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#feature">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#">Team</a>
          </li>
        </ul>
        <a href="#" class="btn btn-primary ml-lg-3 primary-shadow">Contact Us</a>
      </div>
    </nav>
  </div>
</section>
<!-- /navigation -->
<script>
  var me = document.currentScript.ownerDocument;
  var post = me.querySelector( '#template-content' );

  var container = document.querySelectorAll( '.template-container' );

  //alert( container.length );
  for(i=0; i<container.length ; i++) {
      container[i].appendChild( post.cloneNode( true ) );
  }
</script>

