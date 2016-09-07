<?php
ob_start();
include('connect.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if(isset($_POST['update']))
    {


        $scientificName=$_POST['scientificName'];
        $kingdom=$_POST['kingdom'];
        $phylum=$_POST['phylum'];
        $class=$_POST['class'];
        $orderr=$_POST['orderr'];
        $genus=$_POST['genus'];
        $family=$_POST['family'];
        $subFamily=$_POST['subFamily'];
        $speciesAuthority=$_POST['speciesAuthority'];
        $commonNames=$_POST['commonNames'];
        $synonyms=$_POST['synonyms'];
        $redListCategory=$_POST['redListCategory'];
        $distribution=$_POST['distribution'];
        $oioCountries=$_POST['oioCountries'];
        $population=$_POST['population'];
        $roosts=$_POST['roosts'];
        $commonFood=$_POST['commonFood'];
        $bibliography=$_POST['bibliography'];
        $conservation=$_POST['conservation'];


        $updated=mysql_query("UPDATE bats_details SET
        scientificName='$scientificName', kingdom='$kingdom', phylum='$phylum'  ,class='$class' ,orderr='$orderr' ,genus='$genus',
         family='$family',subFamily='$subFamily',speciesAuthority='$speciesAuthority',commonNames='$commonNames', synonyms='$synonyms',
           redListCategory='$redListCategory',distribution='$distribution',oioCountries='$oioCountries',population='$population',
            roosts='$roosts',commonFood='$commonFood',bibliography='$bibliography',conservation='$conservation' WHERE id='$id'")or die();
        if($updated)
        {
            $msg="Successfully Updated!!";
            header('Location:newBat.php');
        }
    }
}  //update ends here
ob_end_flush();
?>


<!DOCTYPE>
<html>
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>

</head>

<body>
<?php include("template.php")?>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" style="color: #500a6f">Bats Details</h1>
                <h1 class="page-subhead-line">All bats details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4 style="color: #cc006a">Add New Bat</h4>
                        <div style="margin-top: 20px;">
                            <?php
                            if(isset($_GET['id']))
                            {
                                $id=$_GET['id'];
                                $getselect=mysql_query("SELECT * FROM bats_details WHERE id='$id'");
                                while($profile=mysql_fetch_array($getselect))
                                {

                                    $scientificName=$profile['scientificName'];
                                    $kingdom=$profile['kingdom'];
                                    $phylum=$profile['phylum'];
                                    $class=$profile['class'];
                                    $orderr=$profile['orderr'];
                                    $genus=$profile['genus'];
                                    $family=$profile['family'];
                                    $subFamily=$profile['subFamily'];
                                    $speciesAuthority=$profile['speciesAuthority'];
                                    $commonNames=$profile['commonNames'];
                                    $synonyms=$profile['synonyms'];
                                    $redListCategory=$profile['redListCategory'];
                                    $distribution=$profile['distribution'];
                                    $oioCountries=$profile['oioCountries'];
                                    $population=$profile['population'];
                                    $roosts=$profile['roosts'];
                                    $commonFood=$profile['commonFood'];
                                    $bibliography=$profile['bibliography'];
                                    $conservation=$profile['conservation'];

                                    ?>
                                    <div class="display">
                                        <form action="" method="post" name="insertform">
                                            <p>
                                                <label for="name"  id="preinput"> SCIENTIFIC NAME : </label>
                                                <input type="text" style="width: 500px" name="scientificName" required placeholder="Enter  name"
                                                       value="<?php echo $scientificName; ?>" id="inputid" />
                                            </p>
                                            <p>
                                                <label  for="kingdom"  id="preinput"> KINGDOM : </label>
                                                <input type="text" style="width: 500px" name="kingdom" required placeholder="Enter  kingdom"
                                                       value="<?php echo $kingdom; ?>" id="inputid" />
                                            </p>
                                            <p>
                                                <label for="phylum" id="preinput"> PHYLUM : </label>
                                                <input type="text" style="width: 500px" name="phylum"  placeholder="Enter  phylum"
                                                       value="<?php echo $phylum; ?>" id="inputid" />
                                            </p>
                                            <p>
                                                <label  for="class"  id="preinput"> CLASS : </label>
                                                <input type="text" style="width: 500px" name="class"  placeholder="Enter class"
                                                       value="<?php echo $class; ?>" id="inputid" />
                                            </p>
                                            <p>
                                                <label  for="orderr"  id="preinput"> ORDER : </label>
                                                <input type="text" style="width: 500px" name="orderr"  placeholder="Enter order"
                                                       value="<?php echo $orderr; ?>" id="inputid" />
                                            </p>
                                            <p>
                                                <label  for="genus"  id="preinput"> GENUS : </label>
                                                <input type="text" style="width: 500px" name="genus"  placeholder="Enter genus"
                                                       value="<?php echo $genus; ?>" id="inputid" />
                                            </p>
                                            <p>
                                                <label  for="family"  id="preinput"> FAMILY : </label>
                                                <input type="text" style="width: 500px" name="family" required placeholder="Enter family"
                                                       value="<?php echo $family; ?>" id="inputid" />
                                            </p>
                                            <p>
                                                <label  for="subFamily"  id="preinput"> SUB FAMILY : </label>
                                                <input type="text" style="width: 500px" name="subFamily"  placeholder="Enter subFamily"
                                                       value="<?php echo $subFamily; ?>" id="inputid" />
                                            </p>
                                            <p>
                                                <label  for="speciesAuthority"  id="preinput"> SPECIES AUTHORITY : </label>
                                                <input type="text" style="width: 500px" name="speciesAuthority"  placeholder="Enter speciesAuthority"
                                                       value="<?php echo $speciesAuthority; ?>" id="inputid" />
                                            </p>
                                            <p>
                                                <label  for="commonNames"  id="preinput"> COMMON NAMES : </label>
                                                <input type="text" style="width: 500px" name="commonNames"  placeholder="Enter commonNames"
                                                       value="<?php echo $commonNames; ?>" id="inputid" />
                                            </p>
                                            <p>
                                                <label  for="synonyms"  id="preinput"> SYNONYMS : </label>
                                                <input type="text" style="width: 500px" name="synonyms"  placeholder="Enter synonyms"
                                                       value="<?php echo $synonyms; ?>" id="inputid" />
                                            </p>
                                            <p>
                                                <label  for="redListCategory"  id="preinput"> RED LIST CATEGORY : </label>
                                                <input type="text" style="width: 500px" name="redListCategory"  placeholder="Enter redListCategory"
                                                       value="<?php echo $redListCategory; ?>" id="inputid" />
                                            </p>

                                            <p>
                                                <label  for="distribution"  id="preinput"> DISTRIBUTION : </label>
                                                <input type="text" style="width: 500px" name="distribution"  placeholder="Enter distribution"
                                                       value="<?php echo $distribution; ?>" id="inputid" />
                                            </p>

                                            <p>
                                                <label  for="oioCountries"  id="preinput"> OIO COUNTRIES : </label>
                                                <input type="text" style="width: 500px" name="oioCountries"  placeholder="Enter oioCountries"
                                                       value="<?php echo $oioCountries; ?>" id="inputid" />
                                            </p>

                                            <p>
                                                <label  for="population"  id="preinput"> POPULATION : </label>
                                                <input type="text" style="width: 500px" name="population"  placeholder="Enter population"
                                                       value="<?php echo $population; ?>" id="inputid" />
                                            </p>

                                            <p>
                                                <label  for="roosts"  id="preinput"> ROOSTS : </label>
                                                <input type="text" style="width: 500px" name="roosts"  placeholder="Enter roosts"
                                                       value="<?php echo $roosts; ?>" id="inputid" />
                                            </p>

                                            <p>
                                                <label  for="commonFood"  id="preinput"> COMMON FOOD : </label>
                                                <input type="text" style="width: 500px" name="commonFood"  placeholder="Enter commonFood"
                                                       value="<?php echo $commonFood; ?>" id="inputid" />
                                            </p>

                                            <p>
                                                <label  for="bibliography"  id="preinput"> BIBLIOGRAPHY : </label>
                                                <input type="text" style="width: 500px" name="bibliography"  placeholder="Enter bibliography"
                                                       value="<?php echo $bibliography; ?>" id="inputid" />
                                            </p>
                                            <p>
                                                <label  for="conservation"  id="preinput"> CONSERVATION : </label>
                                                <input type="text" style="width: 500px" name="conservation"  placeholder="Enter conservation"
                                                       value="<?php echo $conservation; ?>" id="inputid" />
                                            </p>





                                            <p>
                                                <input type="submit" style="width: 300px" name="update" value="Update" id="inputid1" />
                                            </p>
                                        </form>
                                    </div>
                                <?php } } ?>
                        </div>
                    </div>









                </div>
            </div>
        </div>



    </div>
</div>




<div id="footer-sec"><b>Group 23-UCSC Group Project</b>
</div>






</body>
</html>