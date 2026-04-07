<?php
include 'db.php';
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql=$conn->prepare("select * from project where id=?");
    $sql->bind_param("i",$id);
    $sql->execute();
    $user=$sql->get_result()->fetch_assoc();

}
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $pname=$_POST['pname'];
    $description=$_POST['description'];
    $status=$_POST['status'];
    $sdate=$_POST['sdate'];
    $edate=$_POST['edate'];
    $sql=$conn->prepare("update project set project_name=?, project_description=?, status=?, start_date=?, end_date=? where id=?");
    $sql->bind_param("sssssi",$pname,$description,$status,$sdate,$edate,$id);
    if ($sql->execute()) {
        header("Location: home.php");
    }

}
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Update Project</title>
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
                class="navbar navbar-expand-sm navbar-light bg-primary "
             >
             <img
                    src="images/ls.jpeg"
             class="img-fluid rounded-circle mx-3"
                        height="80"   
                        width="80"
                        alt="Agro.rent"
                    />
                <div class="container">
                    <h5>Hello <?= $_SESSION["uname"] ?></h5>
                    
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
                                <a class="nav-link" href="home.php" aria-current="page"
                                    >Home
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            
                            
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                            <a
                                name=""
                                id=""
                                class="btn btn-danger"
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
            <h2 class="text-center">Update Project</h2>
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
                        value=<?= $user["project_name"]?>
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <input
                        type="text"
                        class="form-control"
                        name="description"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                        value=<?= $user["project_description"]?>
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status</label>
                    <select
                        class="form-select form-select-lg"
                        name="status"
                        id=""
                        value= <?= $user["status"]?>
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
                        value=<?= $user["start_date"]?>
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
                        value=<?= $user["end_date"]?>
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