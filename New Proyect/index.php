<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <script src="js/js.js" type="text/javascript">
    </script>
    <title>
      Document
    </title>
  </head>
  <body>
    <div class="navbar">
      <div class="logo">
        <img src="stopwatch.png"/>
        Work Time Registration
      </div>
      <div class="btns">
        <button class="btn01">
          SIGNUP
        </button>
        <button class="btn03">
          LOGIN
        </button>
      </div>
    </div>
    <div class="modal" id="id02">
      <div class="close" onclick="document.getElementById('id02').style.display='none'">
        <i class="fas fa-times">
        </i>
      </div>
      <form action="" class="modal-content" method="POST">
        <div class="container">
          <h1 class="h102">
            LOGIN
          </h1>
          <label for="email">
            <b>
              Email
            </b>
          </label>
          <input name="email" placeholder="example@gmail.com" required="" type="email"/>
          <label for="password">
            <b>
              Password
            </b>
          </label>
          <input name="psw" placeholder="Enter Password" required="" type="password"/>
          <button class="btn04" type="submit" value="login">
            LOGIN
          </button>
          <span class="psw">
            Forgot
            <a href="#">
              password?
            </a>
          </span>
          <br/>
          <br/>
          <span class="ryet">
            Not have an account?
            <a href="">
              Signup
            </a>
          </span>
        </div>
      </form>
    </div>
    <!--SIGNUP-->
    <div class="modal" id="id01">
      <div class="close" onclick="document.getElementById('id01').style.display='none'">
        <i class="fas fa-times">
        </i>
      </div>
      <form action="" class="modal-content" method="POST">
        <div class="container">
          <h1 class="h101">
            SIGNUP
          </h1>
          <label>
            <b>
              First name
            </b>
          </label>
          <input name="fname" placeholder="Enter your first name" required="" type="text"/>
          <label>
            <b>
              Last name
            </b>
          </label>
          <input name="lname" placeholder="Enter your last name" required="" type="text"/>
          <label>
            <b>
              Email
            </b>
          </label>
          <input name="email" placeholder="example@gmail.com" required="" type="email"/>
          <label>
            <b>
              Password
            </b>
          </label>
          <input name="psw" placeholder="Enter Password" required="" type="password"/>
          <button class="btn02" type="submit" value="submit">
            SIGNUP
          </button>
          <span class="hacc">
            Have an account?
            <a href="">
              Login
            </a>
          </span>
        </div>
      </form>
    </div>
    <div class="container">
      <!--    <input class="" type="date"/>
      <div id="display">
        00:00:00
      </div>
      <div class="buttons">
        <button id="startStop" onclick="startStop()">
          Start
        </button>
        <button id="reset" onclick="reset()">
          Reset
        </button>
      </div>
    </div> -->
      <div class="cajita">
        <div class="date">
          <label>
            Date
          </label>
          <input id="imputdate" type="date"/>
        </div>
        <br/>
        <div class="project">
          <label class="project01">
            Project:
          </label>
          <input class="project02" type="text"/>
        </div>
        <br/>
        <br/>
        <div id="display">
          00:00:00
        </div>
        <br/>
        <div class="buttons">
          <button id="startStop" onclick="startStop()">
            Start
          </button>
          <button id="reset" onclick="reset()">
            Reset
          </button>
        </div>
        <br/>
        <br/>
        <div class="prueba">
          <div class="header" id="myDIV">
            <h2>
              Tasks
            </h2>
            <br/>
            <input id="myInput" placeholder="Title..." type="text"/>
            <span class="addBtn" onclick="newElement()">
              Add
            </span>
            <br/>
            <br/>
            <ul id="myUL">
              <li>
                hola
              </li>
            </ul>
          </div>
          <div class="description">
            <label class="description01" for="description02">
              Description:
            </label>
            <!--   <br/>
            <br/> -->
            <textarea class="description02" cols="50" name="description02" rows="12">
            </textarea>
          </div>
        </div>
        <br/>
        <div class="btnsave">
          <button class="btnSave" onclick="save()">
            Save
          </button>
        </div>
      </div>
    </div>
  </body>
</html>