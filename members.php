<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMBERS | AGCS</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/members.css">
    <link rel="stylesheet" href="styles/footer.css">
</head>
<body>
    <?php
        include "./components/navbar.php";
        include "./db/config.php";
    ?>
    <br><br><br>
    <br><br>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-info" type="button"><a href="./add-member.php" class="applybtn">Apply For Membership</a></button>
    </div>
    <br><br>
    <div class="container">
    <p class="csubhead">Founding Members:</p>
        <table id="gmembertbl">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>ADDRESS</th>
                    <th>DESCRIPTION</th>
                </tr>
            </thead>
            <tbody>
            <tr><td>Mr . Sankhasubha Roy</td>	<td>Principal, AGCS Haldia</td><td>	Chairman</td> 
</tr>
<tr><td>Mr. Santanu Maity</td>	<td>Bhabanipur, Haldia</td><td>	Secretary</td> 
</tr>
<tr><td>Mr.Saurav Samanta</td>	<td>Durgachak, Haldia</td><td>	Jt. Secretary </td>
 </tr>
<tr><td>Mrs.Payel Panda Pandit</td>	<td>Township, Haldia</td><td>	Convener</td> 
<tr><td>Mr.Sayantan Pandit</td>	<td>Haldia</td><td>	 Core Member</td> </tr>
</tr>

            </tbody>
        </table>
    <br><br><br><br><br><br>
    <p class="csubhead">Life Time Members:</p>
        <table id="lmembertbl">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>MEMBERSHIP NO.</th>
                    <th>BATCH</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $sql_lifetime = "SELECT * FROM `lifetime_members`";
                $result = mysqli_query($conn, $sql_lifetime);
                $slno = 0;
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>".$row['name']."</td>
                    <td>AGSC/ALUM/LFT".$row['id']."</td>
                    <td>".$row['batch']."</td>                    
                </tr>";
                } 
            ?>
            </tbody>
        </table>
    <br><br><br><br><br><br>
    <p class="csubhead">Annual Members:</p>
        <table id="amembertbl">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>MEMBERSHIP NO.</th>
                    <th>BATCH</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $sql_annual = "SELECT * FROM `annual_members`";
                $result = mysqli_query($conn, $sql_annual);
                $slno = 0;
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>".$row['name']."</td>
                    <td>AGSC/ALUM/ANN".$row['id']."</td>
                    <td>".$row['batch']."</td>                    
                </tr>";
                } 
            ?>
            </tbody>
        </table>
    </div>
    <br><br><br>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-info" type="button"><a href="./add-member.php" class="applybtn">Apply For Membership</a></button>
    </div>
    <br><br><br>
    <br><br><br>
    <?php
        include "./components/footer.php";    
    ?>
</body>
<script>
    $(document).ready( function () {
        $('#gmembertbl').DataTable();
        $('#lmembertbl').DataTable();
        $('#amembertbl').DataTable();
    } );
</script>
</html>