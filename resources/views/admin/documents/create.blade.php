@extends('layouts.defaultTrue')
@section('content')
<section id="main-content">
 <section class="wrapper">

<section id="main-content">
 <h2><strong> Enregistrer un documents </strong> </strong></h2>
 <br>
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                <form method="post" action="{{route('admin.documents.store') }} " enctype="multipart/form-data">
                @csrf
               
                  
                <div class="form-group ">
                            <label for="0" >Titre</label>

                            
                                <input id="titre" type="text" class="form-control  {{ $errors->has('titre') ? ' is-invalid': '' }}" name="titre"   autofocus>

                                @if ($errors->has('titre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('titre') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group ">
                            <label for="0" >Prix</label>
                                <input id="prix" type="text" class="form-control  {{ $errors->has('prix') ? ' is-invalid': ' ' }}" name="prix"  autofocus>

                                @if ($errors->has('prix'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prix') }}</strong>
                                    </span>
                                @endif
                        </div>
                 


                        <div class="form-group ">
                            <label for="0" >contenu</label>
                                <input id="lien" type="text" class="form-control  {{ $errors->has('lien') ? ' is-invalid': ' ' }}" name="lien"  autofocus>

                                @if ($errors->has('lien'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lien') }}</strong>
                                    </span>
                                @endif
                        </div>

                        
                        <div class="custom-file row">
                        <label class="col-sm-2 custom-file-label" for="validatedCustomFile">Choisir une photo...</label>
                        <div class="col-sm-10">
                        <input type="file" name="photo"  class="custom-file-input {{ $errors->has('photo') ? ' is-invalid': ' ' }}" id="validatedCustomFile" >
                        @if ($errors->has('photo'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('photo') }}</strong>
                            </span>
                        @endif
                      </div>
                      </div>
                      <br>
                     
                                
</div>


                                <button type="submit" class="btn btn-primary">
                                    Enregistrer
                                </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
</section>
</section>
@endsection