@extends("template")
<!--
        //firstName 	lastName 	pseudo 	inconLink 	password 	description
        // id_typeart 	levelAdminUser 	mail 	entreprise 	id_country
-->
@section('contenu')
    <div class="row rowinscription justify-content-center">
        <div class=" col-lg alert alert-Inscription" role="alert">
            <h4 class="alert-heading">Note : votre Email dois être vérifié pour que votre compts soit bien enregistré</h4>
            <p>Un email vous sera envoyer à l'adresse que vous écrivez vérifié vos spam si vous ne le trouver pas desuite.</p>
            <hr>
            <p class="mb-0">Un email vous sera envoyer à l'adresse que vous écrivez vérifié vos spam si vous ne le trouver pas desuite.</p>
        </div>
        <form  action="{{url('userInscription')}}" method="post" enctype="multipart/form-data" class=" col-log p-5 m-3">
            @csrf
<!--  inpute et alert art firstName et lastName-->
            @error('firstName')
            <div id="errorfirstName" class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    {{ $message }}
                <i class="fas fa-exclamation-circle" style="color: #ff2c28;"></i>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="fas fa-window-close"></i>
                </button>
            </div>
            @enderror
            @error('lastName')

            <div  class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">

                <i class="fas fa-exclamation-circle" style="color: red;"></i>
                        {{ $message }}
                <i class="fas fa-exclamation-circle" style="color: red;"></i>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="fas fa-window-close"></i>
                </button>
            </div>
            @enderror
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstName">firstName</label>
                    <input type="text" value="{{ old('firstName') }}" class="form-control  @error('firstName') is-invalid @enderror" id="firstName" placeholder="firstName" name="firstName">
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">lastName</label>
                    <input value="{{ old('lastName') }}" type="text" class="form-control @error('lastName') is-invalid @enderror" id="lastName" placeholder="lastName" name="lastName">
                </div>
            </div>
<!--  inpute et alert art firstName et lastName-->
<!--  inpute et alert art pseudo et iconLink-->
         @error('pseudo')
            <div class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle" style="color: red;"></i>
                 {{$message}}
                <i class="fas fa-exclamation-circle" style="color: red;"></i>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="fas fa-window-close"></i>
                </button>
            </div>
         @enderror

      @error('iconLink')
            <div  class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle" style="color: red;"></i>
                {{$message}}
                <i class="fas fa-exclamation-circle" style="color: red;"></i>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="fas fa-window-close"></i>
                </button>
            </div>
       @enderror

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pseudo">pseudo</label>
                    <input type="text" class="form-control" id="pseudo" placeholder="pseudo" name="pseudo">
                </div>
                <div class="form-group  col-md-6">
                    <label class="" for="inputGroupFile01">Your profil picture</label>
                    <div class="custom-file ">
                        <input type="file" class="custom-file-input" name="iconLink" id="inputGroupFile01"
                               aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label btn-primary btn" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
<!-- fin inpute et alert art pseudo et iconLink-->
<!--inpute et alert art pratice-->
            <div class="form-group ">
                <p>what kind of art do you practice ? </p>

                <div class=" form-check-inline form-check ">
                        @foreach($allTypeArt as $typeArt )
                            <label id="{{$typeArt->id}}">{{$typeArt->name}}</label>
                            <input type="checkbox" name="artPratice"  id="{{$typeArt->id}}" value="{{$typeArt->id}}">
                        @endforeach

                </div>
            </div>
<!-- fin inpute et alert art pratice-->
<!--  inpute levelAdminUser et alert art description-->
                <?php/* if(!empty($validationError["user.levelAdminUser"])){
            */?>
                <div class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">

                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    <strong>
                        <?php// echo $validationError["user.levelAdminUser"]; ?>
                    </strong>
                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="fas fa-window-close"></i>
                    </button>
                </div>
                <?php// } ?>
                <div class="form-group ">
                    <label  for="userlevel">You are ? or, you represented ?</label>
                    <select name="levelAdminUser" class="form-control custom-select mr-sm-2" id="userlevel">
                        <option selected>Choose...</option>
                        <option value="1">Simple artist</option>
                        <option value="2">Freelance artist</option>
                        <option value="3">Company artist</option>
                    </select>
                </div>
                <div class="form-group d-none" id="entreprise">
                    <label for="enterprise">your compagny name</label>
                    <input id="enterprise" type="text" class="form-control" name="entreprise" placeholder="the name of your compagny">
                </div>
                <?php if(!empty($validationError["user.description"])){
                ?>
                <div  class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">

                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    <strong>
                        <?php echo $validationError["user.description"]; ?>
                    </strong>
                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="fas fa-window-close"></i>
                    </button>
                </div>
                <?php } ?>
            <button type="submit" value="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>

@endsection
