<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <style type="text/css">
    	.mt20 {
    		margin-top: 20px;
    	}
    	.footer {
		    /*background-color: #fafafa;*/
		    padding: 1.5rem 1.5rem 1.5rem;
		    margin-top: 50px;
		}

    </style>
	<title>Todos</title>
</head>
<body>
  @include('inc.navbar')
	<div class="container">
		@yield('content')
	</div>
</body>
<footer class="footer">
  <div class="content has-text-centered">
    <p>
      Copyright &copy 2018 <strong>Todo List</strong> by <a href="http://lawalakanbi.me">Lawal Akanbi</a>
    </p>
  </div>
</footer>
</html>