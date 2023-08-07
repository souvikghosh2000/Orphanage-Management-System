<html>
<head>

<style>
	section
	{
		height: 100vh;
		color: yellow;
	}
	h1
	{margin: 0;
	  padding:0;
	  position: absolute;
	  top:50%;
	  transform:translateY(-50%);
	  width: 100%;
	  font-family: verdana;
	  font-size: 100px;
	  text-align: center;
	}
	*{
		margin:0;
		padding:0;
		box-sizing:border-box;
		border-radius: 50%;
	}
	body{
		background: black;
		min-height: 100vh;
		
		align-items: center;
		justify-content:center;
	}
		.info{
			display: flex;
			width: 100%;
			max-width: :1200px;
			align-items: center;
			justify-content:center;
			padding: 0 20px;
			}
			.card{
				background: red;
				padding: 20 70px;
				margin:70 50px;
				width: cal(33%-20px);
				height: 200px;
				display: flex;
				flex-direction:column;
				justify-content:center;
				align-items: center;
				color: white;
			}
			.card:hover {
				background:yellow;
				width:60px;
				height:60px;
				text-align: :60px;
				height:60px;
				text-align:center;
				transition:0.3s linear;

			} 
	}

</style>
</head>
<body>
	<section>
		<h1>
			<span>Choose</span>
			<span>A</span>
			<span>location</span>
	</section>
   <div class="info">
      <div class="card">
      <a href="motherteressa.php"><p>MotherTeresa</p></a>
      </div>
      <div class="card">
      <a href="helpage.php"><p>HelpAge</p></a>
      </div>
      <div class="card">
      <a href="swavalambha.php"><p>Swavalambha</p></a>
      </div>

   </div>
</body>       	