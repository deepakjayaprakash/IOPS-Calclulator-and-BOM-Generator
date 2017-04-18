<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pricing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
    
    
                          
<?php 
        if(isset($_GET['companyName'])){
        $companyName=$_GET['companyName'];
        }
         if(isset($_GET['customerName'])){
        $customerName=$_GET['customerName'];
         }
          if(isset($_GET['address'])){
        $address=$_GET['address'];
          }
         if(isset($_GET['description'])){
        $description=$_GET['description'];
        }
         if(isset($_GET['usablecapacity'])){
        $usablecapacity=$_GET['usablecapacity'];
         }
          if(isset($_GET['controllers'])){
        $controllers=$_GET['controllers'];
          }
        
     if(isset($_GET['jbods'])){
        $jbods=$_GET['jbods'];
        }
         if(isset($_GET['datadisks'])){
        $datadisks=$_GET['datadisks'];
         }
          if(isset($_GET['sascables'])){
        $sascables=$_GET['sascables'];
          }
    
       
     if(isset($_GET['zil'])){
        $zil=$_GET['zil'];
        }
         if(isset($_GET['readcache'])){
        $readcache=$_GET['readcache'];
         }
          if(isset($_GET['metacache'])){
        $metacache=$_GET['metacache'];
          }
    
    if(isset($_GET['tier'])){
        $tier=$_GET['tier'];
          }
    
    
    
    
    
    
        
        ?>
        
        
    
    
    
    
    <script>
  
    var companyName=  "<?php echo $companyName ?>";  
    var customerName=  "<?php echo $customerName ?>";  
    var address=  "<?php echo $address ?>";  
    var description=  "<?php echo $description ?>";  
    
    //raid type and #data disks, 3parity disks and # total disks
    var raids={ "raid" : [
              { "raidType": "Raidz1-SingleParity(4+1) Typical SAS" ,
                "DataDisks": 4,
                "ParityDisks": 1,
                "TotalDisks": 5},
              { "raidType": "Raidz1-SingleParity(8+1) Typical SSD" ,
                "DataDisks": 8,
                "ParityDisks": 1,
                "TotalDisks": 9}
              ,
               {"raidType": "Raidz2-DoubleParity(8+2) Typical NLSAS" ,
                "DataDisks": 8,
                "ParityDisks": 2,
                "TotalDisks": 10}
             
            
               ]
               
            
        };


        
       // diskType and their paramters
    
    var disks= {
            "disk": [
                    {"diskType":"NLSAS",
                    "size": 4,
                    "iops": 75,
                    "usableSize": 2.6784,
                    "formFactor":3.5,
                    "rpm": 7200,
                    "zilGroupsRequired": 1,
                    "ReadCacheRequired": 0,
                    "MetaCacheRequired": 0,
                     "RaidType": "Raidz2-DoubleParity(8+2) Typical NLSAS",
                     "JBODType": 90,
                     "maxNumberofDisksPerCluster": 360,
                     "priceOfController": 10350,
                     "priceOfJBOD": 6000,
                     "priceOfDisk": 375,
                     "pricePerTB": 79,
                     "powerPerController": 2500,
                     "powerJBOD": 2500,
                     "rackController": 2,
                     "rackJBOD": 4
                    },

                    
                    
                    {"diskType":"SAS10K",
                    "size": 1.2,
                    "iops": 140,
                    "usableSize": 0.80352,
                    "formFactor":2.5,
                    "rpm": 10000,
                    "zilGroupsRequired": 1,
                    "ReadCacheRequired": 1,
                    "MetaCacheRequired": 1,
                     "RaidType": "Raidz1-SingleParity(4+1) Typical SAS",
                     "JBODType": 72,
                     "maxNumberofDisksPerCluster": 288,
                     "priceOfController": 10350,
                     "priceOfJBOD": 6000,
                     "priceOfDisk": 386,
                     "pricePerTB": 399,
                     "powerPerController": 2500,
                     "powerJBOD": 2500,
                     "rackController": 2,
                     "rackJBOD": 4
                    },

                  

                    {"diskType":"SAS15K",
                    "size": 0.6,
                    "iops": 175,
                    "usableSize": 0.40176,
                    "formFactor":2.5,
                    "rpm": 15000,
                    "zilGroupsRequired": 1,
                    "ReadCacheRequired": 1,
                    "MetaCacheRequired": 1,
                     "RaidType": "Raidz1-SingleParity(4+1) Typical SAS",
                     "JBODType": 72,
                     "maxNumberofDisksPerCluster": 288,
                     "priceOfController": 10350,
                     "priceOfJBOD": 6000,
                     "priceOfDisk": 386,
                     "pricePerTB": 449,
                     "powerPerController": 2500,
                     "powerJBOD": 2500,
                     "rackController": 2,
                     "rackJBOD": 4
                    },

                     {"diskType":"SSDHighCapacity",
                    "size": 4,
                    "iops": 5000,
                    "usableSize": 2.6784,
                    "formFactor":2.5,
                     "zilGroupsRequired": 0,
                    "ReadCacheRequired": 0,
                    "MetaCacheRequired": 0,
                     "RaidType": "Raidz1-SingleParity(8+1) Typical SSD",
                     "JBODType": 24,
                     "maxNumberofDisksPerCluster": 96,
                     "priceOfController": 10350,
                     "priceOfJBOD": 2200,
                     "priceOfDisk": 3600,
                     "pricePerTB": 799,
                     "powerPerController": 2500,
                     "powerJBOD": 1900,
                     "rackController": 2,
                     "rackJBOD": 2
                     },
                
                {"diskType":"SSDHighPerformance",
                    "size": 2,
                    "iops": 5000,
                    "usableSize": 1.3392,
                    "formFactor":2.5,
                     "zilGroupsRequired": 0,
                    "ReadCacheRequired": 0,
                    "MetaCacheRequired": 0,
                     "RaidType": "Raidz1-SingleParity(8+1) Typical SSD",
                     "JBODType": 24,
                     "maxNumberofDisksPerCluster": 96,
                     "priceOfController": 10350,
                     "priceOfJBOD": 2200,
                     "priceOfDisk": 1800,
                     "pricePerTB": 699,
                     "powerPerController": 2500,
                     "powerJBOD": 1900,
                     "rackController": 2,
                     "rackJBOD": 2
                     },
                
                  {"diskType":"WriteCache",
                    "size": 0.1,
                    "iops": 5000,
                    "usableSize": 0.06696,
                    "formFactor":2.5,
                    "priceOfDisk": 660,
                    
                     },
                {"diskType":"ReadCache",
                    "size": 0.8,
                    "iops": 5000,
                    "usableSize": 0.53568,
                    "formFactor":2.5,
                    "priceOfDisk": 720,
                    
                     },
                
                 {"diskType":"MetaCache",
                    "size": 2,
                    "iops": 5000,
                    "usableSize": 1.3392,
                    "formFactor":2.5,
                    "priceOfDisk": 1800,
                    
                     }     
            ]

    };
        
       


 // standard values
    
    var numberOfZilGroups=2;
    var numberOfCache= 0;
    var numberOfMetaGroups=1;
    var writePercentage=20;
    var cacheHitPercent=50;
    var averageBlockSize=4;

   /* quantity of each unit*/
    var numControllers, numJBODS, numDataDisks, zil, readCache, metaCache, sasCables;
    var totalCost3=0,totalCost5=0;
    var totalHWCost=0,totalSWCost=0,supportSW=0,supportHW=0,costPerGBPerMonth3=0,costPerGBPerMonth5=0;
        
        numControllers=<?php echo $controllers ?>;
        numJBODS=<?php echo $jbods ?>;
        numDataDisks=<?php echo $datadisks ?>;
        zil=<?php echo $zil ?>;
        readCache=<?php echo $readcache ?>;
        metaCache=<?php echo $metacache ?>;
        
    
        
    var  usableCapcityTB, tier,numberOfSASCables;
       
    tier="<?php echo $tier ?>";
    usableCapcityTB=<?php echo $usablecapacity ?>;
    numberOfSASCables=<?php echo $sascables ?>;
    
   // alert(numControllers+numJBODS+numDataDisks+zil+readCache+metaCache+usableCapcityTB+numberOfSASCables);
        
      
          // unit prices 
            var costController, costJBODS, costDataDisks, costZil, costReadCache, costMetaCache, costSASCables,pricepertb;
            costSASCables=100;
        
        function calculatePrice(){
         
            
            for( var i in disks.disk){
               
                if(disks.disk[i].diskType==tier){
                    //alert(disks.disk[i].diskType);
                    costController=disks.disk[i].priceOfController;
                  
                    costJBODS=disks.disk[i].priceOfJBOD;
                    costDataDisks=disks.disk[i].priceOfDisk;
                    costZil=disks.disk[5].priceOfDisk;
                    costReadCache=disks.disk[6].priceOfDisk;
                    costMetaCache=disks.disk[7].priceOfDisk;
                    pricepertb=disks.disk[i].pricePerTB;
                      //alert(disks.disk[i].priceOfJBOD);
                    break;
                    
                }
                
            }
            
            totalHWCost=costController* numControllers+
                        costJBODS* numJBODS+
                        costDataDisks*numDataDisks+
                        costZil*zil+
                        costReadCache*readCache+
                        costMetaCache* metaCache+
                       costSASCables* numberOfSASCables;
            supportHW=0.15* totalHWCost;
            
            totalSWCost=usableCapcityTB* pricepertb;
            supportSW=0.15* totalSWCost;
            
            
            totalCost3=totalHWCost+ totalSWCost+ (totalSWCost*0.15)*2;
            totalCost5=totalHWCost+ (totalHWCost*0.15)*2+totalSWCost+ (totalSWCost*0.15)*4;
            
            costPerGBPerMonth3=totalCost3/(usableCapcityTB*1000*36);
            costPerGBPerMonth5=totalCost5/(usableCapcityTB*1000*60);
            //alert( costPerGBPerMonth5);
                  
            
        };
        
        
  
        
        calculatePrice();
    </script>
    





