<?php
$connect = mysqli_connect("localhost", "root", "", "webnote");
if($connect):
    echo "Connected Successfully";
endif;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <style>
        *{
            font-family: Montserrat;
        }
        .text-form{ border-radius: 15px}
    </style>
    <title>Document</title>
</head>
<body class="bg-primary">
    <div class="container-fluid px-4 mt-5 shadow">
    
    
    <div class="row"> 
        <div class="col-md-12">
    
        
    
            <div class="card shadow">
                <div class="card-header">
                    <h4>My Notes
                        <a href="" class="btn btn-warning float-end">Add New Note <i class="fas fa-plus"></i> </a></h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Note Title</th>
                                <th>Note Content</th>
                                <th>Note Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                         <tr>
                         
                             <td>Serial No</td>
                             <td>Title</td>
                             <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum mollitia quae nam. Corrupti, maxime! Assumenda id recusandae odio optio laudantium.    </td>
                            </a>
                             <td>Lorem, ipsum dolor.</td>
                             <td class="btn-group btn"></i>
                             <a><button type="" name="delete" class="ms-3 text-danger fas fa-trash btn-group"></button></a></td>
                        
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
    </html>
