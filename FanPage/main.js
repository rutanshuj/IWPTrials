window.onload = function(){
	
	var myCars = new Array();
	myCars[0] = "Benz";
	myCars[1] = "Safari";
	myCars[2] = "BMW";
	var myArray = new Array();
	myArray[0] = Date.now;
	myArray[1] = myCars;
	
	//Upper Case Prototype 
	var fruits = ["Banana", "Orange", "Apple", "Mango"];
	Array.prototype.myUcase = function(){
		for( i = 0; i< this.length; i++){
			this[i] = this[i].toUpperCase();
		}
	}
	fruits.myUcase();
	var y = fruits.indexOf("BANANA");
	for(i=0; i< fruits.length; i++){
		console.log(fruits[i]);
	}
	console.log(y);
	fruits.splice(2,0, "Lemon","Kiwi");
	console.log(fruits);
	
	//String Operations
	var string1 = "VITUniversity";
	var text1 = string1.slice(0,4);
	var text2 = string1.split('T'); //Splits in two arrays 
	console.log(text2);

}

