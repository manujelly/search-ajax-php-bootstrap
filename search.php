
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12" id="title" hidden >
            <h1 class="display-3">Search for <span id="search-text"></span></h1>
        </div>
        <div class="col-12">
            <input class="form-control m-1" type="text" id="search_field" placeholder="Write search here..."/>
        </div>
        <div class="col-12">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Name</th>
                </tr>
                </thead>
                <tbody id="data">
                <!---content after query-->
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="index.js"></script>
</body>
</html>