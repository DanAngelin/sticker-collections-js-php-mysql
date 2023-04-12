<?php include 'includes/admin_header.php' ?>

    <div class="col-md-10 m-auto mt-5">

    <?php

        $query = "SELECT * FROM category ";
        $categories_query = mysqli_query($conn, $query);

        $categories = array();

        if(mysqli_num_rows($categories_query)) {
            while($row = mysqli_fetch_assoc($categories_query)) {
                $categories[] = $row;
            }
        }

        if(isset($_POST['add_album'])) {
            $album_name = $_POST['album_name'];
            $category_id = $_POST['category_id'];
            $total_stickers = $_POST['total_stickers'];

            $query = "INSERT INTO album (album_name, album_id_category) ";
            $query .= "VALUES('" .$album_name. "', " .$category_id. ") ";

            $add_album_query = mysqli_query($conn, $query);

            if(!$add_album_query) {
                die("QUERY FAILED " . mysqli_error($conn));
            }


            $album_id = mysqli_insert_id($conn);

            $query = "INSERT INTO stickers (album_id, nr) VALUES ";
            for ($i = 1; $i <= $total_stickers; $i++) {
                $query .= "(".$album_id.", '".$i."'), ";
                
            }

            $query = rtrim($query, ", ");

            $sticker_query = mysqli_query($conn, $query);

            if(!$sticker_query) {
                die("QUERY FAILED " . mysqli_error($conn));
            }


        }


    ?>

        <h4>Adauga album</h4>
        <form action="" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nume Album</span>
                <input type="text" class="form-control" placeholder="Ex. Angry Birds 2" name="album_name" aria-label="Name" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Categorie</span>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    <?php
                        if(!empty($categories)) {
                            foreach($categories as $cat) {
                                echo "<option value='{$cat['category_id']}'>{$cat['category_name']}</option>";
                            }
                        }
                    ?>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Total stickere</span>
                <input type="number" class="form-control" placeholder="Ex. 200" name="total_stickers" aria-label="total_stickers" aria-describedby="basic-addon1">
            </div>

            <button type="submit" name="add_album" class="btn btn-success">Adauga</button>
        </form>
    </div>
</body>
</html>