<div class="container-fluid">
  <h2>Console</h2>
  <p>UI for generating BOM(Billing of Materials) and Price Calcualtion based on Customer Inputs </p>

  <ul class="nav nav-tabs">
    <li  class="active"><a data-toggle="tab" href="#home">Billing of Materials</a></li>
    <li ><a data-toggle="tab" href="#menu2">Output section</a></li>
    <li><a data-toggle="tab" href="#menu3">Formulae Sheet</a></li>
  </ul>

  <div class="tab-content">
   
      <div id="home" class="tab-pane fade in active">
     
          <div class="col-md-2"></div>       

<div class="col-md-8">
    <div class="container-fluid" style="border:1px solid; padding:30px;">
        <div class="row">
            <center><img src="cloudbyteLogoQuote.PNG" </center>
                <h1>Price Quote</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>CloudByte Inc.</h3>
                <p>20863 Stevens Creek Blvd	</p>
                <p>Cupertino, CA 95014	</p>
                <p>408-663-6906	</p>
                <br><br>
                <p><strong>To: </strong> <?php echo $customerName.','.$companyName; ?></p>
                 <p><strong>Description: </strong> <?php echo $description; ?></p>
            </div>
            <div class="col-md-6">
                <br>
                <p><strong>Quote:</strong>1013</p>
                <p><strong>Date:</strong> <?php echo date("Y/m/d"); ?></p>
                <p><strong>Customer ID:</strong> <?php echo $companyName; ?></p>
                
            </div>
        </div> 
        <div class="row" style="background-color:darkslategrey;color:white;padding:5px;">
            <div class="col-md-2">Salespersoon</div>
            <div class="col-md-2">Job</div>
            <div class="col-md-2">Shipping Method</div>
            <div class="col-md-2">Delivery Address</div>
            <div class="col-md-2">Payment</div>
            <div class="col-md-2">Due Date</div>
        </div><br>
            
            
        <div class="row">
            <div class="col-md-2">Ajesh Baby</div>
            <div class="col-md-2">Senior Product Support Manager</div>
            <div class="col-md-2"></div>
            <div class="col-md-2"> <?php echo $address; ?></div>
            <div class="col-md-2">100% Advance</div>
            <div class="col-md-2"></div>
        </div>
            
            <br><br>
            
        
        <div class="row" style="background-color:darkslategrey;color:white;padding:5px;">
            <div class="col-md-2">Quantity</div>
            <div class="col-md-2">Item</div>
            <div class="col-md-2">Description</div>
            <div class="col-md-2">Unit Price</div>
            <div class="col-md-2">Discount</div>
            <div class="col-md-2">Line Total</div>
        </div>
            
            <div class="row" style="background-color:grey;color:white;">
            <center><p>Hardware</p>    </center>
            </div>
            
        <div class="row">
            <div class="col-md-2"><?php echo $controllers; ?></div>
            <div class="col-md-2">Controllers</div>
            <div class="col-md-2">ESA-A10	</div>
            <div class="col-md-2"> $ 10,350 </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><p id="controllercost"></p></div>
        </div>
        <div class="row">
            <div class="col-md-2"><?php echo $jbods; ?></div>
            <div class="col-md-2">JBODS</div>
            <div class="col-md-2">ESA-J10-45	</div>
            <div class="col-md-2"> $ 2,200 </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><p id="jbodcost"></p></div>
        </div>
        <div class="row">
            <div class="col-md-2"><?php echo $datadisks; ?></div>
            <div class="col-md-2">Data Disks</div>
            <div class="col-md-2"></div>
            <div class="col-md-2"> $ 1,800 </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><p id="datadiskcost"></p></div>
        </div>
        <div class="row">
            <div class="col-md-2"><?php echo $zil; ?></div>
            <div class="col-md-2">ZIL</div>
            <div class="col-md-2"></div>
            <div class="col-md-2">$ 660 </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><p id="zilcost"></p></div>
        </div>
        <div class="row">
            <div class="col-md-2"><?php echo $readcache; ?></div>
            <div class="col-md-2">Read Cache</div>
            <div class="col-md-2"></div>
            <div class="col-md-2">$ 720</div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><p id="readcachecost"></p></div>
        </div>
        <div class="row">
            <div class="col-md-2"><?php echo $metacache; ?></div>
            <div class="col-md-2">Meta Cache</div>
            <div class="col-md-2"></div>
            <div class="col-md-2">$ 1800</div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><p id="metacachecost"></p></div>
        </div>
        <div class="row">
            <div class="col-md-2"><?php echo $sascables; ?></div>
            <div class="col-md-2">SAS Cables</div>
            <div class="col-md-2"></div>
            <div class="col-md-2">$ 100</div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><p id="sascost"></p></div>
        </div>
            
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2"><strong>Total H/W Cost </strong>	</div>
            <div class="col-md-2">3year Support Inclusive</div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><strong><p id="totalhw"></p></strong></div>
        </div>
            <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">Hardware Support per year from 4th year</div>
            <div class="col-md-2"></div>
            <div class="col-md-2">15%</div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><p id="hwsupport"></p></div>
        </div>
 <script>
    document.getElementById("controllercost").innerHTML =  (costController*numControllers);
     document.getElementById("jbodcost").innerHTML =  (numJBODS*costJBODS);
     document.getElementById("datadiskcost").innerHTML =  (numDataDisks*costDataDisks);
     document.getElementById("zilcost").innerHTML =  (zil*costZil);
     document.getElementById("readcachecost").innerHTML = (readCache*costReadCache);
     document.getElementById("metacachecost").innerHTML =  (metaCache*costMetaCache);
     document.getElementById("sascost").innerHTML =  (costSASCables*numberOfSASCables);
     document.getElementById("totalhw").innerHTML =  (totalHWCost); 
     document.getElementById("hwsupport").innerHTML =  (supportHW);
     
 </script> 
            
            
        
            
        <div class="row" style="background-color:darkslategrey;color:white;padding:5px;">
            <div class="col-md-2">Quantity</div>
            <div class="col-md-2">Item</div>
            <div class="col-md-2">Description</div>
            <div class="col-md-2">Unit Price</div>
            <div class="col-md-2">Discount</div>
            <div class="col-md-2">Line Total</div>
        </div>
         
            <div class="row" style="background-color:grey;color:white;">
            <center><p>Software</p>    </center>
        </div>
        
        <div class="row">
            <div class="col-md-2"><?php echo $usablecapacity; ?></div>
            <div class="col-md-2">Per TB User Capacity SW License</div>
            <div class="col-md-2">Elasticenter and ElastiStor SW License 
