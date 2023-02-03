
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>show All Products</title>
        <style>
        table{
        width:100%;      
    }
        thead{
            background-color:#3498DB;
            padding:10px;
        }
        tbody{
            background-color:white;
        }
        td{
            padding:10px;
        }
        th{
            padding:10px;
        }
    </style>
    </head>
    <body>
        <center><h3>ALL PRODUCTS</h3></center>
    <?php
    include ('config.php');
    $query1="select id,name,price from product";
    $r=mysqli_query($connect,$query1);
    // if ($_POST['delete']) {
    //     $id=$_POST['id'];
    //     $query2="delete * from product where id=$id";
    //     $del=mysqli_query($connect,$query2);
    // }
    
    while ($row=mysqli_fetch_array($r)) {
    echo <<<"hero"
             
             <main>
                <table class="tab" >
                    <thead>
                        <tr>
                            <th> ID</th>
                            <th> NAME</th>
                            <th> PRICE</th>
                            <th> delete </th>
                            <th> update </th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[price]</td>
                            
                            <td>
                            <a href='delete-products.php? id= $row[id]' > حذف المنتج </a>
                            </td>
                            <td> 
                            <a href='update-products.php? id= $row[id]' >تعديل المنتج</a>
                            </td>
                         </tr>
                        </tbody>
                 </table>
                </main>
    
            hero;
    }
   
    ?>
    </body>
    </html>