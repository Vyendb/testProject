<div class="modal fade signInUpModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-body p-0">

                <div class="nav nav-pills d-flex" id="pills-tab" role="tablist">
                    <button class="nav-link signInBtn flex-fill" data-bs-toggle="pill" data-bs-target=".signInPill" type="button" role="tab">Sign In</button>
                    <button class="nav-link signUpBtn flex-fill" data-bs-toggle="pill" data-bs-target=".signUpPill" type="button" role="tab">Sign Up</button>
                    <button class="nav-link restoreBtn d-none" data-bs-toggle="pill" data-bs-target=".restorePill" type="button" role="tab">Forgot your password?</button>
                </div>

                <div class="tab-content">

                    <div class="tab-pane signInPill" role="tabpanel">
                        <form>
                            <div>
                                <label for="signInEmail" class="form-label"></label>
                                <input type="email" class="form-control" placeholder="E-mail" id="signInEmail">
                            </div>
                            <div class="mb-3">
                                <label for="signInPassword" class="form-label"></label>
                                <input type="password" class="form-control" placeholder="Password" id="signInPassword">
                            </div>
                            <div class="d-flex mb-5">
                                <div class="form-check m-0">
                                    <input type="checkbox" class="form-check-input" id="rememberMeCheck">
                                    <label class="form-check-label rememberMeLabel" for="rememberMeCheck">Keep me signed in</label>
                                </div>
                                <p class="forgotPassTxt ms-auto m-0"><a class="forgotPassLink text-decoration-none text-black">Forgot your password?</a></p>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Log in</button>
                        </form>
                    </div>

                    <div class="tab-pane signUpPill" role="tabpanel">
                        <form>
                            <div>
                                <label for="signUpName" class="form-label"></label>
                                <input type="text" class="form-control" placeholder="Name" id="signUpName">
                            </div>
                            <div>
                                <label for="signUpEmail" class="form-label"></label>
                                <input type="email" class="form-control" placeholder="E-mail" id="signUpEmail">
                            </div>
                            <div>
                                <label for="signUpNumber" class="form-label"></label>
                                <input type="tel" class="form-control" placeholder="Phone number" id="signUpNumber">
                            </div>
                            <div class="mb-3">
                                <label for="signUpPassword" class="form-label"></label>
                                <input type="password" class="form-control" placeholder="Password" id="signUpPassword">
                            </div>
                            <div class="mb-5 form-check">
                                <input type="checkbox" class="form-check-input" id="signUpAgreementCheck">
                                <label class="form-check-label" for="signUpAgreementCheck">I agree to the <a class="tos" href="#"><i>Terms & Conditions</i></a> and <a class="policy" href="#"><i>Policy</i></a>.</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Create account</button>
                        </form>
                    </div>

                    <div class="tab-pane restorePill" role="tabpanel">
                        <p class="restorePassHelperTxt text-center">Please enter your email address in the field below.<br>You will receive a link to create a new password.</p>
                        <form>
                            <div class="mb-5">
                                <label for="restoreEmail" class="form-label"></label>
                                <input type="email" class="form-control" placeholder="E-mail" id="restoreEmail">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Restore password</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>