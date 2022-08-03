<?php
	if (isset($_COOKIE['user'])) {
		//header("Location: suc.php");
	}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="script/script.js"></script>
	<title>Вход/Регистрация</title>
</head>
<body>
	<header class="p-3 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            ЛОГОТИП
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" style="margin-right: auto;">
            <li><a href="#" class="nav-link px-2 text-secondary">Главная</a></li>
       <!--   <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
            <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>-->
            <li><a href="#" class="nav-link px-2 text-white">О нас</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input
              type="search"
              class="form-control form-control-dark text-white "
              placeholder="Поиск..."
              aria-label="Search"
            />
          </form>

          <div class="text-end">
			<!-- Кнопка-триггер модального окна -->
			<?php if(isset($_COOKIE['user'])){?>
			<button type="button" class="btn btn-outline-light me-2"><?php echo $_COOKIE['user'];?></button>
			<form  style="display: inline-block;" action="logout.php" method="post">
				<input class="btn btn-warning" type="submit" value="ВЫХОД">
			</form>
			<?php }else{?>
            <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModalReg">
              Регистрация
            </button>
			<button type="button" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#exampleModalAuth">Авторизация</button>
			
			<?php }?>
			
			<!-- Модальное окно -->
			<div class="modal fade" id="exampleModalReg" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
					</div>
					<div class="modal-body">

						<form action="reg.php" method="post">
							<p class="block-error"></p>
							<input type="text" name="name" class="form-control" id="name" placeholder="Имя"><br>
							<input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
							<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
							<button class="btn btn-success">Зарегистрироваться</button><br>
						</form> 

					<!--	<form class="">
							<div class="form-floating mb-3">
								<input type="email" class="form-control rounded-4" id="floatingInput" placeholder="Логин">
								<label for="floatingInput">Логин</label>
							</div>
							<div class="form-floating mb-3">
								<input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Пароль">
								<label for="floatingPassword">Пароль</label>
							</div>
							<button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Sign up</button>
							<small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
						</form>-->
					</div>
					<!--<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
						<button type="button" class="btn btn-primary">Сохранить изменения</button>
					</div>-->
					</div>
				</div>
			</div>

            <!-- Модальное окно -->
			<div class="modal fade" id="exampleModalAuth" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
					</div>
					<div class="modal-body">

						<form action="auth.php" method="post">
							<input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
							<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
							<button class="btn btn-success">Войти</button><br>
						</form> 

					</div>
					
					</div>
				</div>
			</div>


          </div>
        </div>
      </div>
    </header>
	<div class="container mt-4">
		<div class="row">			
			<div class="col ">
				<h1>Здесь какой-то контент</h1>

				<?php if($_COOKIE['user']=="admin" ){?>
					<button id="submit" onclick="getAllUser();">Вывести всех пользователей</button>
					
				<?php }?>
				 
			</div>

		</div>
	</div>
	
</body>
</html>