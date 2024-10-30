<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel = "stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	
<style>
.poppins-regular {
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-style: normal;
  }
body{
	border-radius: 20px;
	font-family: "Poppins", sans-serif;
}
.header {
	background: #ffffff;
	color: white;
	height: 70px;
	display: flex;
	border-radius: 20px;
	justify-content: center;
	align-items: center;
	margin: 10px 20px;
	min-width: 300px;
}

.header1 {
	margin: 20px 5px;
	display: flex;
	justify-content: center;
}

.header2 {
	background: #ffffff;
	height: auto;
	min-width: 300px;
	margin: 20px;
	padding: 20px;
	border-radius: 20px;
}
.header2 p {
	align-items: center;
}

.noted-logo {
	margin-left: 15px;
	font-size: 24px;
}
.header button{
	border-radius: 10px;
}

.my-notes-button,
.reminder-button,
.task-tracker-button,
.my-profile-button,
.check-button {
	background-color: white;
	color: rgb(0, 0, 0);
	border: 1px solid rgb(0, 0, 0);
	border-radius: 2px;
	cursor: pointer;
	transition: background-color 0.2s, color 0.2s, box-shadow 0.15s;
	width: 80px;
	height: 30px;
	margin: 5px;
	font-size: 0.8rem;
}

.my-profile-button {
	background-color: rgb(37, 37, 37);
	color: white;
	width: 90px;
	height: 35px;
}




.my-notes-button:hover, .reminder-button:hover, .task-tracker-button:hover {
	background-color: rgb(37, 37, 37);
	color: white;
	box-shadow: 5px 5px 10px rgba(63, 63, 63, 0.35);
}

.my-profile-button:hover {
	box-shadow: 5px 5px 10px rgba(63,63,63, 0.35);
}


@media (min-width: 768px) {
	.header, .header2 {
		margin: 30px 80px;
		padding: 30px;
	}

	.header2 {
		height: 500px;
		padding-top: 40px;
		padding-left: 20px;
		padding-right: 20px;
	}

	.noted-logo {
		margin-left: 25px;
		font-size: 30px;
	}

	.my-notes-button, .reminder-button, .task-tracker-button {
		width: 101px;
		height: 30px;
		font-size: 1rem;
	}

	.my-profile-button {
		width: 108px;
		height: 38px;
	}
}
#countdown {
    font-size: 48px;                
    color: #FF5733;                  
    background-color: #F0F0F0;       
    padding: 20px;                   
    border: 2px solid #FF5733;       
    border-radius: 10px;             
    margin: 20px 0;                  
    transition: transform 0.3s;      
}

#countdown:hover {
    transform: scale(1.05);          
}

.timer {
    display: flex;                   
    justify-content: center;         
    gap: 10px;                       
}

button:hover {
    background-color: #e74c3c;      
}

.timer button {
    background-color: #4CAF50; 
    color: white; 
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.timer button:hover {
    background-color: #45a049;
}

#pause-btn {
    background-color: #f0ad4e;
}

#pause-btn:hover {
    background-color: #ec9a29;
}

#restart-btn {
    background-color: #d9534f;
}

#restart-btn:hover {
    background-color: #c9302c;
}


@media (max-width: 768px) {
    #countdown {
        font-size: 32px;       
        padding: 15px;         
        margin: 15px 0;     
		margin-left: auto;
    }

    .timer button {
        padding: 8px 16px;     
        font-size: 14px;       
    }
}

@media (max-width: 480px) {
    #countdown {
        font-size: 24px;       
        padding: 10px;        
        margin: 10px 0;    
		width: 100%;
	}   

    .timer {
        flex-direction: column; 
        gap: 8px; 
	}              

    .timer button {
        padding: 6px 12px;     
        font-size: 12px;     
    }
}
#countdown {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80px; 
}

</style>

</head>

<body class = "bg-gray-200 p-4 rounded-lg">
<header>
	<div class="header">
		<a href='notes'>
			<button class="my-notes-button">Notes</button>
		</a>

		<a href='reminder'>
			<button class="reminder-button">Reminder</button>
		</a>
		
		<a href='task-tracker'>
			<button class="task-tracker-button">Timer</button>
		</a>

		<a href='my-profile'>
			<button class="task-tracker-button">Profile</button>
		</a>
	</div>
	
</header>
<section>
	<div class="header2">
		<h1 class="font-bold text-5xl text-center mb-8"> Promodoro</h1>
		<p id="countdown">25:00</p>
		<div class="timer">
			<button id="start-btn">Play</button>
			<button id="pause-btn">Pause</button>
			<button id="restart-btn">Restart</button>
		</div>
	</div>
</section>
    
<script>
	

	const startingMinutes = 25;
	let time = startingMinutes * 60;
	let countdownInterval;

	const countdownEl = document.getElementById('countdown');
	const startBtn = document.getElementById('start-btn');
	const pauseBtn = document.getElementById('pause-btn');
	const restartBtn = document.getElementById('restart-btn');



	function updateCountdown() {
		const minutes = Math.floor(time / 60);
		let seconds = time % 60;                
		seconds = seconds < 10 ? '0' + seconds : seconds; 
		countdownEl.innerHTML = `${minutes}:${seconds}`; 
		if (time > 0) {
			time = time - 2;
		} else {
			clearInterval(countdownInterval); 
			countdownEl.innerHTML = "Time's up!"; 
		}
	}

	startBtn.addEventListener('click', () => {
		clearInterval(countdownInterval); 
		countdownInterval = setInterval(updateCountdown, 2500);
		
	});

	pauseBtn.addEventListener('click', () => {
		clearInterval(countdownInterval); 
	});

	restartBtn.addEventListener('click', () => {
		clearInterval(countdownInterval); 
		time = startingMinutes * 60; 
		updateCountdown(); 
	});
	
</script>




