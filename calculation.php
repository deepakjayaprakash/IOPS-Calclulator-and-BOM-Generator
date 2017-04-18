<!DOCTYPE html>
<html lang="en">
<head>
  <title>Calculation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    
    
                      
<?php 
        if(isset($_GET['usablecapacity'])){
        $usableCapacity=$_GET['usablecapacity'];
        }
         if(isset($_GET['usablecapacity'])){
        $raidType=$_GET['raidtype'];
         }
          if(isset($_GET['usablecapacity'])){
        $diskType=$_GET['disktype'];
          }
        
        
        ?>
        
        
        
    
    
    
    <script>
    
    
    //raid type and #data disks, 3parity disks and # total disks
    var raids={ "raid" : [
              { "raidType": "Mirror" ,
                "DataDisks": 1,
                "ParityDisks": 2,
                "TotalDisks": 3},
              { "raidType": "Raidz121" ,
                "DataDisks": 2,
                "ParityDisks": 1,
                "TotalDisks": 3}
              ,
               {"raidType": "Raidz141" ,
                "DataDisks": 4,
                "ParityDisks": 1,
                "TotalDisks": 5}
              ,
               {"raidType": "Raidz181" ,
                "DataDisks": 8,
                "ParityDisks": 1,
                "TotalDisks": 9}
              ,
               {"raidType": "Raidz242" ,
                "DataDisks": 4,
                "ParityDisks": 2,
                "TotalDisks": 6}
              ,     
              {"raidType": "Raidz282" ,
                "DataDisks": 8,
                "ParityDisks": 2,
                "TotalDisks": 10}
              ,
              {"raidType": "Raidz383" ,
                "DataDisks": 8,
                "ParityDisks": 3,
                "TotalDisks": 11}
              
            
               ],
               
            
        };


        
       // diskType and their paramters
    
    var disks= {
            "disk": [
                    {"diskType":"nlsas4",
                    "size": 4,
                    "iops": 75,
                    "usableSize": 2.6784,
                    "formFactor":3.5,
                    "rpm": 7200},

                    {"diskType":"nlsas6",
                    "size": 6,
                    "iops": 75,
                    "usableSize": 4.0176,
                    "formFactor":3.5,
                    "rpm": 7200},

                    {"diskType":"nlsas8",
                    "size": 8,
                    "iops": 75,
                    "usableSize": 5.3568,
                    "formFactor":3.5,
                    "rpm": 7200},

                    {"diskType":"sas10kt",
                    "size": 1.8,
                    "iops": 140,
                    "usableSize": 1.20528,
                    "formFactor":2.5,
                    "rpm": 10000},
                    
                    {"diskType":"sas10K1200GB",
                    "size": 1.2,
                    "iops": 140,
                    "usableSize": 0.80352,
                    "formFactor":2.5,
                    "rpm": 10000},

                    {"diskType":"sas10K900GB",
                    "size": 0.9,
                    "iops": 140,
                    "usableSize": 0.60264,
                    "formFactor":2.5,
                    "rpm": 10000},

                    {"diskType":"sas15K600GB",
                    "size": 0.6,
                    "iops": 175,
                    "usableSize": 0.40176,
                    "formFactor":2.5,
                    "rpm": 15000},

                     {"diskType":"ssd2",
                    "size": 2,
                    "iops": 5000,
                    "usableSize": 1.3392,
                    "formFactor":2.5},

                      {"diskType":"ssd4",
                    "size": 4,
                    "iops": 5000,
                    "usableSize": 2.6784,
                    "formFactor":2.5},

                      {"diskType":"ssd800GB",
                    "size": 0.8,
                    "iops": 5000,
                    "usableSize": 0.53568,
                    "formFactor":2.5},

                     {"diskType":"ssdif100",
                    "size": 8,
                    "iops": 10000,
                    "usableSize": 5.3568,
                    "formFactor":2.5},

                     {"diskType":"zil",
                    "size": 0.1,
                    "iops": 5000,
                    "usableSize": 0.06696,
                    "formFactor":2.5},

                    {"diskType":"l2arc",
                    "size": 0.8,
                    "iops": 5000,
                    "usableSize": 0.53568,
                    "formFactor":2.5},

                    {"diskType":"MetaDev",
                    "size": 2,
                    "iops": 5000,
                    "usableSize": 1.3392,
                    "formFactor":2.5},
                        ]

    };

