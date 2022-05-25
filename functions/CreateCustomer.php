<!-- <label class="identity-text-0" style="top: 20px; left: 20px;">Choose your gender</label> -->

<label class="error-text" style="top: 180px; left:75px;">
    <?php echo $createCustomerError['Sex']; ?>
</label>

<input type="radio" class="radio-input" name = "sex" value = "M" style="top: 140px; left: 75px;"></input>

<label class="identity-text-1" style="top: 65px; left: 84px;">男性</label>

<input type="radio" class="radio-input" name = "sex" value = "F" style="top: 140px; left: 200px;"></input>

<label class="identity-text-1" style="top: 65px; left: 175px;">女性</label>

<input type = "text" name="address" class="text-input" style ="top: 200px;" placeholder="住址"></input>

<input type = "date" class = "date-input" name = "birthday" style="top: 260px;">

<label class="error-text" style="top: 295px; left:75px;">
    <?php echo $createCustomerError['Birthday']; ?>
</label>

<div class = "login-btn lower-login-btn" style="top: 255px;">
    <input type = "submit" name = "createCustomer" class = "next-btn upper-next-btn next-btn-text" style="top:-7px;" value = "註冊">
</div>