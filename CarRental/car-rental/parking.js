var numVIP = Math.floor(Math.random() * 20); 
var VIPava = 20 - numVIP;

var numA = Math.floor(Math.random() * 50); 
var Aava = 50 - numA;

var numB = Math.floor(Math.random() * 75);
var Bava = 75 - numB;

var numC = Math.floor(Math.random() * 100);
var Cava = 100 - numC;

var price = 0;
var timePrice = 0;

function setDate() {
  var today = new Date();
  var enddate = new Date(document.getElementById("datepicker").value);
  var dateDiff = Math.ceil((enddate.getTime() - today.getTime()) / (1000 * 3600 * 24)); //Calculate difference between today and date chosen
  timePrice = Math.ceil(50 * (3 / dateDiff) + 10); //Random function to account for time frame - As the date gets farther away from today, the lower the price goes
  document.getElementById("cart").disabled = true;
  document.getElementById("parking").disabled = false;
}

function parkingAvailable() {
  var name = document.getElementById("parking").value;

  if(name == "VIP"){
    if(VIPava != 0){
      price = Math.floor((timePrice + 100 + ((20 / VIPava) * (100 * 0.1)) )); //Calculate price of availability (timePrice + base price + (total spots / available spots) * (10% of timePrice))
      document.getElementById("available").innerHTML = VIPava + " of 20 spots available!";
      document.getElementById("cart").disabled = false;
      document.getElementById("pricesubmit").setAttribute("value", price);
      document.getElementById("pricez").innerHTML = 'Price: $' + price;
    }else{
      document.getElementById("cart").disabled = true;
      document.getElementById("available").innerHTML = VIPava + " of 20 spots available! Please choose another option!";
    }
  }else if(name == "Lot A"){
    if(Aava != 0){
      price = Math.floor((timePrice + 50 + ((50 / Aava) * (50 * 0.1)) )); //Calculate price of availability (timePrice + base price + (total spots / available spots) * (10% of timePrice))
      document.getElementById("available").innerHTML = Aava + " of 50 spots available!";
      document.getElementById("cart").disabled = false;
      document.getElementById("pricesubmit").setAttribute("value", price);
      document.getElementById("pricez").innerHTML = 'Price: $' + price;
    }else{
      document.getElementById("cart").disabled = true;
      document.getElementById("available").innerHTML = Aava + " of 50 spots available! Please choose another option!";
    }
  }else if(name == "Lot B"){
    if(Bava != 0){
      price = Math.floor((timePrice + 25 +((75 / Bava) * (25 * 0.1)) )); //Calculate price of availability (timePrice + base price + (total spots / available spots) * (10% of timePrice))
      document.getElementById("available").innerHTML = Bava + " of 75 spots available!";
      document.getElementById("cart").disabled = false;
      document.getElementById("pricesubmit").setAttribute("value", price);
      document.getElementById("pricez").innerHTML = 'Price: $' + price;
    }else{
      document.getElementById("cart").disabled = true;
      document.getElementById("available").innerHTML = Bava + " of 75 spots available! Please choose another option!";
    }
  }else if(name == "Lot C"){
    if(Cava != 0){
      price = Math.floor((timePrice + 10 + ((100 / Cava) * (10 * 0.1)) )); //Calculate price of availability (timePrice + base price + (total spots / available spots) * (10% of timePrice))
      document.getElementById("available").innerHTML = Cava + " of 100 spots available!";
      document.getElementById("cart").disabled = false;
      document.getElementById("pricesubmit").setAttribute("value", price);
      document.getElementById("pricez").innerHTML = 'Price: $' + price;
    }else{
      document.getElementById("cart").disabled = true;
      document.getElementById("available").innerHTML = Cava + " of 100 spots available! Please choose another option!";
    }
  }else if(name == ""){
    document.getElementById("cart").disabled = true;
  }
}
