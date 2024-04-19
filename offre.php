  
  <!DOCTYPE html>
  <html lang="fr">
    <head>
      <meta charset="UTF-8" />
      <link rel="icon" type="image/svg+xml" href="/vite.svg" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>RH</title>
      <link rel="stylesheet" href="css/offre3.css">
    </head>
    <body>
    
      <nav>
      <div class="logo">
        <strong><a href="index.html">R.H</strong>
        <span>Company</a></span>
      </div>
        <ul>
          <li><a href="inscription.html" class="a">inscription</a></li>
          <li><a href="connexion.html" class="a">Connexion</a> </li>
          <li><a href="contact /contact.html" class="a">Contacts</a></li>
        </ul>
       
      </nav>
      <div>
        <button id="reset-button" class="btn"><span>Tout</span> </button>
        <button id="sort-button" class="btn"><span>Trier par date de publication</span> </button>
        <button id="filter-button" class="btn"><span>Filtrer par informatique</span> </button>
        <button id="filter-button1" class="btn"><span>Filtrer Autre</span> </button>
      </div>
      <div class="grid">
      <?php 
       $connect=mysqli_connect("localhost","root","","rh");
       $req=mysqli_query($connect,"SELECT * From offres");
       while($row=mysqli_fetch_array($req)){
        echo'
        <div class="item">
          <div class="item-content">
            <h3>',$row[1],'</h3>
            
            <p><strong> Date de publication:</strong>  <span class="date"> ',$row[3],'</span></p>
            <p><strong> Date limite:</strong> ',$row[4],'</p>
            <a href="description.php?id='.$row[0].'" class="voire" style="--clr:rgb(2, 2, 198);"><span>En savoir plus</span><i></i></a>
          </div>
          </div>
        ';
       }
      ?>
       
      </div>
      
      
      
      
      <script src="https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>
      <script>
        const btns = document.querySelectorAll('.btn');
        btns.forEach(btn => {
    btn.addEventListener('click', function() {
      // Ajoute la classe active au bouton cliqué
      btns.forEach(otherBtn => {
        otherBtn.classList.remove('active');
      });
      btn.classList.add('active');
    });

    btn.onmousemove = function(e) {
      const x = e.pageX - btn.offsetLeft;
      const y = e.pageY - btn.offsetTop;
      btn.style.setProperty('--x', x + 'px');
      btn.style.setProperty('--y', y + 'px');
    };
  });
      var grid = new Muuri('.grid', {
        dragEnabled: true,
        dragHandle: '.item-content', // Activer la poignée de glisser-déposer pour déplacer les éléments
        layout: {
            fillGaps: true,
            horizontal: false,
        },
        layoutDuration: 400
    });
    function resizeGrid() {
  grid.layout();
}
    grid.refreshItems().layout();
    window.addEventListener('load', resizeGrid);

    var sortButton = document.getElementById('sort-button');
    var isAscending = true;
    sortButton.addEventListener('click', function () {
    isAscending = !isAscending;
    
    grid.sort(function (itemA, itemB) {
        var dateA = new Date(itemA.getElement().querySelector('.date').innerHTML);
        var dateB = new Date(itemB.getElement().querySelector('.date').innerHTML);
        
        if (isAscending) {
            return dateA - dateB;
        } else {
            return dateB - dateA;
        }
    });
});
var filterButton = document.getElementById('filter-button');
filterButton.addEventListener('click', function() {
    var items = grid.getItems();
    for (var i = 0; i < items.length; i++) {
        var title = items[i].getElement().querySelector('h3').textContent;
        if (title.includes('informatique') || title.includes('Dév')|| title.includes('web')|| title.includes('Full-stack')) {
            items[i].getElement().setAttribute('data-category', 'informatique');
        } else {
            items[i].getElement().setAttribute('data-category', '');
        }
    }
    grid.filter('[data-category="informatique"]');
});


var filterButton1 = document.getElementById('filter-button1');
filterButton1.addEventListener('click', function() {
    var items = grid.getItems();
    for (var i = 0; i < items.length; i++) {
        var title = items[i].getElement().querySelector('h3').textContent;
        if (title.includes('informatique') || title.includes('Dév')|| title.includes('web')|| title.includes('Full-stack')) {
            items[i].getElement().setAttribute('data-category', 'informatique');
        } else {
            items[i].getElement().setAttribute('data-category', '');
        }
    }
    grid.filter('[data-category=""]');
});

var resetButton = document.getElementById('reset-button');

resetButton.addEventListener('click', function() {
    // Réinitialiser les filtres en affichant tous les éléments dans la grille

    // Réinitialiser les boutons de filtre
    var filterButtons = document.querySelectorAll('.btn-filter');
    filterButtons.forEach(function(button) {
        button.classList.remove('active');
    });

    // Réinitialiser les éléments filtrés
    grid.filter('*');
});




      </script>
      

    </body>
  </html>