24/7 Remote Support for 1st year Inclusive</div>
            <div class="col-md-2"><p id="priceperTB"></p></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><p id="totalsw"></p></div>
        </div>
         <br><br>
            <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">Software Support Cost</div>
            <div class="col-md-2">2nd year onwards yearly Support for 24/7 Remote Support		</div>
            <div class="col-md-2">15%</div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><p id="swsupport"></p></div>
        </div>
            
    <script>
            
    document.getElementById("totalsw").innerHTML =  (totalSWCost); 
     document.getElementById("swsupport").innerHTML =  (supportSW); 
     document.getElementById("priceperTB").innerHTML =  (pricepertb);
        
    </script> 
            
      <br><br>     
        <div class="row" style="background-color:grey;color:white;">
            <center><p>Total</p>    </center>
        </div>
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2">3 Yr HW and SW support incl	</div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><p id="totalcost3"></p></div>
        </div>   
            <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2">5 Yr HW and SW support incl	</div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><p id="totalcost5"></p></div>
        </div>  
            <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2">Next day part delivery	</div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
        </div> 
            <br>
       
            
    <script>
            
    document.getElementById("totalcost3").innerHTML =  (totalCost3); 
     document.getElementById("totalcost5").innerHTML =  (totalCost5); 
    
    </script> 
    
    <div class="row" >
        <div class="col-md-7" style="border:1px solid; padding:10px;border-style: inset;">
        
        <p><strong>Quotation prepared by:</strong> Ajesh Baby</p>
        <p><strong>Shipping and Duties are not included in this quote.</strong></p>
        <p><strong>This is a quotation on the goods named, subject to the conditions noted below:</strong></p>
            <p>(Describe any conditions pertaining to these prices and any additional terms of the agreement. <br>You may want to include contingencies that will affect the quotation.)</p>
        
        </div>
            
        </div> 
            <br>
    <div class="row" style="background-color:darkslategrey;color:white;padding:5px;text-align:center">
            <p>Thank you for your buisness !</p>
        </div>
            
  
            
    </div>
                
          
    
    </div>
