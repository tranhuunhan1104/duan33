<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');
* {box-sizing: border-box}
body{
  font-family: 'Noto Sans JP', sans-serif;
}
h1, label{
  color: DodgerBlue;
}
/* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  width:100%;
  resize: vertical;
  padding:15px;
  border-radius:15px;
  border:0;
  box-shadow:4px 4px 10px rgba(0,0,0,0.2);
}

input[type=text]:focus, input[type=password]:focus {
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.signupbtn {
  float: left;
  width: 100%;
  border-radius:15px;
  border:0;
  box-shadow:4px 4px 10px rgba(0,0,0,0.2);
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

</style>
<!--Source frome https://www.w3schools.com/howto/howto_css_signup_form.asp-->
<form class="text-left clearfix" method="POST" action="{{route('shop.checkregister')}}">
    @csrf
    <div class="container">
      <h1>Form Đăng Ký</h1>
      <p>Xin hãy nhập biểu mẫu bên dưới để đăng ký.</p>
      <hr>

      <label for="name"><b>Tên</b></label>
      <input type="text" placeholder="Nhập Tên" name="name" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Nhập Email" name="email" required>

      <label for="email"><b>Số điện thoại</b></label>
      <input type="text" placeholder="Nhập Sdt" name="phone" required>

      <label for="email"><b>Địa chỉ</b></label>
      <input type="text" placeholder="Nhập Địa Chỉ" name="address" required>

      <label for="psw"><b>Mật Khẩu</b></label>
      <input type="password" placeholder="Nhập Mật Khẩu" name="password" required>

      <label for="psw-repeat"><b>Nhập Lại Mật Khẩu</b></label>
      <input type="password" placeholder="Nhập Lại Mật Khẩu" name="confirmpassword" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ Đăng Nhập
      </label>

      <div class="clearfix">
        <button type="submit" class="signupbtn">Đăng kí</button>
      </div>
    </div>
  </form>
  <p class="mt-20">Bạn đã có tài khoản ?<a href=""> Đăng nhập</a></p>
