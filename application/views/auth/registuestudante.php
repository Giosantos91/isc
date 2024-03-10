<div class="main-wrapper login-body">
    <div class="login-wrapper">

        <div class="container-xl px-4">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <!-- Basic registration form-->
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header justify-content-center">
                            <h3 class="fw-light my-4">Registu Estudante</h3>
                        </div>
                        <div class="card-body">
                            <!-- Registration form-->
                            <form action="http://localhost:8080/siaka/auth/registuestudante" method="post">
                                <!-- Form Group (username)-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1">NRE</label>
                                        <input class="form-control" type="text" name="nre"
                                            placeholder="Numeru Estudante" value="" autocomplete="off" autofocus=""
                                            required="" />

                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1">Naran Estudante</label>
                                        <input class="form-control" type="text" name="naran_estudante"
                                            placeholder="Naran kompletu estudante" value="" autocomplete="off"
                                            required="" />
                                    </div>
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-4">
                                        <label class="small mb-1">Sexu</label>
                                        <select name="sexo" id="" class="form-control">
                                            <option value="">--Hili Sexu--</option>
                                            <option value="Mane">Mane</option>
                                            <option value="Feto">Feto</option>
                                        </select>
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-4">
                                        <label class="small mb-1">Fatin Moris</label>
                                        <input type="text" name="fatin" class="form-control" value="" autocomplete="off"
                                            placeholder="Fatin Moris ">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="small mb-1">Data Moris</label>
                                        <input type="text" name="data_moris" class="form-control" value=""
                                            autocomplete="off" placeholder="Data Moris">
                                    </div>
                                </div>
                                <!-- Form Row        -->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputOrgName">Hela fatin</label>
                                        <input type="text" name="hela_fatin" class="form-control" value=""
                                            autocomplete="off" placeholder="Hela Fatin">
                                    </div>
                                    <!-- Form Group (location)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLocation">Numeru Telefone</label>
                                        <input type="text" name="nu_telf" class="form-control" value=""
                                            autocomplete="off" placeholder="Numeru Telfone">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Naran Pai</label>
                                            <input type="text" name="pai" class="form-control" value=""
                                                autocomplete="off" placeholder="Pai Nia Naran">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Profisaun Pai </label>
                                            <input type="text" name="profisaunpai" class="form-control" value=""
                                                autocomplete="off" placeholder="Profisaun Pai">
                                        </div>
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Naran Mae</label>
                                            <input type="text" name="mae" class="form-control" value=""
                                                autocomplete="off" placeholder="Mae Nia Naran">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label>Profisaun Mae </label>
                                            <input type="text" name="profisaunmae" class="form-control" value=""
                                                autocomplete="off" placeholder="Profisaun Pai">
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-4">
                                        <label> Fakuldade *</label>
                                        <select name="id_fakuldade" id="id_fakuldade" class="form-control">
                                            <option value="">Hili Fakuldade</option>
                                            <option value="1">Ciência da Educação </option>
                                            <option value="2">Ciência de Saude </option>
                                            <option value="3">Programa Mestrado </option>
                                        </select>

                                    </div>
                                    <!-- Form Group (birthday)-->
                                    <div class="col-md-4">
                                        <label>Departamento</label>
                                        <select name="id_departamentu" id="id_departamentu"
                                            class="id_departamentu form-control">
                                            <option value="">Hili Departamento</option>

                                        </select>

                                    </div>
                                    <div class="col-md-4">
                                        <label>Semester</label>
                                        <select class="form-control" name="id_semester">
                                            <option value="#">Hili Semester</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-4">
                                        <label>Nivel Estudu</label>
                                        <select name="nivel_estudu" class="form-control">
                                            <option value="">Hili Grau</option>
                                            <option value="Bacharelato">Bacharelato</option>
                                            <option value="Licenciatura">Licenciatura</option>
                                            <option value="Mestrado">Mestrado</option>

                                        </select>
                                    </div>
                                    <!-- Form Group (birthday)-->
                                    <div class="col-md-4">
                                        <label> Tinan Tama *</label>
                                        <input type="text" name="tinan_tama" class="form-control" maxlength="4"
                                            autocomplete="off" placeholder="Tinan Tama">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Fundus</label>
                                        <select class="form-control" name="fundus">
                                            <option value="#">Hili Fundus</option>
                                            <option>Privado</option>
                                            <option>Bolsa</option>


                                        </select>
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-4">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control" value="" autocomplete="off"
                                            placeholder="Email">
                                    </div>
                                    <!-- Form Group (birthday)-->
                                    <div class="col-md-4">
                                        <label> Password</label>
                                        <input type="password" class="form-control" id="password1" name="password1"
                                            placeholder="Password">

                                    </div>
                                    <div class="col-md-4">
                                        <label> Konfirma Password</label>
                                        <input type="password" class="form-control" id="password2" name="password2"
                                            placeholder="Retype password">

                                    </div>
                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="submit">Registu </button>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small"><a href="<?=base_url('auth/loginestudante')?>">Iha ona Akun!
                                    Mai ita ba Login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>