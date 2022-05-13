<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php'; ?>
<link rel="stylesheet" href="css/userProfile.css"/>
<body>
<?php include 'include/navbar.php'; ?>

<div class="userProfileBody">

    <form method="post">
        <div class="row">
            <div class="col-md-3 imgCol">
                <div class="profileIMG">
                    <img src="img/profileImg.png" alt="Profile Image"/>
                    <div class="file btn btn-lg btn-primary">
                        Change Photo<input type="file" name="file"/>
                    </div>
                </div>
            </div>
            <div class="col-md-7 d-flex flex-column">
                <h1 class="m-0">Name Surname</h1>
                <h6>Web Developer and Designer</h6>
                <p class="mt-4" style="all: unset">User rating: 8/10</p>

                <div class="nav nav-tabs mt-auto">
                    <button class="nav-link aboutPBTN active" data-bs-toggle="pill" data-bs-target=".aboutPill" type="button">About</button>
                    <button class="nav-link timelinePBTN" data-bs-toggle="pill" data-bs-target=".timelinePill" type="button">Timeline</button>
                </div>
            </div>
            <div class="col-md-2" style="text-align: right">
                <input type="submit" class="editProfileBTN" name="editProfile" value="Edit Profile"/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 socialsCol">
                <h1>Socials</h1>
                <a href="">Instagram</a><br>
                <a href="">Facebook</a><br>
                <a href="">Twitter</a><br>
                <a href="">Pinterest</a><br>
                <a href="">Snapchat</a><br>
            </div>
            <div class="col-md-8 infoCol">
                <div class="tab-content profile-tab">

                    <div class="tab-pane aboutPill active">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>User Id</h6>
                            </div>
                            <div class="col-md-6">
                                <p>User111</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Email</h6>
                            </div>
                            <div class="col-md-6">
                                <p>email@gmail.com</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Phone</h6>
                            </div>
                            <div class="col-md-6">
                                <p>123 456 7890</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Age</h6>
                            </div>
                            <div class="col-md-6">
                                <p>26</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Gender</h6>
                            </div>
                            <div class="col-md-6">
                                <p>Male</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mt-2 text-center">Biography</h6>
                                <p class="biographyTXT">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                    laborum.</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane timelinePill">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Experience</h6>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Hourly Rate</h6>
                            </div>
                            <div class="col-md-6">
                                <p>10$/hr</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Total Projects</h6>
                            </div>
                            <div class="col-md-6">
                                <p>230</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>English Level</h6>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Profession</h6>
                            </div>
                            <div class="col-md-6">
                                <p>Web Developer and Designer</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>

<?php include 'include/footer.php'; ?>
</body>
</html>