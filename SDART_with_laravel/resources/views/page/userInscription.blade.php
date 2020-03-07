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

      @error('inconLink')
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
                    <input type="text" class="form-control" value="{{old('pseudo')}}" id="pseudo" placeholder="pseudo" name="pseudo">
                </div>
                <div class="form-group  col-md-6">
                    <label class="" for="inputGroupFile01">Your profil picture</label>
                    <div class="custom-file ">
                        <input type="file" class="custom-file-input" name="inconLink" id="inputGroupFile01"
                               aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label btn-primary btn" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
<!-- fin inpute et alert art pseudo et iconLink-->
<!--inpute et alert art pratice-->
            <div class="form-group ">
                <p>what kind of art do you practice ? </p>
                @foreach($typeart as $typeAr )
                    <label id="{{$typeAr->id}}">{{$typeAr->name}}</label>
                    <input type="radio" name="typeart_id"  id="{{$typeAr->id}}" value="{{$typeAr->id}}">
                @endforeach
                <div class=" form-check-inline form-check ">
                </div>
            </div>
<!-- fin inpute et alert art pratice-->
<!--  inpute levelAdminUser et alert art description-->


                @error('levelAdminUser')
                <div class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">

                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    <strong>
                    {{$message}}
                    </strong>
                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="fas fa-window-close"></i>
                    </button>
                </div>
                @enderror()
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
                @error('description')
                <div  class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">

                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                        {{$message}}
                    <i class="fas fa-exclamation-circle" style="color: red;"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="fas fa-window-close"></i>
                    </button>
                </div>
                @enderror
                <div class="form-group">
                    <label for="inputAddress">description</label>
                    <textarea name="description"  class="form-control"  id="inputAddress" rows="3" placeholder="Fiew word about you..."></textarea>
                </div>
                <div class="form-group" >
<!--fin  inpute levelAdminUser et alert art description-->
<!--inpute idCountry et alert art Email-->
                   @error('idCountry')
                    <div  class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">

                        <i class="fas fa-exclamation-circle" style="color: red;"></i>
                        <strong>
                            {{$message}}
                        </strong>
                        <i class="fas fa-exclamation-circle" style="color: red;"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="fas fa-window-close"></i>
                        </button>
                    </div>
                    @enderror
                    <label for="country">Your Country </label>
                    <select id="country" name="country_id" class="form-control custom-select mr-sm-2" >
                        <option selected> Choose...</option>
                    @foreach($allCountry as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                    </select>
<!--fin  inpute levelAdminUser et alert Country-->
                    @error('password')
                        <div class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle" style="color: red;"></i>
                            <strong>
                                {{$message}}
                            </strong>
                            <i class="fas fa-exclamation-circle" style="color: red;"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="fas fa-window-close"></i>
                            </button>
                        </div>
                    @enderror
                    <div class="form-group">
                        <label for="inputAddress">Email</label>
                        <input type="text" class="form-control" value="{{old('email')}}" id="inputAddress" placeholder="monmail@maboitemail.extentions" name="email">
                    </div>
<!---Alert password--->
                    @error('password')
                        <div class="col-md-12 alert alert-danger form-control alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle" style="color: red;"></i>
                            <strong>
                                {{$message}}
                            </strong>
                            <i class="fas fa-exclamation-circle" style="color: red;"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="fas fa-window-close"></i>
                            </button>
                        </div>
                    @enderror
                    <div class="form-group ">
                        <label for="passWord">Mots de passe: </label>
                        <div class="row roweyes">
                            <input id="passWord" type="password" class="col-10 form-control text-left" id="inputAddress2" placeholder="password" name="password">
                            <div class="btn-primary btn col-2"  onclick="passWordHAS()">
                                <div id="eyes">
                                    <i  class="far fa-eye hideAndShowEyes"></i>
                                </div>
                                <div id="eyesBlink">
                                    <i class="far fa-eye-slash d-none hideAndShowEyesBlink"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- on work-->
                    <div class="form-group ">
                        <label for="passWordConf">confirmation du Mots de passe: </label>
                        <div class="row roweyes">
                            <input id="passWordConf" type="password" class="col-10 form-control text-left" name="password_confirmation"  placeholder="password">
                            <div class="col-2 btn-primary btn"  onclick="passWordHAS2()">
                                <div id="eyes2">
                                    <i  class="far fa-eye hideAndShowEye2s"></i>
                                </div>
                                <div id="eyesBlink2">
                                    <i class="far fa-eye-slash d-none hideAndShowEyesBlink2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
<!---fin Alert password--->

                    <button type="submit" value="submit" class="btn btn-primary">Sign in</button>
          </div>
        </form>
    </div>

@endsection
