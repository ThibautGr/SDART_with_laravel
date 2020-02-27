@extends('template')

@section('contenu')

<div class="container">
    <h1 id="emploititle">Emplois</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="form-group col-md-4">
                    <label for="exampleFormControlSelect1">Type de Poste</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option><a class=" col-1 waves-effect filter hideAndShowPropTous" data-rel="Tous">Tous</a></option>
                    <option><a class=" col-1 waves-effect filter hideAndShowPropPermanent" data-rel="1">Permanent</a></option>
                    <option><a class=" col-1 waves-effect filter hideAndShowPropContrat"  data-rel="2">Contrat</a></option>
                    <option><a class=" col-1 waves-effect filter hideAndShowPropFreeLance"  data-rel="3">Free Lance</a></option>
                    <option><a class=" col-1 waves-effect filter hideAndShowPropOther" data-rel="4">Other</a></option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="exampleFormControlSelect1">Pays</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="inline">
                    <div class="container h-100">
                        <div class="d-flex justify-content-center h-100">
                            <div class="searchbar">
                                <input class="search_input" type="text" name="" placeholder="Search...">
                                <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    <div class="card-group">
        <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top HdSPropContrat" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
        </div>
        <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top HdSPropContrat" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
        </div>
        <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top HdSPropFreeLance" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
        </div>
    </div>
    <div class="card-group">
        <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top HdSPropPermanent" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
        </div>
        <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top HdSPropOther" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
        </div>       
        <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top HdSPropFreeLance" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
        </div>
    </div>
    <br>
</div>





@endsection
