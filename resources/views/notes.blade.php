<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel = "stylesheet">
    <title>Document</title>

    <div class="header">
        <a href='notes'>
            <button class="my-notes-button">
                My Notes
            </button>
        </a>

        <a href='reminder'>
            <button class="reminder-button">
                Reminder
            </button>
        </a>
        
        <a href='task-tracker'>
            <button class="task-tracker-button">
                Task Tracker
            </button>
        </a>

        <a href='my-profile'>
            <button class="task-tracker-button">
                My Profile
            </button>
        </a>
    </div>
	<br>
	<div class="header3">
		<input type="text" id="search" placeholder="Search by title..." class="text-black border border-black bg-white px-4 -ml-6 py-2 rounded hover:bg-black hover:text-white" onkeyup="filterNotes()">
		<button id="toggleDarkMode" class="w-32 h-10 ml-2 text-black border border-black bg-white px-4 py-2 rounded hover:bg-black hover:text-white">Dark</button>
	</div>
	<br>
	

	
	
	
    <style>

		

        .header {
			background: #ffffff;
			color: white;
			height: 70px;
			display: flex;
			justify-content: center; /* Center the button horizontally */
			align-items: center;     /* Center the button vertically */
			min-width: 300px;
			margin-left: 80px;
			margin-right:100px;

}

.header3 {
			background: #e5e7eb;
			color: white;
			height: 70px;
			display: flex;
			justify-content: center; /* Center the button horizontally */
			align-items: center;     /* Center the button vertically */
			min-width: 300px;
			margin-left: 80px;
			margin-right:100px;
}
.header2 {
			background: #ffffff;
			height: 200px;
			min-width: 300px;
			margin-left: 80px;
			margin-right:100px;
			padding-top: 40px;

}
      
        .noted-logo{
			margin-left: 25px;
			font-size: 30px;
  }
        .my-notes-button {
			background-color: white;
			color: rgb(0, 0, 0);
			border-color: rgb(0, 0, 0);
			border-style: solid;
			border-width: 1px;
			height: 30px;
			width: 101px;
			border-radius:2px;
			cursor: pointer;
			transition: background-color 0.2s,
			color 0.2s, box-shadow 0.15s;
      
  }
        .reminder-button {
			background-color: white;
			color: rgb(0, 0, 0);
			border-color: rgb(0, 0, 0);
			border-style: solid;
			border-width: 1px;
			height: 30px;
			width: 101px;
			border-radius:2px;
			cursor: pointer;
			transition: background-color 0.2s,
			color 0.2s, box-shadow 0.15s;
			margin-left: 10px;
      
  }
  
        .task-tracker-button {
			background-color: white;
			color: rgb(0, 0, 0);
			border-color: rgb(0, 0, 0);
			border-style: solid;
			border-width: 1px;
			height: 30px;
			width: 101px;
			border-radius:2px;
			cursor: pointer;
			transition: background-color 0.2s,
			color 0.2s, box-shadow 0.15s;
			margin-left: 10px;
  }

        .my-profile-button {
			background-color: rgb(37, 37, 37);
			color: white;
			border: none;
			height: 38px;
			width: 108px;
			border-radius: 2px;
			cursor: pointer;
			transition: background-color 0.2s,
			box-shadow 0.15s;
			margin-left: auto;
			margin-right:auto;
			
  }

		.check-button {
			background-color: rgb(37, 37, 37);
			color: white;
			border: none;
			height: 30px;
			width: 30px;
			border-radius: 2px;
			cursor: pointer;
			transition: background-color 0.2s,
			box-shadow 0.15s;
		}

		.delete-button {
			background-color: rgb(37, 37, 37);
			color: white;
			border: none;
			height: 30px;
			width: 30px;
			border-radius: 2px;
			cursor: pointer;
			transition: background-color 0.2s,
			box-shadow 0.15s;
		}

        .my-profile-button:hover {
      
        	box-shadow: 5px 5px 10px rgba(63,63,63, 0.35)
      
  }
        .my-profile-button:active {
        	background-color: gray;
  }

        .my-notes-button:hover {
			background-color: rgb(37, 37, 37);
			color: white;
			box-shadow: 5px 5px 10px rgba(63, 63, 63, 0.35);

  }
        .my-notes-button:active {
			opacity: 0.7s;
			background-color: gray;
			border: none;
  }   

        .reminder-button:hover {
			background-color: rgb(37, 37, 37);
			color: white;
			box-shadow: 5px 5px 10px rgba(63, 63, 63, 0.35);

  }
        .reminder-button:active {
			opacity: 0.7s;
			background-color: gray;
			border: none;
  }

        .task-tracker-button:hover {
			background-color: rgb(37, 37, 37);
			color: white;
			box-shadow: 5px 5px 10px rgba(63, 63, 63, 0.35);

  }
        .task-tracker-button:active {
			opacity: 0.7s;
			background-color: gray;
			border: none;
  }		

  		.check-button:hover {
        	box-shadow: 5px 5px 10px rgba(63,63,63, 0.35)
		}

		.check-button:active {
        	background-color: gray;			
		}

		.delete-button:hover {
			box-shadow: 5px 5px 10px rgba(63,63,63, 0.35)
		}

		.delete-button:active {
			background-color: gray;
		}

		.my-profile-button1 {
			background-color: rgb(37, 37, 37);
			color: white;
			border: none;
			height: 28px;
			font-size: 12px;
			width: 80px;
			border-radius: 2px;
			cursor: pointer;
			transition: background-color 0.2s,
			box-shadow 0.15s;
		}

		.my-profile-button1:hover {
      
			box-shadow: 5px 5px 10px rgba(63,63,63, 0.35)

		}
		.my-profile-button1:active {
			background-color: gray;
		}

		.container1 {
			display: flex;         /* Use flexbox */
			justify-content: center; /* Center the button horizontally */
			align-items: center; 
		}

	@media (min-width: 768px) {
		.container1 {
			width: 80%;
			margin: 0 auto;
			}
		}

		#search-form {
    display: flex;
    justify-content: center;
    margin: 20px;
	min-width: 450px;
}

