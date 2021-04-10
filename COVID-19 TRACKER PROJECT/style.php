<style type="text/css">
body{
	width: 100%;
	height: 100vh;
    background: absolute;
    background-image:linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(images/new3.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;

}

#DAD{
 color: white;
 margin-right: 400px;
} 

.navv{
	background-color: #343333;
}
.imgg{
   margin-left: 310px;
}

.corona{
	width: 280px;
	height: 280px;
}
.heart{
	margin-left: 440px;
	margin-top: 20px;
}
.clas{
	padding-top: 30px;
}
.margin{
	padding-top: 30px;
}
#myInput {
   background-image: url('images/search.svg');/* Add a search icon to input */
  background-position: 10px 12px;
  background-color: #d0d0c9; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 90%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 30px; /* Add some space below the input */
  margin-left: 44px;
    margin-top: 30px;


}
#DD{
   
}
.corona{
	animation: heartbeat 5s linear infinite;
}
@keyframes heartbeat{

  0%
  {
  	transform: scale(.75);
  }
  20%
  {
  	transform: scale(1);
  }
  40%
  {
  	transform: scale(.75);
  }
  60%
  {
  	transform: scale(1);
  }
  80%
  {
  	transform: scale(.75);
  }
  100%
  {
  	transform: scale(.75);
  }
  

}
#myinput {
   background-image: url('images/search.svg');/* Add a search icon to input */
  background-position: 10px 12px;
  background-color: #d0d0c9; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 90%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 30px; /* Add some space below the input */
  margin-left: 44px;
  margin-top: 30px;
  
}



.mytabs label{
	 padding: 10px;
	 margin-left: 150px;
	 font-size: 1.2em;
  }

.mytabs{
	display: flex;
    flex-wrap: wrap;
    max-width: 1100px;
    margin: 50px auto;
    padding: 25px;
}

.mytabs .tablee {
   
    display:none;
    order: 1;
    
}

.mytabs input[type="radio"] {
    display: none;
}

.mytabs input[type='radio']:checked +label+.tablee{
    display: block;
}
.mytabs input[type="radio"]:checked + label {
    
    font-weight: bold;
    border: 1.5px solid #f8f5f5;
    border-radius: 18px;
    font-style: italic;

}
</style>
