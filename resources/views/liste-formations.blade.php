@vite(['resources/sass/app.scss', 'resources/js/app.js']);
    
<center><h1>Liste des formations</h1></center><br><br>


    <table class="table table-white table-sm">
   <thead>
    <tr>
      <th scope="col">N° </th>
      <th scope="col">Nom</th>
      <th scope="col">Duree</th>
      <th scope="col">Frais</th>
    </tr>
  </thead>
  <tbody>

  @foreach($liste as $Cle => $valeur)
    <tr>
      <th scope="row">{{$Cle+1}}</th>
      <td>{{$valeur["Nom"]}}</td>
      <td>{{$valeur["Duree"]}}</td>
      <td>{{$valeur["Frais"]}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
  </body>
</html>




