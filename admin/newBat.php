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
                <h1 class="page-head-line" style="color: #500a6f">Bats Details</h1>
                <h1 class="page-subhead-line">All Bats details </h1>

            </div>
        </div>


        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert data to the Database
                    </div>

                    <div class="panel-body">
                        <h4>Add New Bats details</h4>
                        <div style="margin-top: 20px;">


                            <!--insert new Bat details-->
                            <div class="display">

                                <form action="insertBat.php" method="post" name="insertform">

                                    <p>
                                        <label for="scientificName" id="preinput"> SCIENTIFIC NAME : </label>
                                        <input type="text" style="width: 500px" name="scientificName" required placeholder="Enter bat  name" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="kingdom" id="preinput"> KINGDOM : </label>
                                        <input type="text" style="width: 500px" name="kingdom"  required placeholder="Enter kingdom name" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="phylum" id="preinput"> PHYLUM : </label>
                                        <input type="text" style="width: 500px" name="phylum"  placeholder="Enter phylum" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="class" id="preinput"> CLASS : </label>
                                        <input type="text" style="width: 500px" name="class"  placeholder="Enter class" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="orderr" id="preinput"> ORDER : </label>
                                        <input type="text" style="width: 500px" name="orderr"  placeholder="Enter order" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="genus" id="preinput"> GENUS : </label>
                                        <input type="text" style="width: 500px" name="genus" placeholder="Enter genus" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="family" id="preinput"> Family : </label>
                                        <input type="text" style="width: 500px" name="family" required placeholder="Enter family" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="subFamily" id="preinput"> SUB FAMILY : </label>
                                        <input type="text" style="width: 500px" name="subFamily"  placeholder="Enter subfamily" id="inputid"/>
                                    </p>

                                    <p>
                                        <label  for="speciesAuthority" id="preinput"> SPECIES AUTHORITY : </label>
                                        <input type="text" style="width: 500px" name="speciesAuthority"  placeholder="Enter species authority" id="inputid" />
                                    </p>

                                    <p>
                                        <label for="commonNames" id="preinput"> COMMON NAMES : </label>
                                        <input type="text" style="width: 500px" name="commonNames"  placeholder="Enter common names" id="inputid" />
                                    </p>

                                    <p>
                                        <label for="synonyms" id="preinput"> SYNONYMS : </label>
                                        <input type="text" style="width: 500px" name="synonyms"  placeholder="Enter synonyms" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="redListCategory" id="preinput"> RED LIST CATEGORY : </label>
                                        <input type="text" style="width: 500px" name="redListCategory"  placeholder="Enter red list category" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="distribution" id="preinput"> Distribution : </label>
                                        <input type="text" style="width: 500px" name="distribution"  placeholder="Enter distribution" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="oioCountries" id="preinput"> OCCURRENCES IN OTHER COUNTRIES  : </label>
                                        <input type="text" style="width: 500px" name="oioCountries"  placeholder="Enter Occurrences in other countries" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="population" id="preinput"> POPULATION(L) : </label>
                                        <input type="text" style="width: 500px" name="population"  placeholder="Enter population" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="roosts" id="preinput"> ROOSTS : </label>
                                        <input type="text" style="width: 500px" name="roosts"  placeholder="Enter roosts" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="commonFood" id="preinput"> COMMON FOOD : </label>
                                        <input type="text" style="width: 500px" name="commonFood"  placeholder="Enter common food" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="bibliography" id="preinput"> BIBLIOGRAPHY : </label>
                                        <input type="text" style="width: 500px" name="bibliography"  placeholder="Enter bibliography" id="inputid"/>
                                    </p>

                                    <p>
                                        <label for="conservation" id="preinput"> CONSERVATION ACTION : </label>
                                        <input type="text" style="width: 500px" name="conservation"  placeholder="Enter conservation action" id="inputid"/>
                                    </p>






                                    <p>
                                        <input type="submit" style="width: 200px" name="send" value="Submit" id="inputid1"  />
                                    </p>
                                </form>

                            </div>
                            <!--close details------------------------------------------>





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
