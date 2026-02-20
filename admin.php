<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Chimebloom - Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
     

    <!-- admin panel -->
    <section class="panel-sec">
        <div class="insert-form">
    <form action="admin_insert.php" method="post">
    <table class="table">
        <tr>
            <td><h1 class="inserth1">Insert Product</h1></td> 
        </tr>

        <tr><td><label>PRODUCT ID:</label></td></tr>
        <tr><td><input type="number" name="product_id" class="form_textInput" id="product_id"></td></tr>

        <tr><td><label>PRODUCT IMAGE:</label></td></tr>
        <tr><td><input type="file" name="product_image" class="form_textInput" id=""></td></tr>

        <tr><td><label>PRODUCT NAME:</label></td></tr>
        <tr><td><input type="text" name="product_name" class="form_textInput" id="product_name" ></td></tr>

        <tr><td><label>PRODUCT PRICE:</label></td></tr>
        <tr><td><input type="number" name="price" class="form_textInput" id="price"></td></tr>

        <tr><td><label>STOCK AMOUNT:</label></td></tr>
        <tr><td><input type="number" name="stocks" class="form_textInput" id="stocks"></td></tr>
        
        <tr><td><input type="submit" name="add" value="ADD"></td></tr>
        <tr><td><input type="submit" name="update" value="UPDATE"></td></tr>
    </table>
    </form>
    </div>


    <table class="table_th">
    <thead>
        <tr>
            <th class="column_th">PRODUCT ID</th>
            <th class="column_th">PRODUCT NAME</th>
            <th class="column_th">PRODUCT PRICE</th>
            <th class="column_th">PRODUCT IMAGE</th>
            <th class="column_th">PRODUCT STOCKS</th>
        </tr>
    </thead>

    <tbody>
        <?php 
        include 'chimebloom_db.php';
        $sql = "SELECT * FROM product";
        $result = $conn->query(query: $sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr class='tr'>
                <td class='trr'> {$row['product_id']}</td>
                <td class='trr'> {$row['product_name']}</td>
                <td class='trr'> {$row['price']}</td>
                <td class='trr'><img src='product-imgs/{$row['image_url']}'></td>
                <td class='trr'> {$row['stocks']}</td>";
            }
        } else {
            echo "<tr><th class='tk' colspan='4'>No records found.</th></tr>";
        }
        ?>
    </tbody>
    </table>
</section>

</body>    
</html>
