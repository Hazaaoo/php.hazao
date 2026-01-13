<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <form action="answer.php" method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Фамилия</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Имя</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
               <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Отчество</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Дата</label>
                <input type="date" class="form-control" id="exampleInputPassword1">
              </div>
               <div class="mb-3">
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Выберите пол</option>
                      <option value="1">Ламинат</option>
                      <option value="2">Плитка</option>
                      <option value="3">Линолиум</option>
                    </select>
                 <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Номер телефона</label>
                <input type="tel" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                    <label for="" class="form-label">Место жительства</label>
                    <textarea class="form-control" name="address" id="address" rows="2"></textarea>
                </div>
               </div>
               </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Электронная почта</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                <div id="emailHelp" class="form-text">Мы не оформим кредит на ваши данные(возможно)</div>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="check" id="RadioDefault1" value="Жалоба">
                  <label class="form-check-label" for="RadioDefault1">
                    Жалоба   
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="check" id="RadioDefault2" value="Благодарнсть">
                  <label class="form-check-label" for="RadioDefault2">
                    Благодарность
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="check" id="RadioDefault3" value="Предложение">
                  <label class="form-check-label" for="RadioDefault3">
                    Предложение
                  </label>
                </div>
                 <div class="mb-3">
                    <label for="" class="form-label">Текст сообщения</label>
                    <textarea class="form-control" name="address" id="address" rows="5"></textarea>
                </div>
              <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