#search-input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
	

body {
            transition: background-color 0.3s, color 0.3s;
        }
        .dark-mode {
            background-color: #555555;
            color: black;
        }
        .dark-mode .bg-gray-600 {
            background-color: #ffffff;
        }
        .dark-mode .bg-white {
            background-color: #ffffff;
        }
		.dark-mode .header {
			background-color: #2e2e2e;
            color: black;
		}

		.dark-mode .header2 {
			background-color: #2e2e2e;
            color: black;
		}

		.dark-mode .my-profile-button {
			background-color: #ffffff;
            color: black;
		}
/* 
		.dark-mode .my-notes-button {
			background-color: #555555;
            color: black;
		}

		

		.dark-mode .task-tracker-button {
			background-color: #555555;
            color: black;
		}

		.dark-mode .reminder-button {
			background-color: #555555;
            color: black;
		} */
		.dark-mode .div1 {
			background-color: #292929;
            color: white;
		}

		.dark-mode p {
			background-color: #292929;
            color: white;
		}

		body.dark-mode .no-dark-mode {
    background-color: #fff; /* Light background */
    color: #000;           /* Dark text */
}

		.dark-mode .header3 {
			background-color: #2e2e2e;
            color: white;
		}
		
    </style>
</head>
<body class = "bg-gray-200 p-4">
	{{-- <div class="min-w-[300px] w-auto lg:w-2/4 mx-auto py-6 lg:py-8 px-4 lg:px-6 bg-white justify-center"> --}}
		<div class="header2">
		<h1 class="font-bold text-3xl lg:text-5xl text-center mb-6 lg:mb-8">Notes</h1>
		<div class="container1">
		<a href="add-notes">
			<button class="my-profile-button">Add</button>
		</a>
		</div>
	</div><br>
	
	
	
		<div class="mt-2">
			<div class="flex-1 pr-8">
			

			
		

		
	
			</form>
			<div id="notesContainer">
			@foreach ($notes as $note)
			<div class="div1">
			<div class="note-item px-4 py-4">
				<p class="text-gray-500 ">
				<div class='flex-1 pr-8'>
					<h3 class="text-lg font-semibold">
						Title: <b>{{ $note->title }}</b>
					</h3>
				</div>
				<div>
					<p class="text-gray-700">{{ $note->desc}}</p><br>
					<form action="{{route('viewNote',['id'=>$note->id])}}" method="GET">
						@csrf
						@method('GET')
						<button type="submit" class ="my-profile-button1">VIEW</button>
					</form>
					<form action="{{route('deleteNote',['id'=>$note->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to DELETE it?')">
						@csrf
						@method('delete')
						<button type="submit" class ="my-profile-button1">DELETE</button>
					</form>
					<p class="text-gray-500 py-4 flex-1 items-center border-b border-gray-300">
					</p>
					<br>
				</div>
			</div>
		</div>
			
			
			@endforeach
	
			{{-- <div class="flex space-x-3">
				<button class="check-button">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 20 24" stroke-width="1.5" stroke="currentColor" class="size-6">
				<path stroke-linecap="round" stroke-linejoin="round" d = "m4.5 12.75 6 6 9-13.5" />
				</svg>                 
				</button>

				<button class="delete-button">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-5 -5 35 35" stroke-width="1.5" stroke="currentColor" class="size-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
					  </svg>									  
					</button>
				</div>
			</div> --}}
			
        
        </hr>
	</div>    

	<script>


		const toggleDarkMode = document.getElementById('toggleDarkMode');
        	toggleDarkMode.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });

        function filterNotes() {
            const searchInput = document.getElementById('search').value.toLowerCase();
            const notes = document.querySelectorAll('.note-item');

            notes.forEach(note => {
                const title = note.querySelector('h3').textContent.toLowerCase();
                if (title.includes(searchInput)) {
                    note.style.display = '';
                } else {
                    note.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
