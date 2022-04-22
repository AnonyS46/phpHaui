<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form đăng kí tài khoản</title>

    <style>
        .container {
            max-width:1200px;
            margin: auto;
        }
        form {
        }
        .form-group {
            margin-bottom: 10px;
        }
    </style>
</head>

<?php 

   

?>

<body>
    <div class="container">
        <form action="saveinfor.php" method="post" id="saveform">
            <div class="form-group">
                <input type="radio" value="CompanyAccount" id="company" name="type">
                <label for="company">Company Account</0label>
                <input type="radio" value="PersonalAccount" id="personal" name="type">
                <label for="personal">Personal Account</0label>
            </div>
            <div class="form-group">
                <label for="fullname">Họ tên</0label>
                <input type="text" value=" " id="fullname" name="fullname">
            </div>
            
            <div class="form-group">
                <label for="fullname">Country</0label>
                <select name="country" id="country">
                    <option value="vn">Việt Nam</option>
                    <option value="usa">Hoa Kỳ</option>
                    <option value="cn">Trung Quốc</option>
                    <option value="sg">Singapore</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fullname">Địa chỉ</0label>
                <input type="text" value=" " id="address" name="address">
            </div>
            <div class="form-group">
                <label for="fullname">City</0label>
                <input type="text" value=" " id="city" name="city">
            </div>
            <div class="form-group">
                <label for="fullname">Post Code</0label>
                <input type="text" value=" " id="postcode" name="postcode">
            </div>
            <div class="form-group">
                <label for="fullname">Phone number</0label>
                <input type="text" value="" id="phone" name="phone">
            </div>
            <div class="form-group">
                <input type="checkbox" value="" id="agree" name="">
                <label for="fullname">Bạn có đồng ý với tiêu chuẩn của chúng tôi</label>      
            </div>
            <button type="submit" class="">Đăng kí</button>
        </form>

    </div>
    <script>
        document.getElementById("saveform").addEventListener("submit", function(e) {
            if(!document.getElementById("agree").checked) {
                e.preventDefault();
                alert("Chưa đồng ý với tiêu chuẩn !!");
            }
        })
    </script>
</body>
</html>