
<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $quant=$_POST['quant'];
    $cate=$_POST['cate'];
    $sql=$conn->prepare("insert into product values(?,?,?,?,?)");
    $sql->bind_param('isdsi',$id,$name,$price,$cate,$quant);
    if ($sql->execute()) {
         header("Location: home.php");
 exit();
    }
    else{
        echo "Data not inserted";
    }
    }
    ?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
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
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <a class="navbar-brand" href=""></a>
                        <h5>Hello <?php echo $_SESSION["name"]; ?> </h5>

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
                                <a class="nav-link " href="home.php" aria-current="page"
                                    >Home
                                    <span class="visually-hidden"></span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="insert.php">Insert</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="update.php">Update</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="delete.php">Delete</a>
                            </li>

                            
                            </li>
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                            <a
                                name=""
                                id=""
                                class="btn btn-primary"
                                href="logout.php"
                                role="button"
                                >Logout</a>
                            
                                
                            </a>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Id</label>
                    <input
                        type="text"
                        class="form-control"
                        name="id"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Product_Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Product_price</label>
                    <input
                        type="text"
                        class="form-control"
                        name="price"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Product_Category</label>
                    <select
                        class="form-select form-select-lg"
                        name="cate"
                        id=""
                    >
                        <option selected>T.v</option>
                        <option value="headphone">Headphone</option>
                        <option value="speaker">Speaker</option>
                        <option value="mb">MobilePhone</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Product_Quantity</label>
                    <input
                        type="text"
                        class="form-control"
                        name="quant"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>
                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Submit
                </button>
                
            </form>
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
