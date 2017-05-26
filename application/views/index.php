<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>CIA Access</title>

	<!-- <link rel="stylesheet" href="assets/demo.css"> -->
	<!-- <link rel="stylesheet" href="assets/css/form-basic.css"> --> <!-- settingan lokal -->
    <link rel="stylesheet" href="<?= base_url('assets/css/form-basic.css'); ?>">

</head>


	<!-- <header>
		<h1>Freebie: 7 Clean and Responsive Forms</h1>
        <a href="http://tutorialzine.com/2015/07/freebie-7-clean-and-responsive-forms/">Download</a>
    </header> -->

    <!-- <ul>
        <li><a href="index.html" class="active">Basic</a></li>
        <li><a href="form-register.html">Register</a></li>
        <li><a href="form-login.html">Login</a></li>
        <li><a href="form-mini.html">Mini</a></li>
        <li><a href="form-labels-on-top.html">Labels on Top</a></li>
        <li><a href="form-validation.html">Validation</a></li>
        <li><a href="form-search.html">Search</a></li>
    </ul> -->


    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="POST" action="<?= base_url('index.php/Cia_access_controller/do_insert'); ?>">

            <div class="form-title-row">
                <h1>Create Account</h1>
            </div>

            <?= "<h3>".$this->session->flashdata('pesan')."</h3>"; ?>

            <div class="form-row">
                <label>
                    <span>User ID</span>
                    <input type="text" name="userId">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Password</span>
                    <input type="Password" name="userPassword">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Username</span>
                    <input type="text" name="userName">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Group</span>
                    <select name="userGroup">
                        <option value="1">Kelompok 1</option>
                        <option value="2">Kelompok 2</option>
                        <option value="3">Kelompok 3</option>
                        <option value="4">kelompok 4</option>
                        <option value="5">kelompok 5</option>
                    </select>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Role</span>
                    <select name="userRole">
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                </label>
            </div>

            <!-- <div class="form-row">
                <label>
                    <span>Textarea</span>
                    <textarea name="textarea"></textarea>
                </label>
            </div> -->

            <!-- <div class="form-row">
                <label>
                    <span>Checkbox</span>
                    <input type="checkbox" name="checkbox" checked>
                </label>
            </div> -->

            <!-- <div class="form-row">
                <label><span>Radio</span></label>
                <div class="form-radio-buttons">

                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>Radio option 1</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>Radio option 2</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" name="radio">
                            <span>Radio option 3</span>
                        </label>
                    </div>

                </div>
            </div> -->

            <div class="form-row">
                <button type="submit" name="btnSubmit" value="simpan">Create Account</button>
            </div>

        </form>

    </div>

</body>

</html>
