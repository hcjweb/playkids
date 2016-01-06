

  <div class="logo">
      <a href="index.html"><img src="images/logo.png" alt=""></a>
    </div>
<div class="header" id="home">
  <div class="container">

    <div class="navigation">
     <span class="menu"></span>
      <ul class="navig">
        <li><a class="active" href="index.html">Início</a><span> </span></li>
        <li><a href="about.html">Sobre</a><span> </span></li>
        <li><a href="gallery.html">Galeria</a><span> </span></li>
        <li><a href="contact.html">Contato</a><span> </span></li>
      </ul>
    </div>
       <!-- script-for-menu -->
   <script>
      $("span.menu").click(function(){
        $(" ul.navig").slideToggle("slow" , function(){
        });
      });
   </script>
   <!-- script-for-menu -->
  </div>
</div>
