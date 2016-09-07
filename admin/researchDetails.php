<!DOCTYPE html>
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
                        <h4 align="center">Add New Research details</h4>
                        <div style="margin-top: 20px;">


                            <!--insert new Research details------------------------------------------------->
                            <div class="display">

                                <form action="insertResearch.php" method="post" name="insertform">
                                    <p>
                                        <label for="name" id="preinput"> RESEARCH NAME : </label>
                                        <input type="text" name="researchName" required placeholder="Enter your name" id="inputid"/>
                                    </p>


                                    <p>

                                        <label  for="assNames" id="preinput"> ASSESSMENT NAMES: </label>
                                        <input type="text" name="assessmentNames" required placeholder="Enter your Email" id="inputid" />
                                    </p>

                                    <p>
                                    <p align="center">TAXONOMY</p>
                                    <p>
                                        <label for="kingdom" id="preinput"> KINGDOM : </label>
                                        <input type="text" name="kingdom" required placeholder="Enter kingdom" id="inputid" />
                                    </p>
                                    <p>
                                        <label for="phylum" id="preinput"> PHYLUM : </label>
                                        <input type="text" name="phylum" required placeholder="Enter phylum" id="inputid" />
                                    </p>
                                    <p>
                                        <label for="class" id="preinput"> CLASS : </label>
                                        <input type="text" name="class" required placeholder="Enter class" id="inputid" />
                                    </p>
                                    <p>
                                        <label for="orderr" id="preinput"> ORDER : </label>
                                        <input type="text" name="orderr" required placeholder="Enter order" id="inputid" />
                                    </p>
                                    <p>
                                        <label for="family" id="preinput"> FAMILY : </label>
                                        <input type="text" name="family" required placeholder="Enter family" id="inputid" />
                                    </p>
                                    <p>
                                        <label for="taxonName" id="preinput"> TAXON NAME : </label>
                                        <input type="text" name="taxonName" required placeholder="Enter taxonName" id="inputid" />
                                    </p>
                                    <p>
                                        <label for="synonyms" id="preinput"> SYNONYMS : </label>
                                        <input type="text" name="synonyms" required placeholder="Enter synonyms" id="inputid" />
                                    </p>
                                    <p>
                                        <label for="commonNames" id="preinput"> COMMON NAMES : </label>
                                        <input type="text" name="commonNames" required placeholder="Enter commonNames" id="inputid" />
                                    </p>
                                    <p>
                                        <label for="taxonomicNotes" id="preinput"> TAXONOMIC NOTES : </label>
                                        <input type="text" name="taxonomicNotes" required placeholder="Enter taxonomicNotes" id="inputid" />
                                    </p>
                                    </p>

                                    <p>
                                    <p align="center">ASSESSMENT INFORMATION</p>
                                    <p>
                                        <label for="redListCategory" id="preinput"> RED LIST CATEGORY : </label>
                                        <input type="text" name="redListCategory" required placeholder="Enter redListCategory" id="inputid" />
                                    </p>
                                    <p>
                                        <label for="criteria" id="preinput"> CRITERIA : </label>
                                        <input type="text" name="criteria" required placeholder="Enter criteria" id="inputid" />
                                    </p>
                                    <p>
                                        <label for="more1" id="preinput"> MORE  : </label>
                                        <input type="text" name="more1" required placeholder="Enter more details" id="inputid" />
                                    </p>

                                    </p>

                                    <p>
                                    <p align="center">GEOGRAPHIC RANGE</p>
                                    <p>
                                        <label for="description" id="preinput"> RANGE DESCRIPTION : </label>
                                        <input type="text" name="description" required placeholder="Enter description" id="inputid" />
                                    </p>
                                    <p>
                                        <label for="countryOccurrences" id="preinput"> COUNTRY OCCURRENCES : </label>
                                        <input type="text" name="countryOccurrences" required placeholder="Enter countryOccurrences" id="inputid" />
                                    </p>
                                    <p>
                                        <label for="more1" id="preinput"> MORE  : </label>
                                        <input type="text" name="more1" required placeholder="Enter more details" id="inputid" />
                                    </p>

                                    </p>

                                    <p align="center">Other Information</p>
                                    <p>

                                        <label  for="population" id="preinput"> POPULATION: </label>
                                        <input type="text" name="population" required placeholder="Enter population" id="inputid" />
                                    </p>

                                    <p>

                                        <label  for="h&E" id="preinput"> HABITAT & ECOLOGY : </label>
                                        <input type="text" name="h&E" required placeholder="Enter habitat & ecology" id="inputid" />
                                    </p>

                                    <p>

                                        <label  for="threats" id="preinput"> THREATS : </label>
                                        <input type="text" name="threats" required placeholder="Enter threats" id="inputid" />
                                    </p>

                                    <p>

                                        <label  for="conservationActions" id="preinput"> CONSERVATION ACTIONS : </label>
                                        <input type="text" name="conservationActions" required placeholder="Enter conservationActions" id="inputid" />
                                    </p>

                                    <p>

                                        <label  for="credits" id="preinput"> CREDITS : </label>
                                        <input type="text" name="credits" required placeholder="Enter credits" id="inputid" />
                                    </p>

                                    <p>

                                        <label  for="bibliography" id="preinput"> BIBLIOGRAPHY : </label>
                                        <input type="text" name="bibliography" required placeholder="Enter bibliography" id="inputid" />
                                    </p>

                                    <p>

                                        <label  for="citation" id="preinput"> CITATION : </label>
                                        <input type="text" name="citation" required placeholder="Enter citation" id="inputid" />
                                    </p>

                                    <p>

                                        <label  for="disclaimer" id="preinput"> DISCLAIMER : </label>
                                        <input type="text" name="disclaimer" required placeholder="Enter disclaimer" id="inputid" />
                                    </p>

                                    <p>

                                        <label  for="eResources" id="preinput"> EXTERNAL RESOURCES : </label>
                                        <input type="text" name="eResources" required placeholder="Enter External Resources" id="inputid" />
                                    </p>

                                    <p>

                                        <label  for="others" id="preinput"> OTHER INFORMATION : </label>
                                        <input type="text" name="others" required placeholder="Enter other information" id="inputid" />
                                    </p>









                                    <p>
                                        <input type="submit" name="send" value="Submit" id="inputid1"  />
                                    </p>
                                </form>

                            </div>
                            <!--close details-->






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
