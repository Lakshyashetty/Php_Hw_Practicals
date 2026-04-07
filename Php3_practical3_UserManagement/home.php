<?php
include 'db.php';
$result=$conn->query("select * from project");
if ($_SERVER["REQUEST_METHOD"]==="POST") {
$pname=$_POST['pname'];
$desciption=$_POST['description'];
$status=$_POST['status'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$sql=$conn->prepare("insert into project (project_name,project_description,status,start_date,end_date) values (?,?,?,?,?)");
$sql->bind_param('sssss',$pname,$desciption,$status,$sdate,$edate);
if ($sql->execute()) {
    header("Location:home.php");
}
}
?>

<!doctype html>
<html lang="en">
    <head>
        <title>User-Dashboard</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
             <nav
                class="navbar navbar-expand-sm navbar-light bg-primary"
             >
                <div class="container">
                    
                    <h3>Hello<?= $_SESSION["uname"]?></h3>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="home.php" aria-current="page"
                                    >Home
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="edit.php">Update</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="home.php">Delete</a>
                            </li>
                            
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                            <a
                                name=""
                                id=""
                                class="btn btn-primary"
                                href="logout.php"
                                role="button"
                                >Logout</a
                            >
                        </form>
                    </div>
                </div>
             </nav>
             
        </header>
        <main>
            <div
            class="container col-md-5 my-5 p-2 border-rounded shadow"
        >
            <h2 class="text-center">All Employee</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Project Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="pname"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Project Description</label>
                    <input
                        type="text"
                        class="form-control"
                        name="description"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status</label>
                    <select
                        class="form-select form-select-lg"
                        name="status"
                        id=""
                    >
                        <option selected>Select one</option>
                        <option value="pending">Pending</option>
                        <option value="in-progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Start Date</label>
                    <input
                        type="date"
                        class="form-control"
                        name="sdate"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                        />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">End Date</label>
                    <input
                        type="date"
                        class="form-control"
                        name="edate"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <button
                    type="submit"
                    class="btn btn-primary w-100"
                >
                    Submit
                </button>
               </form>
        </div>

        <div
                class="container col-6 my-5 p-2 border-rounded shadow"
            >
                <div
                    class="row-cols-10 justify-content-center align-items-center g-1"
                >
                    <div
                        class="table-responsive"
                    >
                        <table
                            class="table table-secondary table-bordered"
                        >
                            <thead>
                                <tr>
                                    <th scope="col">Project ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Action</th>  
                                </tr>
                            </thead>
                            <?php
                                while($row = $result->fetch_assoc()){
                                ?>
                            <tbody class="table-group-divider">
                                
                                <tr>
                                    <td><?php echo $row["id"] ?></td>
                                    <td><?php echo $row["project_name"] ?></td>
                                    <td><?php echo $row["project_description"] ?></td>
                                    <td><?php echo $row["status"] ?></td>
                                    <td><?php echo $row["start_date"] ?></td>
                                    <td><?php echo $row["end_date"] ?></td>
                                    <td><a href="edit.php ?id=<?=$row["id"]?>">"Edit"</a></td>
                                    <td><a href="delete.php ?id=<?=$row["id"]?>">"Delete"</a></td>
                                </tr>
                                <?php
                                    }
                                ?>    
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>