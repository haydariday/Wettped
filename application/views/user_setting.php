<div class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="border-right border-bottom mx-1">
                        <p class="h5"><b>Account</b></p>
                        <p class="h6 text-muted">Change yout account information and privacy</p>
                        <form action="#" name="account_form">
                            <div class="mt-5 text-muted">
                                <div class="row" >
                                    <div class="col-md-5 text-right">
                                        <label>Username</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="username" placeholder="username">
                                    </div>
                                </div>
                                <div class="row" >
                                    <div class="col-md-5 text-right">
                                        <label>Password</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="password" placeholder="password">
                                    </div>
                                </div>
                                <div class="row" >
                                    <div class="col-md-5 text-right">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="email" placeholder="email">
                                    </div>
                                </div>
                                <div class="row" >
                                        <div class="col-md-5 text-right">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" placeholder="name">
                                        </div>
                                </div>
                                <div class="row" >
                                        <div class="col-md-5 text-right">
                                            <label>Date of Birth
                                            </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="birthday" value="1998-10-31">
                                        </div>
                                </div>
                                <div class="row" >
                                        <div class="col-md-5 text-right">
                                            <label>Gender</label>
                                        </div>
                                        <div class="col-md-7">
                                        <select name="gender" id="genders">
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                            <option value="O">Others</option>
                                            <option selected></option>
                                        </select>
                                        </div>
                                </div>
                                <div class="row">
                                        <label class="col-md-12">About</label>
                                        <div class="container mr-4">
                                            <textarea class="col-md-12" name="about" id="abouts" cols="30" rows="10" placeholder="about"></textarea>
                                        </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button id="btnSubmitEdit" class="btn btn-md btn-center mx-auto mt-3 mb-3" type="submit" style="background-color: #ff6122; color: white">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class=" border-right border-bottom mx-1">
                        <div class="text-center px-1">
                            <h5 class="text-muted">CUSTOMIZE</h5>
                            <div>
                                Profile Picture
                                <p><img class="" src="https://via.placeholder.com/256" height="256px" width="256px"></p>
                                <p><button id="btnProfile" class="btn btn-sm btn-outline-secondary">Change</button></p>
                            </div>
                            <div>
                                Background
                                <p><img class="" src="https://via.placeholder.com/256x128" width="256px"> </p>
                                <p><button id="btnBackground" class="btn btn-sm btn-outline-secondary">Change</button></p>
                            </div>
                            <div class="mt-5">
                                    <button id="btnCloseAccount" class="btn btn-md btn-center mx-auto mt-3 mb-3" type="submit" style="background-color: #ff6122; color: white">Close Account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>