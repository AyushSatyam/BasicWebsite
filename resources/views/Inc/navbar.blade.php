<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-inverse">
    <div class="container">
      <div class="navbar-header">
          <a class="navbar navbar-brand" href="#">Acme</a>
        <button class="navbar-toggler collapse" data-toggle="collapse" data-target="#navbarsExampleDefault"  aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
      </div>
        <div class="collapse navbar-collapse" id="navbar">
         <ul class="nav navbar-nav">
           <li class="nav-item {{Request::is('/')?'active': ''}}">
             <a class="nav-link" href="/">Home</a>
           </li>
           <li class="nav-item {{Request::is('about')?'active': ''}}">
             <a class="nav-link" href="/about">About</a>
           </li>
           <li class="nav-item {{Request::is('contact')?'active': ''}}">
             <a class="nav-link" href="/contact">Contact</a>
           </li>
         </ul>
       </div>
     </div>
   </nav>
