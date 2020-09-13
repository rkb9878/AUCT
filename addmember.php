<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Member | AUCT</title>
    <?php include 'headerfile.php' ?>
</head>
<body>
<?php include "navbar.php"; ?>

<div class="container">
    <div class="text-center" style="padding-top: 40px">
        <h2 class="font-weight-bold">Become Member</h2>
    </div>
    <div>
        <div class="offset-md-3 col-md-6">
            <form action="emailSending/getintouch.php" method="post">
                <div class="form-group">
                    <label for="name">Name*</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <select name="pre" id="pre" class="form-control">
                                <option>Mr</option>
                                <option>Mrs</option>
                                <option>Dr</option>
                                <option>prof</option>
                            </select>
                        </div>
                        <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" required
                               aria-label="Text input with dropdown button">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="designation">Designation*</label>
                            <input type="text" class="form-control" id="designation" name="designation" placeholder="" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="subject">Subject*</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="collegename">College Name*</label>
                    <input type="text" class="form-control" id="collegename" name="collegename"
                           placeholder="College Name" required>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="mobile">Mobile*</label>
                            <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile"
                                   required minlength="10" maxlength="10">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="dateofjoining">Date of Joining*</label>
                            <input type="date" class="form-control" id="dateofjoining" name="dateofjoining" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="experience">Total Experience*</label>
                    <input type="number" class="form-control" id="experience" name="experience"
                           placeholder="Total Experience" min="0" required>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-outline-success w-25">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
</body>
</html>