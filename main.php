<table>
   <head>
         <style>
             body{
                 background-image:url(bg1.jpg);
                 background-size: cover;

             }

             div{


                margin-left: 500px;
                 margin-top: 100px;

                 max-width:300px;
	padding:30px;
	margin:40px auto;
	background: #FFF;
	border-radius: 10px;
	-webkit-border-radius:10px;
	-moz-border-radius: 10px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);


             }
             p{
                 display: inline;
                 color:blue;
                 font-size:20px;
             }

             #submit{
                  margin:20px;
                 margin-left: 100px;

                 border: none;
	padding: 8px 15px 8px 15px;
	background: #FF8500;
	color: #fff;
	box-shadow: 1px 1px 4px #DADADA;
	-moz-box-shadow: 1px 1px 4px #DADADA;
	-webkit-box-shadow: 1px 1px 4px #DADADA;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;


             }
             .t{
                 margin-left: 100px;
             }
             .d{margin-left: 100px;

                 box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border: 1px solid #C2C2C2;
	box-shadow: 1px 1px 4px #EBEBEB;
	-moz-box-shadow: 1px 1px 4px #EBEBEB;
	-webkit-box-shadow: 1px 1px 4px #EBEBEB;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	padding: 7px;
	outline: none;

             }

		 input#submit:hover {
		color: #333333;
		border: 1px solid #a4a4a4;
		border-top: 2px solid #b2b2b2;
		background-color: #a0dbc4;
		background: -webkit-gradient(linear, left top,
		}


         </style>
    </head>

    <body>
        <div>
           <form action="show.php" method="post" class="x">
            <p>محطه المغادره</p>

               <select name="source" class="x">
              <option value="cairo">cairo</option>
               <option>ALEXANDRIA</option>
               <option>QENA</option>
               <option>Assuit</option>
                <option>sohag</option>
               <option>al minia</option>
               <option>luxor</option>
               <option>aswan</option>
               <option>giza</option>
               <option>beni suef</option>
               </select>
            </br></br></br>
               <p>محطه الوصول</p>
                <select name="A" class="x">


               <option value="qena">QENa</option>
               <option>Assuit</option>
               <option>al minia</option>
               <option>luxor</option>
               <option>aswan</option>
               <option>giza</option>
                <option value="cairo">cairo</option>
                    <option>beni suef</option>
                    <option value="Alex">ALEXANDRIA</option>
                    <option>sohag</option>
               </select>
               </br></br>

                <select name="type" class="d">
                   <option value="v">vip</option>
                    <option value="m">mokayf</option>
                    <option value="n">noom</option>
                    <option value="r">rokap</option>
                    <option value="d">distinict</option>
                     <option value="All">All</option>

                 </select>
</br>
               <input type="submit" value="show trains" name="submit" id="submit">
               
        </form>
                <a href="reservation.html"><input type="submit" value="reservation" name="submit" id="submit"></a>
            </div>
    </body>
</table>
