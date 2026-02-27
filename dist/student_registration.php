<?php include 'header.php'; ?>



<div class="content-wrapper">
    
    <section class="content-header">
        <div class="container-fluid">
            <h1>Student Registration Form</h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">

            <form action="process.php" method="POST">

                <div class="card card-primary card-outline">
                    <div class="card-header bg-primary">
                        <h3 class="card-title text-white">Personal Information</h3>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="full_name" class="form-control" placeholder="Enter full name" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Student ID</label>
                                    <input type="text" name="student_id" class="form-control" placeholder="Enter student ID" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="gender" class="form-control" required>
                                        <option value="">Select Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" name="dob" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Place of Birth</label>
                                    <input type="text" name="place_of_birth" class="form-control" placeholder="Enter place of birth">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="card card-info">
                    <div class="card-header bg-info">
                        <h3 class="card-title text-white">Contact Information</h3>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Student Phone</label>
                                    <input type="tel" name="student_phone" class="form-control" placeholder="061XXXXXXX">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" class="form-control" placeholder="example@email.com">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Parent Name</label>
                                    <input type="text" name="parent_name" class="form-control" placeholder="Enter parent name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Parent Phone</label>
                                    <input type="tel" name="parent_phone" class="form-control" placeholder="Enter parent phone">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="card card-success">
                    <div class="card-header bg-success">
                        <h3 class="card-title text-white">Academic Information</h3>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Faculty</label>
                                    <input type="text" name="faculty" class="form-control" placeholder="CS, Medicine, etc.">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Department</label>
                                    <input type="text" name="department" class="form-control" placeholder="Enter department">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Year</label>
                                    <select name="year" class="form-control">
                                        <option>Year 1</option>
                                        <option>Year 2</option>
                                        <option>Year 3</option>
                                        <option>Year 4</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" name="register" class="btn btn-primary">Save Student</button>
                    </div>

                </div>

            </form>

        </div>
    </section>

</div>

