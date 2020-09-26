@extends('layouts.defaultTrue')
@section('content')
<section id="main-content">
 <section class="wrapper">

 <h2><strong>Liste des documents</strong> </strong></h2>
 <br>
    <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead class="entete">
        <th>N°</th>
        <th>titre</th>
        <th>prix</th>
        <th>lien</th>
        <th>image</th>
        <th>Action</th>
      </thead>
        <tbody>
        <?php $i=0; ?>
        @foreach($documents as $document)
        <?php $i++; ?>
        <tr>
        <td>{{$i}}</td>
        <td><a href="/documents/{{$document->id}}">{{$document->titre}}</td>
        <td>{{$document->prix}}</td>
         <td>{{$document->lien}}</td>
        <td><img src="{{asset('storage').'/'.$document->photo}}" style="width:50px;height:50px;" class="bf5 border rounded-circle"></td>
        <td><a href="{{route('admin.documents.edit',['document'=>$document->id])}}">Modifier</a>
         <form action="/documents/{{$document->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button></form></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    
    <a class="btn btn-primary" href="{{route('admin.documents.create') }}">Ajouter un etudiant</a>


 </section>
</section>
@endsection