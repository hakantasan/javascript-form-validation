<!DOCTYPE html>
<html lang="tr">
    <head> 
        <meta charset="utf-8">
        <title>Ders Örnekleri</title>

        <!-- Tasarım Kodları Başlangıç -->
        <style>
            #uyelik_formu
            {
                padding: 10px;
                width: 400px;
                border: 1px solid black;
            }  
            label
            {          
                float: left;
                width: 150px;
            }
        </style>
        <!-- Tasarım Kodları Bitiş -->   

        <!-- Ders Kodları Başlangıç -->
        <script>
            function isValid(frm)
            {
                var kadi = frm.kadi.value;
                var sifre1 = frm.sifre1.value;
                var sifre2 = frm.sifre2.value;
                var email = frm.email.value;
                var atpos=email.indexOf("@");
                var dotpos=email.lastIndexOf(".");

                if ( kadi==null || kadi=="" || kadi.length < 4 )
                {
                    alert("Kullanıcı adı 4 karakterden az olamaz");
                    return false;
                }
                if ( sifre1 == null || sifre1 == "" || sifre2 == null || sifre2 == "")
                {
                    alert("Şifreyi boş bırakmayın");
                    return false;
                }
                if ( !(sifre1 == sifre2) )
                {
                    alert("Şifreler eşleşmiyor");
                    return false;
                }
                if ( atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length )
                {
                    alert("Geçerli email adresi girin");
                    return false;
                }      
                return true;
            }
        </script>  
        <!-- Ders Kodları Bitiş -->

    </head>
    <body>
        <div id="uyelik_formu">
            <form name="uye_formu" action="jscript_form_kontrolu_post.php" onsubmit="return isValid(this)" method="post">
                <label>Kullanıcı Adı:</label>
                <input type="text" name="kadi">
                <br>
                <label>Şifre:</label>
                <input type="password" name="sifre1">
                <br>
                <label>Şifre (Tekrar):</label>
                <input type="password" name="sifre2">
                <br>
                <label>E-Mail:</label>
                <input type="text" name="email">
                <br>
                <input type="submit" value="Kaydet!">
            </form>
        </div>
    </body>
</html>
