@vite(['resources/sass/app.scss', 'resources/js/app.js']);
<center><h1>Liste des apprenants</h1></center><br><br>
<table class="table table-white table-sm">
   <thead>
    <tr>
      <th scope="col">N° </th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Matricule</th>
    </tr>
  </thead>
  <tbody>

    @foreach($liste as $Cle => $valeur)
    <tr>
      <th scope="row">{{$Cle+1}}</th>
      <td>{{$valeur["Prenom"]}}</td>
      <td>{{$valeur["Nom"]}}</td>
      <td>{{$valeur["Matricule"]}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>