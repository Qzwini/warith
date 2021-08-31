<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="../images/icon/favicon.ico" type="image/x-icon">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-mUkCBeyHPdg0tqB6JDd+65Gpw5h/l8DKcCTV2D2UpaMMFd7Jo8A+mDAosaWgFBPl" crossorigin="anonymous">
    <!-- style -->
    <link rel="stylesheet" href="../styles/style.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/1c5749e405.js" crossorigin="anonymous"></script>
    <!-- title -->
    <title> مؤسسة وارث الانبياء الثقافية</title>
</head>

<body>
    <!-- navebar -->
    <?php include("../documents/global/nav.php") ?>
    <?php include("logic/pdo.php");
    // insertSingleRow("ali", "male", "24", "07725467765", "www.facebook.com", "baghdad", "bachelor", "teacher", "iraqi", "no", "hhhhhh", "hhhhhhh", "hhhhhh");
    ?>
    <!-- body  -->
    <div class="container mt-5">
        <form method="POST" action="logic/links.php">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> الاسم الرباعي </label>
                <div class="col-sm-10">
                    <input class="form-control" name="name" type="text" aria-label="default input example" required>
                </div>
            </div>


            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> الجنس </label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="ذكر" id="gender1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            ذكر
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="انثى">
                        <label class="form-check-label" for="flexRadioDefault2">
                            أنثى
                        </label>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> العمر </label>
                <div class="col-sm-10">
                    <input class="form-control" name="age" type="number" aria-label="default input example" required>
                </div>
            </div>


            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> رقم الهاتف </label>
                <div class="col-sm-10">
                    <input class="form-control" name="number" type="number" aria-label="default input example" required>
                </div>
            </div>


            <div class="mb-3 row">
                <div class="col-sm-2 ">
                    <label class="col-form-label"> التواصل الاجتماعي ؟ </label>
                    <br>
                    <small class="smali">
                        ادرج روابط حساباتك في مواقع التوصل .
                    </small>
                </div>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="social" required> </textarea>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> السكن </label>
                <div class="col-sm-10">
                    <div class="select">
                        <select name="city">
                            <option value="بغداد">بغداد</option>
                            <option value="أربيل">أربيل</option>
                            <option value="الأنبار">الأنبار</option>
                            <option value="بابل">بابل</option>
                            <option value="البصرة">البصرة</option>
                            <option value="دهوك">دهوك</option>
                            <option value="القادسية">القادسية</option>
                            <option value="ديالى">ديالى</option>
                            <option value="ذي قار">ذي قار</option>
                            <option value="السليمانية">السليمانية</option>
                            <option value="صلاح الدين">صلاح الدين</option>
                            <option value="كركوك">كركوك</option>
                            <option value="كربلاء">كربلاء</option>
                            <option value="المثنى">المثنى</option>
                            <option value="ميسان">ميسان</option>
                            <option value="النجف">النجف</option>
                            <option value="نينوى">نينوى</option>
                            <option value="واسط">واسط</option>
                        </select>
                        <div class="select_arrow">
                        </div>
                    </div>
                </div>
            </div>


            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> المؤهل العلمي </label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="study" value=دكتوراه" id="study1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            دكتوراه
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="study" value="ماجستير" id="study2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            ماجستير
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="study" value="                            دبلوم عالي
" id="study3">
                        <label class="form-check-label" for="flexRadioDefault2">
                            دبلوم عالي
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="study" value=" بكالوريوس" id="study4">
                        <label class="form-check-label" for="flexRadioDefault2">
                            بكالوريوس
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="study" value=" دبلوم" id="study5">
                        <label class="form-check-label" for="flexRadioDefault2">
                            دبلوم
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="study" value=" اعدادية" id="study6">
                        <label class="form-check-label" for="flexRadioDefault2">
                            اعدادية
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="                            متوسطة - ابتدائية
" name="study" id="study7">
                        <label class="form-check-label" for="flexRadioDefault2">
                            متوسطة - ابتدائية
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="study" value="                             غير ذلك
" id="study8">
                        <label class="form-check-label" for="flexRadioDefault2">
                            غير ذلك
                        </label>
                    </div>
                </div>
            </div>



            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> العمل الحالي </label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="position" aria-label="default input example" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> الهواية </label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="nationality" aria-label="default input example"
                        required>
                </div>
            </div>



            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> الانتماء السياسي </label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="poltical" value="مستقل" id="gender1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            مستقل
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="poltical" value="                            منتمي الى حزب سابقا
" id="gender2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            منتمي الى حزب سابقا
                        </label>
                    </div>
                </div>
            </div>


            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> ماذا تقترح بشأن تمكين الشباب العراقي؟ </label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="des1" required> </textarea>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> الى ماذا تطمح من انتمائك الى حركة وعي الوطنية؟ </label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="des2" required> </textarea>
                </div>
            </div>



            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"> الملاحظات </label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="des3" required> </textarea>
                </div>
            </div>







            <div class="mb-3 row mt-5">
                <label class="col-sm-2 col-form-label"> </label>
                <button type="submit" name="submit" class="btn btn-light btn-block col-sm-10 mrt-15"> ارسال </button>
            </div>
        </form>


    </div>





    </div>
    <!-- footer  -->
    <div class="footer">
        <?php include("../documents/global/footer.php") ?>
    </div>
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

</body>

</html>