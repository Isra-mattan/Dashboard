<?php
include 'process.php'; 

// UPDATE LOGIC (SIDII UU AHAA)
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['full_name'];
    $faculty = $_POST['faculty'];
    $phone = $_POST['phone'];

    $sql = "UPDATE student_registration 
            SET full_name='$name', faculty='$faculty', phone='$phone' 
            WHERE student_id=$id";
    
    if ($conn->query($sql)) {
        echo "<script>alert('Xogta waa la beddelay!'); window.location='view_students.php';</script>";
        exit();
    } else {
        echo "Cilad: " . $conn->error;
    }
}

$result = $conn->query("SELECT * FROM student_registration");

include 'header.php'; 
 
?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

<style>
.edit-mode { display: none; }
.dataTables_filter { float: right; margin-bottom: 10px; }
.dataTables_length { float: left; margin-bottom: 10px; }
.table-responsive { overflow-x: auto; width: 100% !important; }
.form-control-sm { height: 30px; padding: 2px 5px; font-size: 13px; }
</style>

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <h3 class="mb-2">Student View </h3>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">

            <div class="card card-outline card-primary shadow">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Data Table</h3>
                    <div class="card-tools ms-auto">
                        <a href="student_registration.php" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Add New Student
                        </a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table id="studentTable" 
                               class="table table-bordered table-hover table-striped display nowrap" 
                               style="width:100%">

                            <thead class="table-dark text-nowrap">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Feculty</th>
                                    <th>Phone</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php while($row = $result->fetch_assoc()): ?>
                                <tr id="row-<?php echo $row['student_id']; ?>">
                                    <form action="view_students.php" method="POST">
                                        <td>
                                            <?php echo $row['student_id']; ?> 
                                            <input type="hidden" name="id" value="<?php echo $row['student_id']; ?>">
                                        </td>

                                        <td>
                                            <span class="view-mode"><?php echo $row['full_name']; ?></span>
                                            <input type="text" name="full_name" 
                                                   class="form-control form-control-sm edit-mode" 
                                                   value="<?php echo $row['full_name']; ?>" required>
                                        </td>

                                        <td>
                                            <span class="view-mode"><?php echo $row['faculty']; ?></span>
                                            <input type="text" name="faculty" 
                                                   class="form-control form-control-sm edit-mode" 
                                                   value="<?php echo $row['faculty']; ?>" required>
                                        </td>

                                        <td>
                                            <span class="view-mode"><?php echo $row['phone']; ?></span>
                                            <input type="text" name="phone" 
                                                   class="form-control form-control-sm edit-mode" 
                                                   value="<?php echo $row['phone']; ?>" required>
                                        </td>

                                        <td class="text-center">
                                            <div class="view-mode">
                                                <button type="button" 
                                                        class="btn btn-warning btn-sm"
                                                        onclick="toggleEdit(<?php echo $row['student_id']; ?>)">
                                                    <i class="fas fa-edit"></i>
                                                </button>

                                                <a href="delete.php?id=<?php echo $row['student_id']; ?>" 
                                                   class="btn btn-danger btn-sm"
                                                   onclick="return confirm('Ma hubtaa?')">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>

                                            <div class="edit-mode">
                                                <button type="submit" 
                                                        name="update" 
                                                        class="btn btn-success btn-sm">
                                                    <i class="fas fa-save"></i> Save
                                                </button>

                                                <button type="button" 
                                                        class="btn btn-secondary btn-sm"
                                                        onclick="toggleEdit(<?php echo $row['student_id']; ?>)">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </form>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>

        </div>
    </section>

</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#studentTable').DataTable({
        responsive: true,
        autoWidth: false,
        language: {
            search: "Raadi:",
            lengthMenu: "Muuji _MENU_ saf",
            info: "Waxaad aragtaa _START_ ilaa _END_ oo ka mid ah _TOTAL_ arday",
            paginate: {
                next: "Xiga",
                previous: "Hore"
            }
        }
    });
});

function toggleEdit(id) {
    let row = document.getElementById('row-' + id);
    let viewElements = row.querySelectorAll('.view-mode');
    let editElements = row.querySelectorAll('.edit-mode');

    viewElements.forEach(el => 
        el.style.display = (el.style.display === 'none' ? 'block' : 'none')
    );

    editElements.forEach(el => 
        el.style.display = (el.style.display === 'block' ? 'none' : 'block')
    );
}
</script>