// write Percentage to stdiops mapping
    var writePercentageToStdIOPS=[160,157,154,151,148,145,142,139,136,133,130,127,124,121,118,115,112,109,106,103,100,99.25,98.5,
      97.75,97,96.25,95.5,94.75,94,93.25,92.5,91.75,91,90.25,89.5,88.75,88,87.25,86.5,85.75,85,84.25,83.5,82.75,82,81.25,80.5,79.75,79,78.25,77.5,76.75,76,75.25,74.5,73.75,73,72.25,71.5,70.75,70,69.25,68.5,67.75,67,66.25,65.5,64.75,64,63.25,62.5,61.75,61,60.25,59.5,58.75,58,57.25,56.5,55.75,55,54.25,53.5,52.75,52,51.25,50.5,49.75,49,48.25,47.5,46.75,46,45.25,44.5,43.75,43,42.25,41.5,40,75,40];

 // standard values
    
    var numberOfZilGroups=2;
    var numberOfCache= 0;
    var numberOfMetaGroups=1;
    var writePercentage=20;
    var cacheHitPercent=50;
    var averageBlockSize=4;

   

          // Global variables needed in all functions
          // 1 in the end of variables mean that they are calculated values
          var stdIOPS;
            var usableDisks, iopsPerDisk,iops1;
            var vdevs, dataDisks1, parityDisks1, minDataDisks, totalDisks1, usableSize1, size1;
            var totalDataDisks, totalUsableDisks, totalParityDisks, usableCapacityTB, rawCapacity, spares, totalTotalDisks, jbods12, jbods24, jbods45, jbods72, jbods90;

            var stdIOPSWithZil, stdIOPSWithL2arc, stdIOPSWithMetaDev, stdIOPSWithAll3;
            var IOPSCache;
            var throughputsKBPS=new Array(4);
            var throughputsMBPS=new Array(4);
            var perTBIOPS=new Array(4);
        
            var stdThroughput, stdperTBIOPS;


                    // function to calculate STDIOPS
                      function calculate_IOPS(usableCapacity,diskType1,raidType1){
                      
                        
                        for (var i in disks.disk) {
                         
                          if(disks.disk[i].diskType==diskType1){
                              
                            usableSize1=disks.disk[i].usableSize;
                            size1=disks.disk[i].size;
                             iops1=disks.disk[i].iops;
                             break;
                          }
                        }
                                           
                       

                        minDataDisks=usableCapacity / usableSize1;

                         for (var i in raids.raid) {
                         
                          if(raids.raid[i].raidType==raidType1){
                           //alert(raids.raid[i].raidType);
                            totalDisks1=raids.raid[i].TotalDisks;
                            dataDisks1=raids.raid[i].DataDisks;
                            parityDisks1=raids.raid[i].ParityDisks;
                            break;
                          }

                        }
                       
                        vdevs=Math.round(minDataDisks/totalDisks1);
                         
                         usableDisks=vdevs* dataDisks1;
                         //alert(usableDisks);

                         stdIOPS=usableDisks*iops1*writePercentageToStdIOPS[writePercentage]/100;
                         //alert("Std IOPS="+stdIOPS);

                         
                      
                      };


                   function calculateDiskParamters(){
                       
                       
                       totalDataDisks= vdevs* totalDisks1;

                       totalUsableDisks= vdevs* dataDisks1;

                       totalParityDisks= vdevs* parityDisks1;

                       usableCapacityTB= totalDataDisks* usableSize1;

                       rawCapacity= totalDataDisks* size1;

                       spares= Math.round(totalDataDisks/ 25);

                       totalTotalDisks= totalDataDisks+ spares+ numberOfZilGroups*2 + numberOfCache + numberOfMetaGroups*3;

                       jbods12= Math.round(totalTotalDisks/12);
                       jbods24= Math.round(totalTotalDisks/24);
                       jbods45= Math.round(totalTotalDisks/45);
                       jbods72= Math.round(totalTotalDisks/72);
                       jbods90= Math.round(totalTotalDisks/90);




                       /*alert("Total Number of data disks:"+totalDataDisks+"<br>Total Number of usable disks:"+totalUsableDisks+
                        "<br>Total Number of Parity Disks:"+totalParityDisks+"<br>Usable Capacity:"+usableCapacityTB+
                        "<br>Raw capcity:"+rawCapacity);
                        */

                      
                      }; 


                      function calculateIOPSWithOthers(){

                       // iops with zil, l2arc, metadev
                       var zilIOPS=2000;
                       var L2ARCIOPS= 2000;
                       var MetaDevIOPS=1500;

                      stdIOPSWithZil= stdIOPS+ (numberOfZilGroups*zilIOPS);
                      stdIOPSWithL2arc= stdIOPS+ (numberOfCache*L2ARCIOPS*cacheHitPercent)/100;
                      stdIOPSWithMetaDev= stdIOPS+ (numberOfMetaGroups)*MetaDevIOPS*3;
                      stdIOPSWithAll3= stdIOPSWithZil+ stdIOPSWithL2arc+stdIOPSWithMetaDev-(2*stdIOPS);

                      }; 



                      function throughPutTable(){

                       

                        IOPSCache={"IOPSWithCache":[ stdIOPSWithZil, stdIOPSWithL2arc, stdIOPSWithMetaDev,stdIOPSWithAll3]};
                        var k=0;
                        for (var i in IOPSCache.IOPSWithCache) {
                          throughputsKBPS[k]=IOPSCache.IOPSWithCache[i]*averageBlockSize;
                          throughputsMBPS[k]=throughputsKBPS[i]*8 /1000;
                          perTBIOPS[k]=Math.round(IOPSCache.IOPSWithCache[i]/usableCapacityTB);
                          k=k+1;
                          
                        };

                      // alert(throughputsKBPS[0]);
                          
                        stdThroughput=stdIOPS*averageBlockSize;
                        stdperTBIOPS=Math.round(stdIOPS/usableCapacityTB);
                          
                  
                      }; 



    var IPusablecapacity= <?php echo $usableCapacity ?>;
    var IPdisktype=   "<?php echo $diskType ?>";  
    var IPraidtype=   "<?php echo $raidType ?>";
    calculate_IOPS(IPusablecapacity,IPdisktype,IPraidtype); 
    calculateDiskParamters();
    calculateIOPSWithOthers();
    throughPutTable();

  
    </script>
    





