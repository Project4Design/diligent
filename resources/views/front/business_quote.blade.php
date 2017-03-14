@extends('layouts.front')

@section('title','Business Quote - '.config('app.name'))

@section('content')

<div class="container">
	<div class="pad"></div>

	<div class="row">
    <div class="col-xs-12">
      <h1 class="main-title">Business Insurance Quote</h1>
    </div>

    <div class="col-xs-12">
      <form action="#" method="POST">
         {{ csrf_field() }}
        <legend class="legend">Personal Information</legend>
        <br>
        <div class="row">
          <div class="col-md-12">
            <label>Name *</label>
          </div>
          <div class="form-group col-md-2">
            <select class="form-control" id="title" name="title" >
              <option value="Mr.">Mr.</option>
              <option value="Mrs.">Mrs.</option>
              <option value="Miss">Miss</option>
            </select>
          </div>
          <div class="form-group col-xs-12 col-md-2">
            <input id="first_name" class="form-control" type="text" name="first_name" placeholder="First name" value="Fran">
          </div>
          <div class="form-group col-xs-12 col-md-2">
            <input id="middle_name" class="form-control" type="text" name="middle_name" placeholder="Middle name" value="Jose">
          </div>
          <div class="form-group col-xs-12 col-md-2">
            <input id="sur_name" class="form-control" type="text" name="sur_name" placeholder="Surname" value="hernandez" >
          </div>
        </div><!--Row-->

        <div class="row">
          <div class="form-group col-xs-12 col-md-2">
            <label for="birthdate">Date of Birth *</label>
            <div class="input-group">
              <input id="birthdate" class="form-control datepicker" type="date" name="birthdate" placeholder="DD-MM-YYYY" required>
              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            </div>
          </div>
        </div><!--Row-->

        <div class="row">
	        <div class="form-group col-xs-12 col-md-4">
	          <label for="employment_status">What's your employment status? *</label>
	          <select id="employment_status" class="form-control" name="employment_status" required>
	            <option value="Employed" selected>Please Select</option>
	            <option value="Employed">Employed</option>
	            <option value="Unemployed">Unemployed</option>
	            <option value="Self-Employed">Self-Employed</option>
	            <option value="House Person">House Person</option>
	            <option value="Education">Education</option>
	            <option value="Retired">Retired</option>
	            <option value="Not employed due to illness/disability">Not employed due to illness/disability</option>                       
	          </select>
	        </div>
	      </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-4">
            <label for="occupation">If Employed/Self Employed, what is your occupation: </label>
            <input id="occupation" class="form-control" type="text" name="occupation" value="Engineer">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-xs-12 col-md-4">
            <label for="business_type">If Employed/Self Employed, what type of business: </label>
            <input id="business_type" class="form-control" type="text" name="business_type" value="yes">
          </div>
        </div><!--Row-->

        <legend class="legend">Contact Details</legend>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="mobile_telephone">Mobile / Telephone Number *</label>
            <input id="mobile_telephone" class="form-control" type="text" name="mobile_telephone" value="04169328863" required>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="email">Email address</label>
            <input id="email" class="form-control" type="email" name="email" value="prueba@gmail.com">
          </div>
        </div>

        <legend class="legend">Business / Trade Address</legend>

        <div class="row">
          <div class="col-md-12">
            <label>Property Address *</label>
          </div>
          <div class="form-group col-xs-12 col-md-3">
            <input id="house_number" class="form-control" type="text" name="house_number" placeholder="Door n#" value="AddresN">
          </div>
        </div>
				<div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <input id="house_first_line" class="form-control" type="text" name="house_first_line" placeholder="1st line of address" value="1st line address">
          </div>
        </div>
       	<div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <input id="postcode" class="form-control" type="text" name="postcode" placeholder="Postcode" value="postcode">
          </div>
        </div><!--Row-->

        <div class="row">
	        <div class="form-group col-xs-12 col-md-4">
	          <label for="stablished_address">Year established at this address since *</label>
	          <select id="stablished_address" class="form-control" name="stablished_address" required>
              <option value="" selected> Please select</option>
              <option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option>
              <option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option>
              <option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option>
              <option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option>
              <option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option>
              <option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option>
              <option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option>
              <option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option>
              <option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option>
              <option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option>
              <option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option>
              <option value="1971">1971</option>  
	          </select>
	        </div>
	      </div>

        <legend class="legend">Correspondence Address (If Different)</legend>

        <div class="row">
          <div class="col-md-12">
            <label>Property Address *</label>
          </div>
          <div class="form-group col-xs-12 col-md-3">
            <input id="house_number_correspondence" class="form-control" type="text" name="house_number_correspondence" placeholder="Door n#" value="AddresN">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <input id="house_address_correspondence" class="form-control" type="text" name="house_address_correspondence" placeholder="1st line of address" value="1st line address">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <input id="postcode_correspondence" class="form-control" type="text" name="postcode_correspondence" placeholder="Postcode" value="postcode">
          </div>
        </div><!--Row-->

        <legend class="legend">Company Detals</legend>

	      <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="current_insurer">Current/Previous Insurer</label>
            <select id="current_insurer" class="form-control" name="current_insurer">
              <option value="" selected> Please select</option>
              <option value="998">No Previous Insurance</option>
              <option value="ACE">ACE</option>
              <option value="Ageas Insurance">Ageas Insurance</option>
              <option value="Allianz Cornhill Insurance Plc">Allianz Cornhill Insurance Plc</option>
              <option value="AmTrust Europe Limited">AmTrust Europe Limited</option>
              <option value="Arista">Arista</option>
              <option value="Aviva Insurance Limited">Aviva Insurance Limited</option>
              <option value="AXA Insurance Company Limited">AXA Insurance Company Limited</option>
              <option value="4Brit Insurance10">Brit Insurance</option>
              <option value=">Canopius Underwriting Ltd">Canopius Underwriting Ltd</option>
              <option value="Chartis Insurance">Chartis Insurance</option>
              <option value="Chaucer Insurance">Chaucer Insurance</option>
              <option value="Chubb Insurance Company of Europe SA">Chubb Insurance Company of Europe SA</option>
              <option value="CNA International Insurance Company, Birmingham">CNA International Insurance Company, Birmingham</option>
              <option value="Co-operative Insurance Society Limited">Co-operative Insurance Society Limited</option>
              <option value="Congregational &amp; General Insurance PLC">Congregational &amp; General Insurance PLC</option>
              <option value="Covea Insurance">Covea Insurance</option>
              <option value="Direct Line Insurance Limited">Direct Line Insurance Limited</option>
              <option value="Ecclesiastical Insurance Office Plc">Ecclesiastical Insurance Office Plc</option>
              <option value="Groupama Insurance Company Ltd">Groupama Insurance Company Ltd</option>
              <option value="Hiscox">Hiscox</option>
              <option value="HSB EIL Engineering">HSB EIL Engineering</option>
              <option value="HSBC">HSBC</option>
              <option value="Legal &amp; General Insurance Limited">Legal &amp; General Insurance Limited</option>
              <option value="Liverpool Victoria">Liverpool Victoria</option>
              <option value="Lloyds TSB General Insurance">Lloyds TSB General Insurance</option>
              <option value="Markel (UK) Ltd">Markel (UK) Ltd</option>
              <option value="Markerstudy Ltd<">Markerstudy Ltd</option>
              <option value="MMA Insurance plc">MMA Insurance plc</option>
              <option value="Nat West">Nat West</option>
              <option value="New India Assurance Company Limited">New India Assurance Company Limited</option>
              <option value="NIG">NIG</option>
              <option value="Novae">Novae</option>
              <option value="QBE International Insurance Limited">QBE International Insurance Limited</option>
              <option value="Quinn Direct">Quinn Direct</option>
              <option value="Royal &amp; Sun Alliance">Royal &amp; Sun Alliance</option>
              <option value="Royal Bank of Scotland PLC">Royal Bank of Scotland PLC</option>
              <option value="Towergate Insurance">Towergate Insurance</option>
              <option value="Unknown">Unknown</option>
              <option value="Unlisted Insurer">Unlisted Insurer</option>
              <option value="Vasek Insurance">Vasek Insurance</option>
              <option value="Zurich Insurance Company">Zurich Insurance Company</option>  
            </select>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="company_status">Company Status</label>
            <select id="company_status" class="form-control" name="company_status">
              <option value="" selected> Please select</option>
              <option value="Individual Trading as">Individual Trading as</option>
              <option value="Limited">Limited</option>
              <option value="Partnership">Partnership</option>
              <option value="Public Limited">Public Limited</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="bussiness_name">Business, Company or Partnership Name</label>
            <input id="bussiness_name" class="form-control" type="text" name="bussiness_name">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="business_description">Business Description</label>
            <select id="business_description" class="form-control" name="business_description">
              <option value="" selected> Please select</option>
              <option value="Adult Bookstore">Adult Bookstore</option>
              <option value="Amusements">Amusements</option>
              <option value="Antique Furniture Retailing">Antique Furniture Retailing</option>
              <option value="Antique/Rare Book Retailing">Antique/Rare Book Retailing</option>
              <option value="Antiques Retailing">Antiques Retailing</option>
              <option value="Aquarium Supplier">Aquarium Supplier</option>
              <option value="Art Gallery">Art Gallery</option>
              <option value="Art Restoration">Art Restoration</option>
              <option value="Artist Materials Retailing">Artist Materials Retailing</option>
              <option value="Arts &amp; Crafts Retailing">Arts &amp; Crafts Retailing</option>
              <option value="Audio / Visual Media Retailing">Audio / Visual Media Retailing</option>
              <option value="Baby Goods Retailing">Baby Goods Retailing</option>
              <option value="Babywear Retailing">Babywear Retailing</option>
              <option value="Baker">Baker</option>
              <option value="Bakers Produce Retailing (excluding Baking)">Bakers Produce Retailing (excluding Baking)</option>
              <option value="Bakery">Bakery</option>
              <option value="Basket And/Or Brushware Retailer">Basket And/Or Brushware Retailer</option>
              <option value="Bathroom Equipment Retailing">Bathroom Equipment Retailing</option>
              <option value="Beautician including Hairdressing">Beautician including Hairdressing</option>
              <option value="Beauty Products">Beauty Products</option>
              <option value="Beauty Salon">Beauty Salon</option>
              <option value="Bed Retailing">Bed Retailing</option>
              <option value="Bedding Retailing">Bedding Retailing</option>
              <option value="Belts / Scarves / Gloves Retailing">Belts / Scarves / Gloves Retailing</option>
              <option value="Bingo Hall">Bingo Hall</option>
              <option value="Boat Hiring">Boat Hiring</option>
              <option value="Boat Retailing">Boat Retailing</option>
              <option value="Bookmaking - Off Course">Bookmaking - Off Course</option>
              <option value="Bookselling">Bookselling</option>
              <option value="Bookselling - Secondhand">Bookselling - Secondhand</option>
              <option value="Boutique">Boutique</option>
              <option value="Bridal Wear Retailing">Bridal Wear Retailing</option>
              <option value="Builders Merchant">Builders Merchant</option>
              <option value="Burger Bar">Burger Bar</option>
              <option value="Butcher">Butcher</option>
              <option value="Café">Café</option>
              <option value="Café (ex Deep Fat Frying)">Café (ex Deep Fat Frying)</option>
              <option value="Cake Making &amp; Decorating">Cake Making &amp; Decorating</option>
              <option value="Camping and Outdoor Retailing">Camping and Outdoor Retailing</option>
              <option value="Candle Dealing">Candle Dealing</option>
              <option value="Car Accessory Shop">Car Accessory Shop</option>
              <option value="Car Radio Dealers inc fitting">Car Radio Dealers inc fitting</option>
              <option value="Carpet (Oriental/Persian) Retailing">Carpet (Oriental/Persian) Retailing</option>
              <option value="Carpet Retailing">Carpet Retailing</option>
              <option value="Cash &amp; Carry">Cash &amp; Carry</option>
              <option value="Catering Equipment Supplying">Catering Equipment Supplying</option>
              <option value="Ceramics And Pottery">Ceramics And Pottery</option>
              <option value="Chandlery">Chandlery</option>
              <option value="Charity Shop">Charity Shop</option>
              <option value="Chauffeur Services">Chauffeur Services</option>
              <option value="Cheese Retailer">Cheese Retailer</option>
              <option value="Chemist - Dispensing">Chemist - Dispensing</option>
              <option value="Chemist - Non Dispensing">Chemist - Non Dispensing</option>
              <option value="Children's Clothing Retailing">Children's Clothing Retailing </option>
              <option value="Children’s Play Centre">Children’s Play Centre </option>
              <option value="China And/Or Glassware Retailing">China And/Or Glassware Retailing </option>
              <option value="Christmas Goods Supplier">Christmas Goods Supplier </option>
              <option value="Clock &amp; Watch Repair">Clock &amp; Watch Repair </option>
              <option value="Clock &amp; Watch Retailing">Clock &amp; Watch Retailing </option>
              <option value="Clothing Hire - Fancy Dress">Clothing Hire - Fancy Dress </option>
              <option value="Clothing Hiring">Clothing Hiring </option>
              <option value="Clothing Retailing">Clothing Retailing </option>
              <option value="Coffee And Tea Retailing">Coffee And Tea Retailing </option>
              <option value="Coffee Shop">Coffee Shop </option>
              <option value="Coin &amp; Medal Dealing">Coin &amp; Medal Dealing </option>
              <option value="Computer Games Retailing">Computer Games Retailing </option>
              <option value="Computer Retailing - Business">Computer Retailing - Business </option>
              <option value="Computer Retailing - General">Computer Retailing - General </option>
              <option value="Computer Retailing - Home &amp; Games">Computer Retailing - Home &amp; Games </option>
              <option value="Computer Supplies">Computer Supplies </option>
              <option value="Confectionery Retailer">Confectionery Retailer </option>
              <option value="Consulting Optician">Consulting Optician </option>
              <option value="Cosmetics">Cosmetics </option>
              <option value="Curios Retailing">Curios Retailing </option>
              <option value="Curtain &amp; Blind Retailer">Curtain &amp; Blind Retailer </option>
              <option value="Cutlery Retailing">Cutlery Retailing </option>
              <option value="Cycle Hiring">Cycle Hiring </option>
              <option value="Cycle Repairing">Cycle Repairing </option>
              <option value="Cycle Shop">Cycle Shop </option>
              <option value="Dairy Products Retailing">Dairy Products Retailing </option>
              <option value="Decorators Merchant">Decorators Merchant </option>
              <option value="Delicatessen">Delicatessen </option>
              <option value="Department Store">Department Store </option>
              <option value="DIY - Including Timber">DIY - Including Timber </option>
              <option value="DIY Store">DIY Store </option>
              <option value="Dog Beautician">Dog Beautician </option>
              <option value="Dolls/Dolls House Retailing">Dolls/Dolls House Retailing </option>
              <option value="Double Glazing &amp; Replacement Window Showroom">Double Glazing &amp; Replacement Window Showroom </option>
              <option value="Draper">Draper </option>
              <option value="Dress Agency">Dress Agency </option>
              <option value="Drug Store">Drug Store </option>
              <option value="Dry Cleaning">Dry Cleaning </option>
              <option value="Dry Cleaning (Receiving Service)">Dry Cleaning (Receiving Service) </option>
              <option value="Dry Cleaning and Laundry (Receiving Service)">Dry Cleaning and Laundry (Receiving Service) </option>
              <option value="Electric Tool Retailer">Electric Tool Retailer </option>
              <option value="Electrical Goods (Domestic) Repair">Electrical Goods (Domestic) Repair </option>
              <option value="Electrical Goods Hiring - Domestic Appliance">Electrical Goods Hiring - Domestic Appliance </option>
              <option value="Electrical Goods Retailing">Electrical Goods Retailing </option>
              <option value="Electrical Goods Retailing - Domestic Appliance">Electrical Goods Retailing - Domestic Appliance </option>
              <option value="Electrical Goods Retailing - HI FI Audio TV etc.">Electrical Goods Retailing - HI FI Audio TV etc. </option>
              <option value="Electrical Goods Retailing - White Goods">Electrical Goods Retailing - White Goods </option>
              <option value="Engraving">Engraving </option>
              <option value="Fabric Retailing">Fabric Retailing </option>
              <option value="Fancy Goods Retailing">Fancy Goods Retailing </option>
              <option value="Farm Produce Retailing">Farm Produce Retailing </option>
              <option value="Fashion Accessories Retailing">Fashion Accessories Retailing </option>
              <option value="Fashion Boutique">Fashion Boutique </option>
              <option value="Fashion Retailing">Fashion Retailing </option>
              <option value="Fast Food Retailing">Fast Food Retailing </option>
              <option value="Filling Station">Filling Station </option>
              <option value="Film Processing">Film Processing </option>
              <option value="Financial Market Trading">Financial Market Trading </option>
              <option value="Fireplace Retailing">Fireplace Retailing </option>
              <option value="Fish &amp; Chip Shop">Fish &amp; Chip Shop </option>
              <option value="Fishing Tackle Retailing">Fishing Tackle Retailing </option>
              <option value="Fishmonger">Fishmonger </option>
              <option value="Florist">Florist </option>
              <option value="Food Store">Food Store </option>
              <option value="Footwear Retailing">Footwear Retailing </option>
              <option value="Forklift Driving Training">Forklift Driving Training </option>
              <option value="Freezer Centre">Freezer Centre </option>
              <option value="Frozen Food Retailing">Frozen Food Retailing </option>
              <option value="Funeral Director">Funeral Director </option>
              <option value="Fur Retailing">Fur Retailing </option>
              <option value="Furniture (Flat Pack) Retailing">Furniture (Flat Pack) Retailing </option>
              <option value="Furniture Repairing">Furniture Repairing </option>
              <option value="Furniture Restoration">Furniture Restoration </option>
              <option value="Furniture Retailing">Furniture Retailing </option>
              <option value="Furniture Retailing - Fitted">Furniture Retailing - Fitted </option>
              <option value="Furniture Retailing - Nursery">Furniture Retailing - Nursery </option>
              <option value="Furniture Retailing - Second-hand">Furniture Retailing - Second-hand </option>
              <option value="Furrier">Furrier </option>
              <option value="Garden Centre">Garden Centre </option>
              <option value="Garden Equipment Retailing">Garden Equipment Retailing </option>
              <option value="Garden Supplies Shop">Garden Supplies Shop </option>
              <option value="General Store">General Store </option>
              <option value="Gift Shop">Gift Shop </option>
              <option value="Glass Merchant">Glass Merchant </option>
              <option value="Glass or Glass Goods Decorator / Engraver">Glass or Glass Goods Decorator / Engraver </option>
              <option value="Glassware Retailer">Glassware Retailer </option>
              <option value="Glazier">Glazier </option>
              <option value="Goldsmith">Goldsmith </option>
              <option value="Golf Equipment Retailing">Golf Equipment Retailing </option>
              <option value="Golf Professionals Shop">Golf Professionals Shop </option>
              <option value="Gown Trade">Gown Trade </option>
              <option value="Greengrocer">Greengrocer </option>
              <option value="Greeting Card Retailing">Greeting Card Retailing </option>
              <option value="Grocer">Grocer </option>
              <option value="Grocer - Licensed">Grocer - Licensed </option>
              <option value="Guest House &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">Guest House &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </option>
              <option value="Gun Retailing">Gun Retailing </option>
              <option value="Gunsmith">Gunsmith </option>
              <option value="Haberdashery">Haberdashery </option>
              <option value="Hairdressing">Hairdressing </option>
              <option value="Hairpiece And Wig Retailing">Hairpiece And Wig Retailing </option>
              <option value="Handicraft Retailing">Handicraft Retailing </option>
              <option value="Hardware Retailing">Hardware Retailing </option>
              <option value="Hatter">Hatter </option>
              <option value="Health Food Retailer">Health Food Retailer </option>
              <option value="Herbs and Spices Retailing">Herbs and Spices Retailing </option>
              <option value="Hobby Shop">Hobby Shop </option>
              <option value="Home Brew Materials Retailing">Home Brew Materials Retailing </option>
              <option value="Horticultural Goods Retailing">Horticultural Goods Retailing </option>
              <option value="Hosiery">Hosiery </option>
              <option value="Hotel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">Hotel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </option>
              <option value="Household Goods Retailing">Household Goods Retailing </option>
              <option value="Ice Cream Parlour">Ice Cream Parlour </option>
              <option value="In Car Entertainment Retailing">In Car Entertainment Retailing </option>
              <option value="Industrial Safetywear Retailing">Industrial Safetywear Retailing </option>
              <option value="Interior Designer including fitting">Interior Designer including fitting </option>
              <option value="Internet Cafe">Internet Cafe </option>
              <option value="Intruder Alarm Retailing">Intruder Alarm Retailing </option>
              <option value="Ironing Service">Ironing Service </option>
              <option value="Ironmonger">Ironmonger </option>
              <option value="Jewellery Retailer">Jewellery Retailer </option>
              <option value="Key Cutter">Key Cutter </option>
              <option value="Kitchen Accessories Retailing">Kitchen Accessories Retailing </option>
              <option value="Kitchen/Bathroom Unit Showroom">Kitchen/Bathroom Unit Showroom </option>
              <option value="Knitting Machine Shop">Knitting Machine Shop </option>
              <option value="Knitwear Retailing">Knitwear Retailing </option>
              <option value="Lamp Shop">Lamp Shop </option>
              <option value="Launderette (attended)">Launderette (attended) </option>
              <option value="Launderette (unattended)">Launderette (unattended) </option>
              <option value="Leather and Travel Goods">Leather and Travel Goods </option>
              <option value="Leather Clothing Retailing">Leather Clothing Retailing </option>
              <option value="Leather Goods Retailing - Excluding Clothes">Leather Goods Retailing - Excluding Clothes </option>
              <option value="Leather Goods Retailing - Including Clothes">Leather Goods Retailing - Including Clothes </option>
              <option value="Leisurewear Retailing">Leisurewear Retailing </option>
              <option value="Light Fitting Retailing">Light Fitting Retailing </option>
              <option value="Lighting Retailing">Lighting Retailing </option>
              <option value="Linen Hire">Linen Hire </option>
              <option value="Linen Retailing">Linen Retailing </option>
              <option value="Lingerie Retailing">Lingerie Retailing </option>
              <option value="Locksmith">Locksmith </option>
              <option value="Lottery Agent">Lottery Agent </option>
              <option value="Luggage and Handbag Retailing">Luggage and Handbag Retailing </option>
              <option value="Marine Stores">Marine Stores </option>
              <option value="Maternity Wear Retailing">Maternity Wear Retailing </option>
              <option value="Meat Market">Meat Market </option>
              <option value="Menswear Retailer">Menswear Retailer </option>
              <option value="Millinery">Millinery </option>
              <option value="Mini Cab Operator">Mini Cab Operator </option>
              <option value="Mobile Phone Retailing">Mobile Phone Retailing </option>
              <option value="Mobile Shop">Mobile Shop </option>
              <option value="Model Shop">Model Shop </option>
              <option value="Motor Accessories Retailing">Motor Accessories Retailing </option>
              <option value="Motor Accessories Retailing (excl In-Car Entertainment)">Motor Accessories Retailing (excl In-Car Entertainment) </option>
              <option value="Motorcycle Accessories Retailing">Motorcycle Accessories Retailing </option>
              <option value="Music Retailing">Music Retailing </option>
              <option value="Musical Instrument Retailing">Musical Instrument Retailing </option>
              <option value="Nail Technician">Nail Technician </option>
              <option value="Newsagent">Newsagent </option>
              <option value="Novelty/Carnival Goods Retailing">Novelty/Carnival Goods Retailing </option>
              <option value="Nursery Goods Shop">Nursery Goods Shop </option>
              <option value="Off Licence">Off Licence </option>
              <option value="Office Equipment Supplier (excluding Electrical)">Office Equipment Supplier (excluding Electrical) </option>
              <option value="Office Equipment Supplier (including Electrical)">Office Equipment Supplier (including Electrical) </option>
              <option value="Office Furniture Retailing">Office Furniture Retailing </option>
              <option value="Office Supplies Retailing">Office Supplies Retailing </option>
              <option value="Optician">Optician </option>
              <option value="Organic Foods Retailing">Organic Foods Retailing </option>
              <option value="Orthopaedic Equipment Retailer">Orthopaedic Equipment Retailer </option>
              <option value="Paint And/Or Wallpaper Retailing">Paint And/Or Wallpaper Retailing </option>
              <option value="Pawnbroking">Pawnbroking </option>
              <option value="Pens Retailing">Pens Retailing </option>
              <option value="Perambulator Retailing">Perambulator Retailing </option>
              <option value="Perfume Retailing">Perfume Retailing </option>
              <option value="Pet Accessory/Food Store">Pet Accessory/Food Store </option>
              <option value="Pet Parlour">Pet Parlour </option>
              <option value="Pet Shop">Pet Shop </option>
              <option value="Petrol Station">Petrol Station </option>
              <option value="Pharmaceutical Wholesaler">Pharmaceutical Wholesaler </option>
              <option value="Pharmacy">Pharmacy </option>
              <option value="Photo Engraving">Photo Engraving </option>
              <option value="Photo Processing And Printing">Photo Processing And Printing </option>
              <option value="Photocopying">Photocopying </option>
              <option value="Photographic Equipment Retailing">Photographic Equipment Retailing </option>
              <option value="Photographic Studio">Photographic Studio </option>
              <option value="Piano Retailing">Piano Retailing </option>
              <option value="Piano Retailing And Repair">Piano Retailing And Repair </option>
              <option value="Picture Framing">Picture Framing </option>
              <option value="Picture Shop">Picture Shop </option>
              <option value="Pine And Cane Furniture Retailing">Pine And Cane Furniture Retailing </option>
              <option value="Pizza Delivery">Pizza Delivery </option>
              <option value="Plumbers Merchant">Plumbers Merchant </option>
              <option value="Pool and Snooker Table Retailing">Pool and Snooker Table Retailing </option>
              <option value="Post Office">Post Office </option>
              <option value="Post Office - Sub">Post Office - Sub </option>
              <option value="Post Office Services">Post Office Services </option>
              <option value="Pottery">Pottery </option>
              <option value="Poultry And Game Retailing">Poultry And Game Retailing </option>
              <option value="Print Shop">Print Shop </option>
              <option value="Public House">Public House </option>
              <option value="Record CD Cassette &amp; Video/DVD Retailing">Record CD Cassette &amp; Video/DVD Retailing </option>
              <option value="Record Shop">Record Shop </option>
              <option value="Restaurant - Licensed">Restaurant - Licensed </option>
              <option value="Restaurant - unlicensed">Restaurant - unlicensed </option>
              <option value="Rope Merchant">Rope Merchant </option>
              <option value="Saddlery And Tack Retailing">Saddlery And Tack Retailing </option>
              <option value="Safety Equipment Supplier">Safety Equipment Supplier </option>
              <option value="Sailing Equipment Supplier">Sailing Equipment Supplier </option>
              <option value="Sandwich Bar">Sandwich Bar </option>
              <option value="Scientific Instrument Retailing">Scientific Instrument Retailing </option>
              <option value="Scrap Metal Merchant">Scrap Metal Merchant </option>
              <option value="Second-hand Dealing">Second-hand Dealing </option>
              <option value="Sewing Machine Shop">Sewing Machine Shop </option>
              <option value="Sex Shop">Sex Shop </option>
              <option value="Sharpening Service">Sharpening Service </option>
              <option value="Shirt Retailing">Shirt Retailing </option>
              <option value="Shoe Repairing">Shoe Repairing </option>
              <option value="Shoe Retailing">Shoe Retailing </option>
              <option value="Silversmith">Silversmith </option>
              <option value="Silverware Retailing">Silverware Retailing </option>
              <option value="Sofa Bed Retailing">Sofa Bed Retailing </option>
              <option value="Soft Furnishings Retailing">Soft Furnishings Retailing </option>
              <option value="Souvenir Retailing">Souvenir Retailing </option>
              <option value="Sports Goods Retailing">Sports Goods Retailing </option>
              <option value="Sportswear Supplier">Sportswear Supplier </option>
              <option value="Stamp Collecting Retailer">Stamp Collecting Retailer </option>
              <option value="Stationer">Stationer </option>
              <option value="Street/Market Trading">Street/Market Trading </option>
              <option value="Supermarket">Supermarket </option>
              <option value="Surgical Equipment Retailer">Surgical Equipment Retailer </option>
              <option value="Sweet Shop">Sweet Shop </option>
              <option value="Tableware Retailer">Tableware Retailer </option>
              <option value="Tailor And Outfitter">Tailor And Outfitter </option>
              <option value="Take Away Food Retailer">Take Away Food Retailer </option>
              <option value="Takeaways">Takeaways </option>
              <option value="Tea Room">Tea Room </option>
              <option value="Telecommunication Equipment Supplier">Telecommunication Equipment Supplier </option>
              <option value="Telephone Sales Retailing">Telephone Sales Retailing </option>
              <option value="Television Hiring">Television Hiring </option>
              <option value="Television Repairing">Television Repairing </option>
              <option value="Television Retailing">Television Retailing </option>
              <option value="Textile Retailing">Textile Retailing </option>
              <option value="Tile Retailer">Tile Retailer </option>
              <option value="Tobacconist">Tobacconist </option>
              <option value="Toiletries Retailing">Toiletries Retailing </option>
              <option value="Tool Hire">Tool Hire </option>
              <option value="Tool Hire - Hand">Tool Hire - Hand </option>
              <option value="Tool Hire - Power Driven">Tool Hire - Power Driven </option>
              <option value="Tool Retailer">Tool Retailer </option>
              <option value="Toy And Game Retailing">Toy And Game Retailing </option>
              <option value="Trophy Retailing">Trophy Retailing </option>
              <option value="Turf Accountant">Turf Accountant </option>
              <option value="TV &amp; Video Repairing">TV &amp; Video Repairing </option>
              <option value="TV And Radio">TV And Radio </option>
              <option value="TV And Video Rental">TV And Video Rental </option>
              <option value="Tyre Battery &amp; Exhaust Retailing/Fitter">Tyre Battery &amp; Exhaust Retailing/Fitter </option>
              <option value="Undertaker">Undertaker </option>
              <option value="Upholstery">Upholstery </option>
              <option value="Venetian Blind Supplier">Venetian Blind Supplier </option>
              <option value="Video/DVD Hire">Video/DVD Hire </option>
              <option value="Wallpaper Shop">Wallpaper Shop </option>
              <option value="Watch And Clock Retailing">Watch And Clock Retailing </option>
              <option value="Wine Retailer">Wine Retailer </option>
              <option value="Wool And Needlework Shop">Wool And Needlework Shop </option>
              <option value="Woollen Goods Shop">Woollen Goods Shop </option>
              <option value="Yacht Chandlery">Yacht Chandlery </option>
              <option value="Other">Other </option>                
            </select>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="specify_business">specify_business</label>
            <textarea id="specify_business" class="specify_business" name="specify_business"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="date_bussiness">What date Was your business established?
            <input id="date_bussiness" class="form-control datepicker" name="date_bussiness">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="total_employees">Total number of employees including partners, principals and directors</label>
            <input id="total_employees" class="form-control" type="number" min="1" step="1" max="1000" name="total_employees" value="5">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="stimated_annual_turnover">What is your Estimated Annual Turnover?</label>
            <input id="stimated_annual_turnover" class="form-control" type="number" min="1" step="1" name="stimated_annual_turnover" value="5">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="stimated_annual_wages">What is your Estimated Annual Wages?</label>
            <input id="stimated_annual_wages" class="form-control" type="number" min="1" step="1" name="stimated_annual_wages" value="5">
          </div>
        </div>

        <legend class="legend">Premises</legend>

        <div class="row">
          <div class="form-group col-xs-12 col-md-4">
            <label for="premises_located">Where is your premises located?</label>
            <select id="premises_located" class="form-control" name="premises_located" required>
              <option value="" selected=""> Please select</option>
              <option value="Arcade">Arcade</option>
              <option value="Business Park">Business Park</option>
              <option value="Covered Shopping centre">Covered Shopping centre</option>
              <option value="Domestic Premises">Domestic Premises</option>
              <option value="High Street">High Street</option>
              <option value="In Building Otherwise Occupied As Dwellings">In Building Otherwise Occupied As Dwellings</option>
              <option value="Industrial Estate">Industrial Estate</option>
              <option value="Industrial Unit">Industrial Unit</option>
              <option value="Market Hall">Market Hall</option>
              <option value="On Office Premises">On Office Premises</option>
              <option value="Parade">Parade</option>
              <option value="Precinct">Precinct</option>
              <option value="Warehouse">Warehouse</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="opening_hours_business">What are the opening hours for your business? (Please specify in the box)</label>
            <input id="opening_hours_business" class="form-control" type="text" name="opening_hours_business">
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
              <div class="col-md-12">
                <label>Any CCTV camera inside this premises</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="any_cctv" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="any_cctv" value="No" checked>
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
              <div class="col-md-12">
                <label>Is this premises entitled as a listed building</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="premises_building" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="premises_building" value="No" checked>
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="roof_slope">The roof of this premises, is it flat or slope</label>
            <input id="roof_slope" class="form-control" type="text" name="roof_slope">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="floor_wood">The floor, is it made of concrete or wood</label>
            <input id="floor_wood" class="form-control" type="text" name="floor_wood">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="walls_wood">The walls, are they made of bricks or wood</label>
            <input id="walls_wood" class="form-control" type="text" name="walls_wood">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="live_upstair">Does anyone live upstairs and if yes who are they</label>
            <input id="live_upstair" class="form-control" type="text" name="live_upstair">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="doors_shutters">The back door, is it secured enough, any shutters or grilled</label>
            <input id="doors_shutters" class="form-control" type="text" name="doors_shutters">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-4">
            <label for="premises_occupied">How many years NCB do you have buildings insurance</label>
            <select id="premises_occupied" class="form-control" name="premises_occupied">
              <option value="" selected> Please select</option>
              <option value="24 Hours">24 Hours</option>
              <option value="Business Hours">Business Hours</option>
              <option value="Unnocupied">Unnocupied</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
              <div class="col-md-12">
                <label>Does the property have a roller shutter which covers all ground floor exposed glazing?</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="roller_shutter" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="roller_shutter" value="No">
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
              <div class="col-md-12">
                <label>Does the property have grilles fitted which cover all ground floor exposed glazing?</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="grilles_fitted" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="grilles_fitted" value="No">
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
              <div class="col-md-12">
                <label>Do you have any sort of alarm in the premises?</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="alarm_premises" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="alarm_premises" value="No">
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="type_alarm">If yes, Type or name/brand of the alarm?(Please specify in the box)</label>
            <input id="type_alarm" class="form-control" type="text" name="type_alarm">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="alarm_notify">Does the alarm notify you along with police or only you? (Please specify in the box)</label>
            <input id="alarm_notify" class="form-control" type="text" name="alarm_notify">
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
              <div class="col-md-12">
                <label>Is the alarm being checked regularly by any organization?</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="checked_organization" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="checked_organization" value="No">
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
              <div class="col-md-12">
                <label>Do you have use of kitchen in the premises for commercial use?</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="premises_comercial" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="premises_comercial" value="No">
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
              <div class="col-md-12">
                <label>If you are running a: Café, Take Away and Restaurant</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="if_running" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="if_running" value="No">
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

        <fieldset id="running-subform" style="display:none" disabled>
        	<div class="row">
        		<div class="col-md-10 col-md-offset-1">
        			<legend class="legend">Café, Take Away and Restaurant Details</legend>
        			<div class="row">
			          <div class="form-group col-xs-12 col-md-3">
			            <label for="porcentage_collection">Percentage of collection: (Please specify in the box)</label>
			            <input id="porcentage_collection" class="form-control" type="number" min="1" step="1" max="100" name="porcentage_collection" value="50">
			          </div>
			        </div>

              <div class="row">
                <div class="form-group col-xs-12 col-md-3">
                  <label for="many_persons">How many persons could be dined at a time? (Please specify in the box)</label>
                  <input id="many_persons" class="form-control" type="number" min="1" step="1" max="500" name="many_persons" value="50">
                </div>
              </div>

              <div class="row">
                <div class="col-xs-12 col-md-4">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>How often the kitchen extractor fan is cleaned?</label>
                    </div>
                    <div class="col-xs-12 col-md-3">
                      <input type="radio" name="often_kitchen" value="Weekly">
                      <label>Weekly</label>
                    </div>
                    <div class="col-xs-12 col-md-3">
                      <input type="radio" name="often_kitchen" value="Monthly">
                      <label>Monthly</label>
                    </div>
                    <div class="col-xs-12 col-md-3">
                      <input type="radio" name="often_kitchen" value="Halft-yearly">
                      <label>Halft-yearly</label>
                    </div>
                    <div class="col-xs-12 col-md-3">
                      <input type="radio" name="often_kitchen" value="Yearly">
                      <label>Yearly</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-xs-12 col-md-3">
                  <label for="basket_fryer">Is your fryer a standing fryer or just a small basket fryer?</label>
                  <input id="basket_fryer" class="form-control" type="text" name="basket_fryer">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-xs-12 col-md-3">
                  <label for="maximum_occupy">Maximum how many liters of oil the fryer can occupy?</label>
                  <input id="maximum_occupy" class="form-control" type="number" name="maximum_occupy">
                </div>
              </div>

              <legend class="legend">Cover Details</legend>







				      <div class="row">
			          <div class="form-group col-xs-12 col-md-3">
			            <label for="date_claim">What date was the claim?</label>
			            <input id="date_claim" class="form-control" type="text" name="date_claim" value="fecha">
			          </div>
			        </div>

			        <div class="row">
			          <div class="col-xs-12 col-md-4">
			            <div class="form-group">
			            	<div class="col-md-12">
			              	<label>Has the claim been settled?</label>
			              </div>
			              <div class="col-xs-12 col-md-3">
			                <input type="radio" name="claim_settled" value="Yes">
			                <label>Yes</label>
			              </div>
			              <div class="col-xs-12 col-md-3">
			                <input type="radio" name="claim_settled" value="No">
			                <label>No</label>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
        	</div>
        </fieldset>

        <div class="row">
        	<div class="form-group col-xs-12 col-md-2">
            <label for="like_cover_start">When would you like the cover to start </label>
            <div class="input-group">
              <input id="like_cover_start" class="form-control datepicker" type="date" name="like_cover_start" placeholder="DD-MM-YYYY">
              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            </div>
          </div>
        </div>

        <legend class="legend">Assumptions bellow are correct: (input tick boxes what would be pre-ticked)</legend>
        <div class="row">
        	<div class="col-md-8 col-md-offset-1">
        		<h4>The Property</h4>
        		<hr>

        	</div>
        </div>

      	<div class="row">
          <div class="col-md-4 col-md-offset-4">
            <br>
            <button type="submit" class="btn btn-block btn-submit">Submit Quote</button>
          </div>
        </div>
      	<br><br><br>
      </form>
    </div>
  </div>
</div>



@endsection

@section('scripts')

	<script type="text/javascript">
	  $(document).ready(function(){
	    $('.datepicker').datepicker({
        autoclose: true,
	      format: "dd-mm-yyyy",
	      endDate: "today",
	      enableOnReadonly: false
	    });

			$('input[name="date_claim"]').datepicker({
        autoclose: true,
		    format: "mm-yyyy",
		    startView: "years", 
		    minViewMode: "months"
	    });
	    $("input[name='if_running']").click(function(){
        var bool = (this.value === "Yes");
        if(bool){
          $('#running-subform').show().prop('disabled',!bool);
        }else{
          $('#running-subform').hide().prop('disabled',!bool);
        }
      });
	  





	  });//Ready
	</script>
@endsection