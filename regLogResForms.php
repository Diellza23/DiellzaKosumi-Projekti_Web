<div class="form-popup" id="myForm">
    <form id="reservationForma" action="makeReservation.php" method="post" class="form-container">
        <h1>Your reservation</h1>
        <label><b>Full Name:</b></label>
        <input id="uname" type="text" name="name" placeholder="Enter your name">
        <label><b>E-mail:</b></label>
        <input id="email" type="email" name="email" placeholder="Enter your email">
        <label><b>Date/Time:</b></label>
        <input id="date" type="datetime-local" name="date">
        <label><b>Number of Guests:</b></label>
        <input id="nrOfGuests" type="number" max="15" name="nrOfGuests" placeholder="You and how many people?">
        <input name="makeReservation" class="btn" onclick="validate()" value="Submit" style="text-align:center;">
        <input class="btn cancel" onclick="closeForm()" value="Close" style="text-align:center;">
    </form>
</div>
<div class="form-popup" id="myLoginForm">
    <form id="loginForma" action="login.php" method="post" class="form-container">
        <h1>Login</h1>
        <label><b>E-mail:</b></label>
        <input id="emailLogin" type="email" name="email" placeholder="Enter your email">
        <label><b>Password:</b></label>
        <input id="passwordLogin" type="password" name="password" max="15" placeholder="Enter your password">
        <input name="login" class="btn" onclick="loginValidation()" value="Sign in" style="text-align:center;">
        <input class="btn cancel" onclick="closeLoginForm()" value="Close" style="text-align:center;" />
    </form>
</div>
<div class="form-popup" id="myRegisterForm">
    <form id="registerForm" action="register.php" method="post" class="form-container">
        <h1>Register</h1>
        <label><b>Username: </b></label>
        <input id="emailRegister" type="email" name="username" placeholder="Enter your username">
        <label><b>Password:</b></label>
        <input id="password" type="password" name="password" placeholder="Enter your password">
        <label><b>Role:</b></label>
        <input id="role" type="text" name="role" max="15" placeholder="Enter your role">
        <input name="register" class="btn" onclick="registerValidation()" value="Sign up" style="text-align:center" />
        <input class="btn cancel" onclick="closeRegisterForm()" value="Close" style="text-align:center;" />
    </form>
</div>