<div class="container-fluid">
  <h2>Console</h2>
  <p>UI for generating BOM(Billing of Materials) and Price Calcualtion based on Customer Inputs </p>

  <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#home">Input Section</a></li>
    <li  class="active"><a data-toggle="tab" href="#menu2">Output section</a></li>
    <li><a data-toggle="tab" href="#menu3">Formulae Sheet</a></li>
  </ul>

  <div class="tab-content">
   
      <div id="home" class="tab-pane fade">
     
           <h3>Input Section</h3>
      <p>Select</p>
                
          
    
    </div>


    <div id="menu2" class="tab-pane fade  in active">
        
        
      <h3>Output section</h3>
      <p id="stdiops"></p>
      <div id="diskParamters"></div>
      <div id="otherinfo"></div>

      <div id="throughputs"></div>
      
        
      

<script>
document.getElementById("stdiops").innerHTML = "Std IOPS="+stdIOPS;

  document.getElementById("diskParamters").innerHTML = "Total Number of data disks:"+totalDataDisks+"<br>Total Number of usable disks:"+totalUsableDisks+
                        "<br>Total Number of Parity Disks:"+totalParityDisks+"<br>Usable Capacity:"+usableCapacityTB+
                        "<br>Raw capcity:"+rawCapacity +"<br><br><br> Secondary values <br><br>Total disks:"+totalTotalDisks +"<br>Spares:"+spares
                        +"<br>Number of JBODS (12 Bay):"+jbods12 +"<br>Number of JBODS (24 Bay):"+jbods24+ "<br>Number of JBODS (45 Bay):"+jbods45+"<br>Number of JBODS (72 Bay):"+jbods72+ "<br>Number of JBODS (90 Bay):"+jbods90+
                        "<br><br>";

  document.getElementById("otherinfo").innerHTML = "<br>Other Info about IOPS<br><br>StdIOPS with Zil:"+stdIOPSWithZil
                                                    +"<br>StdIOPS with L2ARC:"+stdIOPSWithL2arc
                                                    +"<br>StdIOPS with MetaDev:"+stdIOPSWithMetaDev
                                                    +"<br>StdIOPS with ZIL, MetaDev and L2ARC:"+stdIOPSWithAll3;

   document.getElementById("throughputs").innerHTML = "<pre><br>Throughputs Table<br><br>Disk:                          IOPS    Throuput (KBPS) Throuput (MBPS)    perTB IOPS<br><br>"+
                            
                             "Disk                           "+stdIOPS+ "     "+stdThroughput+"           "+stdThroughput*8/1000+"              "+stdperTBIOPS+"<br>"+
   
                            "Disk with Wite Cache           "+stdIOPSWithZil+ "     "+throughputsKBPS[0]+"           "+throughputsMBPS[0]+"              "+perTBIOPS[0]+"<br>"

                              +"Disk with Read Cache           "+stdIOPSWithL2arc+ "     "+throughputsKBPS[1]+"           "+throughputsMBPS[1]+"              "+perTBIOPS[1]+"<br>"

                              +"Disk with Meta Cache           "+stdIOPSWithMetaDev+ "     "+throughputsKBPS[2]+"           "+throughputsMBPS[2]+"              "+perTBIOPS[2]+"<br>"

                              +"Disk with all three Cache      "+stdIOPSWithAll3+ "     "+throughputsKBPS[3]+"           "+throughputsMBPS[3]+"              "+perTBIOPS[3]+"<br></pre>";

   
                                                                                                                       

