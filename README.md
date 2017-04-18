# IOPS/ Throughput-Calclulator-and-BOM-Generator
The web application calculates IOPS for given configuration and generates Billing of Materials.
The app is a complete automation of price quote generation which gives an estimate of each individual
units ordered and also the calculation of performance and disk parameters.

# IOPS/ Throughput Generation

Input paratmers= {DiskType, RAIDType, UsableCapcity}

Output statistics={IOPS :{Number of vdevs, WritePercentageforStdIOPS, StdIOPS with Zil, StdIOPS with L2ARC, StdIOPS with MetaCache },
DiskParamters: {Total number of data disks, Total number of usable disks, Total number of parity disks, Usable capacity (TB), 
Raw capacity, Number of spares}, Throughput for each combination, Number of JBODS
}

# Price calculation

Input paratmers= {CusotmerInfo: {CompanyName, CustomerContact, OrderDescription, DeliverAddress}, Order specifications={DiskType, RAIDType, UsableCapcity,Number of controllers required,Number of JBODS required,isZilRequired, isReadCacheRequired, isMetaCacheRequired,Number of Data Disks required, Number of SAS Cables required  }}

Output= {Per Unit cost of each quantity, total cost, Total HW cost, HW support cost per year after 4th year, Total SW cost, SW support cost per year after 2nd year, Cost per GB per month per year }