</div> 

    <div id="menu2" class="tab-pane fade  in ">
        
        
     
        <div>
            <h1>Customer Info</h1>
      <p id="CustomerInfo"></p>
            </div>
      
         <p id="pricinglist"></p>
      <div id="otherinfo"></div>

      <div id="throughputs"></div>
      
        
      

<script>
/*document.getElementById("CustomerInfo").innerHTML = "<pre>Quote prepared By:         Ajesh Baby, Senior Product Manager<br>Cusomter:                   Wipro <br>Customer Contact:	    Suradeep Das <br>Delivery Address:	    Nxtra Data, White Field<br>Description:	          Storage 500TB Tier1 and Tier3, 950TB backup <br> Usable Capacity:              100<br>Tier:                      SSDHighPerformance</pre>";
*/
    
document.getElementById("CustomerInfo").innerHTML = "<pre>Quote prepared By:         Ajesh Baby, Senior Product Manager<br>Cusomter:                  "+companyName+"  <br>Customer Contact:	    "+customerName+" <br>Delivery Address:	    "+address+"<br>Description:	          "+description+"<br> Usable Capacity:              "+usableCapcityTB+"<br>Tier:                      "+tier+"</pre>";
    
    
    
    
    
  document.getElementById("pricinglist").innerHTML =  " <pre><b>Type          Qty          Unit Price          Total Price<br>Controllers    "+numControllers+"            "+ costController+"                 "+(costController*numControllers)
      +"<br>JBODS          "+numJBODS+"            "+ costJBODS+"                 "+(numJBODS*costJBODS)+
      "<br>Data Disks    "+numDataDisks+"            "+ costDataDisks+"                 "+(numDataDisks*costDataDisks)+
      "<br>Zil            "+zil+"            "+ costZil+"                   "+(zil*costZil)+
      "<br>Read Cache     "+readCache+"            "+ costReadCache+"                   "+(readCache*costReadCache)+
      "<br>Zil            "+metaCache+"            "+ costMetaCache+"                  "+(metaCache*costMetaCache)+
      "<br>Sas Cables    "+numberOfSASCables+"            "+ costSASCables+"                 "+(costSASCables*numberOfSASCables)+
      
       "<br><br><br><br><br><br>Total HW Cost (3 yr support cost included)  : "+totalHWCost+
       "<br><br>Support Charge per year from 4th year  : "+supportHW+
      
       "<br><br><br><br><br><br>Total SW Cost  : "+totalSWCost+
       "<br><br>Support Charge per year from 2nd year  : "+supportSW+
      
      
       "<br><br><br><br><br><br>Total Cost for 3 years   : "+totalCost3+
       "<br><br>Total Cost for 5 years   : "+totalCost5+
      
       "<br><br><br><br><br><br>Cost Per GB PM for 3year   : "+costPerGBPerMonth3+
       "<br><br>Cost Per GB PM for 5year   : "+costPerGBPerMonth5+
      
      "</pre>";

  

   
    

                                                                                                                       