</script>

        
    </div>



    <div id="menu3" class="tab-pane fade">
      <h3>List of formulae</h3>
        
                <div class="alert alert-success">
                  <strong>Calculation of StdIOPS</strong> <br><br>
                  StdIOPS= Number of usable disks* IOPSperDisk* WritePercentageforStdIOPS
                   <ol>
                     <li>Number of Usable disks= Number of vdevs* Number of data disks</li><br>
                     <li>Number of vdevs= Minimum number of data disks/ Total number of disks</li><br>
                     <li>Minimum number of data disks= Usable Capacity/ Usable Size per disk</li><br>
                     <li>WritePercentageforStdIOPS= Return STDIOPS given WritePercentage</li>

                   </ol>
                </div>
                <div class="alert alert-info">
                 
                 <strong>Calculation of disk paramters</strong> <br><br>
                 
                   <ol>
                     <li>Total number of data disks= Number of vdevs* Total number of disks</li><br>
                     <li>Total number of usable disks= Number of vdevs* Total number of data disks </li><br>
                     <li>Total number of parity disks= Number of vdevs* Total number of parity disks</li><br>
                     <li>Usable capacity (TB)= Total number of data disks* usable size per disk</li><br>
                     <li>Raw capacity= Total number of data disks* capacity per disk(size)</li><br>
                     <li>Number of spares= Total number of disks/ 25</li><br>
                     <li>Total disks= Total number of disks + Number of spares + number of ZIL groups* 2 + number of cache + 
                     number of meta groups * 3</li><br>


                   </ol>


                </div>
                <br>
                
                <div class="alert alert-danger">
                  
                  <strong>Number of JBODS</strong> <br><br>
                 
                   <ol>
                     <li>Number of JBODS( 12 Bay)= Total number of disks/ 12</li><br>
                     <li>Number of JBODS( 24 Bay)= Total number of disks/ 24</li><br>
                     <li>Number of JBODS( 45 Bay)= Total number of disks/ 45</li><br>
                     <li>Number of JBODS( 72 Bay)= Total number of disks/ 72</li><br>
                     <li>Number of JBODS( 90 Bay)= Total number of disks/ 90</li><br>
                     
                   </ol>

                </div>


                <div class="alert alert-info">
                 
                 <strong>Calculation of IOPS with Zil, L2ARC and MetaDev</strong> <br><br>
                 
                   <ol>
                     <li>StdIOPS with Zil= StdIOPS+ (Number of Zil Groups* Zil IOPS)</li><br>
                     <li>StdIOPS with L2ARC= StdIOPS+ (Number of Cache* L2ARC IOPS*Cache Hit Percent)/100</li><br>
                     <li>StdIOPS with MetaDev= StdIOPS+ (Number of MetaDev Groups* MetaDev IOPS)* RaidType</li><br>
                     <li>StdIOPS with Zil, L2ARC and MetaDev= StdIOPS with Zil+ (StdIOPS with L2ARC- StdIOPS)+ (StdIOPS with MetaDev- StdIOPS)   </li><br>
                     


                   </ol>


                </div>
        
        
        <div class="alert alert-success">
                  <strong>Calculation IOPS and throughputs for disks with cache</strong> <br><br>
                  
                   <ol>
                     <li>Disk IOPS= StdIOPS </li><br>
                       <li>Disk with write cache =StdIOPS with Zil </li><br>
                       <li>Disk with read cache =StdIOPS with L2ARC</li><br>
                       <li>Disk with Meta cache =StdIOPS with MetaDev</li><br>
                       <li>Disk with all three cache =StdIOPS with AllThree</li><br>
                       <li>perTBIOPS= IOPS/ Usable Capacity</li><br><br>
                       
                       <li>Throughput (KBps)= IOPS * AverageBlockSize</li><br>
                       <li>Throughput (MBps)= Throughput (KBps)*8/ 1000</li><br>
                       

                   </ol>
                </div>
        
        


             

    </div>
  



</div>

</body>
<!--Created by Deepak Jayaprakash -->
</html>
