
<?php
session_start();

include_once('database/connection.php');

$fetchedemail= $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">


<head>
<script>

</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
   
    <title>omobio</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>

<body>

     

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                <h1>Welcome  <?php echo $_SESSION['email']; ?>!</h1>
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Users</h4>
                    </div>
                   
                </div>
                <form action="list.php" method="post">
              
                <div class="row">
                    <div class="col-md-12">
						<div class="table-responsive">
                        
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th> ID</th>
                                        <th style="min-width:200px;">Name</th>
                                        <th style="min-width:200px;">Username</th>
                                        <th>Email</th>
                                  
                                       
                                        
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while($row = mysqli_fetch_array($sql_run)):?>
                            <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['name']; ?></td>
                                <td><?php  echo $row['userame']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                
                            
                            </tr>
                            <?php endwhile;?>
                                </tbody>
                            </table>
						</div>
                    </div>
                </div>
                </form>
            </div>
            
        </div>
      
		
    </div>
     


<script src= "https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>


   
</body>


</html>