</script>

        
    </div>



    <div id="menu3" class="tab-pane fade">
      <h3>List of formulae</h3>
        
                <div class="alert alert-success">
                  <strong>Input Paramters</strong> <br><br>
                  Customer Info= {Customer Name, Contact, Delivery Address, Description, Usable Capcity, 
                    Tier};
                    
                <br><br>
                Quantity of: 
                    <br>
                   <ol>
                     <li>Controllers</li><br>
                     <li>JBODS</li><br>
                       <li>Data Disks</li><br>
                       <li>Zil</li><br>
                       <li>Read Cache</li><br>
                       <li>Meta Cache</li><br>
                       <li>SAS Cables</li><br>

                   </ol>
                </div>
                <div class="alert alert-info">
                 
                 <strong>Calculation of Hardware cost</strong> <br><br>
                 
                   <ol>
                     <li>Total HW Cost ( 3 years support included)=Cost of controllers + JBODS + Zil+ Read Cache + Meta Cache + SAS Cables</li><br><br>
                       <li>Support Charge per year from 4th year= 15 % * Total HW Cost  </li>
                     


                   </ol>


                </div>
                <br>
                
                <div class="alert alert-danger">
                  
                  <strong>Calculation of Software cost</strong> <br><br>
                 
                   <ol>
                     <li>Total SW Cost = Usable Capacity(TB) * Price per TB</li><br><br>
                       <li>Support Charge per year from 2nd year= 15 % * Total SW Cost  </li>
                     


                   </ol>



                </div>


                <div class="alert alert-info">
                 
                 <strong>Calculation of total cost</strong> <br><br>
                 
                   <ol>
                     <li>Total Cost for 3 years = Total HW cost+ Total SW Cost + (15 % * Total SW Cost )*2 </li><br><br>
                     <li>Total Cost for 5 years = Total HW cost+ (15 % * Total HW Cost )*2 + Total SW Cost + (15 % * Total SW Cost )*4 </li><br><br>
                    
                     <li>Cost per GB per month for 3 years= Total Cost for 3 years/(Usable Capcity(TB) * 1000* 36)</li><br><br>
                       
                        <li>Cost per GB per month for 5 years= Total Cost for 5 years/(Usable Capcity(TB) * 1000* 60</li><br><br>
                     


                   </ol>


                </div>
        
        
        <div class="alert alert-success">
                  
                </div>
        
        


             

    </div>
  



</div>

</body>
<!--Created by Deepak Jayaprakash -->
</html>
