<html>
    <head>
        <title>ciblog</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/slate/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
    </head>
    <body>
         <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">ciblog</a>
                </div>
                <div id="navbar">
                     <ul class="nav navbar-nav">
                         <li><a href="/">Home</a></li>
                         <li><a href="/about">About</a></li>
                         <li><a href="/contact">Contact</a></li>
                         <li><a href="/posts">Blog</a></li>
                         <li><a href="/categories">Category</a></li>
                     </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
                        <li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
                    </ul>
                </div>
            </div>
            </nav>

            <div class="container">