<?php
ob_start();
include('connect.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if(isset($_POST['update']))
    {


        $researchName=$_POST['researchName'];
        $assessmentNames=$_POST['assessmentNames'];
        $kingdom=$_POST['kingdom'];
        $phylum=$_POST['phylum'];
        $class=$_POST['class'];
        $orderr=$_POST['orderr'];
        $family=$_POST['family'];
        $taxonName=$_POST['taxonName'];
        $synonyms=$_POST['synonyms'];
        $commonNames=$_POST['commonNames'];
        $taxonomicNotes=$_POST['taxonomicNotes'];
        $redListCategory=$_POST['redListCategory'];
        $criteria=$_POST['criteria'];
        $more1=$_POST['more1'];
        $description=$_POST['description'];
        $countryOccurrences=$_POST['countryOccurrences'];
        $more2=$_POST['more2'];
        $population=$_POST['population'];
        $h_E=$_POST['h_E'];
        $threats=$_POST['threats'];
        $conservationActions=$_POST['conservationActions'];
        $credits=$_POST['credits'];
        $bibliography=$_POST['bibliography'];
        $citation=$_POST['citation'];
        $disclaimer=$_POST['disclaimer'];
        $eResources=$_POST['eResources'];
        $others=$_POST['others'];



        $updated=mysql_query("UPDATE research_details SET
        researchName='$researchName', assessmentNames='$assessmentNames', kingdom='$kingdom'  ,phylum='$phylum' ,class='$class' ,orderr='$orderr',
         family='$family',taxonName='$taxonName',synonyms='$synonyms',commonNames='$commonNames', taxonomicNotes='$taxonomicNotes',
           redListCategory='$redListCategory',criteria='$criteria',more1='$more1',description='$description',
            countryOccurrences='$countryOccurrences',more2='$more2',population='$population',h_E='$h_E',threats='$threats' ,conservationActions='$conservationActions'
             credits='$credits' ,bibliography='$bibliography' ,citation='$citation' ,disclaimer='$disclaimer',eResources='$eResources' ,others='$others' WHERE id='$id'")or die();
        if($updated)
        {
            $msg="Successfully Updated!!";
            header('Location:viewResearch.php');
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
                <h1 class="page-head-line" style="color: #500a6f">Research Details</h1>
                <h1 class="page-subhead-line">All research details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4 style="color: #cc006a">update Research details</h4>
                        <div style="margin-top: 20px;">
                            <?php
                            if(isset($_GET['id']))
                            {
                                $id=$_GET['id'];
                                $getselect=mysql_query("SELECT * FROM research_details WHERE id='$id'");
                                while($profile=mysql_fetch_array($getselect))
                                {

                                    $researchName=$profile['researchName'];
                                    $assessmentNames=$profile['assessmentNames'];

                                    $kingdom=$profile['kingdom'];
                                    $phylum=$profile['phylum'];
                                    $class=$profile['class'];
                                    $orderr=$profile['orderr'];
                                    $family=$profile['family'];
                                    $taxonName=$profile['taxonName'];
                                    $synonyms=$profile['synonyms'];
                                    $commonNames=$profile['commonNames'];
                                    $taxonomicNotes=$profile['taxonomicNotes'];
                                    $redListCategory=$profile['redListCategory'];
                                    $criteria=$profile['criteria'];
                                    $more1=$profile['more1'];
                                    $description=$profile['description'];
                                    $countryOccurrences=$profile['countryOccurrences'];
                                    $more2=$profile['more2'];
                                    $population=$profile['population'];
                                    $h_E=$profile['h_E'];
                                    $threats=$profile['threats'];
                                    $conservationActions=$profile['conservationActions'];
                                    $credits=$profile['credits'];
                                    $citation=$profile['citation'];
                                    $disclaimer=$profile['disclaimer'];
                                    $eResources=$profile['eResources'];
                                    $others=$profile['others'];

                                    ?>
                                    <div class="display">
                                        <form action="" method="post" name="insertform">
                                            <div class="col-xs-12">
                                                <label for="researchName"  id="preinput" class="col-xs-5"> RESEARCH NAME : </label>
                                                <input type="text"   name="researchName" required placeholder="Enter  name"
                                                       value="<?php echo $researchName; ?>" id="inputid"  class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="assessmentNames"  id="preinput" class="col-xs-5"> ASSESSMENT NAME : </label>
                                                <input type="text"   name="assessmentNames" required placeholder="Enter  assessmentNames"
                                                       value="<?php echo $assessmentNames; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label for="kingdom" id="preinput" class="col-xs-5"> KINGDOM : </label>
                                                <input type="text"  name="kingdom"  placeholder="Enter  kingdom"
                                                       value="<?php echo $kingdom; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="phylum"  id="preinput" class="col-xs-5"> PHYLUM : </label>
                                                <input type="text"   name="phylum"  placeholder="Enter phylum"
                                                       value="<?php echo $phylum; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="class"  id="preinput" class="col-xs-5"> CLASS : </label>
                                                <input type="text"   name="class"  placeholder="Enter class"
                                                       value="<?php echo $class; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="orderr"  id="preinput" class="col-xs-5"> ORDER : </label>
                                                <input type="text"   name="orderr"  placeholder="Enter orderr"
                                                       value="<?php echo $orderr; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="family"  id="preinput" class="col-xs-5"> FAMILY : </label>
                                                <input type="text"   name="family" required placeholder="Enter family"
                                                       value="<?php echo $family; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="taxonName"  id="preinput" class="col-xs-5"> TAXON NAME : </label>
                                                <input type="text"   name="taxonName"  placeholder="Enter taxonName"
                                                       value="<?php echo $taxonName; ?>" id="inputid" class="col-xs-7"/>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="synonyms"  id="preinput" class="col-xs-5"> SYNONYMS : </label>
                                                <textarea   style="height: 100px" name="synonyms"  placeholder="Enter synonyms"
                                                       contextmenu="<?php echo $synonyms; ?>"  class="col-xs-7"></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="commonNames"  id="preinput" class="col-xs-5"> COMMON NAMES : </label>
                                                <textarea type="text"  style="height: 100px" name="commonNames"  placeholder="Enter commonNames"
                                                       value="<?php echo $commonNames; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="taxonomicNotes"  id="preinput" class="col-xs-5"> TAXONOMIC NOTES : </label>
                                                <textarea type="text"  style="height: 300px" name="taxonomicNotes"  placeholder="Enter taxonomicNotes"
                                                       value="<?php echo $taxonomicNotes; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="redListCategory"  id="preinput" class="col-xs-5"> RED LIST CATEGORY : </label>
                                                <input type="text"   name="redListCategory"  placeholder="Enter redListCategory"
                                                       value="<?php echo $redListCategory; ?>" id="inputid" class="col-xs-7"/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="criteria"  id="preinput" class="col-xs-5"> CRITERIA : </label>
                                                <input type="text"   name="criteria"  placeholder="Enter criteria"
                                                       value="<?php echo $criteria; ?>" id="inputid" class="col-xs-7"/>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="more1"  id="preinput" class="col-xs-5"> MORE : </label>
                                                <textarea type="text"   style="height: 300px" name="more1"  placeholder="Enter more1"
                                                       value="<?php echo $more1; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="description"  id="preinput" class="col-xs-5"> DESCRIPTION : </label>
                                                <textarea type="text" style="height: 300px"  name="description"  placeholder="Enter description"
                                                       value="<?php echo $description; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="countryOccurrences"  id="preinput" class="col-xs-5"> COUNTRY OCCURRENCES : </label>
                                                <textarea type="text"  style="height: 300px" name="countryOccurrences"  placeholder="Enter  countryOccurrences"
                                                       value="<?php echo $countryOccurrences; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="more2"  id="preinput" class="col-xs-5"> MORE : </label>
                                                <textarea type="text" style="height: 300px"  name="more2"  placeholder="Enter more2"
                                                       value="<?php echo $more2; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>

                                            <div class="col-xs-12">
                                                <label  for="population"  id="preinput" class="col-xs-5"> POPULATION : </label>
                                                <textarea type="text" style="height: 250px"  name="population"  placeholder="Enter population"
                                                       value="<?php echo $population; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="h_E"  id="preinput" class="col-xs-5"> H & E : </label>
                                                <textarea type="text" style="height: 250px"  name="h_E"  placeholder="Enter h_E"
                                                       value="<?php echo $h_E; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="threats"  id="preinput" class="col-xs-5"> THREATS : </label>
                                                <textarea type="text"  style="height: 250px" name="threats"  placeholder="Enter threats"
                                                       value="<?php echo $threats; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="conservationActions"  id="preinput" class="col-xs-5"> CONSERVATION ACTION : </label>
                                                <textarea type="text" style="height: 300px"  name="conservationActions"  placeholder="Enter conservationActions"
                                                       value="<?php echo $conservationActions; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="credits"  id="preinput" class="col-xs-5"> CREDITS : </label>
                                                <textarea type="text"  style="height: 250px" name="credits"  placeholder="Enter credits"
                                                       value="<?php echo $credits; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="bibliography"  id="preinput" class="col-xs-5"> BIBLIOGRAPHY : </label>
                                                <textarea type="text" style="height: 300px"  name="bibliography"  placeholder="Enter bibliography"
                                                       value="<?php echo $bibliography; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="citation"  id="preinput" class="col-xs-5"> CITATION  : </label>
                                                <textarea type="text"  style="height: 250px" name="citation"  placeholder="Enter citation"
                                                       value="<?php echo $citation; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="disclaimer"  id="preinput" class="col-xs-5"> DISCLAIMER : </label>
                                                <textarea type="text"  style="height: 250px" name="disclaimer"  placeholder="Enter disclaimer"
                                                       value="<?php echo $disclaimer; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="eResources"  id="preinput" class="col-xs-5"> EXTERNAL RESOURCES : </label>
                                                <textarea type="text" style="height: 250px"  name="eResources"  placeholder="Enter eResources"
                                                       value="<?php echo $eResources; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>
                                            <div class="col-xs-12">
                                                <label  for="others"  id="preinput" class="col-xs-5"> OTHER : </label>
                                                <textarea type="text"  style="height: 300px" name="others"  placeholder="Enter others"
                                                       value="<?php echo $others; ?>" id="inputid" class="col-xs-7"></textarea>
                                            </div>





                                            <div class="col-xs-12">
                                                <br>
                                                <input type="submit" style="width: 300px" name="update" value="Update" id="inputid1" />
                                            </div>
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