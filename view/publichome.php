<?php
require_once('../controller/area-based-pay_check.php');

//$filename = $_COOKIE['Filename'];
?>
<html>
    <head>
    <link rel="stylesheet" href="../asset/css/stylebackground.css" />
    <script src="../asset/js/btnclick.js"></script>
    </head>
    <body >
    <div class="blur">
<header>
    <h1 class="Head" >Quick Eagle Currier Service</h1>
    <nav class="navigation">
    <a href="publichome.php" > Home </a>
    <a href="./homepage/aboutus.php" >About </a>
    <a href="./homepage/service.php" > Services </a>
    <a href="./career.php" > Carrer </a>
       <button class="btnLogin-popup" id="login" onclick="linkbtn()" > Login </button> 
       <button class="btnLogin-popup" id="registration"   onclick="linkbtnr()" > Registration </button> 
    </nav>
</header>

 <table align="left" border="0" cellspacing="0" cellpadding="15">  
<form method="POST">
<div class="price-form">
<form method="POST" action="../controller/area-based-pay_check.php" >
    <div>
   <tr> <td align="center"><label for="" align="center" style="color: white;" >Fare Estimation : </label></div></td></tr>
    
                          <tr>  <td>    <label for=" " style="color: white;">PARCEL TYPE:</label>
                                    <Select name="Typer" id="">
                                        <option <?php if (isset($_POST['Typer']) && $_POST['Typer'] == 'Small')
                                            echo "selected = 'selected'"; ?>>Small</option>
                                        <option <?php if (isset($_POST['Typer']) && $_POST['Typer'] == 'Medium')
                                            echo "selected = 'selected'"; ?>>Medium</option>
                                        <option <?php if (isset($_POST['Typer']) && $_POST['Typer'] == 'Large')
                                            echo "selected = 'selected'"; ?>>Large</option>
                                    </Select>
                            </td>
                                  <td>  <label for=""  style="color: white;">FROM:</label>
                                    <Select name="Former" id="">
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'DHAKA')
                                            echo "selected = 'selected'"; ?>>DHAKA</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'CHITTAGONG')
                                            echo "selected = 'selected'"; ?>>CHITTAGONG</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'RAJSHAHI')
                                            echo "selected = 'selected'"; ?>>RAJSHAHI</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'KHULNA')
                                            echo "selected = 'selected'"; ?>>KHULNA</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'BARISHAL')
                                            echo "selected = 'selected'"; ?>>BARISHAL</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'SYLHET')
                                            echo "selected = 'selected'"; ?>>SYLHET</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'RANGPUR')
                                            echo "selected = 'selected'"; ?>>RANGPUR</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'MYMANSINGH')
                                            echo "selected = 'selected'"; ?>>MYMANSINGH</option>
                                    </Select></td>
                                
<td>
                                    <label for="" style="color: white;">TO:</label>
                                    <Select name="Toto" id="">
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'DHAKA')
                                            echo "selected = 'selected'"; ?>>DHAKA</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'CHITTAGONG')
                                            echo "selected = 'selected'"; ?>>CHITTAGONG</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'RAJSHAHI')
                                            echo "selected = 'selected'"; ?>>RAJSHAHI</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'KHULNA')
                                            echo "selected = 'selected'"; ?>>KHULNA</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'BARISHAL')
                                            echo "selected = 'selected'"; ?>>BARISHAL</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'SYLHET')
                                            echo "selected = 'selected'"; ?>>SYLHET</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'RANGPUR')
                                            echo "selected = 'selected'"; ?>>RANGPUR</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'MYMANSINGH')
                                            echo "selected = 'selected'"; ?>>MYMANSINGH</option>
                                    </Select></td>
                                   <td> <input type="submit" name="Fare" value="Generate Fare"></td>
                       </tr>
                       <tr><br></tr>
                                    </form>
                                    <tr>
                                   <td> <label for="" style="color: white;">Estimated Fare:</label>
                                  <input type="text" name="Total" value="<?php echo $FareCollector; ?> " id="" readonly size="1"/> 
                                      <input type="submit" name="Reset" value="Reset"></td>
                                    <span>
                                        <p style="Color: white;">
                                            <?php echo "Please Press Reset after Getting The estimate Fare"; ?>
                                        </p>
                                    </span>

                                    </form>

</div>

   

</form>
</tr>
</table>

</div>
 </body>
</html>
